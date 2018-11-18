app.controller('myCtrl', function($scope, $http) {

    getTask(); // Load all available tasks 
  
    function getTask(){  
  
    $http.post("gettask.php").success(function(data){
  
          $scope.tasks = data;
  
         });
  
    };
  
    $scope.addTask = function (task) {
  
      $http.post("addtask.php?task="+task).success(function(data){
  
          getTask();
  
          $scope.taskInput = "";
  
        });
  
    };
  
    $scope.deleteTask = function (task) {
  
      if(confirm("Are you sure to delete this line?")){
  
      $http.post("deletetask.php?taskID="+task).success(function(data){
  
          getTask();
  
        });
  
      }
  
    };
  
  
  
    $scope.toggleStatus = function(item, status, task) {
  
      if(status=='2'){status='0';}else{status='2';}
  
        $http.post("updatetask.php?taskID="+item+"&status="+status).success(function(data){
  
          getTask();
  
        });
  
    };
  
  
  
  });