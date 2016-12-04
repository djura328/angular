<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="custom.js"></script>
    </head>
    <body ng-app="app" ng-controller="HttpGetController" ng-init="getRecords();">
        <br>
        <br>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="well">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" ng-model="username" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" ng-model="password" placeholder="password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">E-mail</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" ng-model="email" placeholder="email">
                        </div>
                        <button type="submit" class="btn btn-default" ng-click="sendData()">Submit</button>
                        {{ PostDataResponse}}
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <div class="well">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="x in names">
                                <td>{{ x.index}}</td>
                                <td>{{ x.username }}</td>
                                <td>{{ x.password }}</td>
                                <td>{{ x.email }}</td>
                            </tr>
                        </tbody>
                    </table>
                    {{ names2.Name}}
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>