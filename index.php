<?php $salida = 'contenido/index.php';
 ob_start();
include $salida;
 $output = ob_get_contents();
            ob_end_clean();
            echo trim($output);