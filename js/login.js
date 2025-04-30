$(document).ready(function () {
    $('#loginForm').submit(function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'login_action.php', // fișierul PHP separat
            data: $(this).serialize(),
            success: function (response) {
                if (response === 'success') {
                    window.location.href = 'index.php';
                } else {
                    $('#loginResult').html('<p style="color:red;">' + response + '</p>');
                }
            },
            error: function () {
                $('#loginResult').html('<p style="color:red;">Eroare la server. Încearcă din nou.</p>');
            }
        });
    });
});
