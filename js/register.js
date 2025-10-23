$(document).ready(function () {
    $('#registerForm').submit(function (e) {
        e.preventDefault(); // prevenim reîncărcarea

        $.ajax({
            type: 'POST',
            url: 'registerPOST.php', // scriptul PHP
            data: $(this).serialize(), // trimite toate câmpurile
            success: function (response) {
                $('#result').html(response);
            },
            error: function () {
                $('#result').html('Eroare la trimiterea datelor.');
            }
        });
    });
});
