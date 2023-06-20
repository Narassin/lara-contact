<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
</head>

<body>
    <h1>READING DATABASE</h1>
    {{ $dataload }}
    <form method="POST" action="{{ route('info.update',['id'=>$dataload->id]) }}">
        @csrf
        <h1>Name</h1>
        <input id="name" name="name" type="text" value="{{ $dataload->name }}">
        <h2>Phone</h2>
        <input id="phone" name="phone" type="number" value="{{ $dataload->phone }}">
        <input type="submit" value="Submit">
    </form>


    <form method="POST" action="{{ route('info.delete',['id'=>$dataload->id]) }}">
        @csrf
        <input type="submit" value="Destroy">
    </form>
</html>