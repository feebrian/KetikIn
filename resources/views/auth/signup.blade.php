@extends('template.auth')
@section('auth-form')
    <form action="/signup" method="POST">
        @csrf
        <div class="form-group">
            <label for="username" class="label">Username</label>
            <input type="text" name="username" placeholder="Freaky Fredrick" id="username"
                class="input input-md input-bordered w-full max-w-xs" />
        </div>

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

        <p class="text-center text-sm m-1">have an account? <a href="/login" class="underline">sign in</a> now.</p>

        <div class="button-container flex justify-center">
            <button class="btn btn-primary m-2">Sign Up</button>
        </div>
    </form>
@endsection
