function Contact(){
    $.ajax({
        url: '/contact/',
        type: 'GET',
        success: function (response) {
            if (response.message) {
                $('#contactus').html(response.html);
            }
            else {
            }
        },
        error: function (xhr, status, error) {
        }
    });
}
