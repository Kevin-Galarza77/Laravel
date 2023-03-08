<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Buscar Post por nombre">
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td with="10px">
                        <a class="btn btn-primary" href="{{route('admin.posts.edit',$post)}}">Editar</a>
                    </td>
                    <td with="10px">
                        <form action="{{route('admin.posts.destroy',$post)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger text-danger link-light" type="submit">Eliminar</button>
                        </form>
                    </td>
                    </td>
                </tr>


                @endforeach
            </tbody>

        </table>
    </div>
    <div class="card-footer">
        {{$posts->links()}}
    </div>
</div>