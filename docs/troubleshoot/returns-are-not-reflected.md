---
title: Returns Are Not Reflected Under Their Actual Return Dates
sidebar_position: 3
---

# Returns Are Not Reflected Under Their Actual Return Dates

Due to the standard data formatting in the Shopify REST API, most Mipler reports are built at the **order level** (e.g., **Explore Default**, **Order Items**). In these reports, all information related to an order corresponds to the order's processed date. To display returns under their actual return dates, you can use built-in reports with a different data structure, as explained below.

---

## Solution 1: Use the Refunds or Refunds by Item Reports

For return-related information in **Orders** or **Items from Orders** reports, you can use the **Refunds** or **Refunds by Item** reports. These reports include a filter for **Refunds > Processed At**, allowing returns to be displayed by their actual processing dates.

---

## Solution 2: Use Reports from Explore Sales or Sales By Item

Many standard Mipler reports starting with "Sales by" are based on Explores like **Sales by Variant** or **Sales by Channel**. These Explores structure data to leverage columns from both the **Sales table** (order level) and the **Sales By Item table** (order item level). These tables combine data related to both orders and returns.

For example:

- If **order #1001** has:
  - **Orders > Processed At** = October 1, 2024
  - **Refunds > Processed At** = November 20, 2024
- The **Sales > Date** column will display two entries for this order:
  - October 1, 2024
  - November 20, 2024

As a result:

- Filtering the report by **Sales > Date** for October will show only sales data.
- Filtering for November will show only return data.

This logic mirrors Shopify's standard reports, such as **Sales over time**.

---

## Important Notes

When using explore **Sales** or **Sales By Item**, avoid using dimension columns from the **Orders** or **Order Items** tables, as they are not directly linked to returns in these data relationships. To address this:

- Recreate the necessary columns in the corresponding **Sales** or **Sales By Item** tables (e.g., **sales.source_name**).
- Alternatively, use columns from the **Products** or **Product Variants** tables, as they are linked to both orders and returns.

---

By following these steps, you can ensure returns are reflected under their actual processing dates in your reports, providing accurate and actionable insights.
