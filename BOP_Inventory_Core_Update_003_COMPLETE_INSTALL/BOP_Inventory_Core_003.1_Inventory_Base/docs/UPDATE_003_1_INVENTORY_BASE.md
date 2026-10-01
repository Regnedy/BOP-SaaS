# BOP SaaS Inventory Core - Update 003.1

## Inventario Base

Objetivo:
Crear la base de control de existencias.

Agregado:

Tablas:
- inventory_items
- stock_movements

Modelos:
- InventoryItem.php
- StockMovement.php


Ejemplos:

Leche
Chocolate
Azucar
Vasos
Conos


Tipos de movimiento:

- purchase
- sale
- adjustment
- waste
- transfer


Instalacion:

php artisan migrate


Siguiente checkpoint:

003.2 Recetas y consumo automatico.