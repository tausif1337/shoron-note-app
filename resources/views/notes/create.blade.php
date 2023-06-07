<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{('Create Notes')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('notes.store') }}">
                    @csrf
                    <x-input class="w-full" name="title" field="title" autocomplete="off" placeholder="Title" :value="@old('title')"></x-input>
                    <x-textarea class="w-full mt-6" name="text" field="text" rows="10" placeholder="Start typing here..." :value="@old('text')"></x-textarea>
                    <x-button class="mt-6">Save Note</x-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>