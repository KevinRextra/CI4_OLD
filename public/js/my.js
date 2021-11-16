function myFunction() {
    $("form").on("submit", function (event) {
        event.preventDefault();
        $.ajax({
            url: "yoururl",
            type: "POST",
            data: yourData,
            success: function (result) {
                console.log(result)
            }
        });
    })
}