La sentencia "truncate table" vacía la tabla 
(elimina todos los registros) y vuelve a 
crear la tabla con la misma estructura.

truncate table libros;

-------------------------------------

El atributo "unsigned" (sin signo) permite sólo valores positivos.

Si necesitamos almacenar edades, por ejemplo, nunca guardaremos valores negativos, entonces sería adecuado definir un campo "edad" de tipo entero sin signo:

edad integer unsigned;

create table libros(
    codigo integer unsigned auto_increment,
    titulo varchar(20) not null,
    autor varchar(30),
    editorial varchar(15),
    precio float unsigned,
    cantidad integer unsigned,
    primary key (codigo)
    );

---------------------------------------------------
Para guardar fechas y horas dispone de varios tipos:

1) date: representa una fecha con formato "YYYY-MM-DD". 
El rango va de "1000-01-01" a "9999-12-31".

2) datetime: almacena fecha y hora, su formato es 
"YYYY-MM-DD HH:MM:SS". El rango es de "1000-01-01 00:00:00" 
a "9999-12-31 23:59:59".

3) time: una hora. Su formato es "HH:MM:SS". 
El rango va de "-838:59:59" a "838:59:59".

4) year(2) y year(4): un año. Su formato es "YYYY" o "YY". 
Permite valores desde 1901 a 2155 (en formato de 4 dígitos)
 y desde 1970 a 2069 (en formato de 2 dígitos)

------------------------------------------------------
"zerofill" rellena con ceros los espacios disponibles a la izquierda.

Por ejemplo, creamos la tabla "libros", definiendo los campos "codigo" y "cantidad" con el atributo "zerofill":

 create table libros(
  codigo int(6) zerofill auto_increment,
  titulo varchar(40) not null,
  autor varchar(30),
  editorial varchar(15),
  precio decimal(5,2) unsigned,
  cantidad smallint zerofill,
  primary key (codigo)
 );

------------------------------------------------------
Podemos usar "between":

 select * from libros
  where precio between 20 and 40;

También podemos usar "in" :

 select * from libros
  where autor not in ('Borges','Paenza');

 select * from libros
  where autor in('Borges','Paenza');


Con "in" averiguamos si el valor del campo está incluido 
en la lista, con "not" antecediendo la condición, 
invertimos el resultado.

----------------------------------------------------------
Para seleccionar todos los libros que comiencen con "A":

 select * from libros
  where titulo like 'A%';

Para seleccionar todos los libros que no comiencen con "A":

 select * from libros
  where titulo not like 'A%';

Queremos ver los libros de "Lewis Carroll" pero no recordamos si se escribe "Carroll" o "Carrolt", entonces tipeamos esta condición:

 select * from libros
  where autor like "%Carrol_";

------------------------------------------------------------

Los operadores "regexp" y "not regexp" busca patrones de 
modo similar a "like" y "not like".

Para buscar libros que contengan la cadena "Ma" usamos:

 select titulo from libros
  where titulo regexp 'Ma';
Para buscar los autores que tienen al menos una "h" 
o una "k" o una "w" tipeamos:

 select autor from libros
  where autor regexp '[hkw]';

Para buscar los autores que no tienen ni "h" o una "k"
 o una "w" tipeamos:

 select autor from libros
  where autor not regexp '[hkw]';
Para buscar los autores que tienen por lo menos una de 
las letras de la "a" hasta la "d", es decir, "a,b,c,d", usamos:

 select autor from libros
  where autor regexp '[a-d]';
Para ver los títulos que comienzan con "A" tipeamos:

 select titulo from libros
  where titulo regexp '^A';
Para ver los títulos que terminan en "HP" usamos:

 select titulo from libros
  where titulo regexp 'HP$';
Para buscar títulos que contengan una "a" luego un 
caracter cualquiera y luego una "e" utilizamos la siguiente sentencia:

 select titulo from libros
  where titulo regexp 'a.e';
