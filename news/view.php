<?php
require_once('functions.php');
restrict_and_redirect_to('login/index.php');
view($_GET['id']);
?>
    <title><?php echo WEBSITE_NAME?> - Notícia: <?php echo $new['id']; ?></title>
<?php include(HEADER_TEMPLATE); ?>

    <h2>Título <?php echo $new['id']; ?></h2>
    <hr>

<?php if (!empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

    <dl class="dl-horizontal">
        <dt>Título</dt>
        <dd><b><?php echo $new['title']; ?></b>
        </dd>

        <dt>Descrição</dt>
        <dd><?php echo $new['description']; ?>
        </dd>

        <dt>Status:</dt>
        <dd><?php echo $new['status'] = 1 ? 'Ativo' : 'Inativo'; ?></dd>
    </dl>

    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="edit.php?id=<?php echo $new['id']; ?>" class="btn btn-primary">Editar</a>
            <a href="index.php" class="btn btn-default">Voltar</a>
        </div>
    </div>

<?php include(FOOTER_TEMPLATE); ?>