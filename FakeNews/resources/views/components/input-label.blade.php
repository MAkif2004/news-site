@props(['value'])

<label {{ $attributes->merge(['class' => 'block textColor font-medium text-sm']) }}>
    {{ $value ?? $slot }}
</label>
