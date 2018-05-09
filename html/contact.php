<?php include 'html_inicial.php' ?>
<!-- banner - large -->
<section>
    <!-- <div class="institutional-banner institutional-banner--masked">
        <div class="image-bg" style="background-image: url(https://dummyimage.com/1920x900/fff/000)">
            <div class="wrapper-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <strong>SOBRE NÓS</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
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
                <div class="row matchheight">
                    <div class="col-sm-12 col-md-6" data-mh="contact-group">
                        <p>Tem alguma questão e não encontra a informação no site?
                            <br> Contacte-nos! Teremos todo o gosto em esclarecer todas as suas dúvidas.</p>
                        <div class="empty-space-80"></div>
                        <form action="" method class="validate-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-field">
                                        <label for="firstname_contact">Primeiro Nome</label>
                                        <input type="text" class="required form-control" name="firstname_contact" id="firstname_contact">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-field">
                                        <label for="lastname_contact">Último Nome</label>
                                        <input type="text" class="required form-control" name="lastname_contact" id="lastname_contact">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-field">
                                        <label for="email_contact">E-mail</label>
                                        <input type="email" class="required-email form-control" name="email_contact" id="email_contact">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-field">
                                        <label for="message_contact">Mensagem</label>
                                        <textarea class="required form-control" name="message_contact" id="message_contact"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-offset-6 col-sm-6">
                                    <button type="submit" class="btn btn-primary fright">Enviar Mensagem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="hidden-xs hidden-sm col-md-offset-1 col-md-5" data-mh="contact-group">
                        <div class="text-center">
                            <img src="../assets/img/occ_logoBIG.png" alt="O Cantinho Criativo Logotipo" class="img-responsive contact-image">
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