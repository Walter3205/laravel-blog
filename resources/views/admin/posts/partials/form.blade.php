<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la Publicación']) !!}

    @error('name')
        <small class="text-danger"> {{$message}} </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug de la Publicación', 'readonly']) !!}
    @error('slug')
        <small class="text-danger"> {{$message}} </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    @error('category_id')
        <small class="text-danger"> {{$message}} </small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    
    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{$tag->name}}
        </label>
    @endforeach

    @error('tags')
        <br>
        <small class="text-danger"> {{$message}} </small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    
    <label class="mr-2">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>

    <label>
        {!! Form::radio('status', 2, false) !!}
        Publicado
    </label>

    @error('status')
        <br>
        <small class="text-danger"> {{$message}} </small>
    @enderror
</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            @isset ($post->image)
                <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
            @else
                <img id="picture" src="https://w.wallhaven.cc/full/4v/wallhaven-4v1exm.png" alt="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrará en el post') !!}
            {!! Form::file('file', ['form-control-file', 'accept' => 'image/*']) !!}

            @error('file')
                <small class="text-danger"> {{$message}} </small>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control', 'placeholder' => 'Extracto de la Publicación']) !!}

    @error('extract')
        <small class="text-danger"> {{$message}} </small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo de la Publicación:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Cuerpo de la Publicación']) !!}

    @error('body')
        <small class="text-danger"> {{$message}} </small>
    @enderror
</div>