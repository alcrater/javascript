app.controller('tasksController', function($scope, $http) {

  getTask(); // Load all available tasks 

  function getTask(){  

  $http.post("getTask.php").success(function(data){

        $scope.tasks = data;

       });

  };

  $scope.addTask = function (task) {

    $http.post("addTask.php?task="+task).success(function(data){

        getTask();

        $scope.taskInput = "";

      });

  };

  $scope.deleteTask = function (task) {

    if(confirm("Are you sure to delete this line?")){

    $http.post("/deleteTask.php?taskID="+task).success(function(data){

        getTask();

      });

    }

  };



  $scope.toggleStatus = function(item, status, task) {

    if(status=='2'){status='0';}else{status='2';}

      $http.post("updateTask.php?taskID="+item+"&status="+status).success(function(data){

        getTask();

      });

  };



});