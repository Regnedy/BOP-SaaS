# BOP API Core 004.5

## Resolución de conflictos Sync

Objetivo:
Controlar eventos enviados por múltiples dispositivos.

Incluye:

- SyncConflictService
- sync_logs

Reglas:

- UUID evita duplicados.
- Los movimientos nunca se eliminan.
- Los conflictos quedan auditados.

Siguiente:
004.6 Integración Android POS.