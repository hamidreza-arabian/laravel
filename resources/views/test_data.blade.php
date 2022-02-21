<x-layout>
{{ $post->title }}
<br/>
by <a href="/users/{{ $post->author->name }}"> {{ $post->author->name }}</a> in <a href="/category/{{ $post->category->name }}">{{ $post->category->slug }}</a>
<br/>
<textarea> {{ $post->description }}</textarea>
<a href="/">go back</a>
</x-layout>
