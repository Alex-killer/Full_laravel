@extends('layouts.base')

@section('page.title', 'Статьи')

@section('content')
    <h1 class="mb-5">
        <h1>Список постов</h1>
    </h1>

    @if(empty($posts))
        Нет постов
    @else
        @foreach($posts as $post)
            <div class="mb-4">
                <h5>
                    <a href="{{ route('blog.show', $post->id) }}">
                        {{ $post->title }}
                    </a>
                </h5>

                <p>
                    {!! $post->content !!}
                </p>
            </div>
        @endforeach
    @endif
@endsection
