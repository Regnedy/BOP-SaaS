# BOP SaaS POS Core - Update 002.5

## Caja Profesional

Objetivo:
Controlar aperturas, movimientos y cierres de caja.

Agregado:

Tablas:
- cash_sessions
- cash_movements

Modelos:
- CashSession.php
- CashMovement.php


Flujo:

Apertura
 ->
Ventas
 ->
Ingresos/Gastos/Retiros
 ->
Cierre
 ->
Arqueo


Instalación:

php artisan migrate


Siguiente checkpoint:

002.6 Integración POS