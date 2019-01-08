<?php
require_once('functions.php');
restrict_and_redirect_to('login/index.php');
add();
$today =
    date_create('now', new DateTimeZone('America/Sao_Paulo'));
?>

<?php include(HEADER_TEMPLATE); ?>

    <h2>Novo Comando</h2>

    <form action="add.php" method="post">
        <!-- area de campos do form -->
        <hr />
        <div class="row">
           <div class="form-group col-md-2">
                <label for="campo2">Nome do Comando</label>
                <input type="text" class="form-control" name="command['commandname']" placeholder="!comando">
            </div>

            <div class="form-group col-md-2">
                <label for="campo3">Ação</label>
                <input type="text" class="form-control" name="command['action']" placeholder="Qual a ação do comando">
            </div>

            <!--<div class="form-group col-md-2">
                <label for="campo2">Categoria</label>
                <input type="text" class="form-control" name="command['category']" placeholder="Geral" value="Geral">
            </div>-->

            <div class="form-group col-md-2">
                <label for="campo2">Categoria</label>  <a href=<?php echo BASEURL."category/add.php" ?>><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
                <?php select_category(); ?>
            </div>

            <div class="form-group col-md-3">
                <label for="campo1">Exemplo</label>
                <input type="text" class="form-control" name="command['example']" placeholder="Deixe em branco se não houver...">
            </div>

            <div class="form-group col-md-3">
                <label for="campo1">Cooldown</label>
                <input type="number" class="form-control" name="command['cooldown']" value="0">
            </div>

            <div class="form-group col-md-7">
                <label for="campo4">Preço</label>
                <input type="number" class="form-control" id ="price" name="command['price']" value="0">
            </div>

            <div class="form-group col-md-2">
                <label for="campo10">Data de Cria&ccedil;&atilde;o</label>
                <input type="text" class="form-control" name="command['created']" placeholder="<?php echo $today->format("Y-m-d H:i:s") ?>" disabled>
            </div>

            <div class="form-group col-md-2">
                <label for="campo10">Data de Modifica&ccedil;&atilde;o</label>
                <input type="text" class="form-control" name="command['modified']" placeholder="<?php echo $today->format("Y-m-d H:i:s") ?>" disabled>
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