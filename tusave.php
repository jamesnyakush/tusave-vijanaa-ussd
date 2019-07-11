<?php

$phone_number =$_GET['MSISDN'];
$session_id =$_GET['SESSION_ID'];
$session_code =$_GET['SERVICE_CODE'];
$ussd_string=$_GET['USSD_STRING'];

$replaced_string =str_replace("#", "*",$ussd_string);

// removing astericks (*) in our ussd string
$explode_string=explode("*", $replaced_string);

//shifting all to the left to take care of the spaces
  $array=array_shift($explode_string);

//returning the size of the hops
    // header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=');
$size= count($explode_string);
if ($size ==0) {
       echo "
            Vijana Tusave Pamoja<br> 
             1.Monthly Savings<br>
             2.Weekly Savings<br>
             3.Daily Savings<br>
             4.Anual Savings<br>";
}else{

	$choice =$explode_string[0];
	switch ($choice) {
		case 1:
       // showing menu for hop 1 to hop 2
		 MonthlySavings($explode_string);
		break;
		case 2:
         WeeklySavings($explode_string);
		 break;
		 case 3:
		 DailySavings($explode_string);
		 break;
		 case 4:
		 AnualSavings($explode_string);
		 break;
		 default:
		 echo "invalid choice";
		 break;
	}
}
// hop 2 for monthly savings
   function MonthlySavings($explode_string){
    $size=count($explode_string);
	if ($size==1) {
	 echo "
             Monthly Savings<br>
             1. 50 Shares @ KShs250<br>
             2. 100 Shares @ KShs500<br>
             3. 150 Shares @ KShs1000<br>
             0. Back<br>";
	}else{
		$choice =$explode_string[1];
		switch ($choice) {
			case 1:
	         fiftyshares($explode_string);
			break;
		 	case 2:
			 hundredshares($explode_string);
			break;
			case 3:
			  onefiftyshares($explode_string);	
			break;
			case 0:
              header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=');
			// Back($explode_string);
			break;
			default:
			echo "invalid choice";
				break;
		}
	}

   } 
// hop 2 for WeeklySavings
   function WeeklySavings($explode_string){
   	$size =count($explode_string);
	if ($size==1) {
	 echo "
             Weekly Savings<br>
             1. 300 Shares @ KShs450<br>
             2. 600 Shares @ KShs600<br>
             3. 800 Shares @ KShs1000<br>
             0. Back<br>";
	}else{
		$choice =$explode_string[1];
		switch ($choice) {
			case 1:
	        Threehundredshares($explode_string);
			break;
		 	case 2:
			sixhundredshares($explode_string);
			break;
			case 3:
		    eighthundredshares($explode_string);	
			break;
			case 0:
              header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=');
			  //BackWeeklySavings($explode_string);
			break;
			default:
			echo "invalid choice";
				break;
		}
	}

   }
// hop 2 for  DailySavings
   function DailySavings($explode_string){
    $size =count($explode_string);
	if ($size==1) {
	 echo "
             Daily Savings<br>
             1. 10 Shares @ KShs50<br>
             2. 20 Shares @ KShs80<br>
             3. 30 Shares @ KShs100<br>
             0. Back<br>";
	}else{
		$choice =$explode_string[1];
		switch ($choice) {
			case 1:
	        Tenshares($explode_string);
			break;
		 	case 2:
			twentyshares($explode_string);
			break;
			case 3:
		    thirtyshares($explode_string);	
			break;
			case 0:
              header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=');
			// Back($explode_string);
			break;
			default:
			echo "invalid choice";
				break;
		}
	}
   }
// hop 2 for  AnualSavings
   function AnualSavings($explode_string){
   	$size =count($explode_string);
	if ($size==1) {
	 echo "
             Annual Savings<br>
             1. 1000 Shares @ KShs50<br>
             2. 2000 Shares @ KShs80<br>
             3. 3000 Shares @ KShs100<br>
             0. Back<br>";
	}else{
		$choice =$explode_string[1];
		switch ($choice) {
			case 1:
	        onethousandshares($explode_string);
			break;
		 	case 2:
			twothousandshares($explode_string);
			break;
			case 3:
		    threethousandshares($explode_string);	
			break;
			case 4:
              header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=');
			   //Back($explode_string);
			break;
			default:
			echo "invalid choice";
				break;
		}
	}

   }
