@extends('template.template')
@section('container')
    <section id="home">

        <div class="max-w-4xl mx-auto grid grid-cols-3 gap-x-4 my-8">
            <section id="article-container" class="col-span-2">
                <div class="article">
                    @foreach ($posts as $p)
                        <article class="mb-8">
                            <div class="flex place-items-center gap-x-2.5">
                                <a href="user/{{ $p->user->id }}">
                                    <img src="{{ $p->user->profile_pict }}" alt="{{ $p->user->username }} profile picture"
                                        class="w-8 h-8 rounded-full">
                                </a>

                                <p class="text-sm">
                                    <a href="#">{{ $p->user->username }}</a><span class="text-slate-500"> - Feb 21,
                                        2023</span>
                                </p>
                            </div>
                            <div class="flex">
                                <div class="block w-9/12">
                                    <a href="#">
                                        <h2 class="text-2xl font-bold my-1.5">{{ $p->title }}</h2>
                                    </a>
                                    <a href="#">
                                        <div class="font-serif break-words">
                                            <p>{!! $p->content !!}</p>
                                        </div>
                                    </a>
                                    <div class="flex gap-1 mt-1">
                                        <a href="category/{{ $p->category->name }}"
                                            class="badge badge-ghost">{{ $p->category->name }}</a>
                                    </div>
                                </div>
                                <div class="w-3/12 flex justify-end">
                                    <a href="#">
                                        <img src="static/images/gacor.png" alt="gacor kang" class="w-28 h-28">
                                    </a>
                                </div>
                            </div>

                        </article>
                        <div class="divider mt-0"></div>
                    @endforeach
                </div>
            </section>
            <section id="sidebar">
                <aside class="text-center">
                    <h2>ini nanti akan jadi sidebar yang berisi newest post dan teman-temannya</h2>
                </aside>
            </section>
            {{ $posts->links('pagination::tailwind') }}
        </div>
    </section>
@endsection
