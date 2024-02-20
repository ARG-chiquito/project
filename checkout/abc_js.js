document.addEventListener("DOMContentLoaded", function () {
    const paymentSelect = document.getElementById("payment");
    const creditCardDetails = document.getElementById("credit-card-details");
    const bankDetails = document.getElementById("bank-details");
    const paymentIdInput = document.getElementById("payment-id");
    const totalAmountElement = document.getElementById("total-amount");
    const form = document.getElementById("checkout-form");
    const submitButton = document.getElementById("submit-button");

    // Extract the total amount from the query parameter
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const totalAmount = urlParams.get("totalAmount");

    // Display the total amount on the page
    totalAmountElement.textContent = `${totalPrice.toFixed(2)}`;

    // Event listener for payment method selection
    paymentSelect.addEventListener("change", function () {
        const selectedValue = paymentSelect.value;

        // Hide all payment details sections
        creditCardDetails.classList.add("hidden");
        bankDetails.classList.add("hidden");

        // Show the relevant payment details section
        if (selectedValue === "credit") {
            creditCardDetails.classList.remove("hidden");
        } else if (selectedValue === "bank") {
            bankDetails.classList.remove("hidden");
        }
    });

    // Event listener for form submission
    form.addEventListener("submit", function (event) {
        event.preventDefault();

        // Validate form fields here
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const address = document.getElementById("address").value;
        const payment = paymentSelect.value;

        let isValid = true;

        if (!name || !email || !address) {
            isValid = false;
            alert("Please fill out all required fields.");
        }

        if (payment === "google") {
            redirectToGooglePay(); // Redirect to Google Pay
            return; // Don't proceed with form submission
        }

        if (payment === "bank" && !paymentIdInput.value) {
            isValid = false;
            alert("Please enter your Payment ID for Bank Transfer.");
        }

        if (isValid) {
            // Perform actual order processing here (backend integration needed)
            processOrder(name, email, address, payment);
        }
    });

    // Function to redirect to Google Pay
    function redirectToGooglePay() {
        window.location.href = "https://pay.google.com"; // Redirect to Google Pay
    }

    // Function to send order confirmation email
    function sendOrderConfirmationEmail(email) {
        // Example implementation (replace with your actual email sending code)
        // This function is a placeholder and will not actually send an email
        console.log(`Sending order confirmation email to ${email}`);
    }

    // Function to process the order
    function processOrder(name, email, address, payment) {
        // Example: Send order details to server using fetch or AJAX
        const orderData = {
            name: name,
            email: email,
            address: address,
            payment: payment,
            paymentId: paymentIdInput.value || null // If payment is not bank, paymentId will be null
        };

        // Simulate order processing (replace with actual server request)
        setTimeout(function () {
            sendOrderConfirmationEmail(email);
            alert("Order placed successfully!");
            form.reset();
        }, 2000);
    }
});

