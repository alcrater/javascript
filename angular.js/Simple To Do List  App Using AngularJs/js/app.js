angular.module('myModule', [])
				.controller('myController', ['$scope', function($scope){
					$scope.lists =[
						{name: 'Creating A Database', done: false},
						{name: 'Creating A Database Connection', done: false},
						{name: 'Creating Webpage Layout', done: false},
						{name: 'Adding Some Php Script', done: false},
						{name: 'Adding Javascript Function', done: false},
						{name: 'Need Testing', done: false},
					];
					
					$scope.addList = function(){
						$scope.lists.push({name: $scope.newlist, done: false})
						$scope.newlist = "";
					}
					
					$scope.clearList = function(){
						$scope.lists = $scope.lists.filter(function(item){
							return !item.done;
						});
					}
					
					
				}])