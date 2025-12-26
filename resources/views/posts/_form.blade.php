@csrf

<div class="space-y-4">
    <div>
        <label class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" name="title" value="{{ old('title', $post->title ?? '') }}"
            class="mt-1 w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" required>
        @error('title')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Description</label>
        <textarea name="description" rows="4"
            class="mt-1 w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('description', $post->description ?? '') }}</textarea>
        @error('description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex justify-end">
        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
            Save
        </button>
    </div>
</div>
