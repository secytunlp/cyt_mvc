<?php

/**
 * se definen los mensajes del sistema en espa�ol.
 * 
 * @author modelBuilder
 * 
 */
define('CYT_MSG_ASIGNAR', 'Asignar', true);
define('CYT_MSG_ASIGNAR_AVISO', 'IMPORTANTE!!! Para que tenga efecto la carga se debe presionar "Asignar" antes de "Guardar"', true);

define('CYT_MSG_FORMATO_INVALIDO', 'Formato inválido de ', true);
define('CYT_MSG_FILE_UPLOAD_ERROR', 'Error al subir el ', true);
define('CYT_MSG_FILE_UPLOAD_EXITO', 'Archivo subido: ', true);
define('CYT_MSG_FILE_MAX_SIZE', ' es demasiado grande', true);
define('CYT_MSG_CAMPOS_REQUERIDOS', 'Faltan completar campos requeridos en la pestaña', true);
define('CYT_MSG_CAMPOS_INTEGRANTE_REQUERIDOS', 'Faltan completar campos requeridos en el miembro con identificador', true);

define('CDT_SECURE_MSG_CDTUSER_TITLE_UNBLOCK', 'Desbloquear', true);
define('CDT_SECURE_MSG_CONFIRM_UNBLOCK_QUESTION', 'Confirma desbloquear el ítem?', true);
define('CDT_SECURE_MSG_CONFIRM_UNBLOCK_TITLE', 'Confirmación', true);

//login web.
define( "CDT_SECURE_MSG_INGRESE_CUIL", "Ingrese C.U.I.L.", true);

//solicitar clave.
define( "CDT_SECURE_MSG_FORGOT_PASSWORD", "Si olvidó su password y quiere cambiarla, ingrese su CUIL o e-mail y le enviaremos una nueva");
define( "CDT_SECURE_LBL_FORGOT_PASSWORD_EMAIL", "CUIL o e-mail");
define( "CDT_SECURE_MSG_FORGOT_PASSWORD_FILL_EMAIL", "CUIL o e-mail requerido");
define( "CDT_SECURE_MSG_FORGOT_PASSWORD_NEW_PASSWORD_SENT", "Le enviamos una nueva password a su e-mail");

//* REGISTRACION */
define( "CDT_SECURE_MSG_USERNAME_REQUIRED", 'CUIL requerido');

define( "CDT_SECURE_MSG_REGISTRATION_USERNAME_DUPLICATED",  'El CUIL ya fue registrado');

define('CYT_SECURE_MSG_REGISTRATION_DIRECTOR_CONTROL_ERROR', 'El CUIL no se encuentra registrado como Docente Investigador en nuestras bases', true);
define('CYT_SECURE_MSG_REGISTRATION_DIRECTOR_CONTROL_1', 'Si usted es ', true);
define('CYT_SECURE_MSG_REGISTRATION_DIRECTOR_CONTROL_2', ' continue con el registro', true);
define("CYT_SECURE_MSG_ACTIVATION_DIRECTOR_ERROR",  "Su CUIL no se encuentra registrado como Docente Investigador en nuestras bases", true );
define("CYT_SECURE_MSG_ACTIVATION_DIRECTOR_ERROR_CATEGORIA",  "No tiene Categoría de investigación suficiente para ser director", true );



define( "CDT_SECURE_MSG_REGISTRATION_SIGNUP_SUCCESS", 'Gracias por registrarse! Recibir&aacute; un e-mail con instrucciones para activar su cuenta.');
define( "CDT_SECURE_MSG_ACTIVATE_REGISTRATION_SUCCESS", "Su cuenta ha sido activada!.");


//PDF
define('CYT_MSG_UNIDAD_PDF_PRELIMINAR_TEXT', 'VISTA PRELIMINAR');
define('CYT_MSG_UNIDAD_ARCHIVO_NOMBRE', 'SOLICITUD_', true);
define('CYT_MSG_EVALUACION_ARCHIVO_NOMBRE', 'Evaluacion_', true);

/* LUGARES DE TRABAJO */

define('CYT_MSG_LUGAR_TRABAJO_TITLE_LIST', 'Lugares de trabajo', true);

include ('messages_labels_es.php');
?>
