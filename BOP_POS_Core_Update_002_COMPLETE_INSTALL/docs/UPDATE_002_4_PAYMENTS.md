# BOP SaaS POS Core - Update 002.4

## Pagos

Objetivo:
Registrar la forma en que se cobra cada venta.

Agregado:

Tabla:
- payments

Modelo:
- Payment.php


Métodos soportados:

- cash
- card
- transfer
- mixed
- credit


Flujo:

Venta
 |
 Pago
 |
 Método
 |
 Monto


Instalación:

php artisan migrate


Validación:

php artisan migrate:status


Siguiente checkpoint:

002.5 Caja Profesional