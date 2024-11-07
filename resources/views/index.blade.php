@extends('layouts.app')
@section('content')
    <h2>Inventory List</h2>
    @foreach ($inventories as $inventory)
        <div>{{ $inventory->product_name }} - {{ $inventory->quantity }}</div>
    @endforeach
@endsection