El punto (.) identifica cualquier caracter.

Podemos mostrar los títulos que contienen una "a" 
seguida de 2 caracteres y luego una "e":

 select titulo from libros
  where titulo regexp 'a..e';
Para buscar autores que tengan 6 caracteres 
exactamente usamos:

 select autor from libros
  where autor regexp '^......$';
Para buscar autores que tengan al menos 6 
caracteres usamos:

 select autor from libros
  where autor regexp '......';
Para buscar títulos que contengan 2 letras 
"a" usamos:

 select titulo from libros
  where titulo regexp 'a.*a';

El asterisco indica que busque el caracter 
inmediatamente anterior, en este caso cualquiera 
porque hay un punto.

-------------------------------------------------------------
La función "count()" cuenta la cantidad de 
registros de una tabla, incluyendo los que tienen valor nulo.

 select count(*) from libros;

 select count(*) from libros
  where editorial='Planeta';

 select count(*) from libros
  where autor like '%Borges%';


---------------------------------------------------------
 La sentencia "group by" agrupa registros 
para consultas detalladas.

 select ciudad, count(*)
  from visitantes
  group by ciudad;

 select ciudad, count(telefono)
  from visitantes
  group by ciudad;


Para conocer el total de las compras 
agrupadas por sexo:

 select sexo, sum(montocompra)
  from visitantes
  group by sexo;
Para saber el máximo y mínimo valor de 
compra agrupados por sexo:

 select sexo, max(montocompra) from visitantes
  group by sexo;
 select sexo, min(montocompra) from visitantes
  group by sexo;
Se pueden simplificar las 2 sentencias 
anteriores en una sola sentencia, ya que usan el mismo "group by":

 select sexo, max(montocompra),
  min(montocompra)
  from visitantes
  group by sexo;
Para calcular el promedio del valor de 
compra agrupados por ciudad:

 select ciudad, avg(montocompra) from visitantes
  group by ciudad;
Podemos agrupar por más de un campo, 
por ejemplo, vamos a hacerlo por "ciudad" y "sexo":

 select ciudad, sexo, count(*) from visitantes
  group by ciudad,sexo;

También es posible limitar la consulta con "where".

Vamos a contar y agrupar por ciudad 
sin tener en cuenta "Cordoba":

 select ciudad, count(*) from visitantes
  where ciudad<>'Cordoba'
  group by ciudad;

----------------------------------------------------
 La cláusula "having" permite seleccionar 
(o rechazar) un grupo de registros.

Si queremos saber la cantidad de libros 
agrupados por editorial pero considerando 
sólo algunos grupos, por ejemplo, los que 
devuelvan un valor mayor a 2, usamos la 
siguiente instrucción:

 select editorial, count(*) from libros
  group by editorial
  having count(*)>2;

Se utiliza "having", seguido de la 
condición de búsqueda, para seleccionar 
ciertas filas retornadas por la cláusula 
"group by".

Veamos otros ejemplos. Queremos el promedio 
de los precios de los libros agrupados por 
editorial:

 select editorial, avg(precio) from libros
  group by editorial;

Ahora, sólo queremos aquellos cuyo promedio 
supere los 25 pesos:

 select editorial, avg(precio) from libros
  group by editorial
  having avg(precio)>25;

-------------------------------------------

Agregar datos a una tabla:

alter table libros
  add precio int;

-------------------------------------------

Podemos eliminar 2 campos en una misma sentencia:

 alter table libros
  drop editorial, drop cantidad;

-------------------------------------------

Modificar datos de una tabla:

 alter table pacvi.PERSONA
  modify ID_REGISTRO_PERSONA INT UNSIGNED NOT NULL AUTO_INCREMENT;


-------------------------------------------

Con "change" cambiamos el nombre de un 
campo y también podemos cambiar el tipo 
y sus modificadores. Por ejemplo, 
queremos cambiar el nombre del campo 
"nombre" por "titulo" y redefinirlo como 
"not null", tipeamos:

 alter table libros
  change nombre titulo varchar(40) not null;

