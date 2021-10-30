@extends('layouts.app')

@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">

            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
    

                <h1 class="doyou text-dark">
                    Do you want to become a developer?
                </h1><br>
               
                <center><button type="button" class="btn">Read More</button></center>


            </div>
        </div>
    </div>

        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border b border-gray-200">
            <div>
                <img src="https://cdn.pixabay.com/photo/2017/04/18/07/47/coffee-2238108_1280.jpg" 
                alt="" width="700" style="border-radius: 8px;">
            </div>

            <div class="m-auto sm:m-auto text-left w-4/5 block">
                <h2 class="text-3xl font-extrabold text-gray-600">
                    Struggling to become a developer?
                </h2>
                <P class="py-8 text-gray-500 text-l">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 

                
                <p class="font-extrabold terxt-gray-600 text-l pb-9">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry. 

                </p>
                <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s front-extrabold py3 px-8 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>


        <div class="text-center p-15 bg-black text-white w-1000">
            <h2 class="text-2xl pb-5 text-l">
                I am an expert in.....

            </h2>
            <span class="font-extrabold block text-4xl py-1">
                UX Design
            </span>

            <span class="font-extrabold block text-4xl py-1">
                Project Management
            </span>

            <span class="font-extrabold block text-4xl py-1">
                Digital Strategy
            </span>

            <span class="font-extrabold block text-4xl py-1">
                Backend Develpment
            </span>

        </div>


        <div class="text-center py-15">
            <span class="uppercase text-s text-gray-400">
                Blog
            </span>
            <h2>
                Recents Posts
            </h2>

            <p>

            </p>
        </div>

        <div class="sm:grid grid-cols-2 w-4/5 m-auto">
            <div class="flex bg-yellow-700 text-gray-100 pt-100">
                <div class="m-auto pt-4 pb-16 sm:m-auto w4/5 block">
                    <span class="uppercase text-xs pl-3">
                            PHP
                    </span>
                    <h3 class="text-xl font-bold py-10 pl-2">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde consequatur tempore quaerat debitis, aspernatur quia possimus ea blanditiis sint fugiat 
                    </h3>
                        <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                             Find Out More
                        </a>
                </div>
            </div>
            
                <div>
                    <img src="https://cdn.pixabay.com/photo/2014/01/16/00/51/ice-cream-246161_1280.jpg" alt="" width="700" height="700">
                 </div>
        </div>


@endsection