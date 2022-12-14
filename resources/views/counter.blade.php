<!DOCTYPE html>
<html>

<head>
    <title>Pusher Test</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('e85cbeef522405ce23dc', {
            cluster: 'ap1'
        });


        var channel = pusher.subscribe('my-channel');
        channel.bind('form-submitted', function(data) {
            $("#message").text(data.text);
        });
    </script>
</head>

<body>
    <h1>Pusher Test</h1>
    <p>
        Try publishing an event to channel <code>my-channel</code>
        with event name <code>my-event</code>.
    </p>

    <div id="message">

    </div>
</body>

</html>
