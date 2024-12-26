---
title: My Report Takes a Long Time to Load
sidebar_position: 6
---

# My Report Takes a Long Time to Load

The loading speed of reports in Mipler depends on two primary factors: the **report queue** and the **report structure**. By understanding and addressing these factors, you can reduce delays and optimize performance.

---

## Report Queue

- **Simultaneous Usage**: Opening multiple reports simultaneously or working with colleagues who are also using reports can overload the report execution queue.
- **Pending Status**: If your report displays a **"pending"** status, it is waiting for its turn in the queue and has not started loading yet.
- **Tip**: To avoid overloading the queue, limit the number of reports opened at the same time.

---

## Report Structure

If a single report is taking too long to load, the issue may be due to its structure. The following factors can impact loading time:

1. **Measure Columns**
   - Measure columns calculate values based on a formula for all Dimensions in the report.
   - Even hidden columns are processed whenever the report is updated, which can add to the load time.

2. **Filters**
   - Inefficient or overly complex filters can slow down processing.
   - Streamline your filters to include only the necessary criteria.

3. **Data Volume**
   - Large datasets (e.g., millions of orders per year) naturally take longer to process.
   - Retain only essential columns to significantly reduce load times.

---

## Recommendations

To improve the loading speed of your reports:

- Retain only the necessary columns to minimize processing time.
- Simplify filters to improve efficiency.
- Avoid using hidden columns that are not essential for the report.

---

## Need Help?

If your reports are still taking too long to load, contact our support team for assistance. You can reach us through the following channels:

- **Chat**: Available directly in the Mipler app.
- **In-App Form**: Submit a request through the app.
- **Email**: [team@mipler.com](mailto:team@mipler.com)

Our team will work with you to investigate and optimize the performance of your reports.
