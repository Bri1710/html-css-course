
<!--
Lenguaje de marcado de hipertexto para crear páginas web
Los elementos HTML le dicen al navegador cómo mostrar el contenido
Hojas de estilo en cascada (CSS)
-->


<!DOCTYPE html>
<html>
<head>
<title>About Bri</title>
</head>
<style>
body {background-color: powderblue;}
h1   {color: blue;}
p    {color: red;}
</style>
</head>
<body>

<h1>Brixit</h1>
<p>Requejo Vivanco</p>

</body>
</html>

<!--
1. BÁSICO CREACIÓN WEB:

<!DOCTYPE html>
declaración define documento HTML5

<html>
elemento raíz de una página HTML

<head>
elemento contiene metainformación sobre la página HTML

<title>
elemento especifica un título para la página HTML (en la barra de título del navegador o en la pestaña de la página)
    <p title> información adicional sobre un elemento
    </p>Ej: <p title="I'm a tooltip">This is a paragraph.</p>

    <body>
elemento define el cuerpo del documento y es un contenedor de todos los contenidos visibles

<input type= "password" required ="">
Requiere marcar el campo para enviar
<input type= "text">
<input type= "number">
<input type= "email">
<input type= "button">
<input type= "submit">

<input type = "color">
<input ype = range" min= "1" max "5">

<textarea readonly = "">Hola</textarea>
solo lectura

<meta name= "keywords" content="harina, leche, huevo">
<meta name= "description" content="empresa dedicada a...">
<meta name= "author" content= "lucas dalto">
<meta name= "copyright" content= "Facebook Inc">
<meta name= "robots" content= "index">
o "noindex"
<meta name= "robots" content= "follow">
o "nofollow"

<article><section>
<aside>
<footer>

<h1>
elemento define un encabezado grande. <h1> a <h6>

<p>
elemento define un párrafo.


ELEMENTOS

<header>
encabezado para un documento o una sección

<nav>
conjunto de enlaces de navegación

<section>
sección en un documento

<article>
contenido independiente y autónomo

<article>
contenido independiente y autónomo

<footer>
pie de página para un documento o una sección

<details>
detalles adicionales que el usuario puede abrir y cerrar a pedido

<summary>
un encabezado para el <details>elemento





************************************************************************************************************************

2. ENLACES E IMÁGENES:

<link rel ="icon" href="lucas.ico">
<a href>
    <a> URL de la página a la que va el enlace
    <href> es el atributo que especifica el destino del enlace
    Ej: <a href="https://www.w3schools.com">W3Schools</a></p>

a [href="http://..."]{
color:green;
}

body{
background:url(../images/logo.jpg)
background-repeat:no-repeat;
}

<blockquote>
define una sección que se cita de otra fuente (sangrado)
    Ej: <blockquote cite="http://www.worldwildlife.org/who/index.html">
    For nearly 60 years, WWF has been protecting the future of nature.</blockquote>

<img src>
etiqueta con la que se definen las imágenes
    <src> especifica la ruta a la imagen que se va a mostrar
    <alt> texto alternativo para una imagen
    Ej: <img src="w3schools.jpg" alt="W3Schools.com" width="104" height="142">
<video src="..."controls>
<audio src="..."controls>

URL completa para vincular a hoja de estilo
    Ej: <link rel="stylesheet" href="https://www.w3schools.com/html/styles.css">
Sitio actual
    Ej: <link rel="stylesheet" href="/html/styles.css">
Misma carpeta que sitio actual
    Ej: <link rel="stylesheet" href="styles.css">


************************************************************************************************************************

3. TEXTO:

<br>
salto de línea de texto

<pre>
se muestran los saltos de línea (preformateados)

<q>
comillas


<div>define una sección en el documento

<br>
abreviatura o acrónimo (subrayado con puntos)
    Ej: <p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.</p>

<hr>
(línea horizontal) etiqueta define una ruptura temática en una página HTML. Separa contenido o define un cambio


?? <tagname>
devuelve la etiqueta de un elemento

<adress>
(italic) dirección para información de contacto

<cite>
(italic) define el título de un trabajo creativo

