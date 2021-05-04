@extends("crud/layout")

@section("content")

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <header>
        <h1>Create Form</h1>
    </header>

    <main>

        <form method="POST" action="/crud" name="crud" id="crud">
            @csrf <!-- cross-site request forgery -->

            <input type="text" name="first_name" id="first_name" placeholder="first name" required>
            <input type="text" name="last_name" id="last_name"  placeholder="last name" required>

            <!--BOUTONS-->
            <div class="espaces-boutons">
                <button type="reset" value="Reset">Reset</button>
                <button type="submit" value="Submit" class="bouton-bleu">Submit</button>
            </div>
        </form>

    </main>

@endsection("content")