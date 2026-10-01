# BOP SaaS POS Core - Update 002.2

## Variantes de Producto

Objetivo:
Permitir que un producto tenga diferentes opciones sin crear módulos específicos por negocio.

Ejemplos:

Nievería:
- Chocolate
- Mango
- Fresa
- Grande
- Litro

Hot Dog:
- Normal
- Especial
- Doble

Café:
- Chico
- Mediano
- Grande


## Agregado

Tabla:
product_variants

Modelo:
ProductVariant.php


## Instalación

Copiar archivos.

Ejecutar:

php artisan migrate


## Validación

php artisan migrate:status


## Próximo checkpoint

002.3 Motor de Ventas