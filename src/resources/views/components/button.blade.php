<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-blue-600 hover:bg-blue-600 text-white rounded px-4 py-2 w-80 mt-6']) }}>
    {{ $slot }}
</button>
