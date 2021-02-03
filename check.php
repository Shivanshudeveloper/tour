<!-- Header Included -->
<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-analytics.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-auth.js"></script>
<body>
    Loading...


    <script src="src/js/firebase-config.js"></script>
    <script>
        firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                var email = sessionStorage.getItem("email");
                $.post("./src/php/main.php", {
                    phoneNumber: user.phoneNumber,
                    email: email,
                    phoneNumberVerifyStudent: true
                }).then(() => {
                    console.log("Done")
                    firebase.auth().signOut().then(function () {
                        window.location.href = "signin.php?u=s"
                    }).catch(function (error) {
                        console.error(error)
                    });
                })
            }
        });
    </script>
</body>

</html>