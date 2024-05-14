// Get references to the button and popup elements
const addButton = document.getElementById('add-section-button');
const popup = document.getElementById('add-section-popup');

// Add event listener to the button to toggle popup display
addButton.addEventListener('click', () => {
    popup.style.display = 'block'; // Show the popup
});

// Add event listener to the form submit event to hide the popup after submission
const addSectionForm = document.getElementById('add-section-form');
addSectionForm.addEventListener('submit', (event) => {
    event.preventDefault(); // Prevent form submission

    // Process form data here (you can add your logic here)

    popup.style.display = 'none'; // Hide the popup after submission
});
