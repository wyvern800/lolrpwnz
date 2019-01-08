<?php require_once '../config.php'; ?>

<?php include(HEADER_TEMPLATE); ?>
<h1><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Área Restrita</h1>
<hr />

        <form action="../inc/validation.php" method="post">
            <div class="form-group">
                <legend>Dados da Conta</legend>
                <label for="txUser">Usuário</label>
                <input type="text" name="username" id="txUser" maxlength="25" class="form-control" placeholder="Digite seu nome de usuário"/>
            </div>
            <div class="form-group">
                <label for="txPass">Senha</label>
                <input type="password" name="password" id="txPass" class="form-control" placeholder="Digite sua senha"/>
            </div>

                <input type="submit" value="Entrar" class="btn btn-default"/>

        </form>

<?php include(FOOTER_TEMPLATE); ?>
