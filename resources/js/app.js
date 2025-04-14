import './bootstrap';

// FAQ 
const faqArrow = document.querySelectorAll('.faq-arrow');
const faqAnswer = document.querySelectorAll('.faq-answer');

faqArrow.forEach((arrow, index) => {
    arrow.addEventListener('click', () => {
        faqAnswer[index].classList.toggle('hidden');
        arrow.classList.toggle('rotate-180');
    });
});