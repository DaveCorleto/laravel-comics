
<main>

    <div class="gallery">
    @foreach ($comics as $comic)
    
        <div class="card-immagine">
            <img src="{{$comic['thumb']}}" alt="">
            <div>{{$comic['title']}}</div> 
        </div>
    @endforeach
    </div>
</main>
