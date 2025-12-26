@csrf

<label>Title</label>
<input type="text" name="title" value="{{ old('title', $post->title ?? '') }}" required>
@error('title')
    <div class="error">{{ $message }}</div>
@enderror

<label>Description</label>
<textarea name="description" rows="4" required>{{ old('description', $post->description ?? '') }}</textarea>
@error('description')
    <div class="error">{{ $message }}</div>
@enderror

<button type="submit" class="btn btn-primary">Save</button>
<a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
