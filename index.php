<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rolando Ruiz Macquarie Test Exam</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/587c6eb406.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   	<h1 class="center">Look Whos Popular</h1>
    <div class="container margint-top-200">
        <div class="row">
    		   <div class="col-md-4">
               <input type="text" class="form-control" id="handle" placeholder="@twitter handle here">
               <select class="form-control input-lg margin-top-50" id="line">
                   <option value="2">2</option>
                   <option value="3">3</option>
                   <option value="5">5</option>
                </select>
                  
    		    </div>
    		    <div class="col-md-2 margin-top-40">
                 <button type="button" class="btn btn-success">Go -></button>
    		    </div>
    		    <div class="col-md-5">
                <div id="output"></div>

    		  </div>
    	</div>
    </div>

     <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
       <div class="modal-dialog">
    
         <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-body" id="content"></div>
          </div>
       </div>
      
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

     <script src="js/process.js"></script>

   </body>
</html>