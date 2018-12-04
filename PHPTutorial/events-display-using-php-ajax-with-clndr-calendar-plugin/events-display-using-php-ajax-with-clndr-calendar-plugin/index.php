<html>
<head>
<title>Event Calender</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="clndr.css">
<style>
body {
    font-family: Arial;
}

div#event {
    box-sizing: content-box;
    margin-top: 2px;
    width: 100%;
    text-align: center;
    padding: 10px;
}

.event-row {
    padding: 5px;
}
</style>
</head>
<body>
    <div class="container">
        <div class="cal1"></div>
        <div id="event"></div>
    </div>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="clndr.js"></script>
    <script src="event.js"></script>
</body>
</html>