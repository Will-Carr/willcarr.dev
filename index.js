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
    .when("/portfolio/asterisk", {
        templateUrl: "/templates/asterisk.html"
    })
    .when("/portfolio/bullseye-redevelopment", {
        templateUrl: "/templates/bullseye-redevelopment.html"
    })
    .when("/portfolio/degaetano-carr", {
        templateUrl: "/templates/degaetano-carr.html"
    })
    .when("/portfolio/konstru", {
        templateUrl: "/templates/konstru.html"
    })
    .when("/portfolio/team-lyders", {
        templateUrl: "/templates/team-lyders.html"
    })
    .when("/skills", {
        templateUrl: "/templates/skills.html"
    })
    .when("/contact", {
        templateUrl: "/templates/contact.html"
    });
}]);


app.controller('ctrl', function($scope, $location, $timeout) {

  var pages = {
    "#portfolio": "/portfolio",
    "#bullseye-redevelopment": "/portfolio/bullseye-redevelopment",
    "#asterisk": "/portfolio/asterisk",
    "#degaetano-carr": "/portfolio/degaetano-carr",
    "#konstru": "/portfolio/konstru",
    "#team-lyders": "/portfolio/team-lyders",
    "#skills": "/skills",
    "#contact": "/contact"
  }

  // If we got redirected here
  if(window.location.hash) {
    // Redirect to the correct page
    $location.path(pages[window.location.hash]);

    // Remove the # from the url if it's there
    $timeout(function(){
      history.replaceState("", document.title, window.location.pathname + window.location.search);
    })

  } else {
    console.log(window.location.hash)
  }


})
