<form action="" method="post" class="row form add_costumer_page">
    <input type="hidden" name="type" value="add_">
    <div class="col-xs-12 col-xs-offset-0 col-lg-8 col-lg-offset-2">
        <div class="row">
            <div class="col-lg-5">
                <div class="col-xs-12">
                    <div class="col-xs-12">
                        <div class="col-xs-12">
                            <h4 class="strong">
                                Dados Gerais do Cliente
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="table-items">
                    <div class="row">
                        <div class="col-lg-6 col-xs-12 col-sm-6">
                            <div class="form-field">
                                <label for="first_name">
                                    Primeiro Nome*</label>
                                <input type="text" name="first_name" id="first_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12 col-sm-6">
                            <div class="form-field">
                                <label for="last_name">
                                    Último Nome*</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-field">
                                <label for="email">
                                    Email*</label>
                                <input type="text" name="email" id="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-field">
                                <label for="phone">
                                    Telefone / Telemóvel
                                </label>
                                <input type="text" name="phone" id="phone" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-lg-5">
                <div class="col-xs-12">
                    <div class="col-xs-12">
                        <div class="col-xs-12">
                            <h4 class="strong">
                                Morada
                            </h4>
                            <small>
                                Dados da morada do cliente
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="table-items">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-field clearfix">
                                <label for="address_l1">
                                    Morada linha 1*</label>
                                <input type="text" id="address_l1" name="address_l1" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-field">
                                <label for="address_l2">
                                    Morada linha 2
                                </label>
                                <input type="text" id="address_l2" name="address_l2" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="form-field">
                                <label for="city">
                                    Cidade*</label>
                                <input type="text" id="city" name="city" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="form-field">
                                <label for="postal_code">
                                    Código Postal*</label>
                                <input type="text" id="postal_code" name="postal_code" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="form-field">
                                <label for="country">
                                    País*</label>
                                <input type="text" id="country" name="country" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12">
                            <div class="form-field">
                                <label for="region">
                                    Região*</label>
                                <input type="text" id="region" name="region" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-lg-5">
                <div class="col-xs-12">
                    <div class="col-xs-12">
                        <div class="col-xs-12">
                            <h4 class="strong">
                                Notas
                            </h4>
                            <small>
                                Introduza uma nota relativamente a este cliente
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="table-items">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-field clearfix">
                                <label for="note_costumer">
                                    Notas
                                </label>
                                <input type="text" placeholder="Adicionar uma nota sobre este cliente..." id="note_costumer" name="note_costumer" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="buttons-top buttons-top-absolute">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 col-lg-10">
                    <span id="status-info">Dados por guardar</span>
                </div>
                <div class="col-sm-2 col-lg-1">
                    <a href="#" title="Cancelar" class="btn btn-default decline">Cancelar</a>
                </div>
                <div class="col-sm-2 col-lg-1">
                    <button type="submit" title="Guardar" name="save_data" class="btn btn-primary save">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>