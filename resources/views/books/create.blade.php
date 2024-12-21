<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Book</title>
</head>
<body>
    <h1>Add Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="author" placeholder="Author">
        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit">Add</button>
    </form>
</body>
</html>
