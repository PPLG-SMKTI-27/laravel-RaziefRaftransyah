document.addEventListener("DOMContentLoaded", function () {

    const intro = document.getElementById("intro");

    // 🔥 cek apakah sudah pernah lihat intro
    if (sessionStorage.getItem("intro_seen")) {
        if (intro) intro.remove(); // langsung hapus
        revealUI(); // langsung munculin UI
        return;
    }

    // tandai sudah lihat intro
    sessionStorage.setItem("intro_seen", "true");

    const grid = document.getElementById("grid");
    if (!grid) return;

    const cols = 20;
    const rows = 12;

    for (let y = 0; y < rows; y++) {
        for (let x = 0; x < cols; x++) {

            const cell = document.createElement("div");
            cell.classList.add("cell");

            grid.appendChild(cell);

            const delay = (x * 80) + (y * 30);

            setTimeout(() => {
                cell.classList.add("active");
            }, delay);
        }
    }

    // hapus intro
    setTimeout(() => {
        intro.classList.add("hide");

        setTimeout(() => {
            intro.remove();
            revealUI();
        }, 800);

    }, 2000);
});

function revealUI() {
    const elements = document.querySelectorAll('.reveal');

    elements.forEach((el, index) => {
        setTimeout(() => {
            el.classList.add('show');
        }, index * 50);
    });
}