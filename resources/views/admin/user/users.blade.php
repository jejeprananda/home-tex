@extends('app-web')

@section('content')
<div class="p-24">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr class="text-center text-bold">
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">nama</th>
                <th scope="col" class="px-6 py-3">password</th>
                <th scope="col" class="px-6 py-3">email</th>
                <th scope="col" class="px-6 py-3">no handphone</th>
                <th scope="col" colspan="3" class="px-6 py-3">Aksi</th>


            </tr>
        </thead>
        @foreach ($people as $user)
            <tr class="bg-white text-center border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">{{ $user->id }}</td>
                <td class="px-6 py-4">{{ $user->name }}</td>
                <td class="px-6 py-4">{{ $user->password }}</td>
                <td class="px-6 py-4">{{ $user->email }}</td>
                <td class="px-6 py-4">{{ $user->phone_number }}</td>
                <td class="px-6 py-4 w-28">
                    <a href="/users/{{ $user->id }}"><Button class="p-2 w-24 bg-blue-500 rounded text-white">View Profile</Button></a>
                </td>
                <td class="px-6 py-4 w-28">
                    <a href="/users/{{ $user->id }}/edit"><Button class="p-2 w-24 bg-green-500 rounded text-white">Edit Profile</Button></a>
                </td>
                <td class="px-6 py-4 w-32">
                    <form action="users/{{ $user->id }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit"><Button class="p-2 w-28 bg-primary rounded text-white">Delete Profile</Button></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
