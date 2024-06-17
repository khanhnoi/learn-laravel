<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All</title>
</head>

<body>
    {{-- @if ($type == 'test-db') --}}
    <br />
    <button><a href="/test-db/add">add-db-form</a></button> <br />
    <button><a href="/test-db/edit/id">edit-db-by-id</a></button> <br />

    <form action={{ route('testDB.upload') }} method="post" enctype="multipart/form-data">
        <input type="file" name="photo" id="" >
        @csrf
        <button type="submit">Submit</button>
    </form>
    {{-- @endif --}}
</body>

</html>
