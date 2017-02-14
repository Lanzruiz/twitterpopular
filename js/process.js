 

 $('button').click(function() {

    var handle   =  $("#handle").val(); 
    var line     =  $("#line").val(); 


    // set array data to send it to callback
    var postData = {

        'handle'     : handle,
        'line'       : line,

    }   

   $.post('callback.php', postData, function(data) {
 
      // write the data in specific div id
     document.getElementById("output").innerHTML = data;

    });
  
  });

 $(document).on("click", ".line", function () {


     var picture_url = $(this).data('id');
    
      // write data in modal for the profile picture
      document.getElementById("content").innerHTML = '<img style="width:100px; height:100px"src="'+picture_url+'">';

      $("#myModal").modal();

 });