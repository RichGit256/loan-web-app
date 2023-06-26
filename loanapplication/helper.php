<?php
    function firstName($fName)
    {
        $fnameToArray = str_split($fName);

        $alpha = TRUE;
        $spacing = TRUE;
        $message = TRUE;
        
 
        foreach ($fnameToArray as $char)
        {
            switch($char)
            {
                case in_array('', $fnameToArray):
                $spacing = FALSE;
                break;
            } 
            if(!ctype_alpha($char))
            {
                $alpha = FALSE;
            }
        }
        if(!$alpha or !$spacing)
        {
            $message = '';
            $message = "<center style='color:red'>Name must contain alphabet only and must not contain whitespace<label></center><br>";
            return $message;
        }

        
        if($alpha == TRUE and $spacing == TRUE)
        {
            return $message;
        }
    }

    
    
    function lastName($lName)
    {
        $lnameToArray = str_split($lName);

        $alpha = TRUE;
        $spacing = TRUE;
        $message = TRUE;
        
        foreach ($lnameToArray as $char)
        {
            switch($char)
            {
                case in_array('', $lnameToArray):
                $spacing = FALSE;
                break;
            } 
            if(!ctype_alpha($char))
            {
                $alpha = FALSE;
            }
        }
        if(!$alpha or !$spacing)
            {
                $message = '';
                $message = "<center style='color:red'>Name must contain alphabet only and must not contain whitespace<label></center><br>";
                return $message;
            }

        
        if($alpha == TRUE and $spacing == TRUE)
        {
            return $message;
        }

    }
    

    

    function checkNumber($number)
    {
        $numberToArray = str_split($number);

        $phone1 = FALSE; 
        $length = FALSE;
        $ctype = TRUE;
        $message = TRUE;
        
        
        foreach ($numberToArray as $char)
        {
            if(ctype_digit($char)==FALSE)
               {
                    $ctype = FALSE; 
                    break;
               }
        }

        if(count($numberToArray)==11)
        {
            $length = TRUE;
        }
        
        if(substr($number, 0, 3) == "080" or substr($number, 0, 3) == "090" or substr($number, 0, 3) == "070")
          {
            $phone1 = TRUE;
          }

          if(!$phone1 or !$length or !$ctype)
        {
            $message = '';
            $message = "<center style='color:red'>Enter valid Phone Number</center>";
            return $message;
        }

        
        if($phone1 == TRUE and $length == TRUE and $ctype == TRUE)
        {
            return $message;
        }
  
         

    }

    function validBvn($bvn)
    {
        $bvnToArray = str_split($bvn);

         
        $length = FALSE;
        $ctype = TRUE;
        $message = 'Valid';
        
        foreach ($bvnToArray as $char)
        {
            if(ctype_digit($char)==FALSE)
               {
                    $ctype = FALSE; 
                    break;
               }
        }

        if(count($bvnToArray)==11)
        {
            $length = TRUE;
        }

        if(!$ctype or !$length)
        {
           $message = '';
           $message = "Please enter valid BVN";
        }
        if($ctype ==TRUE and $length == TRUE)
        {
            return $message;
        }
    }

    function isEmailCorrect($email)
    {
        $emailToArray = str_split($email);

        $dot = FALSE;
        $at = FALSE;
        $message ='Valid';
        
        


       foreach ($emailToArray as $char)
       {
            switch($char)
            {
                case in_array('.', $emailToArray):
                $dot = TRUE;
                break;
            } 
            if (preg_match('/[@]/', $email))
            {
                $at = TRUE;
            }
       }
            if ($dot == FALSE or $at == FALSE)
            {
                $message = '';
                $message = "Please enter valid email";
            }
            if ($dot == TRUE and $at == TRUE)
            {
                return $message;
            }
    
    }

?>