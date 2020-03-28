module.exports = angular.module('nextgeninfo', 
	[
		"ngRoute",
		"ngResource",
		//"ngCookies",
		//"ngSanitize",
	]
,function($interpolateProvider) 
	{
		$interpolateProvider.startSymbol('[[');
		$interpolateProvider.endSymbol(']]');
	}

)