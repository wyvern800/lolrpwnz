<?php
require_once('functions.php');
restrict_and_redirect_to('login/index.php');
edit();
?>
    <title><?php echo WEBSITE_NAME?> - Atualizar Comando <?php echo $command['id']; ?></title>
<?php include(HEADER_TEMPLATE); ?>

    <h2>Atualizar Comando</h2>

    <form action="edit.php?id=<?php echo $command['id']; ?>" method="post">
        <hr />
        <div class="row">
            <div class="form-group col-md-3">
                <label for="campo2">Comando</label>
                <input type="text" class="form-control" name="command['commandname']" value="<?php echo $command['commandname']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="campo3">Ação do Comando</label>
                <input type="text" class="form-control" name="command['action']" value="<?php echo $command['action']; ?>">
            </div>

            <div class="form-group col-md-7">
                <label for="campo1">Categoria</label>
                <!--<input type="text" class="form-control" name="command['category']" value="<?php echo $command['category']; ?>"> -->
                <?php select_category() ?>
            </div>

            <div class="form-group col-md-7">
                <label for="campo1">Exemplo</label>
                <input type="text" class="form-control" name="command['example']" value="<?php echo $command['example']; ?>">
            </div>

            <div class="form-group col-md-7">
                <label for="campo1">Cooldown</label>
                <input type="text" class="form-control" name="command['cooldown']" value="<?php echo $command['cooldown']; ?>">
            </div>

            <div class="form-group col-md-7">
                <label for="campo1">Preço</label>
                <input type="text" class="form-control" name="command['price']" value="<?php echo $command['price']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="campo10">Data de Cadastro</label>
                <input type="text" class="form-control" name="command['created']" disabled placeholder="<?php echo $command['created']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="campo10">Data de Modificação</label>
                <input type="text" class="form-control" name="command['modified']" disabled placeholder="<?php echo $command['modified']; ?>">
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