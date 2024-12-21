<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $book->title }}">
        <input type="text" name="author" value="{{ $book->author }}">
        <textarea name="description">{{ $book->description }}</textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>
