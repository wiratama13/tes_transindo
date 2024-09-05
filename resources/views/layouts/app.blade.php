<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar with Hamburger</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('includes.style')
</head>
<body>

<!-- Sidebar -->
@include('includes.sidebar')

<!-- Page content -->
<div id="content">
    <nav class="navbar navbar-light bg-light">
        <button class="hamburger" id="sidebarToggle">
            &#9776; <!-- Hamburger icon -->
        </button>
    </nav>

    <div class="container p-3">
      @yield('content')
    </div>
</div>

@include('includes.script_auth')

</body>
</html>
