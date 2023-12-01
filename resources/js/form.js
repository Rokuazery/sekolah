function focusNextInput(event, nextInputName) {
    if (event.key === "Enter") {
        event.preventDefault(); // Prevents the default behavior of the Enter key in forms

        const nextInput = document.getElementsByName(nextInputName)[0];

        if (nextInput) {
            nextInput.focus();
        }
    }
}
