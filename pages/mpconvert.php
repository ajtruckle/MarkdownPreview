<?php

require_lib( 'erusev' . DIRECTORY_SEPARATOR . 'parsedown' . DIRECTORY_SEPARATOR . 'Parsedown.php' );


$Parsedown = new Parsedown();
echo $Parsedown->text($_REQUEST['markdown']);
