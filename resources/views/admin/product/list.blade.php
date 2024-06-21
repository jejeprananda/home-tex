@extends('app-admin')

@section('content')
    <div class="w-full">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="text-center text-bold">
                    <th scope="col" class="px-6 py-3">image</th>
                    <th scope="col" class="px-6 py-3">nama</th>
                    <th scope="col" class="px-6 py-3">stock</th>
                    <th scope="col" class="px-6 py-3">harga</th>
                    <th scope="col" class="px-6 py-3">discount</th>
                    <th scope="col" colspan="2" class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            @foreach ($products as $product)
                <tr class="bg-white text-center border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                        <img src="/{{ $product->img[0] }}" class="w-24">
                    </td>
                    <td class="px-6 py-4">{{ $product->name }}</td>
                    <td class="px-6 py-4">{{ $product->stock }}</td>
                    <td class="px-6 py-4">{{ $product->price }}</td>
                    <td class="px-6 py-4">{{ $product->discount }}</td>
                    <td class="px-6 py-4 w-28">
                        <a href="/products/{{ $product->id }}/edit"><Button
                                class="p-2 w-24 bg-green-500 rounded text-white">Edit Profile</Button></a>
                    </td>
                    <td class="px-6 py-4 w-28">
                        <form action="/products/destroy/{{ $product->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit"><Button class="p-2 w-28 bg-primary rounded text-white">Delete
                                    Profile</Button></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
