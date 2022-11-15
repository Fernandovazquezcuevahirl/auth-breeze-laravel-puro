<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post INDEX ') }}
        </h2>
    </x-slot>
    @if (session('status'))
    {{session('status')}}

@endif
<br>
<a href="{{route("post.create")}}">CREAR</a>
   
    <table>
        <thead>
        <tr>
            <th>TITULO</th>
            <th>CATEGORIA </th>
            <th>CONTENIDO </th>
            <th>DESCRIPCION</th>
            <th>POSTEADO</th>
            <th>ACCIONES</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
            <tr>
                <td>{{$p->title}}</td>
                <td>{{$p->category->title}} </td>
                <td>{{$p->content}} </td>
                <td>{{$p->description}} </td>
                <td>{{$p->posted}}</td>
                <td>   
                     <a href="{{route("post.edit",$p)}}">editar</a>
                     <a href="{{route("post.show",$p)}}">ver</a>
                     <form action="{{route("post.destroy",$p)}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $posts->links()}} --}}
    
</x-app-layout>