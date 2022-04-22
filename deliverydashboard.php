<?php
session_start(); ?>
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
    <button class="btn btn-primary" id='callbtn'>Call</button>

        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">phone</th>
                <th scope="col">address</th>
                <th scope="col">date</th>
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
var alltable = document.getElementById("alltable");
var btncall = document.getElementById("callbtn");
btncall.addEventListener("click", callone);

function callone(){
        //encoding the obj

        var options = {
            url: "api_get_delivery.php",
            dataType: "json",
            type: "GET",

            success: function(data, status, xhr) {
               // console.log(data.length)
               alltable.innerHTML = ' ';

                for(var i=0;i<data.length;i++){
                   //create btn
                  let btn = document.createElement("button");
                  btn.innerHTML = "Done";
                  btn.classList.add("btn");
                  btn.classList.add("btn-primary");
                  btn.id = data[i].serviceid;
                  btn.onclick = function (e) {

                  //  console.log(e.target.id);
                   var options = {
                     url: "api_update_delivery.php?id="+e.target.id,
                     dataType: "json",
                     type: "GET",

                     success: function(data, status, xhr) {
                        // console.log(data)
                        const removeel = document.getElementById('tr'+data.data.id);
                        removeel.remove();
                      },
                   error: function(xhr, status, error) {
                     console.log(error)
                    }
                  };
        $.ajax(options);
                    };
                  //create btn
               var elem = document.createElement('tr');
               elem.id ='tr'+data[i].serviceid;
               elem.innerHTML = '<td>'+data[i].deliveryid+'</td><td>'+data[i].name+'</td><td>'+data[i].phone+'</td><td>'+data[i].address+'</td><td>'+data[i].date+'</td>';
               alltable.appendChild(elem);
               var tdelement = document.createElement('td');
                tdelement.appendChild(btn);
                elem.appendChild(tdelement);  

            }
                
                // console.log(data)
                // console.log(status)

            },
            error: function(xhr, status, error) {
                console.log(error)
            }
        };
        $.ajax(options);
    

}

</script>