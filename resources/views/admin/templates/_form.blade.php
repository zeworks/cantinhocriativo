@csrf
<div class="col-lg-9 col-sm-6 col-xs-12">
    <div class="table-items">
        <div class="form-field clearfix">
            <label for="title">Nome da Página</label>
            <input type="text" name="title" id="title" class="form-control" required value="{{{ isset($templatedata->title) ? $templatedata->title : '' }}}">
        </div>
    </div>
    <hr>
    <h2 class="page-title">Blocos da Página</h2>
    <br>
    <div class="table-items">
        <div class="bloc">
            <div class="bloc-item clearfix">
                <div class="col-xs-12">
                    <a href="" class="link fright btn-delBloc">
                        <i class="fa fa-trash"></i>
                    </a>
                    <p class="strong">Bloco Nº 1</p>
                    <div class="form-field">
                        <label for="title_bloc_page_1">Título do Bloco</label>
                        <input type="text" name="title_bloc_page" id="title_bloc_page_1" class="form-control">
                    </div>
                    <br>
                    <div class="form-field">
                        <label for="resum_bloc_item_1">Resumo do Bloco</label>
                        <input type="text" name="resum_bloc_item" id="resum_bloc_item_1" class="form-control">
                    </div>
                    <br>
                    <div class="form-field">
                        <label for="desc_bloc_item_1">Descrição do Bloco</label>
                        <textarea name="desc_bloc_item" id="desc_bloc_item_1" class="text-editor"></textarea>
                    </div>
                    <br>
                    <div class="buttons-top fleft">
                        <img class="image-previewer">
                        <input type="file" name="upload_photo_1" id="upload_photo_1" class="hidden upload_photo">
                        <a href="#" class="btn btn-default upload" data-target="upload_photo_1">Enviar Ficheiro</a>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-default btn-addBloc">
            <i class="far fa-plus-square"></i> Adicionar Bloco</button>
    </div>
    <hr>
</div>
<div class="col-lg-3 col-sm-6 col-xs-12">
    <div class="table-items">
        <div class="form-field">
            <span>Estado</span>
            <br/>
            <br/>
            <!-- template status -->
            <input type="hidden" name="status_hidden" class="status_hidden"> @isset($templatedata->status)
            <div class="switch {{ ($templatedata->status == 'on') ? 'checked' : '' }}">
                <input type="checkbox" class="btsp-check" name="status_item" {{ ($templatedata->status == 'on') ? 'checked' : '' }}>
                <span class="toggle toggle--round"></span>
            </div>
            @else
            <div class="switch">
                <input type="checkbox" class="btsp-check" name="status_item">
                <span class="toggle toggle--round"></span>
            </div>
            @endisset
            <!-- /template status -->
        </div>
        <div class="form-field">
            <span>Imagem de Destaque
                <strong>1920x900</strong>
            </span>
            <br>
            <br>
            <!-- previewed image -->
            <div class="buttons-top fleft">
                <img class="image-previewer" @isset($templatedata->featured_image) src="{{ asset('storage/images/'.$templatedata->featured_image) }}" @endisset>
                <input type="file" name="upload_photo" id="upload_photo" class="hidden upload_photo">
                <a href="#" class="btn btn-default upload" data-target="upload_photo">Enviar Ficheiro</a>
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