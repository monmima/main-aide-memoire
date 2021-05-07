@extends("zh/layout")

@section("content")

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> 

    <main>


        <header class="crud-friends-center">
            
            <h1>My ZH Word List</h1>

        </header>

        <hr>

        <div class="crud-friends-center">
            @foreach($data as $item)

                <div>

                    {{ $item->zh }} - {{ $item->pinyin }} - {{ $item->fr }}

                </div>

            @endforeach
        </div>

    </main>

@endsection("content")


