# SQL Queries

## Getting all products

```sql
SELECT * FROM `product`
```

## Getting all products with a specified id (#2)

```sql
SELECT *
FROM `product`
WHERE `id` = 2
```

## Sorting the products by price

```sql
SELECT *
FROM `product`
ORDER BY `price`
```

## Sorting the products by rate

```sql
SELECT *
FROM `product`
ORDER BY `rate` DESC
```

## Sorting the products by name

```sql
SELECT *
FROM `product`
ORDER BY `name`
```

## Getting all the types displayed in the footer

```sql
SELECT *
FROM `type`
WHERE `footer_order`>"0"
ORDER BY `footer_order`
```

## Getting all the brands displayed in the footer

```sql
SELECT *
FROM `brand`
WHERE `footer_order`>"0"
ORDER BY `footer_order`
```
