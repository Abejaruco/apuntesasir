
<!-- El tipo de codificación de datos, enctype, se DEBE especificar como a continuación -->
<form enctype="multipart/form-data" action="11_upload.php" method="POST">
    <!-- MAX_FILE_SIZE debe preceder el campo de entrada de archivo -->
    <input type="hidden" name="MAX_FILE_SIZE" value="1000" />
    <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
    <p>Archivo: <input name="archivo" type="file" /></p>
    <p><input type="submit" value="Enviar" /></p>
</form>
