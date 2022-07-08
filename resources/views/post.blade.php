<x-layout>
    <x-slot name="content">
        <article>
            <h1>{{ $post->title }}</h1>
            <div>
                <p>
                    {!! $post->body !!}
                </p>
            </div>
        </article>
        <a href="/">Go Back</a>
    </x-slot>
</x-layout>
