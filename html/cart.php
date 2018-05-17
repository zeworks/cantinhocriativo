<?php include 'html_inicial.php' ?>
<div class="empty-space-20"></div>
<!-- CART -->
<section>
    <div class="container">
        <h1>Carrinho de Compras</h1>
        <div class="row">
            <div class="col-xs-12">
                <form action="checkout.php">
                    <div class="empty-space-80"></div>
                    <table class="cart-table" style="width: 100%;" cellspacing="0" cellpadding="0">
                        <tr>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                            <th width="100"></th>
                        </tr>
                        <tr>
                            <td>
                                <div class="row">

                                    <div class="col-md-2">
                                        <img class="img-responsive" src="https://dummyimage.com/90x90/f2f2f2/000" alt="">
                                    </div>
                                    <div class="col-md-9">
                                        <h4>Nome do produto</h4>
                                        <small>ref: 29123</small>
                                        <br><br>
                                        <div class="product-available__items">
                                            <div class="available__items">
                                                Cor:
                                                <span class="item" data-color="black"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>100€</td>
                            <td>
                                <div class="cart-qty cart-qty--large clearfix">
                                    <button class="cart-qty__btn qty-less" type="button">-</button>
                                    <input type="text" name="cart_quant" class="cart-qty__input">
                                    <button class="cart-qty__btn qty-plus" type="button">+</button>
                                </div>
                            </td>
                            <td>100€</td>
                            <td>
                                <a href="#" class="side-cart__del side-cart__del-tr">eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row">

                                    <div class="col-md-2">
                                        <img class="img-responsive" src="https://dummyimage.com/90x90/f2f2f2/000" alt="">
                                    </div>
                                    <div class="col-md-9">
                                        <h4>Nome do produto</h4>
                                        <small>ref: 29123</small>
                                        <br><br>
                                        <div class="product-available__items">
                                            <div class="available__items">
                                                Cor:
                                                <span class="item" data-color="red"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>100€</td>
                            <td>
                                <div class="cart-qty cart-qty--large clearfix">
                                    <button class="cart-qty__btn qty-less" type="button">-</button>
                                    <input type="text" name="cart_quant" class="cart-qty__input">
                                    <button class="cart-qty__btn qty-plus" type="button">+</button>
                                </div>
                            </td>
                            <td>100€</td>
                            <td>
                                <a href="#" class="side-cart__del side-cart__del-tr">eliminar</a>
                            </td>
                        </tr>
                    </table>
                    <div class="empty-space-20"></div>
                    <div class="row">
                        <div class="col-sm-offset-7 col-sm-5">
                            <div class="checkout-cart">
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
                    </div>
                    <button type="submit" class="btn btn-primary fright">Finalizar Compra</button>
                    <div class="empty-space-80"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- CART ENDS-->
<?php include 'html_final.php' ?>