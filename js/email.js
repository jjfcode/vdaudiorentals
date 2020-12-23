function send(event) {
    event.preventDefault();
    Email.send({
        name:document.getElementById('name').value,
        // SecureToken : "14b14874-42eb-4126-9715-253ac1a1daf0",
        SecureToken : "14b14874-42eb-4126-9715-253ac1a1daf0",
        To : 'jjfcode@gmail.com',
        From : document.getElementById('email').value,
        Subject : document.getElementById('subject').value,
        Body : document.getElementById('message').value,
        }).then(function(response){
            if (response == 'OK') {
                alert("Mail sent succesfully");
            } else {
                throw new Error("Error: " + response.statusText);
            }
        });
}

