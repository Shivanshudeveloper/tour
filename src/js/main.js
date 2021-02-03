$( document ).ready(function() {
// For Corporate Sector
$("#registerBtn").click(() => {
    var email = $("#email").val(),
        name = $("#name").val(),
        country = $("#country").val(),
        address = $("#address").val(),
        pwd = $("#password").val();
        // Checking for empty field
        firebase.auth().createUserWithEmailAndPassword(email, pwd)
        .then(() => {
            var user = firebase.auth().currentUser;
            $.post("./src/php/main.php", {
                email,
                name,
                country,
                address,
                uid: user.uid,
                userRegister: true
            })
            user.sendEmailVerification().then(function() {
                swal("Registered",`A verification mail is send to ${email}`, "success", {
                    button: "Okay",
                })
                .then((value) => {
                    sessionStorage.setItem("email", email);
                    window.location.href = "phone_verification.php";
                });
              }).catch(function(error) {
                swal("Error", `${error}`, "error")
              });
        })
        .catch((err) => swal("Error", `${err}`, "error"))
})
});