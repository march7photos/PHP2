<!--// LAMP 1 Customer Satisfaction Survey-->
<!--By: MIke Barry-->
<!--Page 2 Enter Name, Age and Gender -->

<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <title>Page 2</title>
    </head>

    <body>
        <form action="index_mb.php" method="POST">
            <h1>Please enter your full name, age and gender: </h1>
            <label for="fullName">Full Name: </label>
            <input type="text" name="fullName"></input></br>
             <?php
            if (isset($_SESSION['errors']['fullName'])){
                echo "<p class='error'>Please enter your full name.</p></br>";
            }
                ?>
           
            <label for="age">Age: </label>
            <input type="text" name="age"></input></br>
            <?php
            if (isset($_SESSION['errors']['age'])){
                echo "<p class='error'>Please enter your age as a number.</p></br>";
            }
                ?>    
                    
            <label for="gender">Gender: </label>
            <select name="gender">                                           
                <option value="null"></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select></br> 
            <?php
            if (isset($_SESSION['errors']['gender'])){
                echo "<p class='error'>Please select your gender.</p></br>";
            }
                ?>
                
                <input type="submit" value="Next"/>
        </form>
    </body>
</html>
