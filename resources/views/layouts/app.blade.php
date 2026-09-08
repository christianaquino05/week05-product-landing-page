<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="@yield('description', 'Pinned by ESN creates custom and pre-designed button pins for individuals, organizations, and events.')"
    >

    <title>@yield('title', 'Pinned by ESN')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-stone-50 text-stone-900 antialiased">
    <main>
        @yield('content')
    </main>
</body>
</html>