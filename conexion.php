<?php

$connect = new mysqli("remotemysql.com","v1pqSGIlqC","gUKww9mLh8","v1pqSGIlqC");

if($connect){
	 
}else{
	echo "Fallo, revise ip o firewall";
	exit();
}