import './bootstrap';


document.addEventListener('DOMContentLoaded', function () {
    
    const messageElement = document.getElementById('message');
    const updateButton = document.getElementById('updateButton');

    
    updateButton.addEventListener('click', function () {
        
        messageElement.textContent = 'Content updated by JavaScript!';
    });
});
