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
      <th scope="col">serviceid</th>
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
      <th scope="col">date</th>
      <th scope="col">serviceid</th>
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
            //    console.log(data[i].pincode)
               var elem = document.createElement('tr');
               elem.innerHTML = '<td>'+data[i].pincode+'</td><td>'+data[i].bookingid+'</td><td>'+data[i].date+'</td><td>'+data[i].serviceid+'</td><td> <a href=api_update_status.php?id='+data[i].serviceid+' data-id='+data[i].serviceid+' class="btn btn-primary bookingbtnn">Done</a></td>';
                bookingtable.appendChild(elem);

            }
            if(data.length==0){
                bookingtable.innerHTML = '';

            }
                
                console.log(data)
                console.log(status)

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
            //    console.log(data[i].pincode)
               var elem = document.createElement('tr');
               elem.innerHTML = '<td>'+data[i].seqid+'</td><td>'+data[i].number+'</td><td>'+data[i].date+'</td><td>'+data[i].serviceid+'</td><td> <a href=api_update_status.php?id='+data[i].serviceid+' data-id='+data[i].serviceid+' class="btn btn-primary bookingbtnn">Done</a></td>';
               showroomtable.appendChild(elem);

            }
            if(data.length==0){
                showroomtable.innerHTML = '';

            }
                
                console.log(data)
                console.log(status)

            },
            error: function(xhr, status, error) {
                console.log(error)
            }
        };
        $.ajax(options);
    

}

    // var bookingtable = document.getElementsByClassName("bookingbtnn");
    // for (var i = 0; i < bookingtable.length; i++) {
    //     bookingtable[i].addEventListener("click", changestatus);
    // }
    // function changestatus(e){
    //     console.log('click me')
    // }

    </script>