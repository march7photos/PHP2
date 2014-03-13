<!--// LAMP 1 Customer Satisfaction Survey-->
<!--By: MIke Barry-->

<?php

session_start();

//which page to display in the wizard
function display_html() {
   
    if (!isset($_SESSION['page']))
        $_SESSION['page'] = 'page1_mb';
    
    $page = $_SESSION['page'];
    if ($page == 'page1_mb') 
        include('page1_mb.php');
    else if ($page == 'page2_mb') 
        include('page2_mb.php');
    else if ($page == 'page3_mb')
        include('page3_mb.php');
    else if ($page == 'page4_mb')
        include('page4_mb.php');
    else if ($page == 'finished')
        include('finished.php');
}

// create session data array
// put post data into session array
// error checking
function handle_post() {

    if (!isset($_SESSION['data']))
        $_SESSION['data'] = array();
    
    $page = $_SESSION['page'];

    foreach ($_POST as $field => $value) {
        $_SESSION['data'][$page."_".$field] = $value;
        
    }

    if ($page == 'page1_mb') {
       
        $_SESSION['page'] = 'page2_mb';
    }
    if ($page == 'page2_mb') {
        if (empty($_POST['fullName']))
            $error = TRUE;
            $_SESSION['errors']['fullName'] = $error;
            
        if (empty($_POST['age']) || !is_numeric($_POST['age'])) 
            $error = TRUE;
            $_SESSION['errors']['age'] = $error;
           
        if (empty($_POST['gender']))
            $error = TRUE;
            $_SESSION['errors']['gender'] = $error;
            
        if (!$error) 
            $_SESSION['page'] = 'page3_mb';
    }
    
       
     if ($page == 'page3_mb') {
         
         if (empty($_POST['rdoHowLong'])) 
            $error = TRUE;
            $_SESSION['errors']['rdoHowLong'] = $error;
            
        if (empty($_POST['chkProducts'])) 
            $error = TRUE;
            $_SESSION['errors']['chkProducts'] = $error;
        
        if (!$error) 
            $_SESSION['page'] = 'page4_mb';
        
     }
     
     if ($page == 'page4_mb') {
         $device = "";
         foreach ($_SESSION['data']['page3_mb_chkProducts'] as $device) 
         
             if (empty($_POST['happy_'.$device])) 
                $error = TRUE;
                $_SESSION['errors']['happy_'.$device] = $error;
                
             if (empty($_POST['recommend_'.$device])) 
                $error = TRUE;
                $_SESSION['errors']['recommend_'.$device] = $error;
             
             if (!$error) 
                    $_SESSION['page'] = 'finished';
     }
     
    header('Location: index_mb.php');
    exit;
}


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    display_html();
}
else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    handle_post();
}
?>
