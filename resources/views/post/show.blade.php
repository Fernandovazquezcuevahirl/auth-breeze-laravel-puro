<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post INDEX ') }}
        </h2>
    </x-slot>
    <h1>TITULO DEL POST {{$post->title}}</h1>
    <p>{{$post->category_id}}</p>

</x-app-layout>