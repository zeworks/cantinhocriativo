<div class="col-xs-12">
    <div class="table-items">
        <div class="form-field">
            <label for="specific_subscribers">Selecionar Subscritores</label>
            <br>
            <select class="form-control multiple" name="specific_subscribers" id="specific_subscribers" multiple placeholder="Selecionar Subscritores">
                @foreach($subscribers as $subscriber)
                <option value="{{$subscriber->email}}">{{$subscriber->email}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="clearfix"></div>
        <div class="form-field">
            <label for="template_notification">Qual a notificação a usar?</label>
            <br>
            <select class="form-control multiple" name="template_notification" id="template_notification">
                @foreach($notifications as $notification)
                <option value="{{$notification->title}}">{{$notification->title}}</option>
                @endforeach
            </select>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>