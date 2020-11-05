<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{route('comics.store')}}" method="POST">
        @method('POST')
        @csrf

        <div>
            <label for="author_id">Author Id</label>
            <select name="author_id" id="author_id">
                @foreach ($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}} {{$author->lastname}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="original_title">original title</label>
            <input type="text" name="original_title" id="original_title">
        </div>
        <div>
            <label for="number">Number</label>
            <input type="number" name="number" id="number" min="1">
        </div>
        <div>
            <label for="n_pages">Num pages</label>
            <input type="number" name="n_pages" id="n_pages">
        </div>
        <div>
            <label for="edition">Edition</label>
            <input type="text" name="edition" id="edition">
        </div>
        <div>
            <label for="reading">reading</label>
            <input type="text" name="reading" id="reading">
        </div>
        <div>
            <label for="price">price</label>
            <input type="number" name="price" id="price">
        </div>
        <div>
            <label for="color">color</label>
            <input type="checkbox" name="color" id="color" value="1">
        </div>
        <div>
            <label for="release">release</label>
            <input type="number" name="release" id="release">
        </div>
        <div>
            <label for="cover">cover</label>
            <input type="text" name="cover" id="cover">
        </div>
        <div>
            <input type="submit" value="save">
        </div>


    </form>
</body>
</html>