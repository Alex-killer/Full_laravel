@props(['value'])

<input {{ $attributes->class([
    'form-control',
])->merge([
    'type' => 'text', // по умолчанию
    'value' => (old($attributes->get('name')) ?: $value),
]) }}>

