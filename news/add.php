<?php
require_once('functions.php');
restrict_and_redirect_to('login/index.php');
add();
$today =
    date_create('now', new DateTimeZone('America/Sao_Paulo'));
?>

<?php include(HEADER_TEMPLATE); ?>

    <h2>Nova Notícia</h2>

    <form action="add.php" method="post">
        <!-- area de campos do form -->
        <hr />
        <div class="row">
            <div class="form-group col-md-2">
                <label for="campo2">Título</label>
                <input type="text" class="form-control" name="new['title']">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-2">
                <label for="campo3">Descrição</label>
                <textarea class="form-control" rows="5" cols="50" name="new['description']" id="new['description']"></textarea>
            </div>
        </div>
        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Adicionar</button>
                <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>

<?php include(FOOTER_TEMPLATE); ?>