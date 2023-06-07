<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{('Show Note')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>
            <div class="flex">
                <p class="opacity-70">
                    <strong>Created: </strong> {{ $note->created_at->diffForHumans() }}
                </p>
                <p class="opacity-70 ml-8">
                    <strong>Updated: </strong> {{ $note->updated_at->diffForHumans() }}
                </p>
            </div>
            <a class="btn-link ml-auto" href="{{ route('notes.edit', $note) }}">Edit Note</a>
            <form action="{{ route('notes.destroy', $note) }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete this note?')">Delete Note</button>
            </form>
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="font-bold text-4xl">
                    {{ $note->title }} </a>
                </h2>
                <p class="mt-6 whitespace-pre-wrap">
                    {{ ($note->text) }}
                </p>
            </div>
        </div>
    </div>
</x-app-layout>