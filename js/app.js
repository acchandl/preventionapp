/*
 * Copyright 2019
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-sb-admin-2/blob/master/LICENSE)
 */

 /*******************************************************
                    Uploads
 *******************************************************/

 $(document).ready(function (e) {
  $("#serviceLogForm").on('submit',(function(e) {
   e.preventDefault();
   $.ajax({
    url: "ajax.php",
    type: "POST",
    data:  new FormData(this),
    contentType: false,
    cache: false,
    processData:false,
    beforeSend : function()
    {
     //$("#preview").fadeOut();
     $("#err").fadeOut();
    },
    success: function(data)
       {
     if(data=='invalid')
     {
      // invalid file format.
      $("#err").html("Invalid File !").fadeIn();
     }
     else
     {
      // view uploaded file.
      $("#preview").html(data).fadeIn();
      $("#serviceLogForm")[0].reset();
 	// show_images();
     }
       },
      error: function(e)
       {
     $("#err").html(e).fadeIn();
       }
     });
  }));
 });
