---
sidebar_position: 2   
title: if
slug: /ace/if
tags: [Logical]
---
Returns one value if a logical expression is TRUE and another if it is FALSE.
### Syntax

 ```yaml
if(<condition>, <then>, <else>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| condition | Boolean | An expression that returns logical value, i.e. TRUE or FALSE. |
| then | any | The value the function returns if condition is TRUE. |
| else | any | The value the function returns if condition is FALSE. |

### Return values
Depends on input arguments.


### Usages      

```yaml
if(orders.country == "US", "United States", "Other")
```    

```yaml
if(products.qty > 0, "in stock", "out of stock")
```    

```yaml
if(
    and(customers.orders > 10, date_diff(customers.last_order_at, now(), DAY) < 10),
    "Loyal", 
    if(
        date_diff(customers.last_order_at, now(), DAY) > 50), 
        "Dormant", 
        "New"
    )
)

```    

### Related functions      
* [case](/ace/case)
* [and](/ace/and)
* [or](/ace/or)
