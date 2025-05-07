<?php

require_once"index.php";

$nuevaFinanciera =  new Financiera("ElectroCash","Av.Arg 1244");
$cliente1 = new Cliente("Pepe","Florez","");
$p1 = $nuevaFinanciera -> otorgarPrestamo(new Cliente, 5,50000,0.1);
