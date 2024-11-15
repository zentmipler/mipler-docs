---
sidebar_position: 2   
title: calculate
slug: /ace/calculate
tags: [Filter]
---
Evaluates an expression in a context modified by filters.
### Syntax

 ```yaml
calculate(<expr>, <filter>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| expr | any | The expression to be evaluated. |
| filter | Table | A table expression that defines a filter. |

 ```yaml
calculate(<expr>, <filter>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| expr | any | The expression to be evaluated. |
| filter | Boolean | A boolean (True/False) expression. |

### Return values
Depends on input arguments.


### Usages      

```yaml
calculate(orders.total_amount, year(orders.created_at) == 2022)
```    

```yaml
calculate(orders.total_amount, and(products.vendor == "Various", customers.type == "Returning"))
```    

```yaml
calculate(orders.total_amount, all(orders))
```    

```yaml
calculate(orders.total_amount, filter(orders, orders.discount > 0))
```    

### Related functions      
* [filter](/ace/filter)
