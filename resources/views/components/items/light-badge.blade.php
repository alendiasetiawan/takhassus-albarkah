@props(['color'])

<span
{{ $attributes->merge([
    'class' => 'badge badge-light-'.$color.'',
]) }}>
    {{ $slot }}
</span>
