<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Include necessary meta tags, styles, and scripts -->
    <title>Laravel Vue Project</title>
</head>
<body>
    <div id="app">
        <hello></hello>
    </div>

    @if(app()->isLocal())
        <!-- During development, use Vite development server -->
        <script type="module" src="http://localhost:5174/@vite/client"></script>
        <script type="module" src="http://localhost:5174/js/app.js"></script>
    @else
        <!-- In production, use the compiled assets from Laravel Mix -->
        <script src="{{ mix('js/app.js') }}"></script>
    @endif
</body>
</html>
