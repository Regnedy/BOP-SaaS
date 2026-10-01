# BOP API Core 004.3

## Sync Engine Base

Objetivo:
Preparar sincronización entre Android POS offline y Laravel.

Agregado:

- sync_queues table
- SyncQueue model
- SyncController


Flujo:

Android SQLite
 -> Sync Queue
 -> API
 -> Laravel


Estados:

- pending
- processing
- completed
- failed


Endpoints preparados:

POST /api/sync/push

GET /api/sync/pull


Siguiente:
004.4 Sync Inventario.