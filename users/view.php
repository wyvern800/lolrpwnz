<?php
require_once('functions.php');
restrict_and_redirect_to('login/index.php');
view($_GET['id']);
?>
    <title><?php echo WEBSITE_NAME?> - Usuário: <?php echo $user['id']; ?></title>
<?php include(HEADER_TEMPLATE); ?>

    <h2>Usuário <?php echo $user['id']; ?></h2>
    <hr>

<?php if (!empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

    <dl class="dl-horizontal">
        <dt>Nome de Usuário</dt>
        <dd><?php echo $user['username']; ?></dd>

        <dt>Password Plain:</dt>
        <dd><?php echo $user['password']; ?></dd>

        <dt>Password Encriptada:</dt>
        <dd><?php echo $user['password2']; ?></dd>

        <dt>Cargo:</dt>
        <dd><?php switch ($user['role']) {
                case 1:
                    echo "Moderador";
                break;
                case 2:
                    echo "Administrador";
                break;
                case 3:
                    echo "Designer";
                    break;
                default:
                    echo "Membro";
                break;
            }?>
        </dd>
    </dl>

    <dl class="dl-horizontal">
        <dt>Nome Real:</dt>
        <dd><?php echo $user['realname']; ?></dd>

        <dt>Data de Nascimento:</dt>
        <dd><?php echo $user['birthdate']; ?></dd>

        <dt>Endereço:</dt>
        <dd><?php echo $user['address']; ?></dd>

        <dt>E-mail:</dt>
        <dd><?php echo $user['email']; ?></dd>
    </dl>

    <dl class="dl-horizontal">
        <dt>Telefone:</dt>
        <dd><?php echo $user['phone']; ?></dd>

        <dt>Celular:</dt>
        <dd><?php echo $user['mobile']; ?></dd>

        <dt>Data de Criação:</dt>
        <dd><?php echo $user['created']; ?></dd>

        <dt>Data de Modificação:</dt>
        <dd><?php echo $user['modified']; ?></dd>
    </dl>

    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-primary">Editar</a>
            <a href="index.php" class="btn btn-default">Voltar</a>
        </div>
    </div>

<?php include(FOOTER_TEMPLATE); ?>