<?php
require_once('functions.php');
restrict_and_redirect_to('login/index.php');
edit();
?>
    <title><?php echo WEBSITE_NAME?> - Atualizar Notícia <?php echo $new['id'];?></title>
<?php include(HEADER_TEMPLATE); ?>

    <h2>Atualizar Notícia</h2>

    <form action="edit.php?id=<?php echo $new['id']; ?>" method="post">
        <hr />
        <div class="row">
            <div class="form-group col-md-3">
                <label for="campo2">Nome da Categoria</label>
                <input type="text" class="form-control" name="new['title']" value="<?php echo $new['title']; ?>">
            </div>

        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="campo2">Descrição</label>
                <textarea class="form-control" rows="5" cols="50" id ="new['description']" name="new['description']" value="<?php echo processText($new['description']); ?>"></textarea>
            </div>

        </div>
        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>

<?php include(FOOTER_TEMPLATE); ?>