@extends("layout")

@section("content")
    <main>
        <h1>Displaying stuff from the database in many different ways</h1>

        <ol>
            <li><?php var_dump($post) ?></li>
            <li>{{ var_dump($post) }}</li>

            <li><?php print_r($post) ?></li>
            <li>{{ print_r($post) }}</li>

            <li><?php echo $post->id, $post->slug, $post->body ?></li>
            <li>{{ $post->id }} {{ $post->slug }} {{ $post->body }}</li>

            <li><?php print_r($everything) ?></li>
            <li>{{ print_r($everything) }}</li>
        </ol>
        
        <h3>Loop on $post with print_r()</h3>
        <ul>
            @foreach($post as $item)
                <li><?php print_r($item) ?></li>
            @endforeach
        </ul>

        <h3>Loop on $everything with curly brackets</h3>
        <ul>
            @foreach($everything as $item)
                <li>{{ $item->id }} - {{ $item->slug }} {{ $item->body }}</li>
            @endforeach
        </ul>


    </main>
@endsection("content")


