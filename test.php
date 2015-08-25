<?php

include_once('core/playStoreApi.php'); // including class file
$class_init = new PlayStoreApi; // initiating class

/* WITHOUT PARAMERTER */
$topPaidApps = $class_init->topPaidApps(); // calling topPaidApps

/* PAGINATION PARAMETER */
// You can easily add the page numbers to paginate the result
$page = 2;
$topPaidApps = $class_init->topPaidApps(1); // calling topPaidApps

if($topPaidApps !== 0)
{
    //print_r($topPaidApps); // it will show all data inside an array
}

echo $topPaidApps;

?>