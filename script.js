const sections = document.querySelectorAll("[id]");
const navLinks = document.querySelectorAll(".nav-link");

window.addEventListener("scroll", () => {
    let current = "";

    sections.forEach((section) => {
        const sectionTop = section.offsetTop - 100;
        const sectionHeight = section.offsetHeight;

        if (
            window.scrollY >= sectionTop &&
            window.scrollY < sectionTop + sectionHeight
        ) {
            current = section.getAttribute("id");
        }
    });

    navLinks.forEach((link) => {
        link.classList.remove("active");
        if (link.getAttribute("href") === `#${current}`) {
            link.classList.add("active");
        }
    });
});

window.addEventListener("scroll", () => {
    const navbar = document.querySelector(".navbar");
    navbar.classList.toggle("scrolled", window.scrollY > 40);
});

/* Membuka Modal Spesifik berdasarkan ID yang dikirim */
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add("show");
        document.body.style.overflow = "hidden"; // Mencegah scroll
    } else {
        console.error("Modal dengan ID " + modalId + " tidak ditemukan!");
    }
}

/* Menutup SEMUA modal yang sedang terbuka */
function closeModal() {
    // Cari semua elemen yang punya class 'modal'
    const modals = document.querySelectorAll(".modal");

    // Hilangkan class 'show' dari semuanya
    modals.forEach((modal) => {
        modal.classList.remove("show");
    });

    document.body.style.overflow = "auto"; // Aktifkan scroll lagi
}

/* Tutup jika klik di luar area konten (background gelap) */
function closeModalOnOutside(event) {
    // Cek apakah yang diklik adalah background gelap (class 'modal')
    if (event.target.classList.contains("modal")) {
        closeModal();
    }
}

/* Tutup pakai tombol ESC */
document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
        closeModal();
    }
});
