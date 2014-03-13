<!--// LAMP 1 Customer Satisfaction Survey-->
<!--By: MIke Barry-->
<!--Page 3 Select number of years since first purchase and device purchased -->

<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <title>Page 3</title>
    </head>
    <body>
        
        <form action="index_mb.php" method="POST">
            <label for="rdoHowLong">How long has it been since your first purchase 
            with us? </label></br></br>
            <input type="radio" name="rdoHowLong" value="1years">1 year</input></br>
            <input type="radio" name="rdoHowLong" value="2years">2 years</input></br>
            <input type="radio" name="rdoHowLong" value="3years">3 years</input></br>
            </br>
             <?php
            if (isset($_SESSION['errors']['rdoHowLong'])){
                echo "<p class='error'>Please select how long it has been since your first purchase 
            with us?</p></br>";
            }
                ?>
             <label for="chkProducts">Which of the following have you purchased from 
                 us? </label></br></br>
            <input type="checkbox" name="chkProducts[]" value="desktop">Desktop Computer</input></br>
            <input type="checkbox" name="chkProducts[]" value="laptop">Laptop</input></br>
            <input type="checkbox" name="chkProducts[]" value="tablet">Tablet</input></br></br>
            
            <?php
            if (isset($_SESSION['errors']['chkProducts'])){
                echo "<p class='error'>Please select a product.</p></br>";
            }
                ?>
            <input type="submit" value="Next"/>
        </form>
    </body>
</html>