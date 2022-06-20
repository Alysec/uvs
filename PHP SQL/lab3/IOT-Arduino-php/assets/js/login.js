function validasi() {
    valid = /^[A-Za-z-9]{1,}$/;
    var username = $('#username').val();
    var password = $('#password').val();
    if ((username == '') && (password == '')) {
        $('#pesan').text("Veillez entrer un nom d'utilisateur et un mot de passe ");
    } else {
        if (!valid.test(username)) {
            $('#pesan').text("Veillez entrer un format correct");
        } else {
            cekLogin(username, password);
        }
    }
}



function cekLogin(username, password) {
    $(document).ready(function () {
        $.ajax({
            url: "assets/php/cekLogin.php",
            type: "POST",
            data: {
                username: username,
                password: password
            }
        }).done(function (data) {
            console.log(data);
            switch (data) {
                case "1":
                    window.location = 'assets/pages/dashboard.html';
                    break;
                case "0":
                    $('#pesan').text("Username ou password incorrecte");
                    break;
            }
        })
    })
}