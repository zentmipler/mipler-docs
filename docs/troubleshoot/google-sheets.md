---
title: Integration with Google Sheets is not working
sidebar_position: 2
---

# Integration with Google Sheets is not working

When integrating a report from Mipler into Google Sheets, you may encounter an error where the data does not appear.
This is often caused by Google Sheets' response time updates. Below are solutions to work around these limitations.

## Solution 1: Use a Checkbox for Manual Updates

You can use a checkbox in Google Sheets to manually refresh the formula.

1. Copy the link `=IMPORTDATA()` from the Google Sheets Integration.
   <img src="/docs/img/troubleshoot/google-sheets/s1_1.png" />
2. Paste the link into your Google Sheets file, add `?nocache=` after the last slash, then append `&` followed by the
   cell reference of the checkbox after the closing quotation marks.
   <img src="/docs/img/troubleshoot/google-sheets/s1_2.png" />
3. Add a checkbox in the specified cell and format the sheet as needed.
   <img src="/docs/img/troubleshoot/google-sheets/s1_3.png" />

Now, toggling the checkbox will manually refresh the formula, integrating the updated data into your sheet.

---

## Solution 2: Use Apps Script for Automatic Updates

You can configure the integration using Apps Script and triggers for automatic updates.

1. Open a new Google Sheets file, then go to Extensions → Apps Script.
   <img src="/docs/img/troubleshoot/google-sheets/s2_1.png" />
2. Paste the following code into the Apps Script editor:

```javascript
function importCsvData() {
    var sheet = SpreadsheetApp.getActiveSpreadsheet().getSheetByName('Sheet1');
    var url = '';

    var response = UrlFetchApp.fetch(url);
    var csvData = Utilities.parseCsv(response.getContentText());

    sheet.clear();

    var currentTime = new Date();
    sheet.getRange(1, 1).setValue("Last updated at: " + currentTime.toLocaleString());
    sheet.getRange(4, 1, csvData.length, csvData[0].length).setValues(csvData);
}
```

3. Navigate to your desired Mipler report, enable Quick Access & Sharing, and copy the Download Link in `.csv` format.
   <img src="/docs/img/troubleshoot/google-sheets/s2_2.png" />
4. In the code, set the 'url' variable to the copied Download Link from Mipler and save the project.
   <img src="/docs/img/troubleshoot/google-sheets/s2_3.png" />
5. Go to the Triggers section in Apps Script and add a new trigger.
   Keep the default settings to refresh the report whenever the sheet is reloaded.
   <img src="/docs/img/troubleshoot/google-sheets/s2_4.png" />


