---
sidebar_position: 2   
title: len
slug: /ace/len
tags: [Text]
---
Returns the length of the given string.
### Syntax

 ```yaml
len(<text>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| text | Text | The text whose length you want to find. Spaces count as characters |

### Return values
Integer


### Usages      

```yaml
len(products.sku)
```    

### Examples      

```yaml
RETURN [
    len("some text here"),
    len(customers.max_x(customers.name))
]

```    

### Related functions      
* [right](/ace/right)
* [left](/ace/left)
