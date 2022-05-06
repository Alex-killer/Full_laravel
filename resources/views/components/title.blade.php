<div>

    @isset($link)
        <div class="mb-2">
            {{ $link }}
        </div>
    @endisset

    <h1 class="h2 md-5">
        {{ $slot }}
    </h1>
</div>
