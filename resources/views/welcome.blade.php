<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div class="testing jumlah view" id="jumlah_view"></div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
           $.ajax({
            type: "GET",
            url: "{{ url('api/tambah-view') }}",
            dataType: "json",
            success: function (response) {
                console.log(response);
              $("#jumlah_view").html(response.jumlah_view);
            }
           }); 
        });
    </script>
</body>
</html>