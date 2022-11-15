<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post INDEX ') }}
        </h2>
    </x-slot>
    <h1>
        CREAR POST
    </h1>

       @include('post/fragment/_errors-form')

    
    <form action="{{ route('post.store')}}" method="post">
       
        @include('post/fragment/_form')

    </form>
</x-app-layout>