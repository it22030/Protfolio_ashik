function sendMail() {
    let parms = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        subject: document.getElementById("subject").value,
        message: document.getElementById("message").value
    };

    emailjs.send("service_0wzzfou", "template_o7ogv7h", parms)
        .then(function(response) {
            alert("Message Sent Successfully ✔");
        }, function(error) {
            alert("Failed to send message ❌ Please try again");
            console.log("Error:", error);
        });
}
