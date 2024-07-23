@extends('layouts.app')

@section('title', 'Library')

@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-7xl mx-auto my-10">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
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
                @if (count($books) > 0)
                    @foreach ($books as $book)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $book->id }}
                            </th>
                            <th scope="row"
                                class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $book->isbn }}
                            </th>
                            <td class="px-6 py-2">
                                {{ $book->title }}
                            </td>
                            <td class="px-6 py-2">
                                {{ $book->author }}
                            </td>
                            <td class="px-6 py-2">
                                {{ $book->description }}
                            </td>
                            <td class="px-6 py-2">
                                {{ $book->date_published }}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class=" py-4 text-center">
                            No record found!
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
