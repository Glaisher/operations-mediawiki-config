<?php

$sessionRedis = array(
	'eqiad' => array(
		'10.64.0.180', # mc1001
		'10.64.0.181', # mc1002
		'10.64.0.182', # mc1003
		'10.64.0.183', # mc1004
		'10.64.0.184', # mc1005
		'10.64.0.185', # mc1006
		'10.64.0.186', # mc1007
		'10.64.0.187', # mc1008
		'10.64.0.188', # mc1009
		'10.64.0.189', # mc1010
		'10.64.0.190', # mc1011
		'10.64.0.191', # mc1012
		'10.64.0.192', # mc1013
		'10.64.0.193', # mc1014
		'10.64.0.194', # mc1015
		'10.64.0.195', # mc1016
	),
);

// Cache to hold user sessions in production:
$wgObjectCaches['sessions'] = array(
	'class'   => 'RedisBagOStuff',
	'servers' => $sessionRedis[$wmfDatacenter],
	'password' => $wmgRedisPassword,
);
