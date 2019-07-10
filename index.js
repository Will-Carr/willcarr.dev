var app = angular.module('app', ['ngRoute']);

app.config(["$routeProvider", "$locationProvider", function ($routeProvider, $locationProvider) {
  $locationProvider.html5Mode(true);

  $routeProvider
    .when("/", {
        templateUrl: "/templates/home.html"
    })
    .when("/portfolio", {
        templateUrl: "/templates/portfolio.html"
    })
    .when("/skills", {
        templateUrl: "/templates/skills.html"
    })
    .when("/contact", {
        templateUrl: "/templates/contact.html"
    });
}]);


app.controller('ctrl', function($scope, ) {

  $scope.activePage = "/templates/home.html";

  if(window.location.hash) {
    console.log(window.location.hash)
  } else {
    console.log(window.location.hash)
  }


})
