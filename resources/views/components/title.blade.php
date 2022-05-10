<div class="border-bottom pb-3 mb-5">

    @isset($link)
        <div class="mb-3">
            {{ $link }}
        </div>
    @endisset

    <div class="d-flex justify-content-between">
        <div>
            <h1 class="h2 md-0">
                {{ $slot }}
            </h1>
        </div>
        <div>
            @isset($right)
                {{ $right }}
            @endisset
        </div>
    </div>
</div>
