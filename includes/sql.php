<?php
    define('HOST', 'localhost');
    define('USUARIO_HOST', 'ejercicio13dk');
    define('PASSWORD_USUARIO_HOST', 'ejercicio13dk');
    define('BBDD', 'ejercicio13dk');

    function conectar(){
        global $con;
        $con = mysql_pconnect(HOST, USUARIO_HOST, PASSWORD_USUARIO_HOST)

                or die("
                       <table>
                             <tr>
                                <td colspan=2><font face='verdana'
size=2><strong>No se ha podido realizar la conexi�n con el host.</strong>
</font></td>
                             </tr>
                       </table>
                ");

        $db = mysql_select_db(BBDD, $con)
                or die("
                       <table>
                             <tr>
                                <td colspan=2><font face='verdana'
size=2><strong>No se ha podido realizar la conexi�n con la base de datos.</strong>
</font></td>
                             </tr>
                       </table>
                ");
    }

?>
