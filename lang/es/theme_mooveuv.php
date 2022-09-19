<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * * Lang strings 'es'.
 *
 * @package    theme_mooveuv
 * @since      Moodle 4.0
 * @author     Iader E. García Gómez <iadergg@gmail.com>
 * @copyright  2022 Área de Nuevas Tecnologías - DINTEV - Universidad del Valle <desarrollo.ant@correounivalle.edu.co>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Moove UV';
$string['configtitle'] = 'Moove UV';
$string['choosereadme'] = 'Moove UV es un tema personalizado y creado para el Campus Virtual de la Universidad del Valle. Es un tema hijo basado en su tema padre Moove.';

$string['currentinparentheses'] = '(current)';
$string['region-side-pre'] = 'Right';
$string['prev_section'] = 'Previous section';
$string['next_section'] = 'Next section';
$string['themedevelopedby'] = 'This theme was developed by';
$string['access'] = 'Access';
$string['prev_activity'] = 'Previous activity';
$string['next_activity'] = 'Next activity';
$string['donthaveanaccount'] = 'Don\'t have an account?';
$string['signinwith'] = 'Sign in with';

// General settings tab.
$string['generalsettings'] = 'General';
$string['logo'] = 'Logo';
$string['logodesc'] = 'Logo dispuesto en el encabezado';
$string['favicon'] = 'Favicon personalizado';
$string['favicondesc'] = 'Cargue su propio favicon. Este debería ser un archivo .ico';
$string['preset'] = 'Preajuste del tema';
$string['preset_desc'] = 'Elija un preajuste para cambiar ampliamente el aspecto del tema.';
$string['presetfiles'] = 'Archivos adicionales preestablecidos del tema';
$string['presetfiles_desc'] = 'Los archivos preestablecidos se pueden usar para alterar drásticamente la apariencia del tema. Ver <a href="https://docs.moodle.org/dev/Boost_Presets">Boost presets</a> para obtener información sobre crear o compartir tus propios archivos preestablecidos.';
$string['loginbgimg'] = 'Fondo de la página de inicio de sesión';
$string['loginbgimg_desc'] = 'Cargue su imagen de fondo personalizado para la página de inicio de sesión.';
$string['brandcolor'] = 'Color de la marca';
$string['brandcolor_desc'] = 'Color principal.';
$string['secondarymenucolor'] = 'Color del menú secundario';
$string['secondarymenucolor_desc'] = 'Color de fondo del menú secundario';
$string['navbarbg'] = 'Navbar color';
$string['navbarbg_desc'] = 'The left navbar color';
$string['navbarbghover'] = 'Navbar hover color';
$string['navbarbghover_desc'] = 'The left navbar hover color';
$string['fontsite'] = 'Site font';
$string['fontsite_desc'] = 'Default font site. You can try out the fonts on <a href="https://fonts.google.com">Google Fonts site</a>.';
$string['enablecourseindex'] = 'Enable course index';
$string['enablecourseindex_desc'] = 'You can show/hide course index navigation';

// Advanced settings tab.
$string['advancedsettings'] = 'Avanzado';
$string['rawscsspre'] = 'SCSS inicial sin procesar';
$string['rawscsspre_desc'] = 'En este campo puedes proveer codigo SCSS de inicialización, será inyectado antes de todo lo demás. La mayoría del tiempo usarás esta configuración para definir variables.';
$string['rawscss'] = 'SCSS sin procesar';
$string['rawscss_desc'] = 'Usa este campo para proveer código SCSS o CSS que será inyectado al final de la hoja de estilo.';
$string['googleanalytics'] = 'Código Google Analytics V4';
$string['googleanalyticsdesc'] = 'Por favor ingresa tu código de Google Analytics V4 para habilitar análisis en tu sitio web. El formato del código debería ser [G-XXXXXXXXXX]';

