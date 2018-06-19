<div class="col-lg-9 col-sm-6 col-xs-12">
    <div class="table-items">
        <div class="form-field clearfix">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control" required value="{{{ isset($blogs->title) ? $blogs->title : '' }}}">
        </div>
        <br>
        <div class="form-field">
            <span>Descrição</span>
            <br/>
            <br/>
            <textarea name="editor_content" class="text-editor" required>{{isset($blogs->description) ? $blogs->description : '' }}</textarea>
        </div>
    </div>
    <hr>
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
<div class="col-lg-3 col-sm-6 col-xs-12">
    <div class="table-items">
        <div class="form-field">
            <span>Estado</span>
            <br/>
            <br/>
            <!-- product status -->
            <input type="hidden" name="status_hidden" class="status_hidden"> @isset($blogs->status)
            <div class="switch {{ ($blogs->status == 'on') ? 'checked' : '' }}">
                <input type="checkbox" class="btsp-check" name="status_item" {{ ($blogs->status == 'on') ? 'checked' : '' }}>
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

        <br>
        <div class="form-field">
            <span>Imagem de Destaque
                <strong>1920x520</strong>
            </span>
            <br>
            <br>
            <!-- previewed image -->
            <div class="buttons-top fleft">
                <img class="image-previewer" @isset($blogs->featured_image) src="{{ asset('storage/images/'.$blogs->featured_image) }}" @endisset>
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