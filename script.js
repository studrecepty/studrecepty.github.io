function SendMail() {
    // Get input values
    let name = document.getElementById("Name").value.trim();
    let email = document.getElementById("email_id").value.trim();
    let message = document.getElementById("message").value.trim();

    // Check if any required field is empty
    if (!name || !email || !message) {
        alert("Vyplň všetky polia");
        return; // Exit the function early if any field is empty
    }

    // If all required fields are filled, proceed with sending the email
    let parms = {
        Name: name,
        email_id: email,
        message: message
    };

    emailjs.send("service_t4fheqj", "template_3x6qlmg", parms)
        .then(function(response) {
            console.log('Email odoslany:', response);
            alert("Email odoslaný!");
        })
        .catch(function(error) {
            console.error('Error', error);
            alert("Error");
        });
}