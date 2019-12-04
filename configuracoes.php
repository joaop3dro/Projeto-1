<?php
//PHP_SELF equivale a "página atual" o js por exemplo usa o "this"
$informacoesServidor = array('PHP_SELF',
'SERVER_ADDR',
'SERVER_NAME',
'SERVER_SOFTWARE',
'SERVER_PROTOCOL',
'DOCUMENT_ROOT',
'HTTP_HOST',
'HTTP_REFERER',
'HTTP_USER_AGENT',
'REMOTE_ADDR ',
'SCRIPT_FILENAME',
'SCRIPT_NAME',
'REQUEST_URI',
);
//isset verifica se a variavel foi definida
//unset remove a variavel
echo '<table cellpadding="10">' ;
foreach ($informacoesServidor as $arg) {
    if (isset($_SERVER[$arg])) {
        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
    }
    else {
        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
    }
}
echo '</table>' ;
?>