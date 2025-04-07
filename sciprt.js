// Destacar link ativo na navbar ao rolar
document.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-link');
    const scrollPosition = window.scrollY + 150;

    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        const sectionId = section.getAttribute('id');

        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${sectionId}`) {
                    link.classList.add('active');
                }
            });
        }
    });
});

// Copiar email ao clicar com animação
const emailElement = document.getElementById('email') || document.querySelector('#contato p');
if (emailElement) {
    emailElement.addEventListener('click', function() {
        const email = this.textContent.trim();
        navigator.clipboard.writeText(email).then(() => {
            // Animação de feedback
            this.style.color = '#00aaff';
            this.textContent = 'Email copiado!';
            setTimeout(() => {
                this.style.color = '';
                this.textContent = email;
            }, 2000);
        }).catch(err => {
            console.error('Erro ao copiar email:', err);
            alert('Erro ao copiar o email.');
        });
    });
}

// Smooth scroll para links da navbar
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetSection = document.querySelector(targetId);
        targetSection.scrollIntoView({ behavior: 'smooth' });
    });
});