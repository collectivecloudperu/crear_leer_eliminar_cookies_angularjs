
var app = angular.module('Postres', ['ngCookies']);
app.controller('PostresController', function ($scope, $window, $cookieStore) {
    $scope.WriteCookie = function () {
        $cookieStore.put("Postre", $scope.Postre);
        $window.alert("Cookie Creado");
    };
    $scope.ReadCookie = function () {
    	$window.alert("Cookie: " + $cookieStore.get('Postre'));
    };
    $scope.RemoveCookie = function () {
        $cookieStore.remove('Postre');
        $window.alert("Cookie Eliminado");
        location.reload();
    };
});