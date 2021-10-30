@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>

    </div>
</div>
@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-20 pl-2">
        <p class="w-1/4 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
             {{session()->get('message')}}
        </p>

    </div>
    
@endif

@if (Auth::check())
<!--IF THE USER IS LOGGED THE BUTTON WILL BE PRINTED FOR THEM TO ADD NEW ARTICLES-->
    <div class="pt-15 w-4/5 m-auto">
        <a href="/blog/create"
        class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 rounded-3xl px-5">
        Create Post

        </a>

    </div> 
    
@endif
@foreach ($posts as $post )

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b">

    <div>
        <img src="https://cdn.pixabay.com/photo/2014/01/16/00/51/ice-cream-246161_1280.jpg" alt="" width="700" height="700">
     </div>

     <div>
         <h2 class="text-gray-700 font-bold text-5xl pb-4">
             {{$post->title}}
         </h2>

         <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800"> {{$post->user->name}}</span>, Created on{{date('jS M Y', strtotime($post->updated_at))}}
         </span>
         
         <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{$post->description}}
        </p>

        <a href="/blog/{{ $post->slug}}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">Keep Reading</a>
     </div>

</div>
    
@endforeach
@endsection