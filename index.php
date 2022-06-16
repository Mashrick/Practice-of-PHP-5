


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






		

		

</body>
</html>







