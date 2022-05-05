@extends('layouts.base')

@section('page.title', 'Страница входа')

@section('content')

    <section>
        <x-container>
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <x-card>
                        <x-card-header>
                            <x-card-title>
                                {{ __('Вход') }}
                            </x-card-title>
                        </x-card-header>

                        <x-card-body>
                            <x-form action="{{ route('login.store')}}" method="POST">
                                <x-form-item>
                                    <x-label required>{{ __('Email') }}</x-label>
                                    <input type="email" name="email" class="form-control" autofocus>
                                </x-form-item>

                                <x-form-item>
                                    <x-label required>{{ __('Пароль') }}</x-label>
                                    <input type="password" name="password" class="form-control">
                                </x-form-item>

                                <x-form-item>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" name="remember" id="remember">
                                        <label class="form-check-label" for="remember">
                                            {{ __('Запомнить меня') }}
                                        </label>
                                    </div>
                                </x-form-item>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Войти') }}
                                </button>

                            </x-form>
                        </x-card-body>
                    </x-card>
                </div>
            </div>
        </x-container>
    </section>

@endsection
