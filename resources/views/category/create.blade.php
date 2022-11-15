<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h1>
        CREAR POST
    </h1>

       @include('category/fragment/_errors-form')

    
    <form action="{{ route('category.store')}}" method="post">
       
        @include('category/fragment/_form')

    </form>
</x-app-layout>
