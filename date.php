<?php
// Establece la zona horaria a la de tu ubicación
date_default_timezone_set('America/Costa_Rica');

// Usa la función date() para obtener y formatear la fecha y hora
$fecha_actual = date('d/m/Y H:i:s');

// Imprime el resultado en la página web
echo "La fecha y hora actuales son: " . $fecha_actual;
?>
