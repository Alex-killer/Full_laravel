@extends('layouts.main')

@section('page.title', 'Мои посты')

@section('main.content')

    <x-title>

        {{ __('Мои посты') }}

    </x-title>

    <div class="row">
        @if(empty($posts))
            {{ __('Нет постов') }}
        @else
            @foreach($posts as $post)
                <div class="mb-3">
                    <h2 class="h6">
                        <a href="{{ route('user.posts.show', $post->id) }}">
                            {{ $post->title }}
                        </a>
                    </h2>
                </div>

                <div class="small text-muted">
                    {{ now()->format('d.m.Y') }}
                </div>
            @endforeach
        @endif
    </div>

@endsection
