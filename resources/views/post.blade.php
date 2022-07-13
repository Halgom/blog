<x-layout>
    <x-slot name="content">
        <article>
            <h3>{{ $post->title }}</h3>

            <p>
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

            <div>
                <p>
                    {{ $post->body }}
                </p>
            </div>
        </article>
        <a href="/">Go Back</a>
    </x-slot>
</x-layout>
