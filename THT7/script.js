document.addEventListener("DOMContentLoaded", function() {
    const darkModeButton = document.getElementById("toggleDarkMode");

    // Event listener for toggle dark mode
    darkModeButton.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
    });

    // Array of music genres
    const genres = ["Acoustic", "Rock", "Jazz", "Classical", "HipHop"];

    // Function to populate the genre list
    function populateGenreList() {
        const genreList = document.getElementById("genreList");

        // Clear existing list items
        genreList.innerHTML = "";

        // Iterate over the genres array and create list items
        genres.forEach((genre) => {
            const listItem = document.createElement("li");
            const link = document.createElement("a");
            link.href = `#${genre.toLowerCase()}`; // Link to the corresponding section
            link.textContent = genre;
            listItem.appendChild(link);
            genreList.appendChild(listItem);
        });
    }

    // Call the function to populate the genre list
    populateGenreList();
});