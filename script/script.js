document.querySelectorAll('.sidebar a').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();

        // Remove 'active' class from all links
        document.querySelectorAll('.sidebar a').forEach(link => link.classList.remove('active'));

        // Add 'active' class to clicked link
        this.classList.add('active');

        // Hide all pages
        document.querySelectorAll('.page').forEach(page => page.classList.add('hidden'));

        // Show the target page
        const target = this.getAttribute('data-target');
        document.getElementById(target).classList.remove('hidden');
    });
});

function mudarNome(nome) {
    document.getElementById("nomeExibido").textContent = nome;
}