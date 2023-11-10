document.addEventListener("DOMContentLoaded", function() {
    const board = document.getElementById("board");
    const cells = document.querySelectorAll(".cell");
    const status = document.getElementById("status");
    const resetButton = document.getElementById("reset");
    const darkModeButton = document.getElementById("toggleDarkMode");

    let currentPlayer = "X";
    let gameBoard = ["", "", "", "", "", "", "", "", ""];

    // Cek Apakah Pemain menang atau tidak
    const checkWinner = () => {
        const winningCombos = [
            [0, 1, 2],
            [3, 4, 5],
            [6, 7, 8],
            [0, 3, 6],
            [1, 4, 7],
            [2, 5, 8],
            [0, 4, 8],
            [2, 4, 6],
        ];

        for (const combo of winningCombos) {
            const [a, b, c] = combo;
            if (gameBoard[a] && gameBoard[a] === gameBoard[b] && gameBoard[a] === gameBoard[c]) {
                return gameBoard[a];
            }
        }

        return null;
    };

    // Cek apabila seluruh seluruh cells full dan tidak ada pemenang (tie)
    const isBoardFull = () => {
        return gameBoard.every((cell) => cell !== "");
    };

    // Interaksi cell ketika di klik
    const handleCellClick = (index) => {
        if (gameBoard[index] === "" && !checkWinner() && !isBoardFull()) {
            gameBoard[index] = currentPlayer;

            // Elemen untuk gambar
            const img = document.createElement("img");
            img.src = currentPlayer === "X" ? "images/O.png" : "images/X.png";
            img.alt = currentPlayer;
            img.classList.add("symbol");

            // Clear konten di cell and memasukkan gambarnya
            cells[index].innerHTML = "";
            cells[index].appendChild(img);

            const winner = checkWinner();

            if (winner) {
                status.innerText = `Pemain ${winner} menang!`;
            } else if (isBoardFull()) {
                status.innerText = "Seri!";
            } else {
                currentPlayer = currentPlayer === "X" ? "O" : "X";
                status.innerText = `Giliran Pemain ${currentPlayer}`;
            }
        }
    };

    // Ketika cells di klik
    cells.forEach((cell, index) => {
        cell.addEventListener("click", () => handleCellClick(index));
    });

    // Event listener untuk tombol reset
    resetButton.addEventListener("click", () => {
        gameBoard = ["", "", "", "", "", "", "", "", ""];
        cells.forEach((cell) => (cell.innerHTML = ""));
        status.innerText = "Giliran Pemain X";
        currentPlayer = "X";
    });

    // Event listener untuk toggle dark mode
    darkModeButton.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
    });
});