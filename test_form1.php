<!doctype html>
<html>
    <head>
    </head>
    <body>
    <?php
        //$name = $email = $website = $comment = $gender = "";
      $name = $email = $gender = $comment = $website = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
        
        }
        
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        
        <h2>NASIR FØRST SKJEMA</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                  
            NAVN: <input type ="text" name="name" >
            <br><br>
            
            E-MAIL: <input type="text" name="email">
            <br><br>
            
            WEBSIDE: <input type="text" name="website">
            <br><br>
            KOMMENTS: <textarea name="comment" row="5" cols="40"></textarea>
            <br><br>
            KJØNN: <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="male">Male
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        
        <?php
        echo "<h2> DU HAR TASTET INN FØLGENDE INFORMASJON:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
           
  ?>         
            
            
    </body>
    
</html>