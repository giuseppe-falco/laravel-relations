@foreach ($comics ?? '' as $comic)
    <div class="comic">
        <h1>Titolo: {{$comic->title}}</h1>
        <img src="{{$comic->cover}}" alt="">
        <h2>Titolo originale: {{$comic->original_title}}</h2>
        <h3>Autore: {{$comic->author}}</h3>
        <p>Numero: {{$comic->number}}</p>
        <p>Numero pagine: {{$comic->n_pages}}</p>
        <p>Livello lettura: {{$comic->reading}}</p>
        <p>Prezzo: {{$comic->price}}</p>
        <p>Colore: {{$comic->color}}</p>
        <p>Rilascio: {{$comic->release}}</p>
    </div>
@endforeach