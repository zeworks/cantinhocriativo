<div class="col-lg-9 col-sm-6">
    <div class="row">
        <div class="col-xs-12">
            <div class="table-items">
                <div class="form-field clearfix">
                    <label for="title">Título</label>
                    <input type="text" name="title" id="title" class="form-control" required value="{{{ isset($products->title) ? $products->title : '' }}}">
                </div>
                <br>
                <div class="form-field">
                    <span>Descrição do Produto</span>
                    <br/>
                    <br/>
                    <textarea name="desc_product" class="text-editor">{{ isset($products->description) ? $products->description : '' }}</textarea>
                </div>
                <br>
                <div class="form-field">
                    <span>Detalhes do Produto</span>
                    <br/>
                    <br/>
                    <textarea name="detail_product" class="text-editor">{{ isset($products->details) ? $products->details : '' }}</textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="table-items">
                <p>
                    <strong>Imagens Adicionais</strong>
                </p>
                <br>
                <div class="form-field aditional-files">
                    <div id="addImages" class="dropzone"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @if($websitesettings[0]->website_mode_store)
        <div class="col-sm-4">
            <div class="table-items">
                <p>
                    <strong>Características do Produto</strong>
                </p>
                <br>
                <div class="form-field">
                    <div class="row match-height">
                        <div class="col-xs-12 col-sm-6" data-mh="produt">
                            <label for="price_noiva">Preço
                                <strong>S/IVA</strong>
                            </label>
                            <div class="input-group">
                                <input type="text" name="price_noiva" id="price_noiva" class="form-control">
                                <span class="input-group-addon">€</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6" data-mh="produt">
                            <label for="price_iva">Preço
                                <strong>C/IVA</strong>
                            </label>
                            <div class="input-group">
                                <input type="text" name="price_iva" id="price_iva" class="form-control">
                                <span class="input-group-addon">€</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6" data-mh="produt">
                            <label for="price_old">Preço
                                <strong>Antigo</strong>
                            </label>
                            <div class="input-group">
                                <input type="text" name="price_old" id="price_old" class="form-control">
                                <span class="input-group-addon">€</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6" data-mh="produt">
                            <label for="imposto">Imposto</label>
                            <div class="input-group">
                                <input type="text" name="imposto" id="imposto" class="form-control">
                                <span class="input-group-addon">%</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6" data-mh="produt">
                            <label for="shipping">Preço
                                <strong>Envio</strong>
                            </label>
                            <div class="input-group">
                                <input type="text" name="shipping" id="shipping" class="form-control">
                                <span class="input-group-addon">€</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="col-sm-4">
            <div class="table-items">
                <div class="form-field">
                    <div class="row match-height">
                        <div class="col-xs-12" data-mh="produt">
                            <label for="sku">Referência do Produto</label>
                            <input type="text" name="sku" id="sku" class="form-control" value="{{{ isset($products->reference) ? $products->reference : '' }}}">
                        </div>
                        <div class="col-xs-12" data-mh="produt">
                            <label for="weight_product">Peso do Produto</label>
                            <input type="text" name="weight_product" id="weight_product" class="form-control" value="{{{ isset($products->weight_product) ? $products->weight_product : '' }}}">
                        </div>
                        <div class="col-xs-12" data-mh="produt">
                            <label for="size_product">Medidas do Produto</label>
                            <input type="text" name="size_product" id="size_product" class="form-control" value="{{{ isset($products->size_product) ? $products->size_product : '' }}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="table-items">
                <p>
                    <strong>Cores do Produto</strong>
                    <a href="#" class="link clean-colors fright">Limpar</a>
                </p>
                <br>
                <div class="form-field">
                    <input type="color" placeholder="ex: #000 ..." onchange="insertColorProduct($(this).val())" class="form-control" name="available_color_product_text" id="available_color_product_text">
                    <!-- available colors -->
                    <div class="available-colors">
                        @if(isset($products->colors) && !empty($products->colors))
                            <?php $colors = array_filter(explode(",",$products->colors)); ?>
                            @foreach($colors as $color)
                            <span class='color-item' style='background-color: {{$color}} '></span>
                            @endforeach
                        @endif
                    </div>
                    <input type="hidden" value="{{(isset($products->colors) && !empty($products->colors)) ? $products->colors : ''}}" name="colors_submited" class="form-control colors-submited">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="row">
        <div class="col-xs-12">
            <div class="table-items">
                <div class="form-field fleft">
                    <span>Estado</span>
                    <br/>
                    <br/>
                    <!-- product status -->
                    <input type="hidden" name="status_hidden" class="status_hidden"> @isset($products->status)
                    <div class="switch {{ ($products->status == 'on') ? 'checked' : '' }}">
                        <input type="checkbox" class="btsp-check" name="status_item" {{ ($products->status == 'on') ? 'checked' : '' }}>
                        <span class="toggle toggle--round"></span>
                    </div>
                    @else
                    <div class="switch">
                        <input type="checkbox" class="btsp-check" name="status_item">
                        <span class="toggle toggle--round"></span>
                    </div>
                    @endisset
                    <!-- /product status -->
                </div>
                <div class="fright form-field">
                    @isset($products->new_product)
                    <input type="checkbox" name="new_product" id="new_product" {{ ($products->new_product == 'on') ? 'checked' : '' }}>
                    @else
                    <input type="checkbox" name="new_product" id="new_product">
                    @endisset
                    <label for="new_product">Produto Novo?</label>
                </div>
                <div class="clearfix"></div>
                <br>
                <div class="form-field">
                    <span>Imagem de Destaque
                        <strong>1920x520</strong>
                    </span>
                    <br>
                    <br>
                    <!-- previewed image -->
                    <div class="buttons-top fleft">
                        <img class="image-previewer" @isset($products->featured_image) src="{{ asset('storage/images/'.$products->featured_image) }}" @endisset>
                        <input type="file" name="upload_photo" id="upload_photo" class="hidden upload_photo">
                        <a href="#" class="btn btn-default upload" data-target="upload_photo">Enviar Ficheiro</a>
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