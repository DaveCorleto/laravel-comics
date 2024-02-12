<header>
    <nav class="d-flex p-2 ">
        <div class="logo">
            <img src="{{Vite :: asset ('resources/imgs/dc-logo.png')}}" alt="">
        </div>
        <ul class="list">
            @foreach ($headli as $head)
            <li>{{$head}}</li>
            @endforeach
        </ul>
        <div class="searchbar">
            <span>Search</span>
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>

    </nav>
    <div class="jumbotron">
        <img src="Vite::asset(/resources/imgs/jumbotron.jpg)">
    </div>
</header>
