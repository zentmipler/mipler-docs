---
sidebar_position: 2   
title: date
slug: /ace/date
tags: [Date and Time]
---
Converts a year, month, and day into a date.
### Syntax

 ```yaml
date(<year>, <month>, <day>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| year | Integer | The year component of the date. |
| month | Integer | The month component of the date. |
| day | Integer | The day component of the date. |

 ```yaml
date(<date>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| date | Date | The date to strip time part. |

### Return values
Date


### Usages      

```yaml
date(1922, 7, 20)
```    

```yaml
date(orders.created_at)
```    

### Related functions      
* [date_add](/ace/date_add)
* [date_diff](/ace/date_diff)
* [now](/ace/now)
* [date_value](/ace/date_value)
* [format](/ace/format)
