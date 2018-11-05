app.controller("myCtrl", function($scope, $http) {
    $scope.firstName = "Audrey";
    $scope.lastName= "Crater";
    $http.get("json.html").then(function (response) {
    $scope.myData = response.data.records;
    });
    $http.get("table.php").then(function (response) {
    $scope.myPHPData = response.data.records;
    })
    });