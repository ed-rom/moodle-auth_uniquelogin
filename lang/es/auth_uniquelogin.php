<?php
$string['pluginname'] = 'Ingreso Único';
$string['auth_uniquelogintitle'] = 'Ingreso Único';
$string['auth_uniquelogerror'] = 'Ya existe una sesión activa, no es posible iniciar nuevamente.';
$string['auth_uniquelogindescription'] = 'Este plugin garantiza que cada usuario solo tenga una sesión activa.<br /><br />Cada vez que un usuario inicia sesión correctamente, todas las demás sesiones que pertenecen a ese usuario se cancelarán.<br><br /><div style ="font-weight: bold;">Nota 1: Para que este complemento funcione, las sesiones de usuario deben almacenarse en la base de datos. Esta configuración se establece en <a href="settings.php?section=sessionhandling">Sesiones.</a></div><br />';
$string['aplly_to_admin'] = 'Aplicar a los Administradores';
$string['configaplly_to_admin'] = 'Aplicar a todos la restricción de ingreso único a los usuarios que tienen el rol de Administrator en todo el contexto del sistema.';
$string['aplly_to_teacher'] = 'Aplicar a los Profesores';
$string['configaplly_to_teacher'] = 'Aplicar a todos la restricción de ingreso único a los usuarios que tienen el rol de Profesor en cualquier curso de Moodle.';
?>
