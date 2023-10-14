function signIn() {
    var user = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var rememberMe = document.getElementById("rememberme").checked;

    var form = new FormData();

    form.append("user", user);
    form.append("password",password);
    form.append("rememberMe",rememberMe);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var text = r.responseText;
            if(text=="success"){
                window.location="index.php"
            }else{
                alert(text);
            }
        }
    }
    r.open("POST", "signInprocess.php", true);
    r.send(form);
}