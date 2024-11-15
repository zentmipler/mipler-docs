---
title: Interface overview
sidebar_position: 1
---

<details>
  <summary>We have a video version of this paragraph!</summary>

  <div style={{textAlign: "center"}}>
    <iframe width="600" height="380" src="https://www.youtube.com/embed/-S7d45aUvbo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</details>

![Interface Overview](/img/reporting/interface/interface-overview.png)  

### Quick Actions Toolbar

**✅ Add to Dashboard**: Open a modal to add the report to the specified dashboard.

**✅ Export**: Export the report to XLSX, PDF, HTML, CSV, JSON, or Google Sheets.

**✅ Share**: Generate a public link to the report and share it with anyone without providing access to your store's Shopify admin panel.

**✅ Print**: Print or download the report. The settings available depend on your browser. Here are the options for Google Chrome:


And also an additional menu with different actions, like: Make a copy, delete and refresh the report.


### State Controls

**✅ Reset Changes**: If the report has been modified, you will see this shortcut.
Click it to return to the last saved state.

**✅ Save**: Creates a copy of the current report with filters applied and added or deleted columns. Saving a copy saves you from having to change filters and edit columns every time you load the original report.


### Primary Toolbar

Primary toolbar controls allow you to quickly adjust the report information.

**✅ Date filter**: Specify an appropriate time interval and enable comparison.

**✅ Dimension Switcher**: Lets you to quickly group the report by other variables, such as day, week, month, or year.
Note: This feature is not available in all reports.

**✅ Manage filters**: This button allows you to remove undesirable data from the report, e.g., certain SKUs or product names, a test customer, or orders from certain locations. For instance, the configuration on the screenshot above will only include the products with **fulfilled** **fulfillment status** and **paid** **financial status** in the report.

Filters with **AND** conditions will only load data that passes all the criteria. Filters with **OR** conditions will load data that passes at least one of them.

You can also create filter groups with no hierarchical restrictions. For example, you can add subgroups, sub-subgroups, etc.

There is no limit to the number of filters or groups you can add; however, a large quantity may affect performance.

**✅ Edit Columns**: Here, you can configure report settings such as:
- add/remove columns to reports
- rearrange columns
- rename columns

### Column Actions

Column name contains two parts: The view (or table) name and the column name itself.

The column dropdown menu allows you to:
- Change the direction of sorting
- Remove column
- Add a new filter by column
- Freeze a column
- Display "Info" about this column

### Hovered Cell Actions

Hovered Cell dropdown menu allows you to:
- Copy the cell value
- Add a quick filter based on the current value
- For some columns, the platform also allows you to drill down the aggregated cell value (i.e., it displays a new table with non-aggregated (separated) values)

### Visualization Switcher

Each report can be represented in at least two visualizations: a table-data and a custom visualization, that you can select and adjust:
- Line Chart
- Bar Chart
- Pie Chart
- Area Chart
- Column Chart
- Scalar (one value)
