<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
</head>

<body>
    @include('test.all')
    {{-- @if ($type == 'test-db')
        <button><a href="/test-db/add">add-db-form</a></button> <br />
        <button><a href="/test-db/edit/id">edit-db-by-id</a></button> <br />
    @endif --}}

    <h1>Add</h1>

    {{-- <form method="POST" action="add"> --}}
    <form method="POST" action="<?php echo route('testDB.handleAdd') ?>">
        <input type="text" name='name' placeholder="name">
        @csrf
        <button type="submit">Submit</button>
    </form>
</body>

</html>
