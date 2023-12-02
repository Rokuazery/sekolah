<!-- resources/views/components/select.blade.php -->

<div class="flex flex-col gap-2">
    <label for="{{ $name }}" class="block text-sm font-medium text-black"><i class="fa {{$icon}}"></i> {{ $label }} <i class="fa fa-angle-right text-base text-gray-400"></i></label>
    <select id="{{ $name }}" name="{{ $name }}" class="block w-full p-2 rounded-lg border-gray-300 border shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 bg-white hover:border-blue-500">
        {{ $slot }}
    </select>
</div>
