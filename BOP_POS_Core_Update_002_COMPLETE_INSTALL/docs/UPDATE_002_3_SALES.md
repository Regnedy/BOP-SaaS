# BOP SaaS POS Core - Update 002.3

## Motor de Ventas

Objetivo:
Registrar operaciones de venta relacionadas con empresa, sucursal, usuario y productos.

Agregado:

Tablas:
- sales
- sale_items

Modelos:
- Sale.php
- SaleItem.php

Flujo:

Usuario POS
 -> Venta
 -> Productos
 -> Variantes
 -> Total

Instalación:

php artisan migrate

Validación:

php artisan migrate:status

Siguiente checkpoint:
002.4 Pagos