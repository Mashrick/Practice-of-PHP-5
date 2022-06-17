


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practice</title>
</head>
<body>



			
			<!-- Showing Date using if else & date function -->


		<?php


			echo "Showing Date by if else & date function<br><br>";

			$date = date("D M d Y");

			if( $date == "Fri") {

			    echo $date . "<br>Have a Nice Weekend!";

			} else {

			    echo $date . "<br>Have a Nice Day!";
			}



		?>




		<br>
		<br>






		<!--	Showing Day by using if...elif...else & date function 		-->


		<?php

			echo "Showing Day by if else elseif & date function<br><br>";


			$date = date("D");



			if($date == "Fri"){

			    echo "Have a nice weekend!";

			} elseif($date == "Sat"){

			    echo "Have a nice Saturday!";

			} elseif($date == "Sun"){

			    echo "Have a nice Sunday!";

			} elseif($date == "Mon"){

			    echo "Have a nice Monday!";

			} elseif($date == "Tue"){

			    echo "Have a nice Tuesday!";

			} elseif($date == "Wed"){

			    echo "Have a nice Wednesday!";

			} elseif($date == "Thu"){

			    echo "Have a nice Thursday!";

			}




		?>



		


		<br>
		<br>


			<!--	Using array_merge function 	-->

		<?php


		
			$boxOne = array(1, 2, 3, 4, 5, 6);

			$boxTwo = array(7, 8, 9, 10, 11, 12);
			  
			
			$boxOne = array_merge($boxOne, $boxTwo); 
			  
			echo "Array  Contents: ";
			  
			
			foreach ($boxOne as $value) {
			    echo $value . "\n";
			}





		?>





		<br>
		<br>

		
			<!--	Using While loop 	-->



		<?php


			$count = 1;

			while($count <= 15){

				echo $count;
				echo "<br>" ;

				$count++;
			}



		?>


		<!--	Using switch case & function	-->

		

		<?php


			$day = "5";

			switch ($day) {
			    case "1":

			        echo "It is Monday!";
			        break;

			    case "2":

			        echo "It is today!";
			        break;

			    case "3":

			        echo "It is Wednesday!";
			        break;

				case "4":

			        echo "It is Thursday!";
			        break;

			    case "5":

			        echo "It is Friday!";
			        break;

			    case "6":

			        echo "It is Saturday!";
			        break;

				case "7":

			        echo "It is Sunday!";
			        break;

			    default:
			        echo "Invalid number!";

			}


		?>



		

</body>
</html>