<bdo>
invierte dirección del texto
    Ej: <bdo dir="rtl">This text will be written from right to left</bdo>


************************************************************************************************************************

4. ESTILOS Y ELEMENTOS DE FORMATO:

ORDEN:
1. content-line-height
2. padding
3. border
4. margin auto

<link rel="stylesheet" type="text/css" href="estilo.css">
<link rel="stylesheet" type="text/css" href="normalize.css">
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">


position: relative;
el espacio que tiene lo conserva

fixed es como absolut pero queda fijado

top y left son prioritarias

z-index:100
z-index: -1 (hijo debajo del padre)

box-sizing: border-box;
margin:0; distancia entre las dos cajas
padding:0;
border-radius:10px; redondea el borde

box-sizing: content-box;
text-align: center;

clases ----> .
id ----> #
(estilo línea)style ---->

<h1 class= "color-red" id="color-blue" style"color:green">Hola</h1>
prevalece el style (se va a ver green)

h1{
color: grey !important
}
!important prevalece sobre style



<div class="contact-form">
    <input type="text" class="contact-form__input">
        <input type="text" class="contact-form__input--active">
    <input type="password" class="contact-form__input">
</div>

.contact-form__input:first-child{
color: red
}

.contact-form__input--active{
color: pink
}

.contact-form__p-h2{
color: red
}


COLOR:

VALORES
RGB (255, 99, 71) (255 rojo, 99 verde, 71 azul) de 0 a 255
    Ej:<h1 style="background-color:rgb(255, 99, 71);">...</h1>

RGBA (opacidad)
    Ej: rgba(0,0,0,.5)


HEX #ff6347 (#00 rojo, 00 verde, 00 azul)
    #ffffff blanco
    #000000 negro
    #bebebe gris
    #ff0000 rojo


HSL hsl(9, 100%, 64%) (9matiz, 100% saturación, 64% luminosidad)

*HSLA hsla(9, 100%, 64%, 0.5)





blackground-color
    Ej: <h1 style="background-color:powderblue;">This is a heading</h1>
border
    Ej: p { border: 2px solid powderblue; }
padding (define el espacio entre el texto y el borde)
    Ej: p {
    border: 2px solid powderblue;
    padding: 30px;
    }
margin (espacio fuera del borde)
    Ej: p {
    border: 2px solid powderblue;
    margin: 50px;
    }

    padding= margen interno

FUENTE:
font-family
font-size (tiene que ser un porcentaje como por ej 100%)

1em = 16px
line-height:2;
(1 hacia arriba y 1 hacia abajo)

font-weight:900;
grosor tipografía

medidas relativas:
width: 50vw o 50% (el porcentaje se aplica sobre la caja que lo contiene)
height: 50vh
(mitad)

h1{
display:inline;
}
se comporta como un elemento en línea

block
inline-block

padding: 20px 30px
arriba y abajo 20 y a los lados 30
padding: 20px 30px 15px 45px
top, right, bottom, left

TEXTO:
text-align
<b> y <strong> negrita
<i> italic. Término técnico
<em> italic
<mark> subrayado amarillo
<small>
<del> tachado
<strike> tachado
    Ej: <p>My favorite color is <del>blue</del> red.</p>
<ins> subrayado

<sub> subíndice (tamaño menor desplazado hacia arriba)
    Ej: <p>This is <sub>subscripted</sub> text.</p>
<sup> sobrescrito (tamaño menor desplazado hacia abajo)
    <p>This is <sup>superscripted</sup> text.</p>

<span> marca una parte de un texto


IMAGEN:
background-image
background-repeat: no-repeat;

TABLA:
<tr> fila de tabla
<td> contenido celda de tabla

LISTA:
<li> lista
    <ol> ordenada
        <ol type="1"> números
        <ol type="A"> letras mayúscula
        <ol type="a"> letras minúscula
        <ol type="I"> números romanos
        <ol type="i"> números romanos minusculas
    <ul> desordenada
       Ej: <ul style="list-style-type:circle;">
           circle, square, disc or none

<dl> define la lista de descripciones
<dt> nombre
<dd> descripción del término





