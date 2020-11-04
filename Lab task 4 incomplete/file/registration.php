<?php
	error_reporting(0);
	if(!empty($_POST['name']))
	{ 
		
				if(strlen($_POST['name'])>=2)
		            {
		               $name = $_POST['name'];
		               echo "Name: ".$name."<br/;>";
	                } 
	            else
	                {
	    	           echo " At Least Two Letters"."<br/>"; 
	                }
		
		{
			echo " Must Start With a Letter"."<br/>";
		}

	}
	else
	{
		echo " Name Field Cannot be Empty"."<br/>";
	}

	if(!empty($_POST['email']))
	{
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	       {
             $email = $_POST['email'];
		     echo "Email: ".$email."<br/>";
           } 
        else 
           {
                echo " Not a valid email address"."<br/>";
           }		
	}
	else
	{
		echo " Email Field Cannot be Empty"."<br/>";
	}
	 if(!isset($_POST['gender']))
	 { 
        echo "No Gender as selected"."<br/>"; 
     } 
     else
     {
     	$gender 	= $_POST['gender'];
     	echo "Gender: ".$gender."<br/>";
     }
    
    if(!empty($_POST['day']))
	 { 
	 	if(!empty($_POST['month']))
	      {
	      	if(!empty($_POST['year']))
	      	{
	      		$day 		= $_POST['day'];
	            $month 		= $_POST['month'];
	            $year 		= $_POST['year'];
                if ( checkdate( $month, $day, $year ) === false )
                {
                      echo "Invalid date" ;
                }
                else
                {
                	echo "DOB: ".$day."/".$month."/".$year."<br/>";
                }
	      		
	      	}
	      	else
	        {
		        echo " DOB Field Cannot be Empty"."<br/>";
	        }

	      }
	      else
	      {
		       echo " DOB Field Cannot be Empty"."<br/>";
	      }
    
     } 
     else
	{
		echo " DOB Field Cannot be Empty"."<br/>";
	}

 
?>