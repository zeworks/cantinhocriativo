<?php include 'html_inicial.php' ?>
<section id="pArea">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row matchheight">
                    <div class="col-sm-6" data-mh="my-group">
                        <h1>Minha Conta</h1>
                    </div>
                    <div class="col-sm-6" data-mh="my-group">
                        <button class="btn btn-remove-account fright">Fechar conta</button>
                    </div>
                </div>
                <div class="row matchheight">
                    <!-- my data info -->
                    <div class="account-info col-sm-6" data-mh="my-group">
                        <h3>Dados Pessoais</h3>
                        <div class="empty-space-20"></div>
                        <button class="btn btn-primary btn-target" data-target=".personal-data-1">Alterar dados</button>
                        <div class="empty-space-20"></div>
                        <strong>jose@loba.pt</strong>
                        <ul>
                            <li>
                                <strong>Nome:</strong>
                                <br>
                                <small>José Nogueira</small>
                            </li>
                            <li>
                                <strong>NIF:</strong>
                                <br>
                                <small>Não definido</small>
                            </li>
                            <li>
                                <strong>Data de nascimento:</strong>
                                <br>
                                <small>Não definido</small>
                            </li>
                            <li>
                                <strong>Sexo:</strong>
                                <br>
                                <small>Não definido</small>
                            </li>
                            <li>
                                <strong>Telemóvel:</strong>
                                <br>
                                <small>Não definido</small>
                            </li>
                        </ul>
                        <div class="personal-data personal-data-1">
                            <div class="personal-data__body">
                                <form action method class="form validate-form">
                                    <div class="form-field">
                                        <label for="name">Nome*</label>
                                        <input type="text" id="name" name="name" class="form-control required">
                                    </div>
                                    <div class="form-field">
                                        <label for="email">Email*</label>
                                        <input type="email" id="email" name="email" class="form-control required">
                                    </div>
                                    <div class="form-field">
                                        <label for="phone">Telemóvel</label>
                                        <input type="text" id="phone" name="phone" class="form-control">
                                    </div>
                                    <div class="form-field">
                                        <label for="nif">NIF</label>
                                        <input type="text" id="nif" name="nif" class="form-control">
                                    </div>
                                    <div class="form-field">
                                        <label for="date_birth">Data de nascimento</label>
                                        <input type="date" id="date_birth" name="date_birth" class="form-control">
                                    </div>
                                    <div class="form-field">
                                        <div class="row">
                                            <div class="col-xs-6 col-md-4">
                                                <input type="radio" name="sex" id="male" class="radio">
                                                <label for="male">Masculino</label>
                                            </div>
                                            <div class="col-xs-6 col-md-4">
                                                <input type="radio" name="sex" id="female" class="radio">
                                                <label for="female">Feminino</label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <button type="button" class="btn btn-default btn-close" data-target=".personal-data-1">
                                        Cancelar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /my data info -->
                    <!-- my address info -->
                    <div class="account-info col-sm-6" data-mh="my-group">
                        <h3>Meus Endereços</h3>
                        <div class="empty-space-20"></div>
                        <button class="btn btn-primary btn-target" data-target=".personal-data-2">Registar novo endereço</button>
                        <ul>
                            <li>
                                <strong>Sem endereço registado</strong>
                            </li>
                            <li>
                                <strong>Meu Endereço:</strong>
                                <br>
                                <!-- rua -->
                                <small>Rua torta, nº 67</small>
                                <br>
                                <!-- codigo postal -->
                                <small>3720-599</small>
                                <br>
                                <!-- cidade -->
                                <small>Oliveira de Azeméis</small>
                                <br>
                                <!-- distrito e país -->
                                <small>Aveiro, Portugal</small>
                                <br>
                            </li>
                        </ul>
                        <div class="personal-data personal-data-2">
                            <div class="personal-data__body">
                                <form action method class="form validate-form">
                                    <div class="form-field">
                                        <label for="address">Morada*</label>
                                        <input type="text" id="address" name="address" class="form-control required">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-field">
                                                <label for="postal_code">Código Postal*</label>
                                                <input type="text" id="postal_code" name="postal_code" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-field">
                                                <label for="city">Cidade*</label>
                                                <input type="text" id="city" name="city" class="form-control required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-field">
                                                <label for="district">Distrito*</label>
                                                <input type="text" id="district" name="district" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-field">
                                                <label for="country">País*</label>
                                                <input type="text" id="country" name="country" class="form-control required">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <button type="button" class="btn btn-default btn-close" data-target=".personal-data-2">
                                        Cancelar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /my address info -->
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'html_final.php' ?>