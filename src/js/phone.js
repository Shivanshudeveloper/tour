(function(){
    var ui = new firebaseui.auth.AuthUI(firebase.auth());
    var pageURL = window.location.href;
            url = new URL(pageURL);
            id = url.searchParams.get("id");
    
    var uiConfig = {
        callbacks: {
            signInSuccessWithAuthResult: function (authResult, redirectUrl) {
                console.log(authResult);
                // User successfully signed in.
                // Return type determines whether we continue the redirect automatically
                // or whether we leave that to developer to handle.
                return true;
            },
            uiShown: function () {
                // The widget is rendered.
                // Hide the loader.
                document.getElementById('loader').style.display = 'none';
            }
        },
        // Will use popup for IDP Providers sign-in flow instead of the default, redirect.
        signInFlow: 'popup',
        signInSuccessUrl: 'check.php',
        signInOptions: [
            {
                provider: firebase.auth.PhoneAuthProvider.PROVIDER_ID,
                defaultCountry: 'IN'
            }
        ],
        
        
        // Terms of service url.
        tosUrl: 'check.php',
        // Privacy policy url.
        privacyPolicyUrl: '<your-privacy-policy-url>'
    };
    

    ui.start("#firebaseui-auth-container", uiConfig);
})()