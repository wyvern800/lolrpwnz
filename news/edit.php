<?php
require_once('functions.php');
restrict_and_redirect_to('login/index.php');
edit();
?>

<?php include(HEADER_TEMPLATE); ?>

    <h2>Atualizar Notícia</h2>

    <form action="edit.php?id=<?php echo $new['id']; ?>" method="post">
        <hr />
        <div class="row">
            <div class="form-group col-md-3">
                <label for="campo2">Título</label>
                <input type="text" class="form-control" name="news['title']" value="<?php echo $new['title']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="campo2">Descrição</label>
                <input type="text" class="form-control" name="news['description']" value="<?php echo $new['description']; ?>">
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