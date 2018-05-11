<?php include 'html_inicial.php' ?>
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
                        </tr>
                    </table>
                    <div class="empty-space-80"></div>
                    <button type="submit" class="btn btn-primary fright">Finalizar Compra</button>
                    <div class="empty-space-80"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- CART ENDS-->
<?php include 'html_final.php' ?>