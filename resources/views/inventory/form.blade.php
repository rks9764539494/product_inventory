<div class="mb-3" >
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, ['class' => 'form-control'. ($errors->has('name') ? ' is-invalid' : '')]) }}
    @error('name')
        <div id="nameHelp" class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    {{ Form::label('price', 'Price') }}
    {{ Form::number('price', null, ['class' => 'form-control'. ($errors->has('price') ? ' is-invalid' : '')]) }}
    @error('price')
        <div id="priceHelp" class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description', null, ['class' => 'form-control'. ($errors->has('description') ? ' is-invalid' : '')]) }}
    @error('description')
        <div id="descriptionHelp" class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    {{ Form::label('stock', 'Stock') }}
    {{ Form::number('stock', null, ['class' => 'form-control'. ($errors->has('stock') ? ' is-invalid' : '')]) }}
    @error('stock')
        <div id="stockHelp" class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>