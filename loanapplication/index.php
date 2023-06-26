<?php
   include "helper.php";
   
   
   
    
    if(isset($_POST['submit1']))
    {
        
        if(isset($_POST['firstName']) and isset($_POST['lastName']) and isset($_POST['gender'])
        and isset($_POST['birthday']) and isset($_POST['phoneNum']) and isset($_POST['email'])
        and isset($_POST['homeAdd']) and isset($_POST['mStatus']) and isset($_POST['mStatus2']))
        {
            if(isset($_POST['firstName']))
            {        
                $userFirstName = $_POST['firstName'];
                if(!firstName($userFirstName))
                {
                    echo (!firstname($userFirstName));
                }
            }
            if(isset($_POST['lastName']))
            {        
                $userLastName = $_POST['lastName'];
                if(!lastName($userLastName))
                {
                    echo (!lastName($userLastName));
                }
            }
            if(isset($_POST['phoneNum']))
            {        
                $userPhoneNum = $_POST['phoneNum'];
                if(!checkNumber($userPhoneNum))
                {
                    echo (!checkNumber($userPhoneNum));  
                }
            }
            if(isset($_POST['email']))
            {        
                $userEmail = $_POST['email'];
                if(!isEmailCorrect($userEmail))
                {
                    echo (!isEmailCorrect($userEmail));
                }
            }
            include "employmentInfo.html";
            exit;
        }
        elseif(!isset($_POST['firstName']) or !isset($_POST['lastName']) or !isset($_POST['gender'])
        or !isset($_POST['birthday']) or !isset($_POST['phoneNum']) or !isset($_POST['email'])
        or !isset($_POST['homeAdd']) or !isset($_POST['mStatus1']) or !isset($_POST['mStatus2']))
        {
            include "message.html";
            exit;
            
        }
        elseif (firstName($_POST['firstName']) != TRUE or lastName($_POST['lastName']) != TRUE and checkNumber($userPhoneNum) != TRUE)
        {
            include "message.html";
            exit;
        }
    }

    if(isset($_POST['submit2']))
    {
        if(isset($_POST['eStatus']) and isset($_POST['occupation']) and isset($_POST['mincome'])) 
        {
            include "identification.html";
            exit;
        }
        else
        {
            echo "<h6 style='color:red'>Please fill all fields</h6>";;
            exit;
        }
    }

    if(isset($_POST['submit3']))
    {
        if(isset($_POST['moi']) and isset($_POST['bvn']))
        {
            if(isset($_POST['bvn']))
            {        
                $userBvn = $_POST['bvn'];
                if(validBvn($userBvn))
                {
                    echo (validBvn($userBvn));
                }
            }
            include "output.php";
            exit;
        }
        else
        {
            echo "<h6 style='color:red'>Please fill all fields</h6>";
            exit;
        }
    }





    include "index.html";
    exit;



    
    

   
    

   
   


        
        

   

   


   



   
?>