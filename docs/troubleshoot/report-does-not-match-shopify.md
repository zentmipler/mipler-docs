---
title: Information in the report does not match Shopify
sidebar_position: 4
---

# Information in the report does not match Shopify

We regret that Mipler reports do not align with your Shopify data. However, we are confident that we can achieve
complete consistency within the technical boundaries of the Shopify REST API, which Mipler relies on.

There are many possible reasons for data discrepancies, including incorrect report configuration (filters, column
selection), improper data table relationships in the report (Explore), or potential updates to the Shopify REST API.
Additionally, there are technical limitations that cannot be bypassed. Resources like **Conversions**, **Purchased
Orders**, **Company**, **Modified Orders**, and **Exchange Orders** are either unavailable or only partially available
in the Shopify REST API compared to the Shopify Admin.

---

## Solution 1: Check Filters and Date Range

Ensure that the date ranges in Mipler and Shopify reports match. Additionally, verify that identical filters are applied
in both systems.

---

## Solution 2: Review Orders with Gift Cards and Cancelled Orders

It's important to note:

- Shopify's standard reports typically exclude sales from **Gift Cards** and **Cancelled Orders** by default.
- In contrast, Mipler reports include all unique orders based on their IDs, regardless of status or product presence.

You can set up filters to remove these orders/products from the report.

---

## Solution 3: Errors in Report Structure

If the report uses custom columns or an Explore configuration that links data differently than Shopify's standard
reports, discrepancies can occur. In such cases, it is best to rely on the built-in reports like **Order Items** and *
*Refunds by Item** for comparison.

---

## Need Further Assistance?

Investigating the root causes of discrepancies can be challenging. If you notice inconsistencies, please contact our
support team at **team@mipler.com** for assistance in investigating your case.

### What to Include When Reaching Out:

- Details about the report where you observed the discrepancy.
- An export of the data you are comparing. For example:
    - Export the **"Sales over time"** report from Shopify.
    - Specify the appropriate time frame.
    - Include the **Order Name** column (and **Product Title**, if the discrepancy is product-related).

This file will be invaluable in helping us identify and resolve the issue.