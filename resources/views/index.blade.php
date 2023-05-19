@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-green-500 text-6xl uppercase font-bold text-shadow-md pb-14">
                    Welcome to ConspiracyBlog
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    View Blog
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2020/04/10/00/40/corona-5023573_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Want to find out the world's hidden secerts?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Check out our blog posts for the most up to date news and information on all conspiracy theories
            </p>

            <a 
                href="/blog"
                class="uppercase bg-green-500 text-gray-100 text-s font-extrabold py-3 px-8 squared-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            Here you'll find out everything there is to know about...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Aliens
        </span>
        <span class="font-extrabold block text-4xl py-1">
            UFOs
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Illuminati
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Monsters
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            More
        </span>

        <h2 class="text-4xl font-bold py-10">
            Additional Content
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Can't get enough of ConspiracyBlog? Check out all our additional content here including our spotify playlist and how to contact us.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-green-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Official Spotify PlayList
                </span>
                <br><br/>
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/0HhGjVBHMhQ4OaB5J0mKVl?utm_source=generator" width="100%" height="352" frameBorder="1" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

                <h3 class="text-xl font-bold py-10">
                    Need some tunes to vibe out to while you browse the site? We got you covered with this banger playlist!
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 squared-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2019/12/09/05/16/alien-4682651_960_720.jpg" alt="">
        </div>
    </div>
@endsection