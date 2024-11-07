@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('inventories.store') }}">
        @csrf
        <!-- Add fields for product name, category, quantity, price -->
        <button type="submit">Add Item</button>
    </form>
@endsection
