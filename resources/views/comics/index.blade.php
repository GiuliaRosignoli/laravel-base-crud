@extends('./layouts/main')
@section('content')
    <div class="container">
        <h1 class="mb-5">Our Comics</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->Title }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('comics.show', $comic->$id ) }}">SHOW</a>
                        </td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $comics->links() }}
    </div>
@endsection