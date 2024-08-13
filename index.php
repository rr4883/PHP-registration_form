<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        extract($_POST);
        if(!mb_ereg("^[9]{3}[0-9]{7}$",$phone))
        {
            print("error.try again<br>");
            die("</body></html>");
        }
    ?>
    
    
    <span>Hi <?php print("$fname");?></span>
    <p>thank you for completing</p>
    <span> the gender u have choosen is <?php print("$gender");?></span>
    <br>
    <span>the hobbies choosen are <?php print("$os");?></span>
    



</body>
</html>
