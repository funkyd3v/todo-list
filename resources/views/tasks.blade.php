@extends('layouts.app')
@section('title')
    All Tasks
@endsection
@section('content')
<div class="px-4">
    @forelse($tasks as $task)
    <p><a href="{{ route('show.task', ['id' => $task->id]) }}" @class(['line-through' => $task->completed])>{{ $task->title }}</a></p>
    @empty
        <div>There are no task!</div>
    @endforelse

    @if ($tasks->count())
        <div class="grid grid-cols-2">
            {{ $tasks->links() }}
        </div>
    @endif
</div>
@endsection