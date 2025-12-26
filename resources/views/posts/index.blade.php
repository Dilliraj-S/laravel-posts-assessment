<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800">
                Posts
            </h2>
            <a href="{{ route('posts.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                + New Post
            </a>
        </div>
    </x-slot>

    <div class="py-8 max-w-5xl mx-auto space-y-4">
        @forelse($posts as $post)
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-semibold text-gray-900">
                    {{ $post->title }}
                </h3>

                <p class="text-gray-600 mt-2">
                    {{ $post->description }}
                </p>

                <div class="flex justify-between items-center mt-4 text-sm text-gray-500">
                    <span>
                        Created {{ $post->created_at->diffForHumans() }}
                    </span>

                    <div class="flex space-x-3">
                        @can('update', $post)
                            <a href="{{ route('posts.edit', $post) }}" class="text-indigo-600 hover:underline">
                                Edit
                            </a>
                        @endcan

                        @can('delete', $post)
                            <form method="POST" action="{{ route('posts.destroy', $post) }}"
                                onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline">
                                    Delete
                                </button>
                            </form>
                        @endcan
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-gray-500">
                No posts available.
            </p>
        @endforelse
    </div>
</x-app-layout>
