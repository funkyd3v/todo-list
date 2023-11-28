@extends('layouts.app')

@section('title')
    {{ $task->title }}
@endsection

@section('content')
<div class="px-4 mb-2">
    <p>Status: {{ $task->completed ? 'Completed' : 'Not completed' }}</p>
</div>
<div class="px-4 mx-4 bg-slate-100 rounded">
    <h3>{{ $task->title }}</h3>
    <p>{{ $task->description }}</p>
    <p>{{ $task->long_description }}</p>
    <div class="flex">
        <div class="flex-initial w-40 mt-3 mr-2 pb-0 px-3 bg-yellow-600 rounded rounded-md">
            <form action="{{ route('task.toogle-complete', ['id' => $task->id]) }}" method="POST">
                @csrf
                @method('put')
                <button type="submit">Mark as {{ $task->completed ? 'not completed' : 'completed' }}</button>
            </form>
        </div>

        <div>
            <button class="flex-initial w-16 mx-3 my-3 px-4 bg-green-600 rounded rounded-md"><a href="/task/{{ $task->id }}/edit">Edit</a></button>
        </div>

        <div>
            <form action="{{ route('delete.task', ['id' => $task->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="flex-initial w-16 mx-3 my-3 bg-red-600 rounded rounded-md">Delete</button>
            </form>
        </div>
        
    </div>
</div>
@endsection