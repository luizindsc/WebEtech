// Função para destacar o link ativo na navbar ao rolar a página
document.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-link');
    
    let currentSection = '';
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        if (window.scrollY >= sectionTop) {
            currentSection = section.getAttribute('id');
        }
    });
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').substring(1) === currentSection) {
            link.classList.add('active');
        }
    });
});

// Função para copiar email ao clicar
document.getElementById('email').addEventListener('click', function() {
    const email = this.textContent;
    navigator.clipboard.writeText(email).then(() => {
        alert('Email copiado: ' + email);
    });
});