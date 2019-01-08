<?php
require_once('functions.php');
restrict_and_redirect_to('login/index.php');
edit();
?>

<?php include(HEADER_TEMPLATE); ?>

    <h2>Atualizar Categoria</h2>

    <form action="edit.php?id=<?php echo $category['id']; ?>" method="post">
        <hr />
        <div class="row">
            <div class="form-group col-md-3">
                <label for="campo2">Nome da Categoria</label>
                <input type="text" class="form-control" name="category['categoryname']" value="<?php echo $category['categoryname']; ?>">
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