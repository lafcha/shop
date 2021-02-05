# SQL Queries

## Getting all the products

```sql
SELECT * FROM `product`
```

## Getting all products with a specified id (#2)

```sql
SELECT *
FROM `product`
WHERE `id` = 2
```

## Getting all the categories

```sql
SELECT * FROM `category`
```

## Getting all categories with a specified id (#2)

```sql
SELECT *
FROM `category`
WHERE `id` = 2
```

## Getting all the brands

```sql
SELECT * FROM `brand`
```

## Getting all brands with a specified id (#2)

```sql
SELECT *
FROM `brand`
WHERE `id` = 2
```

## Getting all the types

```sql
SELECT * FROM `type`
```

## Getting all types with a specified id (#2)

```sql
SELECT *
FROM `type`
WHERE  `id` = 2
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

____

## MEGA BONUS

### Bonus :spades: : Récupérer le nom & le prix des produits de la catégorie dont l'ID est 1 + le nom de la catégorie en question.

```sql
SELECT product.name, product.price, category.name, category.id
FROM product
LEFT JOIN category ON product.category_id = category.id
WHERE category.id = 1
```

## Bonus :skull: :Récupérer le nombre de produits pour chaque catégorie.

```sql
SELECT COUNT(product.id) AS nb, category.id, category.name
FROM product
INNER JOIN category ON category_id = category.id
GROUP BY category_id
```
