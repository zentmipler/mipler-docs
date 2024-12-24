---
title: My report takes a long time to load
sidebar_position: 6
---

# My report takes a long time to load

Report loading speed is influenced by both the **report queue** and its **structure**. Understanding these factors can
help you avoid delays and optimize performance.

---

## Report Queue

- Opening multiple reports simultaneously, or working alongside colleagues who are also using reports, can fill the
  report execution queue.
- If your report shows a **"pending"** status, it means it is waiting for its turn to load and has not started yet.
- **Tip**: Avoid opening too many reports at once to prevent overloading the queue.

---

## Report Structure

If a single report is taking too long to load, the issue likely lies in the **structure** of that report. Key factors
include:

1. **Measure Columns**:
    - Each Measure column calculates its value based on a formula for all Dimensions in the report.
    - Even hidden columns are processed whenever the report is updated.

2. **Filters**:
    - Inefficient filters can slow down processing.
    - Streamline your filters to include only what's necessary.

3. **Data Volume**:
    - Large datasets (e.g., millions of orders per year) naturally take longer to process.
    - Retaining only the essential columns can speed up load times significantly.

---

## Recommendations

- Retain only the necessary columns in your reports to minimize processing.
- Simplify filters to improve performance.
- Avoid hidden columns that are not required for the report.

---

## Need Help?

If your reports are still taking too long to load, contact our support team for assistance. You can reach us via:

- **Chat**
- **In-app form**
- **Email**: [team@mipler.com](mailto:team@mipler.com)

Our team will investigate and help optimize the report's performance for you.
