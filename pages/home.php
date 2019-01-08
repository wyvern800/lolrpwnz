<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>
    <title><?php echo WEBSITE_NAME?> - Home</title>
<?php include(HEADER_TEMPLATE); ?>

<?php $db = open_database(); ?>

    <h1><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</h1>
    <hr />

<?php if ($db) : ?>

    <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-2">
            <a href="users/add.php" class="btn btn-primary">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <i class="fa fa-plus fa-5x"></i>
                    </div>
                    <div class="col-xs-12 text-center">
                        <p>Novo Usuário</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xs-6 col-sm-3 col-md-2">
            <a href="users" class="btn btn-default">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-12 text-center">
                        <p>Usuários</p>
                    </div>
                </div>
            </a>
        </div>
    </div>



<?php else : ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>