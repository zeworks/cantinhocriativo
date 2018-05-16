<?php include 'html_inicial.php' ?>
<section id="pArea">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Área Pessoal</h1>
                <div class="empty-space-80"></div>
                <div class="row matchheight">
                    <div class="col-xs-12 col-sm-6" data-mh="account-item">
                        <form action="" class="account-item form validate-form clearfix">
                            <h2>Entrar</h2>
                            <div class="empty-space-20"></div>
                            <div class="form-field">
                                <label for="account_name_sign">Email*</label>
                                <input type="email" name="account_email" id="account_email_sign" class="form-control required-email">
                            </div>
                            <div class="form-field">
                                <label for="account_password_sign">Senha*</label>
                                <input type="password" name="account_password" id="account_password_sign" class="form-control required">
                            </div>
                            <div class="form-message">
                                <small class="fleft">* email ou senha incorretos</small>
                                <br>
                            </div>
                            <a href="#forgotPassword" class="fright">Esqueceu a senha?</a>
                            <button type="submit" class="btn btn-primary fright btn-login">Entrar</button>
                        </form>
                    </div>
                    <div class="col-xs-12 col-sm-6" data-mh="account-item">
                        <form action="" class="account-item form validate-form clearfix">
                            <h2>Registar</h2>
                            <div class="empty-space-20"></div>
                            <div class="form-field">
                                <label for="account_name_register">Nome*</label>
                                <input type="text" name="account_name" id="account_name_register" class="form-control required">
                            </div>
                            <div class="form-field">
                                <label for="account_name_register">Email*</label>
                                <input type="email" name="account_email" id="account_email_register" class="form-control required-email">
                            </div>
                            <div class="form-field">
                                <label for="account_password_register">Senha*</label>
                                <input type="password" name="account_password" id="account_password_register" class="form-control required">
                            </div>
                            <button type="submit" class="btn btn-primary fright">Registar</button>
                        </form>
                    </div>
                </div>
                <div class="empty-space-80"></div>
            </div>
        </div>
    </div>
</section>
<?php include 'html_final.php' ?>