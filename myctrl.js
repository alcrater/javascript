app.controller("myctrl", function($scope, $http) {

    $http.get("todotable.php").then(function (response) {

     $scope.myPHPData = response.data.records;

      });
  });
