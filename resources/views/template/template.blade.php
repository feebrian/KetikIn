<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>

    @vite('resources/css/app.css')
</head>

<body>

    <div class="mx-auto min-h-screen flex flex-col justify-between">

        <div>
            <nav class="shadow-md sticky top-0">
                @include('template.partials.navbar')
            </nav>

            <main class="container mx-auto">
                @yield('container')
            </main>
        </div>

        <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
            @include('template.partials.footer')
        </footer>
    </div>

</body>

</html>
