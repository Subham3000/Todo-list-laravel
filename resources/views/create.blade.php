@extends('layouts.app')

@section('title', 'Add Task')

@section('content')
    <form method="post" action="{{ route('task.store') }}">
        @csrf
    </form>
@endsection
