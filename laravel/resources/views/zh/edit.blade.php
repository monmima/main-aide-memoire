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

                {{-- <form method="POST" action="/crud/{{ $friends[0]->id }}" name="crud" id="crud">
                    <!-- cross-site request forgery -->
                    @csrf 
                    <!-- because modern browsers/forms can only take two different methods -->
                    @method('PUT')
        
                    <input type="text" name="first_name" id="first_name" placeholder="first name" value="{{ $friends[0]->first_name }}" required>
                    <input type="text" name="last_name" id="last_name"  placeholder="last name" value="{{ $friends[0]->last_name }}" required>
        
                    <!--BOUTONS-->
                    <div class="espaces-boutons">
                        <button type="reset" value="Reset">Reset</button>
                        <button type="submit" value="Submit" class="bouton-bleu">Submit</button>
                    </div>
                </form> --}}
        
            </main>

        </div>

    </main>

@endsection("content")


