## Proyecto: Cliente para API RESTful de Estudiantes

Este es un sistema web desarrollado en Laravel que consume una API RESTful externa (desarrollada en clase anterior) para gestionar estudiantes.

### Funcionalidades implementadas
- ✅ GET: Listar todos los estudiantes
- ✅ POST: Crear nuevo estudiante
- ✅ PUT: Actualizar estudiante existente
- ✅ DELETE: Eliminar estudiante
- ✅ PATCH: Actualización parcial (extra)

### Estructura del proyecto
- Rutas: 1 archivo de rutas web
- Controlador: 1 controlador (`StudentsController`)
- Vistas:
  - Crear estudiante (formulario + resultado en navegador)
  - Editar estudiante (formulario + resultado en navegador)
  - Listado de estudiantes (con acciones)
  - Plantilla base (layout)
- Servidores:
  - Servidor de aplicación (cliente Laravel)
  - Servidor de API (externo, consultado vía HTTP)

