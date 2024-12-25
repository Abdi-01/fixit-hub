<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'FixIt Hub')</title>

    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-slate-200 text-gray-900">
    <x-navbar />
    <div class="container mx-auto p-4 py-24">
        @yield('content')
    </div>

</body>

</html>
