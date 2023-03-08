<x-app-layout>
    <h1 class="text-center fs-1 my-3">Crear Nuevo Post</h1>
    <div class="card">
        <div class="card-body">

   
                {!! Form::open(['route'=>'admin.posts.store']) !!}

                {!! Form::hidden('user_id',auth()->user()->id) !!}

                <div class="form-group mb-3">
                    {!! Form::label('name','Nombre:') !!}
                    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del Post']) !!}
                    @error('name')
                    <small>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    {!! Form::label('slug','Slug:') !!}
                    {!! Form::text('slug',null,['class'=>'form-control','placeholder'=>'Ingrese el slug del Post']) !!}
                    @error('slug')
                    <small>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    {!! Form::label('Category_id','Categoria') !!}
                    {!! Form::select('Category_id', $categories, null, ['class'=>'form-control'] ) !!}
                    @error('Category_id')
                    <small>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <p class=" font-weight-bold">Etiquetas</p>
                    @foreach($tags as $tag)
                    <label>
                         {!! Form::checkbox('tags[]',$tag->id,null) !!}
                         {{$tag->name}}
                    </label>
                    @endforeach
                    @error('tags')
                    <small>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    {!! Form::label('extract','Extracto:') !!}
                    {!! Form::textarea('extract',null,['class'=>'form-control']) !!}
                    @error('extracto')
                    <small>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    {!! Form::label('body','Body:') !!}
                    {!! Form::textarea('body',null,['class'=>'form-control']) !!}
                    @error('body')
                    <small>{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group mb-3">
                <p class=" font-weight-bold">Estado</p>
                <label>
                    {!! Form::radio('status',1,true) !!}
                    Borrado
                </label>
                <label>
                    {!! Form::radio('status',2) !!}
                    Publicado
                </label>
                @error('status')
                    <small>{{$message}}</small>
                    @enderror
                </div>


                {!! Form::submit('Crear Post',['class'=>'btn btn-primary text-primary link-light']) !!}
                {!! Form::close() !!}



                <!-- <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
                <div class="form-group mb-3">
                    <label for="name">Nombre:</label>
                    <input class="form-control" id="name" name="name" placeholder="Ingresa el nombre del Post" autocomplete="off" required>
  
                </div>
                <div class="form-group mb-3">
                    <label for="Slug">Slug:</label>
                    <input class="form-control" id="Slug" name="Slug" placeholder="Ingresa el Slug del Post" required>

                </div>
                <div class="form-group mb-3">
                    <label for="Category_id">Categoria:</label>
                    <select name="Category_id" id="Category_id" class=" form-control" required>
                        @foreach($categories as $clave=>$valor)
                        <option value="{{$clave}}">{{$valor}} </option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group mb-3">
                    <p class=" font-weight-bold">Etiquetas</p>
                    @foreach($tags as $tag)
                    <label class="mx-2">
                        <input type="checkbox" id="tags[]" value="{{$tag->id}}">
                        {{$tag->name}}
                    </label>
                    @endforeach

                </div>
                <div class="form-group mb-3">
                    <label for="extract">Extracto:</label>
                    <textarea name="extracto" id="extracto" class="form-control" required>

                    </textarea>

                </div>
                <div class="form-group mb-3">
                    <label for="body">Cuerpo del Post:</label>
                    <textarea name="body" id="body" class="form-control" required>

                    </textarea>
 
                </div>
                <div class="form-group mb-3">
                    <p class=" font-weight-bold">Estado</p>

                    <label class="mx-2">

                        <input type="radio" name="status" value="1" checked>
                        Borrador

                    </label>

                    <label class="mx-2">

                        <input type="radio" name="status" value="2">
                        Publicado

                    </label>

                </div>
                <div class="text-center">
                    <button class="btn btn-primary text-primary link-light m-3 px-5" type="submit">Crear</button>
                </div> -->


        </>
    </div>

</x-app-layout>