<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax XML</title>
<script>
    function showCD(str){
        if(str == ""){
            document.getElementByID("txtHint").innerHTML = "";
            return;
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET","getcd.php?q="+str, true);
        xmlhttp.send();
    }
</script>
</head>
<body>
    <form>
        Select a CD:
        <select name="cds" onchange="showCD(this.value)">
            <option value="">Select a CD:</option>
            <option value="Bob Dy Lan"></option>
            <option value="Bee Gees">Bee Gees</option>
            <option value="Cat Stevens">Cat Stevens</option>
        </select>
    </form>
    <div id="txtHint"><b>CD info will be listed here...</b></div>
</body>
</html>