# Esta es una generador de codigo para elementos Laravel Nativo

Lo que se intenta realizar es un generador de cruds y formularios para Laravel 9
Las dependencias están establecidas para los siguientes paquetes
 - Laravel 9 
 - laravel collective
 - Select 2
 - otros a definir
## Instalación
Para la instalacion via composer se usa el comando:
```
composer require jorgrios/apex-builder
```
Luego se declara en los Providers y le ponemos el Alias en la ruta config\app.php
```php
'providers' => [
    Jrios\ApexBuilder\BuilderFormServiceProvider::class,
]
'aliases' => [
    'Builder' => Jrios\ApexBuilder\Facade\BuilderForm::class,
]
```
Y con esto ya tendriamos realizada la instalación de Apex Builder
## Uso
La sintaxis en general parte insertar un atajo via alise para que se muestre codigo generado por detras en la libreria
cuya sintaxis es la siguiente
```php
{!! Builder::ejemplo($parametros) !!}
```

este codigo puede ser generado dentro del controlador para mantener las buenas practicas y ser llamado a su uso en la respuesta del controlador a la vista con el metodo with()


```php
public function index(){
    $this->authorize($this->slug.__FUNCTION__);
    $elementos = \App\Models\Elementos::paginate(30);
    return  view('modulo.elementos.index',compact('elementos'))->
            with('pestanias', $this->pestanias);
}
```


#### Pestañas 
Para hacer uso de las pestañas usamos el metodo pestanias()
```php
{!! Builder::pestanias($pestanias) !!}
```
En la cual recibiremos un array php para obtener los cuadros desplegables, botones y enlaces de nuestra pestaña bajo el siguiente formato

```php
$pestanias = [
        ['route'=>'element.create','name'=>'Nuevo'],
        ['route'=>'element.index','name'=>'Listado'],
        [
            'parent' => 'Reportes',
            'children' =>[
                ['route'=>'element.report.by-module','name'=>'por Modulo'],
                ['route'=>'element.report.by-year','name'=>'por Gestion']
            ]
        ],
    ];
```
Mientras exista la clave parent se identificara como pestaña desplegable
