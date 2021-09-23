# Model Notes

Crear y mostrar histororial personalizado en un modelo.

## Instalación

```bash
composer require chondal/model-history
```
Luego ejecutar migraciones para migrar la tabla "notes"

## Dependencias

Este paquete utiliza el siguiente paquete

```bash
composer require laracasts/flash
```

## Como usarlo

Publicar el archivo de configuración llamado history.php
Configurar el modelo que va a ser el autor a guardar, por lo general será el modelo user.

En los modelos que usarán Historial, usar el trait HasHistory proveniente con el paquete.

Ejemplo:

    use SoftDeletes;
    use HasHistory;

    protected $guarded = [];

Cuando quiera mostrar el historial en un modelo, por ejemplo en la pantalla de edición del mismo, puede hacerlo llamando al siguiente método.

```bash
composer require laracasts/flash
```
{{ ModelHistory::table($model) }}
donde $model, es la instancia actual del modelo que desea ver.

Esto listará el historial.

## Contributing
El paquete se encuentra en desarollo.

## License
[MIT](https://choosealicense.com/licenses/mit/)