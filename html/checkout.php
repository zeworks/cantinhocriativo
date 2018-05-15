<?php include 'html_inicial.php' ?>
<div class="empty-space-20"></div>
<!-- checkout -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Está quase a terminar...</h2>
                <p>Pedimos, por favor, que preencha os dados abaixo para poder finalizar a sua compra.
                    <br> Já é nosso cliente?
                    <a href="login.php" title>Inicie aqui
                    </a> a sessão de forma segura.</p>
                <!-- table items -->
                <hr>
                <form action="success-payment.php" method class="validate-form">
                    <div class="row">
                        <!-- ORDER SUMMARY -->
                        <div class="col-sm-5 col-sm-push-7">
                            <div class="checkout-cart">
                                <div class="checkout-cart-title">
                                    <h4>A sua encomenda</h4>
                                </div>
                                <div class="checkout-cart-body">
                                    <table cellspacing="0" cellpadding="0">
                                        <tr>
                                            <th>Produto</th>
                                            <th class="text-right">Preço</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Nome do Produto</span>
                                                <br>
                                                <span>x 2</span>
                                            </td>
                                            <td class="text-right">
                                                <span>15,00€</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Nome do Produto</span>
                                                <br>
                                                <span>x 5</span>
                                            </td>
                                            <td class="text-right">
                                                <span>77,00€</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="checkout-cart-footer">
                                    <table cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td>
                                                <span>Sub-total</span>
                                            </td>
                                            <td class="text-right">
                                                <span>15,00€</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Personalização</span>
                                            </td>
                                            <td class="text-right">
                                                <span>0,00€</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Custos de Envio</span>
                                            </td>
                                            <td class="text-right">
                                                <span>0,00€</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span>Cupões de Desconto</span>
                                            </td>
                                            <td class="text-right">
                                                <span>0,00€</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Total (IVA incluído)</strong>
                                            </td>
                                            <td class="text-right">
                                                <strong>17,00€</strong>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ORDER SUMMARY ENDS -->
                        <!-- ORDER DETAILS -->
                        <div class="col-sm-7 col-sm-pull-5">
                            <!-- morada de faturacao -->
                            <div class="checkout-cart">
                                <div class="checkout-cart-title">
                                    <h4>1. Morada de Faturação</h4>
                                </div>
                                <div class="checkout-cart-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <label for="complete_name">Nome Completo*</label>
                                                <input type="text" class="form-control required" id="complete_name" name="complete_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <label for="email">Email*</label>
                                                <input type="email" class="form-control required" id="email" name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <label for="phone">Telefone*</label>
                                                <input type="text" class="form-control required" id="phone" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <label for="n_cont">Nº Cont.</label>
                                                <input type="text" class="form-control" id="n_cont" name="n_cont">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-field">
                                        <label for="address">Morada*</label>
                                        <input type="text" class="form-control required" id="address" name="address">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <label for="city">Cidade*</label>
                                                <input type="text" class="form-control required" id="city" name="city">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <label for="cod_postal">Código Postal*</label>
                                                <input type="text" class="form-control required" id="cod_postal" name="cod_postal">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- morada de envio -->
                            <div class="checkout-cart">
                                <div class="checkout-cart-title">
                                    <h4>2. Morada de Envio</h4>
                                </div>
                                <div class="checkout-cart-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <label for="complete_name_send">Nome Completo*</label>
                                                <input type="text" class="form-control required" id="complete_name_send" name="complete_name_send">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <label for="phone_send">Telefone*</label>
                                                <input type="text" class="form-control required" id="phone_send" name="phone_send">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-field">
                                        <label for="address_send">Morada*</label>
                                        <input type="text" class="form-control required" id="address_send" name="address_send">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <label for="city_send">Cidade*</label>
                                                <input type="text" class="form-control required" id="city_send" name="city_send">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-field">
                                                <label for="cod_postal_send">Código Postal*</label>
                                                <input type="text" class="form-control required" id="cod_postal_send" name="cod_postal_send">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- metodo de envio -->
                            <div class="checkout-cart">
                                <div class="checkout-cart-title">
                                    <h4>3. Método de Envio</h4>
                                </div>
                                <div class="checkout-cart-body">
                                    <div class="form-field form-field--radio">
                                        <label for="ctt">
                                            <input type="radio" name="send_method" id="ctt" class="radio required-radio">
                                            <strong>Envio por CTT</strong>
                                            <small>Custo de envio: 9,25€ | Entrega: 2 dias utéis</small>
                                        </label>
                                    </div>
                                    <div class="form-field form-field--radio">
                                        <label for="ss">
                                            <input type="radio" name="send_method" id="ss" class="radio required-radio">
                                            <strong>Envio por CTT</strong>
                                            <small>Custo de envio: 9,25€ | Entrega: 2 dias utéis</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- metodo de pagamento -->
                            <div class="checkout-cart">
                                <div class="checkout-cart-title">
                                    <h4>4. Método de Pagamento</h4>
                                </div>
                                <div class="checkout-cart-body">
                                    <div class="form-field form-field--radio">
                                        <label for="paypal_payment">
                                            <input type="radio" name="send_method" id="paypal_payment" class="radio">
                                            <strong>Paypal</strong>
                                            <small>Custo de envio: 9,25€ | Entrega: 2 dias utéis</small>
                                        </label>
                                    </div>
                                    <div class="form-field form-field--radio">
                                        <label for="transf_bank_payment">
                                            <input type="radio" name="send_method" id="transf_bank_payment" class="radio">
                                            <strong>Transferência Bancária</strong>
                                            <small>Custo de envio: 9,25€ | Entrega: 2 dias utéis</small>
                                        </label>
                                    </div>
                                    <div class="form-field form-field--radio">
                                        <label for="multb_payment">
                                            <input type="radio" name="send_method" id="multb_payment" class="radio">
                                            <strong>Multibanco</strong>
                                            <small>Custo de envio: 9,25€ | Entrega: 2 dias utéis</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- comentario -->
                            <div class="checkout-cart">
                                <div class="checkout-cart-title">
                                    <h4>5. Deixe o seu comentário</h4>
                                </div>
                                <div class="checkout-cart-body">
                                    <div class="form-field">
                                        <label for="comment">A sua mensagem</label>
                                        <textarea name="comment" id="comment" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- termos e condições -->
                            <div class="form-field">
                                <label for="newsletter">
                                    <input type="checkbox" name="terms" id="newsletter" checked> Quero subscrever a newsletter
                                </label>
                            </div>
                            <div class="form-field">
                                <label for="terms">
                                    <input type="checkbox" name="terms" id="terms"> Li e concordo com os
                                    <a href="#" title>Termos e Condições</a>
                                </label>
                            </div>
                            <!-- finalizar compra -->
                            <button type="submit" class="btn btn-primary">Finalizar Compra</button>
                        </div>
                        <!-- ORDER DETAILS ENDS -->
                    </div>
                </form>
                <!-- table items ends -->
            </div>
        </div>
    </div>
</section>
<!-- checkout ends -->
<div class="empty-space-80"></div>

<?php include 'html_final.php' ?>