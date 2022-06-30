<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

// valida se a variavel post txtNome foi enviada
if( isset( $_POST['txtNome'] ) ){
    $nome = strtoupper( $_POST['txtNome'] );
    echo '$nome";
}
?>
<h1>Contato</h1>
<form action="./contato.php" method="post">
    <label for="txtNome">Nome Completo</label>
    <input type="text" name="txtNome" id="txtNome" required>
    <input type="submit" value="Cadastrar">
</form>


<?php
// include do footer
include_once './includes/_footer.php';
?>