-------------------------------------------

Para cambiar el nombre de una tabla llamada 
"amigos" por "contactos" usamos esta sintaxis:

 alter table amigos rename contactos;

La renombración se hace de izquierda a derecha, 
con lo cual, si queremos intercambiar 
los nombres de dos tablas, debemos tipear lo siguiente:

 rename table amigos to auxiliar,
  contactos to amigos,
  auxiliar to contactos;

-------------------------------------------

"inner join" es igual que "join". Con "inner join", 
todos los registros no coincidentes son descartados, 
sólo los coincidentes se muestran en el resultado:

 select nombre,titulo
  from editoriales as e
  inner join libros as l
  on e.codigo=l.codigoeditorial;

--------------------VARIABLES DE USUARIO-----------------------------
Para obtener todos los datos del libro 
podemos emplear una variable para almacenar el precio más alto:

 select @mayorprecio:=max(precio) from libros;

luego mostrar todos los datos de dicho 
libro empleando la variable anterior:

 select * from libros
  where precio=@mayorprecio;

Es decir, guardamos en la variable el precio más alto y luego, 
en otra sentencia, mostramos los datos de todos los libros 
cuyo precio es igual al valor de la variable.

-----------------------INSERT CON VALORES DE OTRA TABLA---------------------------------------
podemos realizar la consulta del código de la 
editorial al momento de la inserción:

 insert into libros (titulo,autor,codigoeditorial,precio)
  select 'Harry Potter y la camara secreta','J.K.Rowling',codigo,45.90
  from editoriales
  where nombre='Emece';

la consulta no devuelve ningún valor, porque buscamos 
el código de una editorial que no existe en la tabla 
"editoriales", aparece un mensaje indicando que no se ingresó ningún registro. 

-----------------------INSERT CON VALORES DE OTRA TABLA JOIN---------------------------------------
podemos lograrlo en un solo paso, realizando el "insert" y el "select" en una misma sentencia:

 insert into cantidadporeditorial
  select e.nombre,count(l.codigoeditorial)
  from editoriales as e
  left join libros as l
  on e.codigo=l.codigoeditorial
  group by e.nombre;
-----------------------UPDATE CON VALORES DE OTRA TABLA JOIN---------------------------------------
  update libros
  join editoriales
  on libros.codigoeditorial=editoriales.codigo
  set libros.editorial=editoriales.nombre;

 update libros as l
  join editoriales as e
  on l.codigoeditorial=e.codigo
  set l.codigoeditorial=9, e.codigo=9
  where e.nombre='Emece';

-----------------------DELETE CON VALORES DE OTRA TABLA JOIN---------------------------------------

 delete libros
  from libros
  join editoriales
  on libros.codigoeditorial=editoriales.codigo
  where editoriales.nombre='Emece';

-----------------------DELETE CON VALORES DE OTRA TABLA JOIN BUSCANDO COINCIDENCIAS---------------------------------------

delete libros
  FROM libros
  left join editoriales
  on libros.codigoeditorial=editoriales.codigo
  where editoriales.codigo is null;

 delete editoriales
  from editoriales
  left join libros
  on libros.codigoeditorial=editoriales.codigo
  where libros.codigo is null;

----------------------DELETE EN CASCADA---------------------------------------

 podemos realizar la eliminación de registros de 
varias tablas (en cascada) empleando "delete" junto 
al nombre de las tablas de las cuales queremos eliminar 
registros y luego del correspondiente "join" colocar 
la condición "where" que afecte a los registros a eliminar.

 delete libros,editoriales
  from libros
  join editoriales
  on libros.codigoeditorial=editoriales.codigo
  where editoriales.nombre='Emece';

----------------------CHEQUEAR Y REPARAR TABLAS (check - repair)-----------------------

