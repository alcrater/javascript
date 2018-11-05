app.controller("myCtrl", function($scope) {
    $scope.firstName = "Audrey";
    $scope.lastName= "Crater";
 

$http.get("json_sample.html").then(function (response) {
    $scope.myData = response.data.records;

  });

  $http.get("table.php").then(function (response) {
    $scope.myDatas = response.data.records;

    });
});