<h1> Aquí recibo el formulario </h1>

<?php
echo "NOMBRE = ".$_REQUEST['Nombre']."<br>";
echo "APELLIDOS = ".$_REQUEST['Apellidos']."<br>";
echo "EMAIL = ".$_REQUEST['Email']."<br>";
echo "CONTRASEÑA = ".$_REQUEST['Pwd']."<br>";
?>
<pre>
<?php

print_r($_REQUEST);

?>
<pre>
