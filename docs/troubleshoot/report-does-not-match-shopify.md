---
title: Information in the Report Does Not Match Shopify
sidebar_position: 4
---

# Information in the Report Does Not Match Shopify

If your Mipler reports do not align with Shopify data, we understand your concern and are committed to achieving complete consistency within the technical boundaries of the Shopify REST API, which Mipler relies on.

Data discrepancies can occur for several reasons, including incorrect report configuration (e.g., filters, column selection), improper data table relationships in the report (Explore), or updates to the Shopify REST API. Additionally, Shopify REST API has technical limitations, and resources like **Conversions**, **Purchased Orders**, **Company**, **Modified Orders**, and **Exchange Orders** are either unavailable or partially available compared to Shopify Admin.

---

## Solution 1: Check Filters and Date Range

- Verify that the date ranges in Mipler and Shopify reports match.
- Ensure identical filters are applied in both systems to align the data.

---

## Solution 2: Review Orders with Gift Cards and Cancelled Orders

Keep in mind:

- Shopify's standard reports often exclude sales from **Gift Cards** and **Cancelled Orders** by default.
- Mipler reports, however, include all unique orders based on their IDs, regardless of status or product presence.

To align your reports with Shopify, set up filters in Mipler to exclude these orders/products if necessary.

---

## Solution 3: Review Report Structure

Discrepancies may occur if the report uses:

- **Custom Columns**: Ensure the columns match Shopify's structure.
- **Explore Configuration**: Custom links between data tables may differ from Shopify's standard reports.

For consistency, use Mipler's built-in reports, such as **Order Items** and **Refunds by Item**, for comparison.

---

## Need Further Assistance?

Investigating discrepancies can be complex. If you continue to notice inconsistencies, please reach out to our support team at **team@mipler.com** for assistance.

### What to Include When Contacting Support:

1. **Details of the Report**: Provide information about the report where you observed the discrepancy.
2. **Export of Data for Comparison**: For example:
  - Export the **"Sales over time"** report from Shopify.
  - Specify the time frame you are comparing.
  - Include the **Order Name** column (and **Product Title**, if the issue is product-related).

This file will help us analyze and resolve the issue efficiently.

---

We appreciate your understanding and are here to support you in resolving these challenges.
