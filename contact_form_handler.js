document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('customOrderForm');
    const successMessage = document.getElementById('successMessage');

    form.addEventListener('submit', function(event) {
        // Prevent the default form submission (which would reload the page)
        event.preventDefault();

        // ---
        // NOTE: In a real environment, you would insert AJAX code here
        // to send the form data to a PHP script (e.g., 'send_email.php') 
        // that handles the actual email delivery.
        // ---

        // Simulate a successful server response for the client-side user experience
        
        // 1. Hide the form
        form.style.display = 'none';

        // 2. Show the success message
        successMessage.style.display = 'block';

        // 3. Optional: Scroll back to the top of the section for visibility
        successMessage.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});