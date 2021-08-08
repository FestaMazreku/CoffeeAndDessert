<?php

$myXMLData="<?xml version = '1.0' encoding = 'UTF-8'?>
	
    <kafeteria>
		<dita>
			<ora>
					<monday>Monday 8am-9pm</monday>
				    <tuesday>Tuesday 8am-9pm</tuesday>
				    <wednesday>Wednesday 8am-9pm</wednesday>
                    <thursday>Thursday 8am-9pm</thursday>
					<friday>Friday 8am-9pm</friday>
					<saturday>Saturday 8am-9pm</saturday>
                    <sunday> Sunday CLOSED</sunday>
			</ora>
		</dita>
</kafeteria>";
echo "<table border class='tabela'>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
$monday=$xml->dita->ora->monday;
$tuesday=$xml->dita->ora->tuesday;
$wednesday=$xml->dita->ora->wednesday;
$thursday=$xml->dita->ora->thursday;
$friday=$xml->dita->ora->friday;
$saturday=$xml->dita->ora->saturday;
$sunday=$xml->dita->ora->sunday;

echo "<th>Orari i punes</th>";
echo "<tr><td>".$monday."</td>";
echo "<tr><td>".$tuesday."</td></tr>";
echo "<tr><td>".$wednesday."</td>";
echo "<tr><td>".$thursday."</tr></td>";
echo "<tr><td>".$friday."</td>";
echo "<tr><td>".$saturday."</td></tr>";
echo "<tr><td>".$sunday."</td></tr>";
echo "</table>";

?>