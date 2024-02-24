$('#givenText').keyup(function () {
    var userInput = $('#givenText').val();
    $.ajax({
        type: "GET",
        url: "server.php",
        data: {text: userInput},
        DataType: "JSON",
        success: function (response) {
            $('#res').text(response);
        }
    });
});

