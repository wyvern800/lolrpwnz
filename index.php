<?php require_once 'config.php'; ?>
<?php restrict_and_redirect_to('login/index.php'); ?>
<?php require_once DBAPI; ?>
    <title><?php echo WEBSITE_NAME?> - Dashboard</title>
<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

    <h1><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard</h1>
    <hr />

<?php if ($db) : ?>
    <div class="panel panel-default">
        <div class="panel-heading">Olá, <strong><?php echo isset($_SESSION) ? $_SESSION['UserName'] : 'Null'?></strong>. Seja muito bem vindo ao Dashboard. - Escolha o que quer deseja fazer agora!</div>
        <div class="panel-body">
            <div class="col-xs-6 col-sm-3 col-md-2">
                <a href="users" class="btn btn-default">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-11 text-center">
                            <p>Usuários</p>
                        </div>
                    </div>
                </a>
            </div>

                <div class="col-xs-6 col-sm-3 col-md-2">
                <a href="commands" class="btn btn-default">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <i class="glyphicon glyphicon-console fa-5x"></i>
                        </div>
                        <div class="col-xs-12 text-center">
                            <p>Comandos</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-3 col-md-2">
                <a href="news" class="btn btn-default">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <i class="glyphicon glyphicon-font fa-5x"></i>
                        </div>
                        <div class="col-xs-12 text-center">
                            <p>Notícias</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-3 col-md-2">
                <a href="category" class="btn btn-default">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <i class="glyphicon glyphicon-tag fa-2x"></i>
                        </div>
                        <div class="col-xs-12 text-center">
                            <p><br size="2%">Categorias</br>de Comandos</font></p>
                        </div>
                    </div>
                </a>
            </div>

            </div>

        </div>
    </div>





<?php else : ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>