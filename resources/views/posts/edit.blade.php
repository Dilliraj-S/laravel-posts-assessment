<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Edit Post
        </h2>
    </x-slot>

    <div class="py-8 max-w-4xl mx-auto">
        <div class="bg-white p-6 shadow rounded">
            <form method="POST" action="{{ route('posts.update', $post) }}">
                @method('PUT')
                @include('posts._form', ['post' => $post])
            </form>
        </div>
    </div>
</x-app-layout>
