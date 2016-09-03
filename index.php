<!DOCTYPE html>
<html lang="en">
<head>
  <title>Money Manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Money Manager ">
  <meta name="keywords" content="Money Manager">
  <meta name="author" content="Jerry">
  <script src="//d3js.org/d3.v3.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.9.1/fullcalendar.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.3.1/angular-ui-router.min.js"></script>
  <!--  <link href='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.9.1/fullcalendar.print.css ' rel='stylesheet' type='text/css'>-->
  
  <link rel="icon" type="image/x-icon" href="./client/images/favicon.ico">
  <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.9.1/fullcalendar.min.css' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,600,200italic,600italic&subset=latin,vietnamese' rel='stylesheet' type='text/css'>  
  <link rel="stylesheet" href="./client/css/skeleton.css">
  <link rel="stylesheet" href="./client/css/text.css">
  <link rel="stylesheet" href="./client/css/colors.css">
  
  <base href="/moneymanager/">
</head>
<body data-ng-app="moneyManager">
    
  <navbar></navbar>
  
  <div class="container-fluid">
    <div ui-view></div>
  </div>

  <script src="./client/js/modules/moneyManager.js"></script>
  <script src="./client/js/controllers/register.js"></script>
  <script src="./client/js/controllers/expenses.js"></script>
  <script src="./client/js/controllers/bubbleChart.js"></script>
  <script src="./client/js/controllers/calendar.js"></script>
  <script src="./client/js/directives/navbar.js"></script>
  <script src="./client/js/directives/bubbleChart.js"></script>
  <script src="./client/js/directives/invoices.js"></script>
  <script src="./client/js/directives/calendar.js"></script>
  <script src="./client/js/services/register.js"></script>
  <script src="./client/js/services/expenses.js"></script>

  <script>
  	$(document).on('click','.navbar-collapse.in',function(e) {
      if( $(e.target).is('a') ) {
          $(this).collapse('hide');
      }
  });
  </script>

</body>
</html>
