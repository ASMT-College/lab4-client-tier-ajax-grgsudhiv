<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Search for list of god : <br>
    <input type="text" name="god" id="god" oninput="get_data_using_ajax()"></input> <br>
    <div id="god_results"></div> <br>
    <script>
        function get_data_using_ajax(){
            var q = document.getElementById('god').value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('god_results').innerHTML=this.responseText;
                    console.log(this.responseText);
                    // alert("got response");
                }
            }
            xmlhttp.open("GET", "ajax_server.php?search=" + q, true);
            xmlhttp.send();
        }
    </script>
</body>
</html>