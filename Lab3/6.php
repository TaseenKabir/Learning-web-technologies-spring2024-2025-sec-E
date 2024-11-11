<?php
$people=["Abul","Hayat","Mir","Kashem","John"];
$flag=0;
for($i = 0; $i < $people[$i]; $i++){
    if($people[$i] == "Mir"){
        $flag=1;
    }
}
if($flag == 1)
		{
			echo "Match found in index $i";
		}
		else
			echo "Match not found";

?>