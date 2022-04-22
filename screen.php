<?php
session_start(); ?>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container">
  <div class="row">
    <div class="col-sm">
        <p>ShowRoom</p>
        <button class="btn btn-primary" id='callbtn'>Call</button>
    <!-- first screen -->
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">seqid</th>
      <th scope="col">number</th>
      <th scope="col">date</th>
      <th scope="col">servicetype</th>
    </tr>
  </thead>
  <tbody id="showroomtable">


   
  </tbody>
</table>    </div>
    <!--end first screen -->

        <!-- second screen -->

    <div class="col-sm">
    <p>Online Booking</p>


    <div class="input-group mb-3">
  <input type="text" id="demo" class="form-control"  placeholder="Search For Pincode" aria-label="Recipient's username" aria-describedby="button-addon2">
</div>



    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">pincode</th>
      <th scope="col">bookingid</th>
      <th scope="col">time</th>
      <th scope="col">servicetype</th>
    </tr>
  </thead>
  <tbody id="bookingtable">


   
  </tbody>
</table>     </div>
        <!--end second screen -->

  </div>
</div>





</body>

<script>
   var wsurl='wss://demo.piesocket.com/v3/channel_1231?api_key=oCdCMcMPQpbvNjUIzqtvF1d2X2okWpDQj4AwARJuAgtjhzKxVEjQU6IdCjwm&notify_self';
    const WS=new WebSocket(wsurl);
var myElement = document.getElementById("demo");
var bookingtable = document.getElementById("bookingtable");
var showroomtable = document.getElementById("showroomtable");



myElement.addEventListener("keyup", myScript);

function myScript(e){

        
        //encoding the obj

        var options = {
            url: "api_get_pincode.php?pincode="+myElement.value,
            dataType: "json",
            type: "GET",

            success: function(data, status, xhr) {
               // console.log(data.length)
               bookingtable.innerHTML = ' ';

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
                     url: "api_update_status.php?id="+e.target.id,
                     dataType: "json",
                     type: "GET",

                     success: function(data, status, xhr) {
                        // console.log(data)
                        var data={event:'callbooking',data:data.data}
                        WS.send(JSON.stringify(data))
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

            //    console.log(data[i].pincode)
               var elem = document.createElement('tr');
               elem.id ='tr'+data[i].serviceid;
                  var typeofser=""
                  if(data[i].servicetype==1){
                    var typeofser="Balance"

                  }
                  if(data[i].servicetype==2){
                    var typeofser="Internet Service"

                  }
                  if(data[i].servicetype==3){
                    var typeofser="Service Issue"

                  }
                  if(data[i].servicetype==4){
                    var typeofser="MyTV+"

                  }
               elem.innerHTML = '<td>'+data[i].pincode+'</td><td>'+data[i].bookingid+'</td><td>'+data[i].date+'</td><td>'+typeofser+'</td>';
                bookingtable.appendChild(elem);
                var tdelement = document.createElement('td');
                tdelement.appendChild(btn);
                elem.appendChild(tdelement);  
            }
            if(data.length==0){
                bookingtable.innerHTML = '';

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
var btncall = document.getElementById("callbtn");
btncall.addEventListener("click", callone);

function callone(){
        //encoding the obj

        var options = {
            url: "api_get_sequencenumber.php",
            dataType: "json",
            type: "GET",

            success: function(data, status, xhr) {
               // console.log(data.length)
               showroomtable.innerHTML = ' ';

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
                     url: "api_update_status.php?id="+e.target.id,
                     dataType: "json",
                     type: "GET",

                     success: function(data, status, xhr) {
                        // console.log(data)
                        var data={event:'callshowroom',data:data.data}
                        WS.send(JSON.stringify(data))
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
            //    console.log(data[i].pincode)
            var typeofser="aas"
                  if(data[i].servicetype==1){
                    var typeofser="Balance"

                  }
                  if(data[i].servicetype==2){
                    var typeofser="Internet Service"

                  }
                  if(data[i].servicetype==3){
                    var typeofser="Service Issue"

                  }
                  if(data[i].servicetype==4){
                    var typeofser="MyTV+"

                  }
               var elem = document.createElement('tr');
               elem.id ='tr'+data[i].serviceid;
               elem.innerHTML = '<td>'+data[i].seqid+'</td><td>'+data[i].number+'</td><td>'+data[i].date+'</td><td>'+typeofser+'</td>';
               showroomtable.appendChild(elem);
               var tdelement = document.createElement('td');
                tdelement.appendChild(btn);
                elem.appendChild(tdelement);  

            }
            if(data.length==0){
                showroomtable.innerHTML = '';

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