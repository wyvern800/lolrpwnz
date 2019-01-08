<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>

    <title><?php echo WEBSITE_NAME?> - Sobre</title>
<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

    <h1><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Sobre</h1>
    <hr />

<?php if ($db) : ?>

        <div class="container">
            </div>
            <center>
                <div class="panel panel-info">
                    <div class="panel-heading">Algumas fotos pra vocês verem ;)</div>
                    <div class="panel-body">
                        <img src="../assets/math.jpg" class="img-circle" alt="Euzito <3" width="120" height="120">
                        <img src="../assets/eu.jpg" class="img-circle" alt="Euzito <3" width="120" height="120">
                        <img src="../assets/mod_riba.png" class="img-circle" alt="Euzito e o Ribeiro" width="120" height="120">
                    </div>
                    <div class="panel-footer panel-info">Até que eu sou gato né, fala tu?</div>
                </div>
                <div class="panel panel-warning">
                    <div class="panel-heading">Esse question&aacuterio tem a fun&ccedil&atildeo de auto-responder as quest&otildees mais perguntadas por voc&ecircs para facilitar a vida de todos n&oacutes! Ele pode atualizar com o tempo, de acordo como as perguntas v&atildeo surgindo...</div>
                    <div class="panel-body">
                        </br>
                        <p> <ul class="list-group">
                            <div class="well well-sm"><b>Qual o seu nome?</b> </br> Matheus Guilherme Ferreira</div>
                            </br>
                            <li class="list-group-item list-group-item"><b>Quantos anos voc&ecirc tem?</b> </br> 22</li>
                            </br>
                            <li class="list-group-item list-group-item"><b>Voc&ecirc namora?</b> </br> N&atildeo, e t&ocirc suave...</li>
                            </br>
                            <li class="list-group-item list-group-item"><b>Jogos que voc&ecirc transmite</b> </br> DBD, LoL, CS:GO, F13:The Game...</li>
                            </br>
                            <li class="list-group-item list-group-item"><b>Joga LOL desde quando?</b> </br> 2012</li>
                            </br>
                            <li class="list-group-item list-group-item"><b>Voc&eacute mora com os pais?</b> </br> Sim</li>
                        </ul></p>
                </div>
            </center>
        </div>



<?php else : ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>