// Mendapatkan semua elemen dengan class "fade-up"
const fadeElements = document.querySelectorAll('.fade-up');

// Fungsi untuk menangani fade in dan fade out
function handleScrollFade() {
    fadeElements.forEach(element => {
        const rect = element.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        if (rect.top < windowHeight && rect.bottom > 0) {
            // Fade in saat elemen terlihat
            element.classList.add('fade-in');
            element.classList.remove('fade-out');
        } else {
            // Fade out saat elemen tidak terlihat
            element.classList.add('fade-out');
            element.classList.remove('fade-in');
        }
    });
}

// Menjalankan fungsi saat scroll
window.addEventListener('scroll', handleScrollFade);

// Menjalankan fungsi pertama kali saat halaman dimuat
document.addEventListener('DOMContentLoaded', handleScrollFade);
