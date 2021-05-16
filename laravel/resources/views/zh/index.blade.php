@extends("zh/layout")

@section("content")

    <main>


        <header class="crud-zh-center">
            
            <h1>My ZH Word List</h1>

        </header>

        <hr>

        <div class="crud-zh-center">
            <p><a href="/zh/create">Create Entry</a></p>
            <button class="button-all-sounds btn btn-success" onclick="handleClickMainButton()">Jouer tous les sons</button>


            <div class="crud-zh-grid">

                @foreach($data as $item)

                    <div class="center-figures">
                        <figure id="id-{{ $item->id }}" class="bg-gray">
                            <button class="french btn btn-primary" onclick="handleClick('id-{{ $item->id }}', 'french')">{{ $item->fr }}</button>
                            
                            <button class="chinese btn btn-success" onclick="handleClick('id-{{ $item->id }}', 'chinese')">{{ $item->zh }}</button>

                            <p>{{ $item->pinyin }}</p>
                            <p><a class="btn btn-default" href="/zh/{{ $item->id }}/edit">Edit</a></p>



                        </figure>
                    </div>

                @endforeach

            </div>
        </div>

    </main>

@endsection("content")


