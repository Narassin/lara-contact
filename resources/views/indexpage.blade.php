<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
</head>

<body>
    <form method="POST" action="{{ route('info.store') }}">
        @csrf
        <h1>Name</h1>
        <input id="name" name="name" type="text">
        <h2>Phone</h2>
        <input id="phone" name="phone" type="number">
        <input type="submit" value="Submit">
    </form>


   
    <h1>EXISTING ENTRY</h1>
    @foreach($payloads as $payload)
        <br>
        {{ $payload->name }}
        <br>
        {{ $payload->phone }}
        <br>
    @endforeach

</html>