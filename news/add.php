<?php
require_once('functions.php');
restrict_and_redirect_to('login/index.php');
add();
$today =
    date_create('now', new DateTimeZone('America/Sao_Paulo'));
?>

<?php include(HEADER_TEMPLATE); ?>

    <h2>Nova Categoria</h2>

    <form action="add.php" method="post">
        <!-- area de campos do form -->
        <hr />
        <div class="row">
           <div class="form-group col-md-2">
                <label for="campo2">Nome da Categoria</label>
                <input type="text" class="form-control" name="category['categoryname']">
            </div>

        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Adicionar</button>
                <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>

<?php include(FOOTER_TEMPLATE); ?>