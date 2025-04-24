const accountPopup = document.getElementById('account-popup');
const openAccountPopup = document.getElementById('open-account-popup');
const closeAccountPopup = document.getElementById('close-account-popup');
const formAccount = document.getElementById('form-account');

if(accountPopup && openAccountPopup && closeAccountPopup && formAccount) {
    openAccountPopup.addEventListener('click', () => {
        accountPopup.classList.remove('hidden');
    });
    closeAccountPopup.addEventListener('click', () => {
        accountPopup.classList.add('hidden');
        formAccount.reset();
    });
    window.addEventListener('click', (event) => {
        if (event.target === accountPopup) {
            accountPopup.classList.add('hidden');
        }
    });
}