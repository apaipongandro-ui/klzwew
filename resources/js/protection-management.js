// resources/js/protection-management.js
document.addEventListener('DOMContentLoaded', () => {
    const protectionForm = document.getElementById('protection-form');
    
    if(protectionForm) {
        protectionForm.addEventListener('submit', (e) => {
            const btn = protectionForm.querySelector('button[type="submit"]');
            btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Menyimpan...';
            btn.disabled = true;
            // Let the form submit naturally after UI update
        });
    }
});
