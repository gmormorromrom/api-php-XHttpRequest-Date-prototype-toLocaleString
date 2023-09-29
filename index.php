<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>

</head>

<body>
    <div id="customersid">...</div>
    <script>
        function getCustomers() {
            let urlCustomers = "/projectcrud/api/customers.php" 
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.response); 
                    var objData = JSON.parse(this.responseText);
                    document.getElementById("customersid").innerHTML ="";
                    // for(let key in objData.date)
                    document.getElementById("customersid").innerHTML += "Title : " +objData.message+'<br>';
                    var date = new Date(Date.parse(objData.date.date)); 
                    var dateFR = date.toLocaleString('fr-FR', { timeZone: 'Africa/Tunis' });
                    document.getElementById("customersid").innerHTML += "Date and time(Fr) : " +dateFR+'<br>';
                    for(let key in objData.names){
                        document.getElementById("customersid").innerHTML += parseInt(key)+1+"-"+objData.names[key].name +'<br>';
                    }
                }
            };
            xhttp.open("GET", urlCustomers, true);
            xhttp.send();
        }
        getCustomers();
    </script>
</body>

</html>