// Frontpage settings tab.
$string['frontpagesettings'] = 'Portada';
$string['displaymarketingboxes'] = 'Show front page marketing boxes';
$string['displaymarketingboxesdesc'] = 'If you want to see the boxes, select yes <strong>then click SAVE</strong> to load the input fields.';
$string['marketingsectionheading'] = 'Marketing section heading title';
$string['marketingsectioncontent'] = 'Marketing section content';
$string['marketingicon'] = 'Marketing Icon {$a}';
$string['marketingheading'] = 'Marketing Heading {$a}';
$string['marketingcontent'] = 'Marketing Content {$a}';

$string['disableteacherspic'] = 'Deshabilita la imagen de profesores';
$string['disableteacherspicdesc'] = 'Esta configuración oculta las imágenes de profesores de las tarjetas del curso.';

$string['sliderfrontpageloggedin'] = 'Show slideshow in frontpage after login?';
$string['sliderfrontpageloggedindesc'] = 'If enabled, the slideshow will be showed in the frontpage page replacing the header image.';
$string['slidercount'] = 'Contador de Slider';
$string['slidercountdesc'] = 'Selecciona cuantos slides quieres agregar <strong>luego click en GUARDAR</strong> para cargar los campos de entrada.';
$string['sliderimage'] = 'Imagen del Slider';
$string['sliderimagedesc'] = 'Agrega una imagen para tu slide. El tamaño recomendado es 1500px x 540px o mayor.';

$string['customer_service_heading'] = 'Horario de atención personalizada';
$string['customer_service_heading_desc'] = 'Escriba los horarios para atención al público.';
$string['office_hours_per_day'] = 'Horario {$a}';
$string['office_hours_per_day_desc'] = 'Horario de atención del {$a}';
$string['quickhelp_heading'] = 'Ayudas rápidas ';
$string['quickhelp_heading_desc'] = 'Enlaces a ayudas rápidas para el uso del Campus Virtual.';
$string['help_counter'] = 'Contador de ayudas rápidas';
$string['help_counter_desc'] = 'Seleccione la cantidad de ayudas rápidas a enlazar en la página principal.';
$string['name_quick_help'] = 'Nombre de la ayuda rápida {$a}';
$string['name_quick_help_desc'] = 'Ingrese el nombre de la ayuda rápida {$a}';
$string['default_name_quick_help'] = 'Nombre de la ayuda rápida {$a}';
$string['url_quick_help'] = 'URL de la ayuda rápida {$a}';
$string['url_quick_help_desc'] = 'Ingrese la URL de la ayuda rápida {$a}';
$string['default_url_quick_help'] = '#';
$string['topics_of_interest_heading'] = 'Artículos de interés';
$string['topics_of_interest_heading_desc'] = 'Enlaces a artículos de interés sobre la DINTEV y el Campus Virtual.';
$string['topics_of_interest_counter'] = 'Contador de artículos de interés';
$string['topics_of_interest_counter_desc'] = 'Seleccione la cantidad de artículos de interés a enlazar en la página principal.';
$string['name_topic_of_interest'] = 'Nombre del artículo de interés {$a}';
$string['name_topic_of_interest_desc'] = 'Ingrese el nombre del artículo de interes {$a}';
$string['default_name_topic_of_interest'] = 'Nombre del artículo de interés {$a}';
$string['url_topic_of_interest'] = 'URL del artículo de interés {$a}';
$string['url_topic_of_interest_desc'] = 'Ingrese la URL del artículo de interés {$a}';
$string['default_url_topic_of_interest'] = '#';

