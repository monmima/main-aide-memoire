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

                <div id="id-{{ $item->id }}">

                    <button class="chinese" onclick="handleClick('id-{{ $item->id }}', 'chinese')">{{ $item->zh }}</button>

                    <p>{{ $item->pinyin }}</p>
                    
                    <button class="french" onclick="handleClick('id-{{ $item->id }}', 'french')">{{ $item->fr }}</button>

                    <hr>

                </div>

            @endforeach
        </div>

    </main>

@endsection("content")


