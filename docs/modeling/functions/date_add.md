---
sidebar_position: 2   
title: date_add
slug: /ace/date_add
tags: [Date and Time]
---
Moves the given date by a specified interval.
### Syntax

 ```yaml
date_add(<date>, <intervals>, <interval>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| date | Date | A date, or a formula that evaluates to a date value. |
| intervals | Integer | The number of intervals to shift. |
| interval | Text | One of: MINUTE, HOUR, WEEK, DAY, MONTH, QUARTER, YEAR. |

### Return values
Date


### Usages      

```yaml
date_add(orders.created_at, 5, HOUR)
```    

```yaml
date_add(orders.created_at, if(weekday(orders.created_at) == 6, 1, 0), DAY)
```    

### Related functions      
* [date_diff](/ace/date_diff)
