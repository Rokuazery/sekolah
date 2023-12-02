@php
    $backgroundColorMap = [
        'simple' => 'bg-gray-200',
        'success' => 'bg-green-300',
        'danger' => 'bg-red-300',
        'warning' => 'bg-yellow-300',
        // Add more mappings as needed
    ];

    $backgroundColor = $backgroundColorMap[$type] ?? 'bg-gray-300';
@endphp

<div class="p-5 w-full {{ $backgroundColor }} rounded-lg border border-gray-200 flex items-center justify-center text-sm">
    <p class="text-center">{{$message}}</p>
</div>
