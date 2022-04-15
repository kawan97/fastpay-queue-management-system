<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>send</title>
</head>
<body>
   <button onclick="myFunction()">
       click me
   </button> 
</body>
</html>
<script>
    var wsurl='wss://demo.piesocket.com/v3/channel_1231?api_key=oCdCMcMPQpbvNjUIzqtvF1d2X2okWpDQj4AwARJuAgtjhzKxVEjQU6IdCjwm&notify_self';
    const WS=new WebSocket(wsurl);
    //WS.send({"info":"ii"});
    WS.onmessage= (payload) =>{
        console.log(JSON.parse(payload['data']))
    }
    function myFunction(){
        var data={event:'hi'}
        WS.send(JSON.stringify(data))
    }
</script>