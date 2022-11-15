<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if (session('status'))
    {{session('status')}}

@endif
<br>
    <a href="{{route("category.create")}}">CREAR</a>
    <table>
        <thead>
        <tr>
            <th>TITULO</th>
            <th>ACCIONES</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($category as $c)
            <tr>
                <td>{{$c->title}}</td>
                <td>   
                     <a href="{{route("category.edit",$c)}}">editar</a>
                     <a href="{{route("category.show",$c)}}">ver</a>
                     <form action="{{route("category.destroy",$c)}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $category->links()}} --}}
    
</x-app-layout>
