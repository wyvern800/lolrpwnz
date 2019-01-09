<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>

<?php
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysqli_select_db($con, DB_NAME);
$query = sprintf("SELECT * FROM categories ORDER BY id");
$dados = mysqli_query($con, $query) or die(mysqli_error($con));
$cat = mysqli_fetch_object($dados);
$total = mysqli_num_rows($dados);
?>

    <title><?php echo WEBSITE_NAME?> - Comandos</title>
<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

    <div class="page-header">
        <h1><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Comandos <small>Separados por Categorias</small></h1>
    </div>

<?php if ($db) : ?>

        <div class="well well-sm"><p align="center"><font size="2px">Ações marcadas com <abbr title='Exemplo de utilização dos comandos :)'><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span></abbr> são exemplos de como usar os comandos no chat para facilitar o seu entendimento!</p></div>

        <table width="100%" class="table table-hover table-striped table-bordered table-condensed" bgcolor="#FFFFFF">
            <thead>
            <tr class="trcomandos">
                <th width="10%">Comando</th>
                <th width="70%">Ação</th>
                <th width="10">Cooldown</th>
                <th width="10%">Preço</th>
            </tr>
            </thead>
            <?php
            do {
                ?>
                <tr>
                    <td colspan="4" align="center" style="padding:0px; background-color:#e8e8e8;">
                        <strong><?=$cat->categoryname;?></strong></td>
                </tr>
                <?php
                $query_item = sprintf("SELECT * FROM commands WHERE category = ".$cat->id. " ORDER BY price");
                $dados_item = mysqli_query($con, $query_item) or die(mysqli_error($con));
                $item = mysqli_fetch_object($dados_item);
                do {
                    ?>
                    <tr>
                        <td><kbd>!<?=$item->commandname;?></kbd></td>
                        <td><?php if ($item->example != null) {
                            echo $item->action." - <abbr title='". $item->example."'><span class=\"glyphicon glyphicon-question-sign\" aria-hidden=\"true\"></span></abbr>";
                        } else {
                            echo $item->action != null ? $item->action : "Sem ações";
                        }?></td>
                        <td><?php echo ($item->cooldown == 0 ? "Não tem" : $item->cooldown.' minutos</td>');?>
                        <td><?php
                        if ($item->price == 0) {
                            echo "<span class=\"label label-success\">GR&Aacute;TIS</span>";
                        } else if ($item->price <= 100) {
                            echo "<abbr class=\"label label-default\">". $item->price ." <abbr title='Teta Points (Pontos utilizados para gastar na live'><span class=\"glyphicon glyphicon-star\"></span></abbr>";
                        } else if ($item->price <= 350) {
                            echo "<abbr class=\"label label-warning\">". $item->price ." <abbr title='Teta Points (Pontos utilizados para gastar na live'><span class=\"glyphicon glyphicon-star\"></span></abbr>";
                        } else if ($item->price >= 350) {
                            echo "<abbr class=\"label label-danger\">". $item->price ." <abbr title='Teta Points (Pontos utilizados para gastar na live'><span class=\"glyphicon glyphicon-star\"></span></abbr>";
                        }
                        ?></td>
                    </tr>
                <?php } while($item = mysqli_fetch_object($dados_item)); ?>
            <?php } while($cat = mysqli_fetch_object($dados)); ?>
        </table>

    <div class="panel panel-default">
        <div class="panel-body">
            <p align="center"><font size="1px">Legenda dos Preços</font> </p>
            <p align="center"><span class="label label-success">GRÁTIS</span> <span class="label label-default">Barato</span> <span class="label label-warning">Caro</span> <span class="label label-danger">Muito Caro</span></p>
        </div>
    </div>

        </div>

<?php else : ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>