<?php
	use \Core\Route;
	
	return [
		new Route('/page/all', 'page', 'allProducts'),
		new Route('/page/:id', 'page', 'product'),
	
		new Route('/product/all/', 'product', 'all'),
		new Route('/test/act/', 'test', 'act'),
		new Route('/product/:n/', 'product', 'show'),
		new Route('/page/', 'page', 'test'),
		new Route('/pages/:id', 'page', 'one'),
		new Route('/pages/', 'page', 'all'),
		new Route('/page/act/', 'page', 'act'),
		//new Route('/page/:n/', 'page', 'show'),
		new Route('/nums/:n1/:n2/:n3/', 'num', 'sum'),
		new Route('/user/all/', 'user', 'all'),
		new Route('/user/first/:n/', 'user', 'first'),
		new Route('/user/:id', 'user', 'show'),
		new Route('/user/:id/:key', 'user', 'info'),
	];
	
