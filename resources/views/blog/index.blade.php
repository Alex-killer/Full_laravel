@extends('layouts.main')

@section('page.title', 'Статьи')

@section('main.content')

    <x-title>

        {{ __('Список постов') }}

    </x-title>

    @include('blog.filter')

    <div class="row">
        @if(empty($posts))
            {{ __('Нет постов') }}
        @else
            @foreach($posts as $post)
                <div class="col-12 col-md-4">
                    <x-post.card :post="$post" />
                </div>
            @endforeach
        @endif
    </div>

@endsection
