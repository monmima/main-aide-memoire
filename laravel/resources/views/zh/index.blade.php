@extends("zh/layout")

@section("content")

    <main>


        <header class="crud-zh-center">
            
            <h1>My ZH Word List</h1>

        </header>

        <hr>

        

        <div class="crud-zh-center">
            <button class="button-all-sounds" onclick="handleClickMainButton()">Tous les sons</button>

            @foreach($data as $item)

                <div id="id-{{ $item->id }}" class="crud-zh-grid">

                    <button class="chinese" onclick="handleClick('id-{{ $item->id }}', 'chinese')">{{ $item->zh }}</button>

                    <p>{{ $item->pinyin }}</p>
                    
                    <button class="french" onclick="handleClick('id-{{ $item->id }}', 'french')">{{ $item->fr }}</button>

                </div>

                <hr>

            @endforeach
        </div>

    </main>

@endsection("content")


