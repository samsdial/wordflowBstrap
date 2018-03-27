# Sams WorkFlow 2017

Gulp wordFlow 2017

* [Gulp] - Automatizador de tareas
br
* [Sass] - Extención minificación de css como preprocesador
br
* [sourcemaps] - Maping como herramienta de rastreo luego de la compilación tanto de las hojas de estilo css, al igual que todos los archivos javascript.
br
* [Autoprefixer] - Esencial en la compilación de los estilos para el soporte de los prefijos de todos los navegadores.
br
* [imagemin] - Minificador de imagenes
br
* [uglify] -
br
* [babel] -
br
* [pug] -
br
* [BrowserSync] -


*** Install
```shell
$ npm install
```

*** Running
```shell
$ gulp watch
```


# Que es e VUE.JS
# Que es data bing y reactividad

  - Que pasa cuando el modelo cambia o se actualiza? deberia Actualizarse... Reactividad 

# Que son las directivas
   
   - atributos y capacidades a los html 

***  Renderisado condicional
 
v show
    - Elemento que se puede mostra o ocultar(display none) con una variable booleana
```javascript
    v-show
```
v if
    - Elemento que se puede borrar o crear en el Dom apartir de una varia ble booleana

v else
    - Elemento se puede condicionar segú el valor conducional de una variable
```html
    <main>
        <h1 v-if="edad < 18">No puedes entrar.</h1>
        <h1 v-else-if="edad > 200"> Eres inmortal.</h1>
        <h1 v-else> Puedes entrar.</h1>
    </main>
```
````javascript
    const vm = new Vue ({
        el: 'main',
        data: {
            conectado: false,
            edad: 44,
        }
    });
````
*** Template

```html
    <main>
        <template v-if="conectado">
        <h3> Bievenido Juan</h3>
        <ul>
        <li><a href="#">Mis datos</a></li>
        <li><a href="#">Mensaje</a></li>
        <li><a href="#">Salir</a></li>
        </ul>
        </template>
    </main>
```