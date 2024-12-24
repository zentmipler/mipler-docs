---
title: Returns are not reflected under their actual return dates
sidebar_position: 3
---

# Returns are not reflected under their actual return dates

Due to the standard data formatting in the Shopify REST API, most Mipler reports are built at the order level (e.g., *
*Explore Default**, **Order Items**). In these reports, all information related to an order corresponds to the order's
processed date. To display returns under their actual due dates, you can use built-in reports with a different data
structure, as described below.

---

## Solution 1: Use the Refunds or Refunds by Item Reports

If you only need return-related information from the **Orders** or **Items from Orders** reports, you can use one of
these options. Both reports include a filter for **Refunds > Processed At**, ensuring that the returns are split and
displayed by their actual processing dates.

---

## Solution 2: Use Reports from Explore Sales or Sales By Item

Most standard Mipler reports starting with "Sales by" use one of these Explores, such as **Sales by Variant** or **Sales
by Channel**. In these Explores, the data relationships are structured to utilize the columns from the **Sales table** (
order level) and the **Sales By Item table** (order item level), respectively. The Sales and Sales By Item tables are
derived, meaning they combine all data related to Orders and Returns.

For instance:

- If **order #1001** has:
    - **Orders > Processed At** = October 1, 2024
    - **Refunds > Processed At** = November 20, 2024
- The **Sales > Date** column will contain two entries for this order:
    - October 1, 2024
    - November 20, 2024

As a result:

- Filtering a report by **Sales > Date** for October will show only the sales.
- Filtering for November will show only the returns.

This logic is similar to Shopify's standard reports, such as **Sales over time**.

---

## Important Notes

In the **Explore Sales** or **Sales By Item**, using dimension columns from the **Orders** or **Order Items** tables is
incorrect, as these tables are not directly linked to returns in these data relationships. To resolve this:

- Recreate these columns in the corresponding **Sales** or **Sales By Item** tables (similar to **sales.source_name**).
- Alternatively, use columns from the **Products** or **Product Variants** tables, which are linked to both tables
  simultaneously.