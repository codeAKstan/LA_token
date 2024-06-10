document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.navigation');
    const closeBtn = document.querySelector('.close-btn');

    menuToggle.addEventListener('click', function() {
        navigation.classList.toggle('show');
    });

    closeBtn.addEventListener('click', function() {
        navigation.classList.remove('show');
    });
});
