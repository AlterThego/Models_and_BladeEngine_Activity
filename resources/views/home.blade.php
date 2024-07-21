@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-7xl mx-auto my-10">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ISBN
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Author
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date Published
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $book->isbn }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $book->title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->author }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->description }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $book->date_published }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
