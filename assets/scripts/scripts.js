document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.navigation');
    const closeBtn = document.querySelector('.close-btn');

    menuToggle.addEventListener('click', function () {
        navigation.classList.toggle('show');
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', function () {
            navigation.classList.remove('show');
        });
    }

    document.querySelectorAll('.faq-question').forEach(item => {
        item.addEventListener('click', () => {
            const answer = item.nextElementSibling;
            answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
        });
    });

    // Get the modal
    var modal = document.getElementById("walletModal");

    // Get the button that opens the modal
    var btn = document.getElementById("connectWalletButton");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});