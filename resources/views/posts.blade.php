<x-layout>


@include('_post-header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if(isset($posts[0]))
            <x-large-card :post="$posts[0]"/>

            <div class="lg:grid lg:grid-cols-6">
                @foreach( $posts->skip(1) as $post)
                    <x-post-card :post="$post" class="{{$loop->iteration < 3 ? 'col-span-3' : 'col-span-2'}}" />
                @endforeach
            </div>
            {{ $posts->links() }}
        @else
            <span>there is no post</span>
        @endif
    </main>


</x-layout>

