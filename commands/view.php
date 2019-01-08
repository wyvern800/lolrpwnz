<?php
require_once('functions.php');
restrict_and_redirect_to('login/index.php');
view($_GET['id']);
?>
    <title><?php echo WEBSITE_NAME?> - Comando: <?php echo $command['id'];?></title>
<?php include(HEADER_TEMPLATE); ?>

    <h2>Comando <?php echo $command['id']; ?></h2>
    <hr>

<?php if (!empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

    <dl class="dl-horizontal">
        <dt>Comando</dt>
        <dd>!<b><?php echo strtoupper($command['commandname']); ?></b>
        </dd>

        <dt>Ação:</dt>
        <dd><?php echo $command['action']; ?></dd>

        <dt>Categoria:</dt>
        <dd><?php echo $command['category']; ?></dd>

        <dt>Cooldown:</dt>
        <dd><?php echo $command['cooldown']; ?></dd>

        <dt>Preço:</dt>
        <dd><?php echo $command['price']; ?></dd>
    </dl>

    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="edit.php?id=<?php echo $command['id']; ?>" class="btn btn-primary">Editar</a>
            <a href="index.php" class="btn btn-default">Voltar</a>
        </div>
    </div>

<?php include(FOOTER_TEMPLATE); ?>