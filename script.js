document.addEventListener('DOMContentLoaded', () => {
    const navItems = document.querySelectorAll('.nav-item');
    const sections = document.querySelectorAll('.page-section');

    navItems.forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault();
            
            // 1. Update Active Navigation Link
            navItems.forEach(nav => nav.classList.remove('active'));
            item.classList.add('active');

            // 2. Hide all sections and show the target one
            const targetId = item.getAttribute('href').replace('#', '');
            sections.forEach(sec => {
                sec.classList.remove('active');
                if (sec.id === targetId) {
                    sec.classList.add('active');
                }
            });

            // 3. Scroll to top on mobile
            if (window.innerWidth < 768) {
                window.scrollTo(0, 0);
            }
        });
    });

    // Simple interaction for M-Pesa button
    const mpesaBtn = document.querySelector('.btn-accent');
    if (mpesaBtn) {
        mpesaBtn.addEventListener('click', () => {
            alert("Initiating M-Pesa STK Push... Please check your phone.");
        });
    }
});