console.log("changed")


function logout() {
    $.ajax({
        url: "logout.php",
        type: "get", //send it through get method
        success: function(response) {
            // Do Something with the response
            console.log(response);
          //  console.log(document.getElementById("login-m").innerHTML );
          document.getElementById("login").innerHTML= '<a href="login.html">Login</a>' +
            '<ul class="sub-menu">' +
            '<li><a href="signup.html?show=signup">Sign Up</a></li>' +
            '</ul>';
            document.getElementById("login-m").innerHTML += '<li><a href="login.html">Login</a></li><li><a href="signup.html">Sign Up</a></li>';
            document.getElementById("login-m-d").remove();
            let cartElement = document.getElementById('cart');
    while (cartElement.firstChild) {
        cartElement.removeChild(cartElement.firstChild);
    }
    document.getElementById('cart-count').innerHTML = "0";
    console.log("remove from cart ran")
        },
        error: function(xhr) {
            //Do Something to handle error
            console.log(xhr);
        }
    });
    
}