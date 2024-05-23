Vendor y modulo
Requerimientos
1) Crear un nuevo módulo llamado Ntt_Blogs
2) Disponibilizar una página accesible desde la ruta <host>/nttblogs/posts que será
utilizada para visualizar todos los posts que estén activos en la tienda.
Ej: mi.tienda.com/nttblogs/posts
3) Crear las clases necesarias para garantizar las operaciones CRUD sobre las
entidades involucradas.
4) Debe generarse un reporte diario y almacenarse en una tabla secundaria donde se
resuma la cantidad de posteos que fueron creados y actualizados en el día.
Nice to have
● Disponibilizar una API REST que devuelva una lista de Post, la cual pueda ser
filtrable por alguno de sus atributos.
Este servicio deberá ser consultado únicamente por los usuarios del back office que
tengan el rol "Blogger". Si por algún motivo un usuario con un rol diferente al
mencionado intenta consultar el servicio, el mismo deberá mostrar un error.
● Permitir la creacion, edicion y vista en una grilla de los posts en una nueva sección
dentro del admin de magento
● Poder visualizar el detalle de un post desde el front accediendo a la ruta
<host>/nttblogs/posts/view?post_id=<id-post>.
Ej: mi.tienda.com/nttblogs/posts/view?post_id=1
