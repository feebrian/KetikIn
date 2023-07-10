@extends('template.template')
@section('container')
    <section id="home">
        @auth
            <h2 class="text-center font-bold text-2xl">Hello, {{ Auth::user()->username }} let's write some article</h2>
            <br>
        @endauth
        <div class="max-w-3xl mx-auto">
            <section id="article-container w-[42.5rem]">

                <article class="mb-8">
                    <div class="flex place-items-center gap-x-2.5">
                        <a href="#">
                            <img src="static/images/gacor.png" alt="gacor" class="w-8 h-8 rounded-full">
                        </a>

                        <p class="text-sm">
                            <a href="#">Adam Febrian Aditama</a><span class="text-slate-500"> - Feb 21, 2023</span>
                        </p>
                    </div>
                    <div class="flex">
                        <div class="block w-9/12">
                            <a href="#">
                                <h2 class="text-2xl font-bold my-1.5">Learn Tailwind is very easy</h2>
                            </a>
                            <a href="#">
                                <div class="font-serif">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil quibusdam soluta sint
                                        facere nam aut labore, culpa eaque commodi vel impedit, blanditiis totam ducimus
                                        modi dolores quidem nobis non fugiat!</p>
                                </div>
                            </a>
                            <div class="flex gap-1 mt-1">
                                <a href="#" class="badge badge-ghost">Programming</a>
                            </div>
                        </div>
                        <div class="w-3/12 flex justify-end">
                            <a href="#">
                                <img src="static/images/gacor.png" alt="gacor kang" class="w-28 h-28">
                            </a>
                        </div>
                    </div>

                </article>

            </section>
        </div>
    </section>
@endsection
