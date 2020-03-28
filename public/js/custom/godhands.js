module.exports = function(app){
	app.controller('Godhands', ['$scope', '$http', 'API_URL', 'AJAX_URL', 'BASE_URL', '$window',
		function($scope, $http, API_URL, AJAX_URL, BASE_URL, $window){
			

			console.log("GODHAND HERE")

			$(document).ready(function () {
				$(".navbar-toggler").click(function(){
					if($(".navbar-collapse").hasClass("show")){
						console.log("TEST")
						$(".header-wrapper").addClass("collapsed");
					}else{
						console.log("TESTTTT")
						$(".header-wrapper").removeClass("collapsed");
					}
				});
			});

		}
	]);
}