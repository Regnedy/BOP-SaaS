# BOP API Core 004.4

## Sync Inventario

Objetivo:
Preparar sincronizacion de movimientos de inventario entre Android y Laravel.

Incluye:

- InventorySyncController
- InventorySyncService


Flujo:

Android POS
 -> Movimiento local
 -> Sync API
 -> Inventario central


Movimientos soportados:

- sale
- purchase
- adjustment
- waste
- transfer


Siguiente checkpoint:

004.5 Resolucion de conflictos.