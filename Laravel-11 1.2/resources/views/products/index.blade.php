@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Product List</h1>
        <table class="table-auto w-full border-collapse">
            <thead>
                <tr>
                    <th class="border-b p-2">ID</th>
                    <th class="border-b p-2">Name</th>
                    <th class="border-b p-2">Stock</th>
                    <th class="border-b p-2">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="border-b p-2">{{ $product->id }}</td>
                        <td class="border-b p-2">{{ $product->name }}</td>
                        <td class="border-b p-2">{{ $product->stock }}</td>
                        <td class="border-b p-2">{{ $product->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
