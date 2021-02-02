$( document ).ready(function() {
// For Corporate Sector
$("#registerBtn").click(() => {
    var email = $("#email").val()
        pwd = $("#password").val();
        // Checking for empty field
        firebase.auth().createUserWithEmailAndPassword(email, pwd)
        .then(() => {
            console.log("User Created")
            var user = firebase.auth().currentUser;
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