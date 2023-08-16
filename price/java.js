// your-script.js

document.addEventListener('DOMContentLoaded', function() {
    const fetchPriceButton = document.getElementById('fetchPrice');

    fetchPriceButton.addEventListener('click', function() {
        const itemName = document.getElementById('itemName').value;
        const inputDate = document.getElementById('inputDate').value;

        // Load JSON data
        fetch('output.json')
            .then(response => response.json())
            .then(data => {
                const formattedInputDate = inputDate.replace(/-/g, ''); // Remove hyphens from input date
                const priceData = data.find(entry => entry.item === itemName && entry.date === formattedInputDate);

                if (priceData) {
                    displayPrice(priceData.price);
                } else {
                    displayErrorMessage("Price not found for the selected item and date.");
                }
            })
            .catch(error => console.error('Error loading JSON data:', error));
    });

    function displayPrice(price) {
        const priceContainer = document.getElementById('priceContainer');
        priceContainer.innerHTML = `Price: ${price}`;
    }

    function displayErrorMessage(message) {
        const priceContainer = document.getElementById('priceContainer');
        priceContainer.innerHTML = `<p>${message}</p>`;
    }
});
