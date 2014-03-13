<!--// LAMP 1 Customer Satisfaction Survey-->
<!--By: MIke Barry-->
<!--Page 4 How happy are you with this device and would you recommend it to a friend?-->
<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <title>Page 4</title>
    </head>
    <body>

        <form action="index_mb.php" method="POST">
<!--            loop through selections on Page 3 and output questions per each choice-->
            <?php
                foreach ($_SESSION['data']['page3_mb_chkProducts'] as $device) {      
            ?>
            
            <p>Please complete the following questions for the computer you purchased with us:</p>
            <label for="happy_<?php echo $device; ?>">How happy are you with your <?php echo $device; ?> on a scale of  
            1-5 where is not satisfied and 5 is very satisfied?</label></br></br>
            <input type="radio" name="happy_<?php echo $device; ?>" value="1years">1</input></br>
            <input type="radio" name="happy_<?php echo $device; ?>" value="2years">2</input></br>
            <input type="radio" name="happy_<?php echo $device; ?>" value="3years">3</input></br>
            <input type="radio" name="happy_<?php echo $device; ?>" value="3years">4</input></br>
            <input type="radio" name="happy_<?php echo $device; ?>" value="3years">5</input></br>
           </br>
           
           <?php
            if (isset($_SESSION['errors']['happy_'.$device])){
                echo "<p class='error'>Please make a choice of how many years.</p></br>";
            }
            ?>
           
             <label for="recommend_<?php echo $device; ?>">Would you recommend the purchase of your 
                 <?php echo $device; ?> to a friend?</label></br></br>
             <select>
                <option type="option" name="recommend_<?php echo $device; ?>" value="null"></option></br>
                <option type="option" name="recommend_<?php echo $device; ?>" value="yes">Yes</option></br>
                <option type="option" name="recommend_<?php echo $device; ?>" value="no">No</option></br></br>
             </select></br></br>
                <?php
                    if (isset($_SESSION['errors']['recommend_'.$device])){
                        echo "<p class='error'>Please make a choice of Yes or No.</p></br>";
                    }
                ?>
            
              <?php
                }
               ?>
            <input type="submit" value="Next"/>
        </form>
    </body>
</html>