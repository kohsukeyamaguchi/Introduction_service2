<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	'portfolioNo1' => 'portfoliono1/index',
	'portfolioNo2' => 'portfoliono2/index',
	'portfolioNo3' => 'portfoliono3/index',
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
