@props(['required' => false])

<label {{ $atributes->class([
    'mb-2', ($required ? 'required' : ''),
]) }}>
    {{ $slot }}
</label>
