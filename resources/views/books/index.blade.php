<!DOCTYPE html>
<html lang="en">
<head>
    <title>Books</title>
</head>
<body>
    <h1>Books List</h1>
    <a href="{{ route('books.create') }}">Add Book</a>
    <ul>
        @foreach ($books as $book)
            <li>
                {{ $book->title }} by {{ $book->author }}
                <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
