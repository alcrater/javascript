angular.module('myModule', [])
				.controller('myController', ['$scope', function($scope){
					$scope.lists =[
						{name: 'this is for testing', done: false},
						{name: 'Google for Help', done: false},
						{name: 'found a website to help with this task', done: false},
						{name: 'Add Angular JS and PHP', done: false},
						{name: 'Took way to long to get this, many frustrating hours', done: false},
						{name: 'I give up', done: false},
					];
					
					$scope.addTask = function(){
						$scope.lists.push({name: $scope.newlist, done: false})
						$scope.newlist = "";
					}
					
					$scope.clearTask = function(){
						$scope.lists = $scope.lists.filter(function(item){
							return !item.done;
						});
					}
					
					
				}])