$( document ).ready(function() {
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            $("#checkforuser").html(`
            <a href="logout.php" class="nav-link">Signout</a>
            `);
        } else {
            $("#checkforuser").html(`
            <a href="signin.php" class="nav-link">Sign In / Sign Up</a>
            `);
        }
    });
});