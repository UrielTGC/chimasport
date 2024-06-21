const openModals = document.querySelectorAll('.btn-1');
const modal = document.querySelector('.modal');
const closeModal = document.querySelector('.modal-close');

openModals.forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        modal.classList.add('modal--show');
    });
});

closeModal.addEventListener('click', (e) => {
    e.preventDefault();
    modal.classList.remove('modal--show');
});

document.addEventListener("contextmenu", function(e) {
    e.preventDefault();
});

document.addEventListener('DOMContentLoaded', function() {
    var serviciosLink = document.querySelector('a[href="#Services"]');
    serviciosLink.addEventListener('click', function(event) {
        event.preventDefault();
        var servicesSection = document.getElementById('Services');
        servicesSection.scrollIntoView({ behavior: 'smooth' });
    });
});
