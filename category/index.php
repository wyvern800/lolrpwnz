<?php
require_once('functions.php');
restrict_and_redirect_to('login/index.php');
index();
?>
<title><?php echo WEBSITE_NAME?> - Categorias</title>
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
                <h2><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Categorias</h2>
            </div>

            <div class="col-md-6">
                <div class="input-group h2">
                    <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Categorias">
                    <span class="input-group-btn">
                <button class="btn btn-primary disabled" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
                </div>
            </div>

            <div class="col-md-3">
                <a class="btn btn-default pull-right h2" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
                <a class="btn btn-primary pull-right h2" href="add.php"><i class="fa fa-plus"></i> Nova Categoria</a>
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
            <th width="4%" style="text-align:center;vertical-align:middle">ID</th>
            <th width="65%" style="text-align:center;vertical-align:middle">Nome da Categoria</th>
            <th width="10%" style="text-align:center;vertical-align:middle">Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($categories) : ?>
            <?php foreach ($categories as $category) : ?>
                <tr>
                    <td style="text-align:center;vertical-align:middle";><?php echo $category['id']; ?></td>
                    <td style="vertical-align:middle";><?php echo $category['categoryname']; ?></td>

                   <!-- voltar linha aq -->
                    <td class="actions text-right" style="text-align:center;vertical-align:middle";>
                        <a href="view.php?id=<?php echo $category['id']; ?>" class="btn btn btn-success"><i class="fa fa-eye"></i></a>
                        <a href="edit.php?id=<?php echo $category['id']; ?>" class="btn btn btn-warning"><i class="fa fa-pencil"></i></a>
                        <a href="#" class="btn btn btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $category['id']; ?>">
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
