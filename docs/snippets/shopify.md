---
title: Shopify Column Snippets
authors: [alx]
tags: [ACE, Shopify]
---

## Customers

#### First Order Date
The customer's first order date refers to the date on which a customer placed their initial order.

This information can be used for various purposes, such as analyzing customer behavior, tracking customer lifetime value, and identifying new customer trends.

```javascript
DIMENSION customers.first_order_at = MINX(orders, orders.processed_at)
```
#### Second Order Date
```javascript
DIMENSION customers.second_order_at = CALCULATE(
    MINX(orders, orders.processed_at), 
    orders.processed_at > customers.first_order_at
)
```

#### Last Order Date
The customer's last order date refers to the date on which a customer placed their most recent order.
```javascript
DIMENSION customers.last_order_at = MAXX(orders, orders.processed_at)
```

#### List of Products in First Order
The customer's list of products in their first order refers to the specific items or products that a customer purchased during their initial order.
```javascript
DIMENSION customers.first_order_products = {
    DIMENSION customers.first_order_at = MINX(orders, orders.processed_at)
    
    RETURN CONCATENATEX(
        FILTER(products, orders.processed_at = customers.first_order_at),
        products.name
    )
}
```

## Orders

#### Is First Order of Customer
The column indicates whether this order is the customer's initial order or not.
```javascript
DIMENSION orders.is_first_order = {
    DIMENSION customers.first_order_at = MINX(orders, orders.processed_at)
    
    RETURN IF(orders.processed_at = customers.first_order_at, "Yes", "No")
}
```

#### Products in one line
1 × Product A, 2 × Product B
```javascript
DIMENSION orders.products = {
    RETURN CONCATENATEX(order_items, 
        CONVERT(order_items.quantity, STRING) 
        + " × " 
        + order_items.product_name
    )
}
```
