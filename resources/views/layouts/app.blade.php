<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Blog')</title>
    <!-- Add your additional head elements here -->
</head>

<body>
    <nav>
    </nav>

    <div>
        @yield('content')
    </div>

    <!-- Add your additional footer elements here -->
</body>

</html>