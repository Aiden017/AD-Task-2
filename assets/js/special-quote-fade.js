document.addEventListener('DOMContentLoaded', function() {
    const vergil = document.querySelector('.character:has(.special-quote-container)');
    if (!vergil) return;
    
    const quote = vergil.querySelector('.special-quote-container');
    let timeout;

    vergil.addEventListener('mouseenter', () => {
        quote.classList.add('show-quote');
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            quote.classList.remove('show-quote');
        }, 5000);
    });

    vergil.addEventListener('mouseleave', () => {
        quote.classList.remove('show-quote');
        clearTimeout(timeout);
    });
});
