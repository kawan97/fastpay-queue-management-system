<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
//obj for delivery
        objfordelivery = {
            "typeid": '1',
            "subtypeid": '2',
            "address": 'slimany',
            "phone": '07706994420',
            "name": 'kawa',
        };

        //obj for showroom
        objforshowroom = {
            "typeid": '2',
            "subtypeid": '1',
        };

        //obj for booking
        objforbooking = {
            "typeid": '3',
            "subtypeid": '3',
            "time":'13'
        };
        
        //encoding the obj
        var json = JSON.stringify(objforbooking);

        var options = {
            url: "api_add.php",
            dataType: "json",
            type: "POST",
            data: json,

            success: function(data, status, xhr) {
                console.log(data)
                console.log(status)

            },
            error: function(xhr, status, error) {
                console.log(error)
            }
        };
        $.ajax(options);
    
</script>