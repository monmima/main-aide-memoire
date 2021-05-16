@extends("zh/layout")

@section("content")

    <main>

        <header class="crud-zh-center">
            <h1>My ZH Word List</h1>
        </header>

        <hr>

        <div class="crud-zh-center">

            <header>
                <h1>Edit Form</h1>
            </header>
        
            <main>
        
                <form method="POST" action="/zh/{{ $data[0]->id }}" name="zh" id="zh">
                    <!-- cross-site request forgery -->
                    @csrf 
                    <!-- because modern browsers/forms can only take two different methods -->
                    @method('PUT')
        
                    <input type="text" name="fr" id="fr" placeholder="fr" value="{{ $data[0]->fr }}" required>
                    <input type="text" name="pinyin" id="pinyin" value="{{ $data[0]->pinyin }}" placeholder="pinyin" required>
                    <input type="text" name="zh" id="zh" value="{{ $data[0]->zh }}" placeholder="zh" required>
        
                    <!--BOUTONS-->
                    <div class="espaces-boutons">
                        <button type="reset" value="Reset">Reset</button>
                        <button type="submit" value="Submit" class="bouton-bleu">Submit</button>
                    </div>
                </form>

                <!-- delete button -->
                <div class="crud-friends-center">
                    <form action="/zh/{{ $data[0]->id }}/delete" method="post">
                        <input class="btn btn-default" type="submit" value="Delete" />
                        @csrf
                        @method('delete')
                    </form>
                </div>
        
            </main>

        </div>

    </main>

@endsection("content")


