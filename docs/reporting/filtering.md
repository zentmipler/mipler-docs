---
title: Filtering
sidebar_position: 11
---
Filtering is a commonly used feature and allows you to filter reports using simple conditions  
or use more complex logic with AND/OR conditions.

### Adding filters
Filter by column can be added in several different ways:
* By clicking on a table cell and selecting the desired condition.
<img src="/docs/img/reporting/filtration/filtration.png" width="600px" />
<hr/>
* By selecting a filter in the header context menu.  <br/>
<img src="/docs/img/reporting/filtration/filtration2.png" width="400px" />
<hr/>
* By pressing the Manage Filters button or the filter icon in the sidebar.
<img src="/docs/img/reporting/filtration/filtration3.png" width="800px"/>
<hr/>
* In the columns menu (if you need to filter a column that is not added to the report).
<img src="/docs/img/reporting/filtration/filtration4.png" width="800px" />


### Conditions
The following conditions are available for columns with text type:
- **Is** - includes only exact matches in the report.
- **Is Not** - excludes only exact matches from the report.
- **Contains** - includes broad matches in the report.
- **Doesn't contain** - excludes broad matches from the report.
- **Is Blank** - includes only rows with empty values of a certain column in the report.
- **Is not Blank** - excludes rows with empty values of a certain column from the report.
- **Starts With** - includes only rows starting with certain characters in the report.
- **Doesn't Start With** - excludes rows starting with certain characters from the report.
- **Ends with** - includes rows ending with certain characters in the report.
- **Doesn't end with** - excludes rows ending with certain characters from the report.

<details>
  <summary>Example</summary>

Product Name <b>IS</b> "Joust Duffle Bag Black":
- Will be passed only results for product <b>"Joust Duffle Bag Black"</b>. <br/>
- Results for the product <b>"Joust Duffle Bag Yellow"</b> will not be passed to the report. <br/>
<hr/>
Product Name <b>IS NOT</b> "Joust Duffle Bag Black":
- Results only for the product <b>"Joust Duffle Bag Black"</b> will be excluded from the report. <br/>
- Results for the product <b>"Joust Duffle Bag Yellow"</b> will not be excluded from the report. <br/>
<hr/>
Product Name <b>CONTAINS</b> "Bag":
- Results for products like <b>"Joust Duffle Bag Black"</b>, <b>"Wayfarer Messenger Bag"</b>, and  <b>"Voyage Yoga Bag"</b> will be included in the report. <br/>
- Results for products like <b>"Beaumont Summit Kit"</b>, <b>"Autumn Pullie"</b>, and <b>"Apollo Running Short"</b>  will not be included in the report. <br/>
<hr/>
Product Name <b>DOESN'T CONTAIN</b> "Bag":
- Results for products like <b>"Joust Duffle Bag Black"</b>, <b>"Wayfarer Messenger Bag"</b>, and  <b>"Voyage Yoga Bag"</b> will be excluded from the report. <br/>
- Results for products like <b>"Beaumont Summit Kit"</b>, <b>"Autumn Pullie"</b>, and <b>"Apollo Running Short"</b>  will not be excluded from the report. <br/>
<hr/>
Order Note <b>IS BLANK</b>:
- Will include only orders with a blank note. <br/>
- Orders with notes defined will be excluded from the report. <br/>
<hr/>
Order Note <b>IS NOT BLANK</b>:
- Will include only orders with a note defined. <br/>
- Orders without note defined will be excluded from the report. <br/>
<hr/>
Product SKU <b>STARTS WITH</b> "MB-":
- Will include only products that have SKU beginning with <b>"MB-"</b> like <b>"MB-01"</b>, <b>"MB-02"</b>, <b>MB-AWL-123"</b>. <br/>
- Products with SKUs like <b>"ST-01"</b>, <b>"DGA-22"</b>, and <b>"BDB-XL-YELLOW"</b> will not be included in the report. <br/>
<hr/>
Product SKU <b>DOESN'T START WITH</b> "MB-":
- Will exclude all products that have SKU beginning with <b>"MB-"</b>. Such as <b>"MB-01"</b>, <b>"MB-02"</b>, <b>MB-AWL-123"</b>. <br/>
- Products with SKUs like <b>"ST-01"</b>, <b>"DGA-22"</b>, and <b>"BDB-XL-YELLOW"</b> will not be excluded from the report. <br/>
<hr/>

</details>
