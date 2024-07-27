 document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.nav-link');
            const dropdownItems = document.querySelectorAll('.dropdown-item');

            navLinks.forEach(link => {
                link.addEventListener('click', function () {
                    navLinks.forEach(nav => nav.classList.remove('active'));
                    link.classList.add('active');
                });
            });

            dropdownItems.forEach(item => {
                item.addEventListener('click', function () {
                    navLinks.forEach(nav => nav.classList.remove('active'));
                    dropdownItems.forEach(drop => drop.classList.remove('active'));
                    item.classList.add('active');
                    item.closest('.dropdown').querySelector('.nav-link').classList.add('active');
                });
            });
        });