// Account Management
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




// Category Creation
const categoryCreatePopup = document.getElementById('category-create-popup');
const openCategoryCreatePopup = document.getElementById('open-category-create-popup');
const closeCategoryCreatePopup = document.getElementById('close-category-create-popup');
const formCategoryCreate = document.getElementById('form-category-create');


if(categoryCreatePopup && openCategoryCreatePopup && closeCategoryCreatePopup && formCategoryCreate) {
    openCategoryCreatePopup.addEventListener('click', () => {
        categoryCreatePopup.classList.remove('hidden');
    });
    closeCategoryCreatePopup.addEventListener('click', () => {
        categoryCreatePopup.classList.add('hidden');
        formCategoryCreate.reset();
    });
    window.addEventListener('click', (event) => {
        if (event.target === categoryCreatePopup) {
            categoryCreatePopup.classList.add('hidden');
        }
    });
}





// Category Edit
const categoryEditPopup = document.getElementById('category-edit-popup');
const openCategoryEditPopup = document.querySelectorAll('.open-category-edit-popup');
const closeCategoryEditPopup = document.getElementById('close-category-edit-popup');
const formCategoryEdit = document.getElementById('form-category-edit');


if(categoryEditPopup && openCategoryEditPopup && closeCategoryEditPopup && formCategoryEdit) {
    openCategoryEditPopup.forEach(btn => {
        btn.addEventListener('click', function(){
            categoryEditPopup.classList.remove('hidden');
            formCategoryEdit['id'].value = btn.dataset.id;
            formCategoryEdit['name'].value = btn.dataset.name;
        });
    });

    closeCategoryEditPopup.addEventListener('click', () => {
        categoryEditPopup.classList.add('hidden');
        formCategoryEdit.reset();
    });

    window.addEventListener('click', (event) => {
        if (event.target === categoryCreatePopup) {
            categoryCreatePopup.classList.add('hidden');
        }
    });
}