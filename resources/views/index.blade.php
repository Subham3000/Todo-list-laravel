@extends('layouts.app')

@section('title', 'The lists of tasks')

{{-- <h1>
Hello World! 
</h1> --}}

@section('content')
    <div>
        {{-- @if ($tasks)
        {{-- <b>Tasks exits!</b> --}}
        {{-- @foreach ($tasks as $task) --}}
        {{-- <br> --}}
        {{-- <b>{{$task->title}}</b> --}}
        {{-- <br>     --}}
        {{-- @endforeach --}}
        {{-- @else --}}
        {{-- <b>Tasks doest not exits!</b>    --}}
        {{-- @endif --}}

        @forelse ($tasks as $task)
            <div>
                <a href="{{ route('task.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
            </div>
        @empty
            <div>There are no Tasks!</div>
        @endforelse
    </div>

@endsection