// Footer settings tab.
$string['footersettings'] = 'Pie de página';
$string['website'] = 'URL del sitio web';
$string['websitedesc'] = 'Sitio web de la compañía principal';
$string['mobile'] = 'Celular';
$string['mobiledesc'] = 'Ingresar número de celular';
$string['mail'] = 'E-Mail';
$string['maildesc'] = 'Ingresa el E-Mail';
$string['facebook'] = 'URL de Facebook';
$string['facebookdesc'] = 'Ingresa el URL de tu Facebook. (i.e http://www.facebook.com/moodlehq)';
$string['twitter'] = 'URL de Twitter';
$string['twitterdesc'] = 'Ingresa el URL de tu twitter. (i.e http://www.twitter.com/moodlehq)';
$string['linkedin'] = 'URL Linkedin';
$string['linkedindesc'] = 'Ingresa el URL de tu Linkedin. (i.e http://www.linkedin.com/moodlehq)';
$string['youtube'] = 'URL de Youtube';
$string['youtubedesc'] = 'Ingresa el URL de tu Youtube. (i.e https://www.youtube.com/user/moodlehq)';
$string['instagram'] = 'URL de Instagram';
$string['instagramdesc'] = 'Ingresa el URL de tu Instagram. (i.e https://www.instagram.com/moodlehq)';
$string['whatsapp'] = 'Número de Whatsapp';
$string['whatsappdesc'] = 'Ingresa tu número de whatsapp de contacto.';
$string['telegram'] = 'Telegram';
$string['telegramdesc'] = 'Ingresa tu contacto de Telegram o link del grupo.';
$string['contactus'] = 'Contact us';
$string['followus'] = 'Follow us';

// Frontpage.
$string['aboutme'] = 'About me';
$string['personalinformation'] = 'Personal information';
$string['addcontact'] = 'Add contact';
$string['removecontact'] = 'Remove contact';
$string['attention_suport_title'] = 'Atención y soporte';
$string['personalized_attention_schedule'] = 'Horarios de atención personalizado';
$string['no_attention'] = 'No hay horario de atención.';
$string['quick_help_title'] = 'Ayudas rápidas';
$string['topics_of_interest_title'] = 'Artículos de interés';

// Theme settings.
$string['themesettings:accessibility'] = 'Accessibility';
$string['themesettings:fonttype'] = 'Font type';
$string['themesettings:defaultfont'] = 'Default font';
$string['themesettings:dyslexicfont'] = 'Dyslexic font';
$string['themesettings:enableaccessibilitytoolbar'] = 'Enable accessibility toolbar';
$string['themesettingg:successfullysaved'] = 'Accessibility settings successfully saved';

// Accessibility features.
$string['accessibility:fontsize'] = 'Font size';
$string['accessibility:decreasefont'] = 'Decrease font size';
$string['accessibility:resetfont'] = 'Reset font size';
$string['accessibility:increasefont'] = 'Increase font size';
$string['accessibility:sitecolor'] = 'Site color';
$string['accessibility:resetsitecolor'] = 'Reset site color';
$string['accessibility:sitecolor2'] = 'Low contrast 1';
$string['accessibility:sitecolor3'] = 'Low contrast 2';
$string['accessibility:sitecolor4'] = 'High contrast';

// Data privacy.
$string['privacy:metadata:preference:accessibilitystyles_fontsizeclass'] = 'The user\'s preference for font size.';
$string['privacy:metadata:preference:accessibilitystyles_sitecolorclass'] = 'The user\'s preference for site color.';
$string['privacy:metadata:preference:thememoovesettings_fonttype'] = 'The user\'s preference for font type.';
$string['privacy:metadata:preference:thememoovesettings_enableaccessibilitytoolbar'] = 'The user\'s preference for enable the accessibility toolbar.';

$string['privacy:accessibilitystyles_fontsizeclass'] = 'The current preference for the font size is: {$a}.';
$string['privacy:accessibilitystyles_sitecolorclass'] = 'The current preference for the site color is: {$a}.';
$string['privacy:thememoovesettings_fonttype'] = 'The current preference for the font type is: {$a}.';
$string['privacy:thememoovesettings_enableaccessibilitytoolbar'] = 'The current preference for enable accessibility toolbar is to show it.';

// Days of the week.
$string['monday'] = 'Lunes';
$string['tuesday'] = 'Martes';
$string['wednesday'] = 'Miércoles';
$string['thursday'] = 'Jueves';
$string['friday'] = 'Viernes';
