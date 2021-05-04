@extends("layout")

@section("content")

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> 

    <main class="page-baldurs-gate">
        <h1>Baldur's Gate Companions - 4 at a time</h1>

        <!-- navigation -->
        <!-- not sure why this creates the proper navigation, but it does -->
        <!-- once you have queried the database with the pagination() method, the following line is all that you need on the client side -->
        <!-- the class is my own creation is does nothing else than center the buttons, etc. -->
        <nav class="bg-flex-navigation">{{ $companions }}</nav>

        <div class="companions">

            <!-- portrait loop -->
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
            <!-- portrait loop end -->

        </div>
    </main>

@endsection("content")


