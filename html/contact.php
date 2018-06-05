<?php include 'html_inicial.php' ?>
<!-- banner - large -->
<section>
    <div class="institutional-banner">
        <div class="image-bg" style="background-image: url(https://dummyimage.com/1920x900/f2f2f2/000)"></div>
    </div>
</section>
<!-- banner - large ends -->
<div class="empty-space-20"></div>
<!-- breadcrumb -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="#home" title="home">Home</a>
                    </li>
                    <li>
                        <a href="#" title="Contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /breadcrumb -->
<!-- CONTACT -->
<div class="empty-space-80"></div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Contacto</h1>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <p>Tem alguma questão e não encontra a informação no site?
                            <br> Contacte-nos! Teremos todo o gosto em esclarecer todas as suas dúvidas.</p>

                        <div class="empty-space-80"></div>
                        <form action="" method class="validate-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-field">
                                        <label for="firstname_contact">Primeiro Nome*</label>
                                        <input type="text" class="required form-control" name="firstname_contact" id="firstname_contact">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-field">
                                        <label for="lastname_contact">Último Nome*</label>
                                        <input type="text" class="required form-control" name="lastname_contact" id="lastname_contact">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-field">
                                        <label for="email_contact">E-mail*</label>
                                        <input type="email" class="required-email form-control" name="email_contact" id="email_contact">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-field">
                                        <label for="message_contact">Mensagem*</label>
                                        <textarea class="required form-control" name="message_contact" id="message_contact"></textarea>
                                    </div>
                                </div>
                            </div>
                            <small>
                                A informação que vai enviar será guardada e processada através de email apenas com o propósito de nos contactar. Os dados
                                que irá submeter vão ser utilizados por outros departamentos da
                                <strong>Just For You</strong>. A
                                <strong>Just For You</strong> irá tratar a sua informação pessoal com toda a confidencialidade
                                e segurança de acordo com o estabelecido nos regulamentos de proteção de dados. Poderá retirar
                                o seu consentimento de utilização dos dados, solicitar a sua correção ou pedir a sua eliminação
                                em qualquer altura. Para tal deverá entrar em contacto connosco através do seguinte endereço
                                de email:
                                <strong>info@justforyou.pt</strong>
                            </small>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-field">
                                        <label for="terms">
                                            <input type="checkbox" id="terms" name="terms" class="fleft">
                                            <small>Aceito os
                                                <a href="terms.php" target="_blank">termos e condições</a>
                                            </small>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary fright">Enviar Mensagem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="hidden-xs hidden-sm col-md-offset-1 col-md-5">
                        <div class="text-center">
                            <img src="../assets/img/LOGO_JUSTFORYOU.png" alt="O Cantinho Criativo Logotipo" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="empty-space-80"></div>

<!-- CONTACT ENDS -->

<?php include 'html_final.php' ?>