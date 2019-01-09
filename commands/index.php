<?php
require_once('functions.php');
restrict_and_redirect_to('login/index.php');
index();
?>
<title><?php echo WEBSITE_NAME?> - Comandos</title>
<?php include(HEADER_TEMPLATE); ?>
    <header>
        <!--<div class="row">
            <div class="col-sm-6">
                <h2>Comandos</h2>
            </div>

            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Comando</a>
                <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
            </div>
        </div>-->
        <div id="top" class="row">
            <div class="col-md-3">
                <h2><span class="glyphicon glyphicon-console" aria-hidden="true"></span> Comandos</h2>
            </div>

            <div class="col-md-6">
                <div class="input-group h2">
                    <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Comandos">
                    <span class="input-group-btn">
                <button class="btn btn-primary disabled" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
                </div>
            </div>

            <div class="col-md-3">
                <a class="btn btn-default pull-right h2" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
                <a class="btn btn-primary pull-right h2" href="add.php"><i class="fa fa-plus"></i> Novo Comando</a>
            </div>
        </div> <!-- /#top -->
    </header>

<?php if (!empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo $_SESSION['message']; ?>
    </div>
    <?php clear_messages(); ?>
<?php endif; ?>

    <hr>

    <table class="table table-hover table-striped table-bordered table-condensed">
        <thead>
        <tr>
            <th style="text-align:center;vertical-align:middle";>ID</th>
            <th width="12%" style="text-align:center;vertical-align:middle";>Comando</th>
            <th width="55%" style="text-align:center;vertical-align:middle";>Ação</th>
            <th style="text-align:center;vertical-align:middle";>Cooldown</th>
            <th width="7%" style="text-align:center;vertical-align:middle";>Preço</th>
            <th style="text-align:center;vertical-align:middle";>Ações</th>
        </tr>
        </thead>
        <tbody>

        <?php if ($commands) : ?>
            <?php foreach ($commands as $command) : ?>
                <tr>
                    <td style="text-align:center;vertical-align:middle";><?php echo $command['id']; ?></td>
                    <td style="text-align:center;vertical-align:middle";><kbd>!<?php echo $command['commandname']; ?></kbd>

                        <?php
                        /**
                        $created_day = $command['created'];
                        $other_data = $command['created']->format("m/d/Y");

                        /*Sistema de por que o comando é novo
                        if ($created_day <= $other_data) {
                            echo "<span class='label label-info'>NOVO</span>";
                        } else {
                            echo "";
                        }**/
                        ?>

                    </td>
                    <td style="vertical-align:middle";>
                        <?php
                        if ($command['example'] != null) {
                            echo $command['action'] != null ? $command['action'] : "Sem ações"." - <abbr title='". $command['example']."'>Exemplo</abbr>";
                        } else {
                            echo $command['action'] != null ? $command['action'] : "Sem ações";
                        }
                        ?>
                    </td>
                    <td style="text-align:center;vertical-align:middle";><?php echo ($command['cooldown'] == 0 ? 'Sem' : $command['cooldown'].' min'); ?></td>
                    <td style="text-align:center;vertical-align:middle";>
                    <?php
                    if ($command['price'] == 0) {
                        echo "<span class=\"label label-success\">GR&Aacute;TIS</span>";
                    } else if ($command['price'] <= 100) {
                        echo "<abbr class=\"label label-default\">". $command['price'] ." <abbr title='Teta Points (Pontos utilizados para gastar na live'><span class=\"glyphicon glyphicon-star\"></span></abbr>";
                    } else if ($command['price'] <= 350) {
                        echo "<abbr class=\"label label-warning\">". $command['price'] ." <abbr title='Teta Points (Pontos utilizados para gastar na live'><span class=\"glyphicon glyphicon-star\"></span></abbr>";
                    } else if ($command['price'] >= 350) {
                        echo "<abbr class=\"label label-danger\">". $command['price'] ." <abbr title='Teta Points (Pontos utilizados para gastar na live'><span class=\"glyphicon glyphicon-star\"></span></abbr>";
                    }
                    ?>
                    </td>

                   <!-- voltar linha aq -->
                    <td class="actions text-right" style="text-align:center;vertical-align:middle";>
                        <a href="view.php?id=<?php echo $command['id']; ?>" class="btn btn- btn-success"><i class="fa fa-eye"></i></a>
                        <a href="edit.php?id=<?php echo $command['id']; ?>" class="btn btn btn-warning"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $command['id']; ?>">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="6">Nenhum registro encontrado.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>

<?php include('modal.php'); ?>

<!--bottom - Pagination -->
<div id="bottom" class="row">
    <div class="col-md-12" align="center">

        <ul class="pagination">
            <li class="disabled"><a>&lt; Anterior</a></li>
            <li class="active"><a>1</a></li>
            <li class="disabled"><a href="#">2</a></li>
            <li class="disabled"><a href="#">3</a></li>
            <li class="next disabled"><a href="#" rel="next">Próximo &gt;</a></li>
        </ul><!-- /.pagination -->

    </div>
</div> <!-- /#bottom -->

<?php include(FOOTER_TEMPLATE); ?>
