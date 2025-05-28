@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-transparent-black-200']) }}>
    {{ $value ?? $slot }}
</label>
