
    var app = angular.module("app", []);
    app.controller("HttpGetController", function ($scope, $http) {
           
        /*$scope.SendData = function () {
           // use $.param jQuery function to serialize data from JSON 
            var data = $.param({
                fName: $scope.username,
                lName: $scope.password
            });
        
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }

            $http.post('/angular/table.php', data, config)
            .success(function (data, status, headers, config) {
                $scope.names = data.records;
				$scope.names2 = data.records2;
            })
            .error(function (data, status, header, config) {
                $scope.names = data.records;
				$scope.names2 = data.records2;

            });
        };*/
        
        $scope.getRecords = function () {
           // use $.param jQuery function to serialize data from JSON 
            var data = $.param({
                type: 'save2',
                fName: $scope.username,
                lName: $scope.password,
                eName: $scope.email
            });
        
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }

            $http.post('/angular/table.php', data, config)
            .success(function (data, status, headers, config) {
                $scope.names = data.records;
				//$scope.names2 = data.records2;
            })
            .error(function (data, status, header, config) {
                $scope.names = data.records;
				//$scope.names2 = data.records2;

            });
        };
        
        $scope.sendData = function () {
           // use $.param jQuery function to serialize data from JSON 
            var data = $.param({
                type: 'save',
                fName: $scope.username,
                lName: $scope.password,
                eName: $scope.email
            });
        
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }

            $http.post('/angular/table.php', data, config)
            .success(function (data, status, headers, config) {
                //$scope.names = data.records;
				//$scope.names2 = data.records2;
                                $scope.names.push({
                                    id: $scope.data.records.id,
                                    username: $scope.data.records.username,
                                    password: $scope.data.records.password,
                                    email: $scope.data.records.email
                                });
            })
            .error(function (data, status, header, config) {
                $scope.names = data.records;
				//$scope.names2 = data.records2;

            });
        };

    });
