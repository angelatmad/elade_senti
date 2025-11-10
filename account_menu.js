document.addEventListener('DOMContentLoaded', () => {
    const userMenuToggle = document.getElementById('userMenuToggle');
    const accountDropdown = document.getElementById('accountDropdown');

    if (userMenuToggle && accountDropdown) {
        userMenuToggle.addEventListener('click', () => {
            // Toggle the 'visible' class to show/hide the dropdown
            accountDropdown.classList.toggle('visible');
        });

        // Optional: Close the menu if the user clicks anywhere else on the document
        document.addEventListener('click', (event) => {
            // Check if the click occurred outside both the toggle icon and the dropdown menu
            const isClickInside = userMenuToggle.contains(event.target) || accountDropdown.contains(event.target);

            if (!isClickInside && accountDropdown.classList.contains('visible')) {
                accountDropdown.classList.remove('visible');
            }
        });
    }
});