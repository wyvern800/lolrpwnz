<?php
require_once('../config.php');
$senha = 'newwindow';
$hash = crypt($senha, MINI_SALT . SALT_COST . '$' . BIG_SALT . '$');
echo '<center><b><font size="5">SENHA ENCRIPTADA: </font></b>: '.$hash.'</center>';
