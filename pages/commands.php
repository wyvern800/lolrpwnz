<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>

<?php
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysqli_select_db($con, DB_NAME);
$query = sprintf("SELECT * FROM categories WHERE status = 1");
$dados = mysqli_query($con, $query) or die(mysqli_error($con));
$cat = mysqli_fetch_object($dados);
$total = mysqli_num_rows($dados);
?>

    <title><?php echo WEBSITE_NAME?> - Comandos</title>
<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

    <h1><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Comandos</h1>
    <hr />

<?php if ($db) : ?>

    <div class="row">
        <table width="100%" class="table table-hover table-striped table-bordered table-condensed" bgcolor="#FFFFFF">
            <thead>
            <tr>
                <th width="12%">Comando</th>
                <th width="40%">Ação</th>
                <th>Cooldown</th>
                <th width="15%">Preço</th>
            </tr>
            </thead>
            <?php
            do {
                ?>
                <tr>
                    <td colspan="4" align="center" style="padding:7px; background-color:#CFCFCF;">
                        <strong><?=$cat->categoryname;?></strong></td>
                </tr>
                <?php
                $query_item = sprintf("SELECT * FROM commands WHERE category = ".$cat->id);
                $dados_item = mysqli_query($con, $query_item) or die(mysqli_error($con));
                $item = mysqli_fetch_object($dados_item);
                do {
                    ?>
                    <tr>
                        <td><kbd>!<?=$item->commandname;?></kbd></td>
                        <td><?php if ($item->example != null) {
                            echo $item->action." - <abbr title='". $item->example."'>Exemplo</abbr>";
                        } else {
                            echo $item->action;
                        }?></td>
                        <td><?=$item->cooldown;?> minutos</td>
                        <td><?php
                        if ($item->price == 0) {
                            echo "<span class=\"label label-success\">GR&Aacute;TIS</span>";
                        } else if ($item->price <= 100) {
                            echo "<abbr class=\"label label-default\">". $item->price ." <abbr title='Teta Points (Pontos utilizados para gastar na live'><span class=\"glyphicon glyphicon-star\"></span></abbr>";
                        } else if ($item->price <= 350) {
                            echo "<abbr class=\"label label-warning\">". $item->price ." <abbr title='Teta Points (Pontos utilizados para gastar na live'><span class=\"glyphicon glyphicon-star\"></span></abbr>";
                        } else if ($item->price['price'] >= 350) {
                            echo "<abbr class=\"label label-danger\">". $item->price ." <abbr title='Teta Points (Pontos utilizados para gastar na live'><span class=\"glyphicon glyphicon-star\"></span></abbr>";
                        }
                        ?></td>
                    </tr>
                <?php } while($item = mysqli_fetch_object($dados_item)); ?>
            <?php } while($cat = mysqli_fetch_object($dados)); ?>
        </table>

        </div>

    </div>



<?php else : ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>