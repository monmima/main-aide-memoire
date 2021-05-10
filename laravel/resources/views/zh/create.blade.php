@extends("zh/layout")

@section("content")

    <main>

        <header class="crud-zh-center">
            <h1>My ZH Word List</h1>
        </header>

        <hr>

        <div class="crud-zh-center">

            <header>
                <h1>Create Form</h1>
            </header>
        
            <main>
        
                <form method="POST" action="/zh" name="zh" id="zh">
                    @csrf <!-- cross-site request forgery -->
        
                    <input type="text" name="fr" id="fr" placeholder="fr" required>
                    <input type="text" name="pinyin" id="pinyin"  placeholder="pinyin" required>
                    <input type="text" name="zh" id="zh"  placeholder="zh" required>
        
                    <!--BOUTONS-->
                    <div class="espaces-boutons">
                        <button type="reset" value="Reset">Reset</button>
                        <button type="submit" value="Submit" class="bouton-bleu">Submit</button>
                    </div>
                </form>
        
            </main>

        </div>

    </main>

@endsection("content")


