<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>
    <title><?php echo WEBSITE_NAME?> - Home</title>
<?php include(HEADER_TEMPLATE); ?>

<?php $db = open_database(); ?>

    <h1><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</h1>
    <hr />

<?php if ($db) : ?>

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Seja bem vindo &agrave minha p&aacutegina!</h3>
        </div>
        <div class="panel-body">
            <p>Esse site foi criado para facilitar a vida dos meus viewers e tamb&eacutem a minha.
            Sou webdesigner nas horas vagas e streamer por amor, e esse foi o motivo de eu faz&ecirc-la.
            Aqui v&atildeo algumas fotos dos meus melhores momentos nas streams.
            Sim, isso &eacute s&oacute para ter um conte&uacutedo at&eacute eu terminar a p&aacutegina haha! ♥ </p>
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                            <img src="../assets/live10h.png" alt="Live 10 horas comemoração 2k" style="width:100%">
                            <div class="caption">
                                <p>Primeira live de 10 horas do canal! pelos 2000 seguidores.</p>
                            </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                            <img src="../assets/live14h.png" alt="Live 14 horas" style="width:100%">
                            <div class="caption">
                                <p>Live de 14 horas, satisfa&ccedil&atildeo, foram muitos viewers!</p>
                            </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                            <img src="../assets/overlay.png" alt="Overlay nova do canal" style="width:100%">
                            <div class="caption">
                                <p>Nova overlay do canal funcionando! E eu feliz pra caramba jogando friday pela primeira vez.</p>
                            </div>
                    </div>
                </div>
            </div>
            </br>

        </div>
            <div class="panel-footer"> </div>

    </div>



<?php else : ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>