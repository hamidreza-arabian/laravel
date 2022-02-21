<x-layout>
{{--@foreach($posts as $post)--}}
{{--    <h1>--}}
{{--        <a href="posts/{{ $post['slug'] }}">--}}
{{--            {{ $post['title'] }}--}}
{{--        </a>--}}
{{--    </h1>--}}
{{--    <h3>--}}
{{--        by <a href="/users/{{ $post->author->id }}"> {{ $post->author->name }}</a> in <a href="/category/{{ $post->category->name }}">{{ $post->category->slug }}</a>--}}

{{--    </h3>--}}
{{--        <article>--}}
{{--            {{ $post['description'] }}--}}
{{--        </article>--}}
{{--@endforeach--}}

@include('_post-header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-large-card :post="$posts[0]"/>
        <div class="lg:grid lg:grid-cols-6">
            @foreach( $posts->skip(1) as $post)
                <x-post-card :post="$post" class="{{$loop->iteration < 3 ? 'col-span-3' : 'col-span-2'}}" />
            @endforeach
        </div>
    </main>


</x-layout>

