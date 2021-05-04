@extends("crud/layout")

@section("content")

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> 

    <main class="page-baldurs-gate">


        <header class="crud-friends-center">
            
            <h1>My Super Cool CRUD Friend List</h1>
            <h2>Link</h2>

            <p><a href="/crud/create">Create new entry</a></p>

        </header>

        <hr>

        <div class="crud-friends-center">
            @foreach($friends as $item)

                <div>
                    <div class="crud-friends-grid">
                        <!-- data -->                            
                        <div class="crud-friends-center"><a href="/crud/{{ $item->id }}" title="More info">{{ $item->first_name }} {{ $item->last_name }}</a></div>

                        <!-- edit button -->
                        <div class="crud-friends-center"><a href="/crud/{{ $item->id }}/edit">Edit</a></div>

                        <!-- delete button -->
                        <div class="crud-friends-center">
                            <form action="/crud/{{ $item->id }}/delete" method="post">
                                <input class="btn btn-default" type="submit" value="Delete" />
                                @csrf
                                @method('delete')
                            </form>
                        </div>
                    </div>

                </div>

            @endforeach
        </div>

    </main>

@endsection("content")


