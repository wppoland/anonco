=== Plogins Notice - Announcement Bar for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, announcement bar, notification bar, promo bar, sale banner
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.1
Requiere complementos: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Una barra de anuncios descartable en toda la tienda para WooCommerce: mensaje, enlace y colores.

== Description ==

El aviso añade una barra de anuncios en la parte superior de su tienda WooCommerce. Úselo para
promocionar una oferta, un umbral de envío gratuito, una fecha límite de envío o cualquier acción en toda la tienda.
mensaje, con un botón de llamada a la acción opcional y tus propios colores.

La barra se representa en el lado del servidor en `wp_body_open` y se envía una pequeña,
hoja de estilo libre de dependencias. El CSS se carga sólo cuando la barra está habilitada y tiene un
mensaje y el guión de despido solo cuando la barra también se puede descartar, por lo que un
La barra deshabilitada no añade nada a sus páginas.

= Documentation and links =

* <strong>Documentación</strong> - https://plogins.com/es/plogins-notice/docs/
* <strong>Página de complementos</strong> - https://plogins.com/es/plogins-notice/
* <strong>Código fuente</strong> - https://github.com/wppoland/plogins-notice
* <strong>Informes de errores y solicitudes de funciones</strong> - https://github.com/wppoland/plogins-notice/issues


= Features =

* Una única barra de anuncios para toda la tienda fijada en la parte superior de cada página.
* Mensaje con una pequeña lista de HTML permitidos seguros (<strong>negrita</strong>, *cursiva*, enlaces, saltos de línea).
* Botón de llamada a la acción opcional con su propia URL y opción de nueva pestaña.
* Colores de fondo, texto y acento personalizados con una vista previa en vivo.
* Descartable con la elección recordada en el navegador (almacenamiento local, sin cookies, sin datos personales).
* Cambiar el texto del mensaje vuelve a mostrar la barra a todos automáticamente.
* Accesible: región ARIA, botón de cierre operable por teclado, estilos de enfoque visible, respeta el movimiento reducido.
* No hay cambios de diseño más allá de la propia altura de la barra; Los activos se cargan solo cuando la barra está activa.
* Traducción lista (POT incluida) y desinstalación limpia.
* Compatible con HPOS y bloques de carrito/pago.

== Installation ==

1. Cargue el complemento en `/wp-content/plugins/notice`, o instálelo a través de Complementos → Añadir nuevo.
2. Actívalo. WooCommerce debe estar activo.
3. Vaya a <strong>WooCommerce → Barra de anuncios</strong>, escriba su mensaje, configure los colores y luego activa la barra.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Sí.

= Where does the bar appear? =

En la parte superior de cada página de inicio, a través del gancho `wp_body_open` del tema. la mayoría
Los temas modernos lo apoyan.

= Can shoppers close the bar? =

Sí, cuando "Descartable" está activado. La elección se almacena en el navegador del visitante utilizando
Almacenamiento local, sin cookies ni datos personales. Puede establecer cuántos días
el despido dura (0 = para siempre). Al editar el texto del mensaje, se vuelve a mostrar la barra a todos.

= Does it slow down my store? =

No. El CSS y el script de despido solo se ponen en cola cuando la barra está realmente activa.
y el marcado es HTML simple. No existe un marco de JavaScript front-end.

= Does the bar work on mobile? =

Sí. La barra abarca todo el ancho de la ventana gráfica y el control de descartar permanece accesible en pantallas pequeñas.


= Does this plugin work on WordPress Multisite? =

Sí. Este complemento es compatible con WordPress Multisite. Activarlo en red o activarlo en sitios individuales; Cada sitio mantiene su propia configuración y datos.

== Screenshots ==

1. La barra de anuncios en el escaparate de una tienda.
2. La pantalla de configuración con una vista previa en vivo.

== External Services ==

El aviso no se conecta a ningún servicio externo. La configuración de su barra (mensaje, enlace, colores y opciones de cierre) se guardan en tu propio sitio en la opción `notice_settings`, con un marcador `notice_db_version` para actualizaciones. La opción de despido reside únicamente en el navegador de cada visitante a través de localStorage, sin cookies, sin datos personales y nada sale de su tienda.

== Changelog ==

= 1.0.1 =
* Primera versión estable.

= 0.1.4 =
* Renombrado como Aviso de Plogins para WooCommerce para obtener un nombre de complemento más distintivo.

= 0.1.3 =
* Añade la acción `notice/bar_rendered` después de que se represente cada barra de anuncio activa, para análisis de impresiones agregadas en extensiones.

= 0.1.3 =
* Acción `notice/bar_rendered` después de imprimir cada barra activa, para ganchos de impresión PRO.

= 0.1.2 =
* Compatibilidad con barras múltiples mediante el filtro "aviso/barras"; `notice/bar_active` ahora recibe una identificación de barra. La salida frontal maneja barras apiladas.

= 0.1.1 =
* Añade el filtro `notice/bar_active` para que PRO y el código personalizado puedan reducir la visibilidad de la barra.

= 0.1.0 =
* Lanzamiento inicial: barra de anuncios en toda la tienda con mensaje, enlace CTA, colores y despido.
