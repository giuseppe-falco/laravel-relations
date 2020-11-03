<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>comics ajax</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <div class="container">

    </div>

    <script id="entry-template" type="text/x-handlebars-template">
        <div class="comic">
            <h1>@{{title}}</h1>
            <img src="@{{cover}}" alt="">

        </div>
    </script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>