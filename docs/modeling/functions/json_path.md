---
sidebar_position: 2   
title: json_path
slug: /ace/json_path
tags: [Text]
---
Allows to navigate and retrieve specific data from JSON objects or arrays based on a specified path or query.
### Syntax

 ```yaml
json_path(<val>, <path>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| val | Text |  |
| path | Text |  |

### Return values
Text


### Usages      

```yaml
JSONPATH(products.meta_fields, "collection.name")
```    

```yaml
JSONPATH(order_items.properties, "#(name=""color"").value")
```    
