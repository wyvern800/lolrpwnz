<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>

    <title><?php echo WEBSITE_NAME?> - Sobre</title>
<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

    <div class="page-header">
        <h1><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Sobre <small> F.A.Q</small></h1>
    </div>

<?php if ($db) : ?>

        <div class="container">
            </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p align="center">
                            <img src="../assets/1.jpg" class="img-circle" width="120" height="120">
                            <img src="../assets/2.jpg" class="img-circle" width="120" height="120">
                            <img src="../assets/3.png" class="img-circle" width="120" height="120">
                            <img src="../assets/4.png" class="img-circle" width="120" height="120">
                            <img src="../assets/5.png" class="img-circle" width="120" height="120">
                            <img src="../assets/6.png" class="img-circle" width="120" height="120">
                        </p>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">Esse question&aacuterio tem a fun&ccedil&atildeo de auto-responder as quest&otildees mais perguntadas por voc&ecircs para facilitar a vida de todos n&oacutes!</div>
                    <div class="panel-body">
                        <p>
                        <ul class="list-group">
                            <div class="list-group-item"><b>Qual o seu nome?</b> </br> Matheus Guilherme Ferreira</div>
                            <li class="list-group-item"><b>Quantos anos voc&ecirc tem?</b> </br> 22</li>
                            <li class="list-group-item"><b>Voc&ecirc namora?</b> </br> N&atildeo, e t&ocirc suave...</li>
                            <li class="list-group-item"><b>Jogos que voc&ecirc transmite</b> </br> DBD, LoL, CS:GO, F13:The Game...</li>
                            <li class="list-group-item"><b>Joga LOL desde quando?</b> </br> 2012</li>
                            <li class="list-group-item"><b>Voc&eacute mora com os pais?</b> </br> Sim</li>
                        </ul>
                        </p>
                </div>
        </div>



<?php else : ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>