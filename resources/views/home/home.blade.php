@extends('template.template')
@section('container')
    <section id="home">
        @auth
            <h2 class="text-center font-bold text-2xl">Hello, {{ Auth::user()->username }} let's write some article</h2>
            <br>
        @endauth
        <div class="max-w-3xl mx-auto">
            <section id="article-container">

                <article>

                </article>

            </section>
        </div>
    </section>
@endsection
