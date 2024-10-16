function toggleMenu() {
    const navMenu = document.getElementById('nav-menu');
    navMenu.classList.toggle('show');
}

function showToast(message) {
    const toast = document.getElementById('toast');
    toast.textContent = message;
    toast.classList.add('show');

    setTimeout(() => {
        toast.classList.add('fade');
    }, 3000);

    setTimeout(() => {
        toast.classList.remove('show');
        toast.classList.remove('fade');
    }, 3500);
}

document.addEventListener('DOMContentLoaded', () => {
    const toggleServicesButton = document.getElementById('toggle-services');
    const servicesList = document.getElementById('services-list');

    toggleServicesButton.addEventListener('click', () => {
        const isVisible = servicesList.style.display !== 'none';
        servicesList.style.display = isVisible ? 'none' : 'block';
        toggleServicesButton.innerText = isVisible ? 'Tampilkan Layanan' : 'Sembunyikan Layanan';

        if (!isVisible) {
            showToast('Layanan ditampilkan!');
        }
    });

    showToast('Selamat datang di Wonosobo Connect!');
});

function handleLogin(event) {
    event.preventDefault();
    showToast("Login Berhasil!"); 
    document.getElementById("login-form").reset();  
}

document.getElementById('register-form').addEventListener('submit', function(event) {
    event.preventDefault();
    showToast("Registrasi berhasil!");
    this.reset(); 
});
