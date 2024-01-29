@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-gray-400 text-sm font-semibold tracking-wide opacity-0']) }}>
    {{ $value ?? $slot }}
</label>
