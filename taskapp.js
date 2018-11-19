var app = angular.module('taskapp', []);



 app.controller('tasktodo', function($scope, $http) {



  getTask(); // Load all available items

  function getTask(){

  $http.post("getTask.php").success(function(data){

        $scope.items = data;

       });

  };



  $scope.addItem = function (item) {

    $http.post("addItem.php?item="+item).success(function(data){

        getTask();

        $scope.itemInput = "";

      });

  };



  $scope.deleteTask = function (item) {

    if(confirm("Are you sure to delete this item?")){

    $http.post("deleteTask.php?itemID="+item).success(function(data){

        getTask();

      });

    }

  };



  $scope.clearTask = function () {

    if(confirm("Delete all checked items?")){

    $http.post("clearTask.php").success(function(data){

        getTask();

      });

    }

  };



  $scope.changeStatus = function(item, status) {

    if(status=='2'){status='0';}else{status='2';}

      $http.post("updateTask.php?itemID="+item+"&status="+status).success(function(data){

        getItem();

      });

  };



});