<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">

<link rel='stylesheet' href='chat-app/assets/bootstrap/css/bootstrap.css' >


<?php if ( isset($_GET["firstName"]) && isset($_GET["lastName"]) ) { ?>
    <script src="chat-app/chat-app-loader.js"></script>            
<?php } ?>
</head>

<body>
    <section style="height:200px;">   
    </section>
    <section>
        <div class="container">  
            <div class="row">   
                <div class="col-xs-12">
                    <h2>Chat APP TEST Student PAGE</h2>
                    <?php if ( isset($_GET["firstName"]) && isset($_GET["lastName"]) ) { ?>
                        <h3>Welcome <?php echo $_GET["firstName"] ?> <?php echo $_GET["lastName"] ?></h3>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
        

<?php
    if ( isset($_POST["firstName"]) && isset($_POST["lastName"]) ) {
      if (preg_match("/[^A-Za-z'-]/",$_POST['firstName'] )) {
         die ("invalid name and name should be alpha");
      }
      echo "Welcome " . $_POST['firstName'] . " " . $_POST['lastName'] . "<br />";
      exit();
   }
?>

<section>
    <div class="container">  
        <div class="row">   
            <div class="col-xs-12">
<!--     <form action = "<?php $_PHP_SELF ?>" method = "GET">
         FirstName: <input type = "text" name = "firstName" />
         LastName: <input type = "text" name = "lastName" />
         <input type = "submit" />
      </form> -->
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">  
        <div class="row">   
            <div class="col-xs-12">
                <a href='?firstName=Bruce&lastName=Banner&studentID=11' class="btn btn-info">Student: Bruce</a>
                <a href='?firstName=Tony&lastName=Stark&studentID=12' class="btn btn-info">Student: Tony</a>
                <a href='?firstName=Steve&lastName=Rogers&studentID=13' class="btn btn-info">Student: Steve</a>
                <p><br></p>
                <a href='student.php' class="btn btn-success">Go Back</a>
                <p><br></p>
                <pre>
                <?php 

                 ?>                
                    
                </pre>
            </div>
        </div>
    </div>
</section>


            
            


    </body>
</html>