<form action="" method="post" class="row form add_discount_page" name="add_discount_form">
    <div class="col-lg-9 col-sm-6 col-xs-12">
        <div class="table-items">
            <!-- DISCOUNT CODE -->
            <div class="form-field form--field__withbtn clearfix">
                <h4 class="strong">Código de Desconto</h4>
                <a href="#" class="link gen_code">Gerar código</a>
                <input type="text" name="discount_code" id="discount_code" class="form-control" required>
                <small>Os clientes vão usar este código no checkout.</small>
            </div>
            <hr>
            <!-- OPTIONS -->
            <h4 class="strong">Opções</h4>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-6">
                    <div class="form-field">
                        <label for="disc_type">Tipo de desconto</label>
                        <select name="disc_type" id="disc_type" class="form-control">
                            <option value="perc_discount" data-toggle="appliesto_item">Desconto em percentagem</option>
                            <option value="fixed_amount" data-toggle="appliesto_item">Montante Fixo</option>
                            <option value="free_shipp" data-toggle="countries_item">Envios Grátis</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-6">
                    <div class="form-field">
                        <label for="disc_value">Valor de desconto</label>
                        <input type="text" id="disc_value" name="disc_value" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-field">
                        <label for="min_pursh">Este desconto requere um mínimo de compra</label>
                        <input type="checkbox" name="min_pursh" id="min_pursh">
                    </div>
                </div>
            </div>
            <hr>
            <!-- APPLIES TO -->
            <div class="form-toggle">
                <div class="appliesto_item item active">
                    <h4 class="strong">Aplica-se a:</h4>
                    <div class="form-field">
                        <label for="entire_order">Toda a encomenda</label>
                        <input type="radio" name="appliesto_item" id="entire_order">
                    </div>
                    <div class="form-field">
                        <label for="spec_prod">Produtos Específicos</label>
                        <input type="radio" name="appliesto_item" id="spec_prod">
                    </div>
                </div>
                <div class="countries_item item">
                    <h4 class="strong">Countries</h4>
                    <div class="form-field">
                        <label for="all_countr">All Countries</label>
                        <input type="radio" name="countries_item" id="all_countr">
                    </div>
                    <div class="form-field">
                        <label for="spec_contr">Specific Countries</label>
                        <input type="radio" name="countries_item" id="spec_contr">
                    </div>
                    <br>
                    <h4 class="strong">Shipping Rates</h4>
                    <div class="form-field">
                        <label for="shippi_rate">Exclude shipping rates over a certain amount</label>
                        <input type="checkbox" name="shippi_rate" id="shippi_rate">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 col-lg-3">
                                <input type="text" name="shippi_rate_amount" id="shippi_rate_amount" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- COSTUMER ELIGIBILITY -->
            <h4 class="strong">Elegibilidade do cliente</h4>
            <div class="form-field">
                <label for="everyone">Todos</label>
                <input type="radio" name="costumer_eligibility" value="everyone" id="everyone">
            </div>
            <div class="form-field">
                <label for="spec_group_costumers">Grupo de clientes específicos</label>
                <input type="radio" name="costumer_eligibility" value="spec_group_costumers" id="spec_group_costumers">
                <input type="text" name="costumer_eligibility_text" placeholder="Pesquise clientes....">
            </div>
            <div class="form-field">
                <label for="spec_costumers">Clientes específicos</label>
                <input type="radio" name="costumer_eligibility" value="spec_costumers" id="spec_costumers">
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="table-items">
            <div class="form-field">
                <span class="fleft">Status</span>
                <div class="switch fright">
                    <input type="checkbox" class="btsp-check" name="status_item">
                    <span class="toggle toggle--round"></span>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="content">
                <p>
                    <strong>SUMMARY</strong>
                </p>
                <br>
                <div class="content__in">
                    <p class="fleft">Discount Name</p>
                    <span class="fright status status--warn">INACTIVE</span>
                    <div class="clearfix"></div>
                    <div class="form-field">
                        <ul class="bullet-list">
                            <li>
                                <span>0% off entire order</span>
                            </li>
                            <li>
                                <span>Minimum purchase of €55,00</span>
                            </li>
                            <li>
                                <span>
                                    Active from Jan 26
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="content">
                <p>
                    <strong>PERFORMANCE</strong>
                </p>

                <div class="form-field content__in">
                    <ul class="bullet-list">
                        <li>
                            <span>8 used</span>
                        </li>
                        <li>
                            <span>€760,00 in total sales</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</form>