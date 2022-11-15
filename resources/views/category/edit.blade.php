<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h1>
        ACTUALIZAR CATEGORIA {{$category->title}}
    </h1>

       @include('category/fragment/_errors-form')
       <form action="{{ route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">

      
        @method("PUT")
        @include('category/fragment/_form')

    </form>
</x-app-layout>
