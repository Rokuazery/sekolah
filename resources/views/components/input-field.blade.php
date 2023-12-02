@php
    $borderColor = $errors->has($errorType) ? "border-red-500" : "border-gray-300";
    $hoverBorderColor = $errors->has($errorType) ? "hover:border-red-600" : "hover:border-blue-500";
@endphp

<div class="flex flex-col gap-1 w-full">
    <div class="w-full flex bg-white p-2 items-center gap-2 rounded-lg border {{$borderColor}} {{$hoverBorderColor}} active:border-blue-500">
        <div class="fa {{ $icon }}"></div>
        <input class="outline-none w-full" name="{{ $name }}" type="{{ $type }}" placeholder="{{ $placeholder }}" id="{{ $name }}" autocomplete="{{ $autocomplete }}" autofocus="{{ $autofocus }}" value="{{ $value }}">
        @if($type === 'password')
            <button class="text-gray-400 hover:text-gray-600 active:text-black" type="button" onclick="togglePassword('{{ $name }}')">
                <i id="{{ $name }}-icon" class="fas fa-eye"></i>
            </button>
        @endif
    </div>
    @if($errorType !== 'none')
        @if ($errors->has($errorType))
            <label for="{{ $name }}" class="text-red-500 p-0 m-0 text-sm">
                {{ $errors->first($errorType) }}
            </label>
        @endif
    @endif
</div>

<script>
    function togglePassword(fieldName) {
        const passwordInput = document.getElementById(fieldName);
        const icon = document.getElementById(fieldName + '-icon');

        // Toggle the type attribute of the password input
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>
