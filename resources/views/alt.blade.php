@extends('layouts.app')

@section('title', 'Library')

@section('content')
    <div class="relative  shadow-md sm:rounded-lg max-w-screen-2xl mx-auto mt-10">
        <h1 class="p-5 uppercase font-bold text-lg text-right">Server-side processing with PowerGrid DataTables</h1>
    </div>
    <div class="relative  max-w-screen-2xl mx-auto mt-5 mb-10">
        <livewire:book-table />
    </div>
@endsection
