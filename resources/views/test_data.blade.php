<x-layout>
{{ $post->title }}
<br/>
by <a href="/users/{{ $post->author->name }}"> {{ $post->author->name }}</a> in <a href="/category/{{ $post->category->name }}">{{ $post->category->slug }}</a>
<br/>
<textarea> {{ $post->description }}</textarea>
<a href="/">go back</a>
    <section>
         <article class="flex">
            <div>
                <img src="https://i.pravatar.cc/100" alt="">
            </div>
             <div>
                <header>
                    <address>
                        <h3 class="font-bold">john doe</h3>
                    </address>
                    <p>posted
                        <time >5 month ago</time>
                    </p>
                </header>
                 <p>lorem ipsum fjsd dkjs jkd lorem ipsum fjsd dkjs jkd lorem ipsum fjsd dkjs jkd</p>
             </div>
         </article>
    </section>
</x-layout>
