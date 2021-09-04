<?php

ini_set('memory_limit', '-1');
ini_set('max_execution_time', '0');
ini_set('display_errors', '0');


define('CDT_UI_LANGUAGE', 'es');


/* FORMATOS */

//números
define('CYT_DECIMALES', '2');
define('CYT_SEPARADOR_DECIMAL', ',');
define('CYT_SEPARADOR_MILES', '.');

//moneda.
define('CYT_MONEDA_SIMBOLO', '$');
define('CYT_MONEDA_ISO', 'ARS');
define('CYT_MONEDA_NOMBRE', 'Pesos Argentinos');
define('CYT_MONEDA_POSICION_IZQ', 1);





define('CYT_DATE_FORMAT', 'd/m/Y');
define('CYT_DATETIME_FORMAT', 'd/m/y H:i:s');
define('CYT_DATETIME_FORMAT_STRING', 'YmdHis');

define('CYT_EXTENSIONES_PERMITIDAS', 'pdf,doc,docx,rtf,zip');
define('CYT_PATH_PDFS', 'pdfs');
define('CYT_FILE_MAX_SIZE', 4085760);
define('CYT_PATH_PDFS_INTEGRANTES', 'integrantes');





//lista de identificadores a mostrar en tablas auxiliares
define('CYT_DEDDOC_MOSTRADAS', '1,2,3');
define('CYT_CATEGORIA_MOSTRADAS', '6,7,8,9,10');
define('CYT_CARRERAINV_MOSTRADAS', '1,2,3,6,8,9,10,12');
define('CYT_ORGANISMO_MOSTRADAS', '1,2');

?>