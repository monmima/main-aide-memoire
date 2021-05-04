@extends("crud/layout")

@section("content")

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <header>
        <h1>Edit Form</h1>
    </header>

    <main>

        <form method="POST" action="/crud/{{ $friends[0]->id }}" name="crud" id="crud">
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
        </form>

    </main>

@endsection("content")