Para chequear el estado de una tabla usamos "check table":

 check table libros;
"check table" chequea si una o más tablas tienen errores. 
Esta sentencia devuelve la siguiente información: en 
la columna "Table" muestra el nombre de la tabla; en 
"Op" muestra siempre "check"; en "Msg_type" muestra 
"status", "error", "info" o "warning" y en "Msg_text"
 muestra un mensaje, generalmente es "OK".

Existen distintas opciones de chequeo de una tabla, 
si no se especifica, por defecto es "medium".

Los tipos de chequeo son:

- quick: no controla los enlaces incorrectos de los registros.

- fast: controla únicamente las tablas que no se 
han cerrado en forma correcta.

- changed: únicamente controla las tablas que se 
han cambiado desde el último chequeo o que no se cerraron correctamente.

- medium: controla los registros para verificar 
que los enlaces borrados están bien.

- extended: realiza una búsqueda completa para 
todas las claves de cada registro.

Se pueden combinar las opciones de control, 
por ejemplo, realizamos un chequeo rápido 
de la tabla "libros" y verificamos si se cerró correctamente:

 check table libros fast quick;
Para reparar una tabla corrupta usamos "repair table":

 repair table libros;
"repair table" puede recuperar los datos de una tabla.

Devuelve la siguiente información: en la columna 
"Table" nuestra el nombre de la tabla; en "Op" 
siempre muestra "repair"; en "Msg_type" muestra 
"status", "error", "info" o "warning" y en 
"Msg_text" muestra un mensaje que genealmente es "OK".

----------------------ENCRIPTACION DE DATOS (aes_encrypt - aes_decrypt)-----------------------
Estas dos funciones permiten encriptar y desencriptar datos usando el algoritmo oficial AES que actualmente es el más seguro.

La sintaxis de la función aes_encrypt es:

aes_encrypt("dato a encriptar","clave de encriptación")
La función recibe dos parámetros, el dato a cifrar y la clave que nosotros definimos. Retorna un valor de tipo blob.

Luego en la tabla almacenamos el dato encriptado (blob), si alguien puede acceder a los datos de la tabla no podrá conocer el valor real almacenado debido a que está cifrado.

----------------------Subconsultas (Exists y No Exists)-----------------------
Una subconsulta (subquery) es una sentencia "select" anidada en otra sentencia "select", "insert", "update" o "delete" (o en otra subconsulta).

Las subconsultas se emplean cuando una consulta es muy compleja, entonces se la divide en varios pasos lógicos y se obtiene el resultado con una única instrucción y cuando la consulta depende de los resultados de otra consulta.

En este ejemplo se usa una subconsulta correlacionada con un operador "exists" en la cláusula "where" para devolver una lista de clientes que compraron el artículo "lapiz":

 select cliente,numero
  from facturas as f
  where exists
   (select * from detalles as d
     where f.numero=d.numerofactura
     and d.articulo='lapiz');
Puede obtener el mismo resultado empleando una combinación.

Podemos buscar los clientes que no han adquirido el artículo "lapiz" empleando "if not exists":

 select cliente,numero
  from facturas as f
  where not exists
   (select * from detalles as d
     where f.numero=d.numerofactura
     and d.articulo='lapiz');

----------------------Subconsultas (update - delete - insert)-----------------------

Actualizamos el precio de todos los libros de la editorial "Emece":

 update libros set precio=precio+(precio*0.1)
  where codigoeditorial=
   (select codigo
     from editoriales
     where nombre='Emece');

Eliminamos todos los libros de la editorial "Planeta":

 delete from libros
  where codigoeditorial =
   (select e.codigo
       from editoriales as e
       where nombre='Planeta');

Ingresamos registros en la tabla "aprobados" seleccionando registros de la tabla "alumnos":

 insert into aprobados (documento,nota)
  select (documento,nota)
   from alumnos;

----------------------Vistas-----------------------
video 76