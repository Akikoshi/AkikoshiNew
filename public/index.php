<?php
	namespace Class152\PizzaMamamia;
	session_start();
	require_once( __DIR__ . '/../vendor/autoload.php' );


	$Kreditsumme=100000;
	$Laufzeit=5;
	$Zinssatz=0.05;
	$Tilgung=20000;
	$Darlehen="Rate";

	$Gesamtzins=0;
	$Gesamtannuitäten=0;

	switch($Darlehen){
 case "Rate":

			echo "Jahr 	Restschuld 	Zins 	Tilgung	Annuität	Monatrate";
			for ($i=1;$i<=5;$i++)
			{
				$Restschuld=$Kreditsumme-(20000*($i-1));
				$Zins=$Restschuld*0.05;
				$Annuität=($Restschuld*0.05)+$Tilgung;
				$Monatsrate=$Annuität/12;
				$Gesamtzins=$Gesamtzins+$Zins;
				$Gesamtannuitäten=$Gesamtannuitäten+$Annuität;
				echo "<br>";
				echo "$i. .$Restschuld.  .$Zins. .$Tilgung. .$Annuität. .$Monatsrate";
				echo "<br>";
			}
		echo "$Gesamtzins.$Kreditsumme.$Gesamtzins";
		}




	//new Init();




