app.controller('foodCtrl', ['$scope','$http','Restangular',function($scope,$http,Restangular) {

	$scope.populateItems = function() {
                var loaded_Items = Restangular.all('get_food_items');
                loaded_Items.getList().then(function(items) {
                   $scope.Items = items;

                   // if($scope.Items.Category =="Starch" ){
                   // 		$scope.Items.img = 'starch.jpg';
                   // }else if($scope.Items.Category =="Starch")
                })
            
        }

	$scope.populateItems();

	
}]);