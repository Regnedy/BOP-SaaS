# BOP SaaS - POS Core Update 002.1
## Catalog Base

Objetivo:
Crear la primera capa del POS: categorias y productos.

Agregado:
- Tabla categories
- Tabla products
- Modelo Category
- Modelo Product

Relaciones:
Company
 -> Categories
 -> Products

Instalacion:
1. Copiar archivos al proyecto Laravel.
2. Ejecutar:
   php artisan migrate

Validacion:
php artisan migrate:status

Siguiente checkpoint:
002.2 Product Variants