
<main>
    <h1>Hello from Main</h1>

    <div class="gallery">
    @foreach ($comics as $comic)
        <div class="card-immagine">
            <img src="{{$comic['thumb']}}" alt="">
            <div>{{$comic['title']}}</div> 
        </div>
    </div>
    @endforeach
</main>
