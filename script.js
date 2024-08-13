// untuk menampilkan notifikasi jika email terkirim

$(document).ready(function() {
    $('#form-submit').click(function() {
        var email = $('#email').val();

        $.ajax({
            url: 'save_email.php',
            type: 'POST',
            data: { email: email },
            success: function(response) {
                window.alert('Email terkirim');
                $('#email').val('');
            },
            error: function() {
                window.alert('Email terkirim');
                $('#email').val('');

            }
        });
    });
});
