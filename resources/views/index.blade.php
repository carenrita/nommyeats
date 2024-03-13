@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    🥞 nommy eats 🥞
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    let's get nomming! book a table w us
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                No plans for Easter Weekend? We've got you covered!
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Check out this chic restuarant @ Dublin 8
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Bun buns yappa yappa
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                discover more options
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            where to go 
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            random generator
        </span>
        <span class="font-extrabold block text-4xl py-1">
            blog recs
        </span>
        <span class="font-extrabold block text-4xl py-1">
            book a table top
        </span>
        <span class="font-extrabold block text-4xl py-1">
            podcast recs
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Paddy's day spots
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Parade time nommy pit stops
                </span>

                <h3 class="text-xl font-bold py-10">
                    Bare Cafe, Rathmines
                    

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://i.pinimg.com/originals/e6/9c/3a/e69c3ac12039fd00a82d60c9f34d9ccb.jpg" alt="">
        </div>
    </div>

    
@endsection