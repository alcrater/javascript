var app = angular.module('taskapp', []);



 app.controller('tasktodo', function($scope, $http) {



  getItem(); // Load all available items

  function getItem(){

  $http.post("getItem.php").success(function(data){

        $scope.items = data;

       });

  };



  $scope.addItem = function (item) {

    $http.post("addItem.php?item="+item).success(function(data){

        getItem();

        $scope.itemInput = "";

      });

  };



  $scope.deleteTask = function (item) {

    if(confirm("Are you sure to delete this item?")){

    $http.post("deleteTask.php?itemID="+item).success(function(data){

        getItem();

      });

    }

  };



  $scope.clearTask = function () {

    if(confirm("Delete all checked items?")){

    $http.post("clearTask.php").success(function(data){

        getItem();

      });

    }

  };



  $scope.changeStatus = function(item, status, task) {

    if(status=='2'){status='0';}else{status='2';}

      $http.post("updateItem.php?itemID="+item+"&status="+status).success(function(data){

        getItem();

      });

  };



});