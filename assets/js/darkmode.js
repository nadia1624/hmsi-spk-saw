// Ambil elemen yang dibutuhkan
const darkModeToggle = document.getElementById('darkModeToggle');
const body = document.body;
const navbar = document.querySelector('.navbar');
const sidebar = document.querySelector('.sidebar');

// Cek preferensi pengguna dari localStorage
const savedTheme = localStorage.getItem('theme');
if (savedTheme === 'dark') {
    enableDarkMode();
}

// Fungsi untuk mengaktifkan Dark Mode
function enableDarkMode() {
    body.classList.add('dark-mode');
    navbar.classList.add('dark-mode');
    if (sidebar) sidebar.classList.add('dark-mode');
    darkModeToggle.innerHTML = 'Light Mode';
    localStorage.setItem('theme', 'dark');
}

// Fungsi untuk menonaktifkan Dark Mode
function disableDarkMode() {
    body.classList.remove('dark-mode');
    navbar.classList.remove('dark-mode');
    if (sidebar) sidebar.classList.remove('dark-mode');
    darkModeToggle.innerHTML = 'Dark Mode';
    localStorage.setItem('theme', 'light');
}

// Toggle Dark Mode ketika tombol diklik
darkModeToggle.addEventListener('click', () => {
    if (body.classList.contains('dark-mode')) {
        disableDarkMode();
    } else {
        enableDarkMode();
    }
});
