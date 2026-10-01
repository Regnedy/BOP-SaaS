# BOP SaaS Inventory Core - Update 003.2

## Recetas y consumo automático

Objetivo:
Relacionar productos vendidos con ingredientes utilizados.

Agregado:

Tablas:
- recipes
- recipe_items

Modelos:
- Recipe.php
- RecipeItem.php

Flujo:

Venta POS
 -> Producto
 -> Receta
 -> Ingredientes
 -> Descuento inventario


Ejemplo:

Nieve Chocolate Grande

- Base nieve 250 ml
- Chocolate 40 gr
- Vaso 1
- Cuchara 1


Instalación:

php artisan migrate


Siguiente checkpoint:
003.3 Compras y Proveedores.