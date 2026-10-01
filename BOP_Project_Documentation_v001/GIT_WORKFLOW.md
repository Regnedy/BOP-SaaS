# Git Workflow BOP SaaS

## Actualizar proyecto

Antes de trabajar:

git pull


Después de cambios:

git add .

git commit -m "Descripcion del cambio"

git push


## Ver estado

git status


## Ver historial

git log --oneline


## Clonar nuevamente

git clone git@github.com:Regnedy/BOP-SaaS.git


## Reglas

No subir:
.env
/vendor
/node_modules

Mantener actualizado:
PROJECT_STATE.md
CHANGELOG.md
README.md