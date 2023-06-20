@extends('layout/app')
@section('content1')
<div class="py-3 px-1">
<form method="POST" action="{{ route('info.store') }}">
        @csrf
        <p class="fs-5">New Entry</p>
        <p>Name</p>
        <input id="name" name="name" type="text">
        <br>
        <p>Phone</p>
        <input id="phone" name="phone" type="number">
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
</div>
@endsection

@section('content2')
<div class="container-fluid p-4">

    <h1 class="text-center">Currently Used Port</h1>
    @foreach($payloads as $payload)
    <div class="bg-white shadow rounded my-3 p-4">
        <p class="fs-5 fw-bold">{{ $payload->name }}</p>
        <p>Phone no: {{ $payload->phone }}</p>
    </div>
    
    @endforeach


</div>
@endsection

