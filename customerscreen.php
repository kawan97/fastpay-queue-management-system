<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Screen</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">seqid</th>
                <th scope="col">number</th>
                <th scope="col">date</th>
                <th scope="col">serviceid</th>
                </tr>
            </thead>
            <tbody id="alltable">


            
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
<script>
    var wsurl='wss://demo.piesocket.com/v3/channel_1231?api_key=oCdCMcMPQpbvNjUIzqtvF1d2X2okWpDQj4AwARJuAgtjhzKxVEjQU6IdCjwm&notify_self';
    const WS=new WebSocket(wsurl);
    var alltable = document.getElementById("alltable");

    WS.onmessage= (payload) =>{
        var data=JSON.parse(payload['data'])
        if(data.event=='callshowroom'){
            // console.log(data.data)
        var elem = document.createElement('tr');
        elem.id ='tr'+data.serviceid;
        elem.innerHTML = '<td>'+data.data.seqid+'</td><td>'+data.data.number+'</td><td>'+data.data.date+'</td><td>'+data.data.id+'</td>';
        alltable.prepend(elem);

        }
    }

</script>