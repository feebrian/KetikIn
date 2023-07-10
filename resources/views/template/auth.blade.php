<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KetikIn | {{ $title }}</title>

    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto h-screen flex items-center justify-center">
        <div class="card w-96 bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="text-lg font-semibold text-center">KetikIn</h2>

                @include('template.partials.tabs')

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-sm">{{ session('success') }}</span>
                    </div>
                @endif

                @yield('auth-form')

            </div>
        </div>
    </div>
</body>

</html>
