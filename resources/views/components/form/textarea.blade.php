<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kullanici_adi">{{$isim}} </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        {{ Form::textarea($name, $value, array_merge(['class' => 'form-control col-md-6 col-xs-6'], $attributes)) }}
    </div>
</div>