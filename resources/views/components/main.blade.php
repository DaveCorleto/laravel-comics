
@include('db')


<main>
    <h1>Hello from Main</h1>
    
    @foreach ($comics as $comic)
    <div > {{$comic->title}} </div>
    @endforeach 
</main>

<!-- <style lang=scss>
    h1 {
        color:blue;
    }
</style> -->