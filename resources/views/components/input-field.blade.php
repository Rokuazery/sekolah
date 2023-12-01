<div class="flex bg-white p-2 items-center gap-2 rounded-lg border border-gray-200 hover:border-blue-500 active:border-blue-500">
    <div class="fa {{ $icon }}"></div>
    <input class="outline-none w-full" name="{{ $name }}" type="{{ $type }}" placeholder="{{ $placeholder }}" id="{{ $name }}" autocomplete="off">
    @if($type === 'password')
        <button class="text-gray-400 hover:text-gray-600 active:text-black" type="button" onclick="togglePassword('{{ $name }}')"> <!-- Call a JavaScript function to toggle the password -->
            <i id="{{ $name }}-icon" class="fas fa-eye"></i>
        </button>
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
