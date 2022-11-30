# Desarrollo Web en Entorno Servidor | 1ª Evaluación

## Instrucciones:

- Leer todo el enunciado antes de empezar
- Clonar el repositorio alojado en la siguiente URL `https://github.com/rodri-afa/DWES-22_23-1ev.git`
- Dicho repositorio contiene dos carpetas: una para el ejercicio 1 y otra para el ejercicio 2.
- Realizar los programas de PHP en los ficheros que han sido clonados.
- Se valorará positivamente con hasta un punto sobre 10, la legibilidad del código, los comentarios y el uso debido de elementos HTML y CSS

## Entrega

Una vez terminado, es necesario:

- Comprimir la carpeta del repositorio en .zip y subirla al campus virtual
- `Recomendable:` Por otra parte, se recomienda hacer commit con todos los cambios, y crear una bifurcación (fork). Para ello, simplemente bastaría con subir los archivos (hacer push) al repositorio de partida (origin / master). Como no se tienen credenciales para poder subir archivos sobre ese repositorio, el propio VSCode nos sugiere crear una bifurcación, a lo que se aceptará.

## Enunciado:

El examen práctico consiste en dos ejercicios de desarrollo en los que habrá que utilizar arrays, ficheros JSON, clases y formularios.

### ( 6 puntos) Ejercicio 1: Cotas de nieve (arrays,json,iteraciones y parámetros URL)

Partiendo de la siguiente información, realizar un script `cotas.php` en PHP que cumpla diversos objetivos:

|                 | Lunes | Martes | Miércoles | Jueves | Viernes | Sábado | Domingo |
| --------------- | ----- | ------ | --------- | ------ | ------- | ------ | ------- |
| Temp. max. (ºC) | 14    | 12     | 13        | 13     | 14      | 15     | 17      |

- **(0,5pt)** Almacenar los datos en un array asociativo
- **(0,5pt)** Por cada día, añadir otra clave que represente la temperatura mínima. Dicha temperatura, generada dinámicamente por el programa, será un número aleatorio entre 5 y 10 grados menos.
- **(0,5pt)** Por cada día, añadir otra clave que represente la temperatura media entre la máxima y la mínima.
- **(0,5pt)** Crear un json con el array resultante y guardarlo en un fichero llamado `temperaturas.json`
- **(1pt)** Leer dicho json, decodificarlo y eliminar los datos de los dos últimos días con un método propio de los arrays.
- **(2pt)** Crear con HTML una tabla con los datos del array del punto anterior.

```html
<table>
  <tr>
    <td></td>
    <td>lunes</td>
    <td>martes</td>
    <td>...</td>
    <td>viernes</td>
  </tr>
  <tr>
    <td>Temp. max:</td>
    <td>14</td>
    <td>12</td>
    <td>...</td>
    <td>14</td>
  </tr>
  <tr>
    <td>Temp. minima</td>
    <td>8</td>
    <td>7</td>
    <td>...</td>
    <td>6</td>
  </tr>
  <tr>
    <td>Temp. media</td>
    <td>11</td>
    <td>9.5</td>
    <td>...</td>
    <td>10</td>
  </tr>
</table>
```

- **(1pt)** Hacer que si el programa un parámetro por URL "dia", después de la tabla muestre el valor de dicho día. Mostrar el texto sólo si el valor del parámetro día existe o si está definido. Ej:
  url: recibe el valor dia como "lunes"
  html: `el lunes hay una temperatura mínima de 8ºC y una máxima de 14ºC`

### (3pts) Ejercicio 2: Formularios y clases:

Crear un formulario que permita crear instancias de la clase empleado. _No es necesario almacenar los datos en ningún archivo ni realizar ninguna acción con las instancias creadas_. El ejercicio lo componen 3 archivos:

- **(1pt) index.php:** fichero que contiene un formulario para crear alumnos: nombre, email, curso (1º / 2º), ciclo (DAW / DAM), emancipado(si[checked] / no ).
- **(1pt) alumno.php:** fichero con la clase alumno (nombre, email, curso, ciclo, emancipado + getters, setters, constructor y toString). Este fichero sólo se importa en el controlador.
- **(1pt) contolador.php:** fichero encargado de recibir la petición del formulario, importar y crear una nueva instancia de la clase alumno con los datos que le llegan(0,5pt), y redirigir a index.php otra vez (0,5pt).

### (1pt) Comentarios, CSS y formato de código

Se valorará con 1 punto el formato del código (tabulaciones, variables descriptivas, comentarios, etc) y el uso de CSS que mejore visualmente los interfaces mostrados.

- **Ejercicio 1:**

  - Formato: 0,3pt
  - CSS: 0,3pt

- **Ejercicio 2:**
  - Formato: 0,2pt
  - CSS: 0,2pt