// hop 3 for monthly savings
   function fiftyshares($explode_string){
   	$size =count($explode_string);
	if ($size==2) {
	echo "
             Pay With<br>
             1. Airtime<br>
             2. M-pesa<br>
             0. Back";
         }else{
         	$choice =$explode_string[2];
         	switch ($choice) {
         		case 1:
         		fiftysharesAirtime($explode_string);
         		break;
         		case 2:
         	    fiftysharesMpesa($explode_string);
         		break;
         		case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1');
               //  $explode_string = array_pop($explode_string);
               // // $size =count($explode_string);
               //  MonthlySavings($explode_string);
                break;
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

   }
   function  hundredshares($explode_string){
   	$size =count($explode_string);
	if ($size==2) {
	echo "
             Pay With<br>
             1. Airtime<br>
             2. M-pesa<br>
             0. Back";
         }else{
         	$choice =$explode_string[2];
         	switch ($choice) {
         		case 1:
         		hundredsharesAirtime($explode_string);
         		break;
         		case 2:
         	    hundredsharesMpesa($explode_string);
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1');
               //  $explode_string = array_pop($explode_string);
               // // $size =count($explode_string);
               //  MonthlySavings($explode_string);
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

   }
   function  onefiftyshares($explode_string){
   $size =count($explode_string);
	if ($size==2) {
	echo "
             Pay With<br>
             1. Airtime<br>
             2. M-pesa<br>
              0. Back";
         }else{
         	$choice =$explode_string[2];
         	switch ($choice) {
         		case 1:
         		onefiftysharesAirtime($explode_string);
         		break;
         		case 2:
         	    onefiftysharesMpesa($explode_string);
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1');
                // $explode_string = array_pop($explode_string);
                // // $size =count($explode_string);
                // MonthlySavings($explode_string);
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }
   }
//    function  Back($explode_string){
//    $explode_string = array_pop($explode_string);
//    $size =count($explode_string);
//    MonthlySavings($explode_string); 
// }


 
// echo $size;
   
//    }
   // hop 3 for weekly savings
   function Threehundredshares($explode_string){
   		$size =count($explode_string);
	if ($size==2) {
	echo "
             Pay With<br>
             1. Airtime<br>
             2. M-pesa<br>
             0. Back";
         }else{
         	$choice =$explode_string[2];
         	switch ($choice) {
         		case 1:
         		ThreehundredsharesAirtime($explode_string);
         		break;
         		case 2:
         	    ThreehundredsharesMpesa($explode_string);
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1');
                //$explode_string = array_pop($explode_string);
               //WeeklySavings($explode_string);
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

   }
   function sixhundredshares($explode_string){
   	$size =count($explode_string);
	if ($size==2) {
	echo "
             Pay With<br>
             1. Airtime<br>
             2. M-pesa<br>
             0. Back";
         }else{
         	$choice =$explode_string[2];
         	switch ($choice) {
         		case 1:
         		sixhundredsharesAirtime($explode_string);
         		break;
         		case 2:
         	    sixhundredsharesMpesa($explode_string);
         		break;
                case 0:
                //$explode_string = array_pop($explode_string);
                 //WeeklySavings($explode_string);
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

   }
   function eighthundredshares($explode_string){
	$size =count($explode_string);
	if ($size==2) {
	echo "
             Pay With<br>
             1. Airtime<br>
             2. M-pesa<br>
             0. Back";
         }else{
         	$choice =$explode_string[2];
         	switch ($choice) {
         		case 1:
         		eighthundredsharesAirtime($explode_string);
         		break;
         		case 2:
         	    eighthundredsharesMpesa($explode_string);
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1');
               // $explode_string = array_pop($explode_string);
                 //WeeklySavings($explode_string);
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }
   }
   
   // hop 3 for daily savings
   function Tenshares($explode_string){
	$size =count($explode_string);
	if ($size==2) {
	echo "
             Pay With<br>
             1. Airtime<br>
             2. M-pesa<br>
             0. Back";
         }else{
         	$choice =$explode_string[2];
         	switch ($choice) {
         		case 1:
         		TensharesAirtime($explode_string);
         		break;
         		case 2:
         	    TensharesMpesa($explode_string);
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1');
               // $explode_string = array_pop($explode_string);
                //DailySavings($explode_string);
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }
   }
   function twentyshares($explode_string){
	$size =count($explode_string);
	if ($size==2) {
	echo "
             Pay With<br>
             1. Airtime<br>
             2. M-pesa<br>
             0. Back";
         }else{
         	$choice =$explode_string[2];
         	switch ($choice) {
         		case 1:
         		twentysharesAirtime($explode_string);
         		break;
         		case 2:
         	    twentysharesMpesa($explode_string);
         		break;
         		case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1');
                // $explode_string = array_pop($explode_string);
                // DailySavings($explode_string);
                break;
         		default:
         			echo "invalid choice";
         			break;
         	}
         }
   }
   function  thirtyshares($explode_string){
	$size =count($explode_string);
	if ($size==2) {
	echo "
             Pay With<br>
             1. Airtime<br>
             2. M-pesa<br>
             0. Back";
         }else{
         	$choice =$explode_string[2];
         	switch ($choice) {
         		case 1:
         		thirtysharesAirtime($explode_string);
         		break;
         		case 2:
         	    thirtysharesMpesa($explode_string);
         		break;
         		case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1');
                // $explode_string = array_pop($explode_string);
                // DailySavings($explode_string);
                break;
         		default:
         			echo "invalid choice";
         			break;
         	}
         }
   }
   //function
   // hop 3 for Anual savings
   function  onethousandshares($explode_string){
	$size =count($explode_string);
	if ($size==2) {
	echo "
             Pay With<br>
             1. Airtime<br>
             2. M-pesa<br>
             0. Back";
         }else{
         	$choice =$explode_string[2];
         	switch ($choice) {
         		case 1:
         		onethousandsharesAirtime($explode_string);
         		break;
         		case 2:
         	    onethousandsharesMpesa($explode_string);
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1');
                // $explode_string = array_pop($explode_string);
                // AnualSavings($explode_string);
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }
   }
   function twothousandshares($explode_string){
	$size =count($explode_string);
	if ($size==2) {
	echo "
             Pay With<br>
             1. Airtime<br>
             2. M-pesa<br>
             0. Back";
         }else{
         	$choice =$explode_string[2];
         	switch ($choice) {
         		case 1:
         		twothousandsharesAirtime($explode_string);
         		break;
         		case 2:
         	    twothousandsharesMpesa($explode_string);
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1');
                // $explode_string = array_pop($explode_string);
                // AnualSavings($explode_string);
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }
   }
   function  threethousandshares($explode_string){
	$size =count($explode_string);
	if ($size==2) {
	echo "
             Pay With<br>
             1. Airtime<br>
             2. M-pesa<br>
             0. Back";
         }else{
         	$choice =$explode_string[2];
         	switch ($choice) {
         		case 1:
         		threethousandsharesAirtime($explode_string);
         		break;
         		case 2:
         	    threethousandsharesMpesa($explode_string);
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1');
                // $explode_string = array_pop($explode_string);
                // AnualSavings($explode_string);
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }
   }
 // hop 4 for monthly savings
function fiftysharesAirtime($explode_string){
	$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 50 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                // $explode_string = array_pop($explode_string);
                // fiftysharesAirtime($explode_string);
                
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function fiftysharesMpesa($explode_string){
	$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 50 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                // $explode_string = array_pop($explode_string);
                //  fiftysharesMpesa($explode_string);
                
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function hundredsharesAirtime($explode_string){
	$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 100 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                // $explode_string = array_pop($explode_string);
                // hundredsharesAirtime($explode_string);
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }	

}
function hundredsharesMpesa($explode_string){
	$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 100 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                //  $explode_string = array_pop($explode_string);
                // hundredsharesAirtime($explode_string);
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function onefiftysharesAirtime($explode_string){
	$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 150 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                //  $explode_string = array_pop($explode_string);
                // onefiftysharesAirtime($explode_string);
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function onefiftysharesMpesa($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 150 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                // $explode_string = array_pop($explode_string);
                // onefiftysharesAirtime($explode_string);
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }
}
 // hop 4 for weekly savings
function ThreehundredsharesAirtime($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 300 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
         		case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
               
                break;
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function ThreehundredsharesMpesa($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 300 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                 
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function sixhundredsharesAirtime($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 600 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                 
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function sixhundredsharesMpesa($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 600 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function eighthundredsharesAirtime($explode_string){
	$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 800 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                break;         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }
}
function eighthundredsharesMpesa($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 800 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                 
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }
}
 // hop 4 for daily savings
function TensharesAirtime($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 10 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function  TensharesMpesa($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 10 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                 
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function twentysharesAirtime($explode_string){
		$size =count($explode_string);
	if($size==3) {
	    echo "
             Please confirm  the purchase of 20 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                 
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function  twentysharesMpesa($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 30 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
               
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function thirtysharesAirtime($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 30 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                 
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function thirtysharesMpesa($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 30 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }
}
 // hop 4 for anual savings
function onethousandsharesAirtime($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 1000 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                  header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function onethousandsharesMpesa($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 1000 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function twothousandsharesAirtime($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 2000 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function twothousandsharesMpesa($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 2000 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
function threethousandsharesAirtime($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 3000 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
                case 0:
                  header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                break;
         		
         		default:
         			echo "invalid choice";
         			break;
         	}
         }
}
function  threethousandsharesMpesa($explode_string){
		$size =count($explode_string);
	if ($size==3) {
	    echo "
             Please confirm  the purchase of 3000 shares<br>
             1. Accept<br>
             2. Decline<br>
             0. Back";
         }else{
         	$choice =$explode_string[3];
         	switch ($choice) {
         		case 1:
         		echo "
                kindly wait we are processing your request";
         		break;
         		case 2:
         	     echo "
                Thank you for using Vijanaa Tusave Pamoja";
         		break;
         		case 0:
                 header('Refresh: 1;http://localhost/jamesnyakundiexam/tusave.php?MSISDN=0746445198&SESSION_ID=100&SERVICE_CODE=*544%23&USSD_STRING=*1*1');
                
                break;
         		default:
         			echo "invalid choice";
         			break;
         	}
         }

}
?>
