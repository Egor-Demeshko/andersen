<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Andersen Task</title>
</head>


<body class="container ">
    <div class="mt-5 d-flex align-items-center flex-column">
        <h1>Andersern Task</h1>

        <x-form />
    </div>

    <section class="mt-5">
        @yield('data')
    </section>
</body>

</html>
