<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My App</title>
    <script src="/js/app.js" defer></script>
    <link rel="stylesheet" href="/css/app.css">
    <script>
        const token = <?= json_encode($token) ?>
    </script>

</head>

<body>
    <nav class="navbar navbar-light bg-primary">
        <span class="navbar-brand mb-0 text-white h1 ">My App</span>
        <a class="mx-3 text-white h5" href="{{ route('home') }}">La mia dashboard</a>
    </nav>
    <div id="app">
        <myapp></myapp>
    </div>
</body>

</html>
