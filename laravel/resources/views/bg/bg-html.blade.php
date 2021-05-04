@extends("layout")

@section("content")

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> 

    <main class="page-baldurs-gate">
        <h1>Baldur's Gate Companions</h1>

        <div class="companions">
            @foreach($companions as $item)
                <figure>
                    <?php
                        $nameToShow = "$item->name";

                        if (strlen($item->last_name) > 0)
                            $nameToShow = $item->name . " " . $item->last_name
                    ?>

                    <a href="/bg-html/{{ $item->id }}">
                        <img src="{{ $item->portrait }}" alt="{{ $item->name }}">
                    </a>
                    <figcaption>
                        <p><a title="More info about {{ $item->name }}" href="/bg-html/{{ $item->id }}">{{ $nameToShow }}</a></p>
                        <p><a href="{{ $item->link }}">BG Wiki</a></p>
                        <p>{{ $item->class }}</p>
                        <p>{{ $item->race }}</p>
                        <p>{{ $item->alignment }}</p>
                    </figcaption>
                </figure>
            @endforeach
        </div>
    </main>

@endsection("content")


