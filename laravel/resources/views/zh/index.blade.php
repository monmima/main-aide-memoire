@extends("zh/layout")

@section("content")

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> 


    <main>


        <header class="crud-zh-center">
            
            <h1>My ZH Word List</h1>

        </header>

        <hr>

        <div class="crud-zh-center">
            @foreach($data as $item)

                <div>

                    <button id="id-{{ $item->id }}" onclick="handleClick('id-{{ $item->id }}')">{{ $item->zh }}</button>

                    <p>{{ $item->pinyin }}</p>
                    <p>{{ $item->fr }}</p>

                    <hr>

                </div>

            @endforeach
        </div>

    </main>

@endsection("content")


