@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-slate-600 focus:border-slate-600 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 bg-gray-100']) !!}>
