<x-app-layout>
    <div class="d-flex justify-content-between align-items-center mx-3">
    <h1 class="text-center fs-1 my-3">Mis Posts</h1>
    <a href="{{route('admin.posts.create')}}" class="btn btn-success mt-3" >Nuevo Post</a>
    </div>
    @livewire('admin.posts-index')
</x-app-layout>