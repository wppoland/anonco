=== Plogins Notice - Announcement Bar for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, announcement bar, notification bar, promo bar, sale banner
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.0.2
Requires Plugins: woocommerce
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Una barra de anuncios descartable para toda la tienda en WooCommerce: mensaje, enlace y colores.

== Description ==

Notice añade una barra de anuncios en la parte superior de tu tienda WooCommerce. Úsala para
promocionar una oferta, un umbral de envío gratis, una fecha límite de envío o cualquier mensaje
para toda la tienda, con un botón de llamada a la acción opcional y tus propios colores.

La barra se renderiza en el servidor en `wp_body_open` e incluye una pequeña
hoja de estilos sin dependencias. El CSS solo se carga cuando la barra está activada y tiene
mensaje, y el script de descarte solo cuando la barra también es descartable, así que una
barra desactivada no añade nada a tus páginas.

= Documentation and links =

* <strong>Documentación</strong> - https://plogins.com/es/plogins-notice/docs/
* <strong>Página del plugin</strong> - https://plogins.com/es/plogins-notice/
* <strong>Código fuente</strong> - https://github.com/wppoland/plogins-notice
* <strong>Informes de errores y peticiones de funciones</strong> - https://github.com/wppoland/plogins-notice/issues


= Features =

* Una sola barra de anuncios para toda la tienda, fijada en la parte superior de cada página.
* Mensaje con una pequeña lista de HTML seguro permitido (<strong>negrita</strong>, *cursiva*, enlaces, saltos de línea).
* Botón de llamada a la acción opcional con su propia URL y opción de nueva pestaña.
* Colores personalizados de fondo, texto y acento con vista previa en directo.
* Descartable, con la elección recordada en el navegador (localStorage, sin cookies, sin datos personales).
* Cambiar el texto del mensaje vuelve a mostrar la barra a todos automáticamente.
* Accesible: región ARIA, botón de cierre manejable con el teclado, estilos de foco visibles, respeta la reducción de movimiento.
* Sin saltos de diseño más allá de la altura propia de la barra; los recursos se cargan solo cuando la barra está activa.
* Listo para traducir (POT incluido) y desinstalación limpia.
* Compatible con HPOS y con los bloques de carrito y pago.

== Installation ==

1. Sube el plugin a `/wp-content/plugins/notice` o instálalo desde Plugins → Añadir nuevo.
2. Actívalo. WooCommerce debe estar activo.
3. Ve a <strong>WooCommerce → Barra de anuncios</strong>, escribe tu mensaje, define los colores y luego activa la barra.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Sí, se necesita WooCommerce activo.

= Where does the bar appear? =

En la parte superior de cada página del front-end, mediante el gancho `wp_body_open` del tema. La mayoría de
temas modernos lo admiten.

= Can shoppers close the bar? =

Sí, cuando «Descartable» está activado. La elección se guarda en el navegador del visitante mediante
localStorage, sin cookies ni datos personales. Puedes definir cuántos días
dura el descarte (0 = para siempre). Al editar el texto del mensaje, la barra vuelve a mostrarse a todos.

= Does it slow down my store? =

No. El CSS y el script de descarte solo se cargan cuando la barra está realmente activa,
y el marcado es HTML sencillo. No hay ningún framework de JavaScript en el front-end.

= Does the bar work on mobile? =

Sí. La barra ocupa el ancho del viewport y el control de descarte sigue accesible en pantallas pequeñas.


= Does this plugin work on WordPress Multisite? =

Sí. Este plugin es compatible con WordPress Multisite. Actívalo para toda la red o en sitios concretos; cada sitio conserva sus propios ajustes y datos.

== Screenshots ==

1. La barra de anuncios en la tienda.
2. La pantalla de ajustes con vista previa en directo.

== External Services ==

Notice no se conecta a ningún servicio externo. Los ajustes de tu barra (mensaje, enlace, colores y opciones de descarte) se guardan en tu propio sitio en la opción `notice_settings`, con el marcador `notice_db_version` para actualizaciones. La elección de descarte vive solo en el navegador de cada visitante mediante localStorage, sin cookies ni datos personales, y nada sale de tu tienda.

== Translations ==

Plogins Notice incluye traducciones al polaco, al alemán y al español para la interfaz del plugin. El dominio de texto es `plogins-notice`, por lo que los paquetes de idioma de WordPress.org también pueden sustituir o ampliar estas traducciones incluidas.

== Changelog ==

= 1.0.2 =
* Se añadieron traducciones incluidas al polaco, al alemán y al español para la interfaz del plugin.

= 1.0.1 =
* Primera versión estable.

= 0.1.4 =
* Renombrado a Plogins Notice for WooCommerce para un nombre de plugin más distintivo.

= 0.1.3 =
* Añade la acción `notice/bar_rendered` después de renderizar cada barra de anuncios activa, para analíticas agregadas de impresiones en extensiones.

= 0.1.3 =
* Acción `notice/bar_rendered` después de imprimir cada barra activa, para ganchos de impresiones PRO.

= 0.1.2 =
* Compatibilidad con varias barras mediante el filtro `notice/bars`; `notice/bar_active` recibe ahora un id de barra. El descarte en el front-end maneja barras apiladas.

= 0.1.1 =
* Añade el filtro `notice/bar_active` para que PRO y el código personalizado puedan restringir la visibilidad de la barra.

= 0.1.0 =
* Lanzamiento inicial: barra de anuncios para toda la tienda con mensaje, enlace CTA, colores y descarte.
