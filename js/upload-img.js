$(document).ready(function() {
  $(document).on("click", "#subir-foto", function(event) {
    event.preventDefault();
    $(".container-button-upload").show();
    $(this).hide();
  });

  /*$(document).on("click", "#btn-upload-img", function(event) {
    //  event.preventDefault();
    $("#form-img").submit();
  });*/

  /*$("#form-img").on('submit', (function(e) {
    /*e.preventDefault();
    $.ajax({
      url: "/View/account/uploadImg.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function() {
        //$("#preview").fadeOut();
        $("#err").fadeOut();
      },
      success: function(data) {
        if (data == 'invalid') {
          // invalid file format.
          $("#err").html("Invalid File !").fadeIn();
        } else {
          // view uploaded file.
          $("#preview").html(data).fadeIn();
          $("#form")[0].reset();
        }
      },
      error: function(e) {
        $("#err").html(e).fadeIn();
      }
    });
  }));*/
});
