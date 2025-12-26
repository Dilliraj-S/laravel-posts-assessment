<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Create Post
        </h2>
    </x-slot>

    <div class="py-8 max-w-4xl mx-auto">
        <div class="bg-white p-6 shadow rounded">
            <form method="POST" action="{{ route('posts.store') }}">
                @include('posts._form')
            </form>
        </div>
    </div>
</x-app-layout>
