<?php
require "Demo.php";
 require "db.php";
$var=new Demo();
$var->setName("subodh");
$var->setAge(20);
$var->setCity("nagpur");
echo $var->getName()."</br>";
echo $var->getAge()."</br>";
echo $var->getCity()."</br>";
require "Dao.php";
$d=new Dao();
$var=$d->addUser($var);

?>