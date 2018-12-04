<!DOCTYPE html>
<html>
<head>
	<title>Calendar Event</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/calendar.css">
</head>
<body>
	<div class="container">
		<div class="page-header">
			<div class="pull-right form-inline">
				<div class="btn-group">
					<button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
					<button class="btn btn-default" data-calendar-nav="today">Today</button>
					<button class="btn btn-primary" data-calendar-nav="next">Next >></button>
				</div>
				<div class="btn-group">
					<button class="btn btn-warning" data-calendar-view="year">Year</button>
					<button class="btn btn-warning active" data-calendar-view="month">Month</button>
					<button class="btn btn-warning" data-calendar-view="week">Week</button>
					<button class="btn btn-warning" data-calendar-view="day">Day</button>
				</div>
			</div>
			<h3></h3>
			<small>To see example with events navigate to Februray 2018</small>
		</div>
		<div class="row">
			<div class="col-md-9">
				<div id="showEventCalendar"></div>
			</div>
			<div class="col-md-3">
				<h4>All Events List</h4>
				<ul id="eventlist" class="nav nav-list"></ul>
			</div>
		</div>
	</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/underscore-min.js"></script>
<script type="text/javascript" src="js/calendar.js"></script>
<script type="text/javascript" src="js/events.js"></script>
</body>
</html>



