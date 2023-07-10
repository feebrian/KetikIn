@extends('template.auth')
@section('auth-form')
    <form action="/login" method="POST">
        @csrf
        <div class="form-group">
            <label for="email" class="label">Email</label>
            <input type="email" name="email" placeholder="someone@gmail.com" id="email"
                class="input input-md input-bordered w-full max-w-xs" />
        </div>

        <div class="form-group">
            <label for="password" class="label">Password</label>
            <input type="password" name="password" placeholder="sshhh it's a secret" id="password"
                class="input input-md input-bordered w-full max-w-xs" />
        </div>

        <p class="text-center text-sm m-1">don't have an account? <a href="/signup" class="underline">sign
                up</a> first.</p>

        <div class="button-container flex justify-center">
            <button class="btn btn-primary m-2">Login</button>
        </div>
    </form>
@endsection
