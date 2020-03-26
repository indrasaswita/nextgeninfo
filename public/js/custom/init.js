module.exports = angular.module('nextgen-info', 
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