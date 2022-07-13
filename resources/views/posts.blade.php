<x-layout>
    <x-slot name="content">

        <div>
            <h1>My Blog</h1>
        </div>

        @foreach ($posts as $post)
            <article>
                <h3>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h3>

                <p>
                    By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                </p>

                <div>
                    <p>{{ $post->excerpt }}</p>
                </div>
            </article>
        @endforeach
    </x-slot>
</x-layout>
