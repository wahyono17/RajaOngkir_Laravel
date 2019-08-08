$(document).ready(function () {
    $('#province').change(function (e) { 
       var prov = $('#province').val();
       //panggil ajax
       $.ajax({
           type: "GET",
           url: "/city/"+ prov,
           //data: tidak perlu mengirim data karena oop
           success: function (response) {
               $('#city').html(response);
           }
       });  
    });

    $('#provinceDest').change(function (e) { 
        var provDest = $('#provinceDest').val();
        //panggil ajax
        $.ajax({
            type: "GET",
            url: "/city/"+ provDest,
            //data: "data",
            //dataType: "dataType",
            success: function (response) {
              $('#cityDest').html(response);  
            }
        });  
    });

    $('#tombolCost').click(function (e) { 
        var curier = $('#curier').val();
        var city = $('#city').val();
        var cityDest = $('#cityDest').val();
        var weight = $('#weight').val();
        
        //panggil ajax
        $.ajax({
            type: "GET",
            url: "/cost/" +city+ "/" +cityDest+ "/"  +weight + "/" +curier ,
            //data: "data",
            //dataType: "dataType",
            success: function (response) {
                $('#cost').html(response);
            },
            error: function(){
                $('#cost').html('<h4>data not found</h4>');
            }
        });
        
    });
});