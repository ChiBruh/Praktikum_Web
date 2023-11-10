document.addEventListener("DOMContentLoaded", function() {
    const darkModeButton = document.getElementById("toggleDarkMode");

    // Event listener untuk toggle dark mode
    darkModeButton.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
    });
});