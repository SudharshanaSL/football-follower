<html>
<head>
<title>
</title>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script id="twitter-wjs" type="text/javascript" src="js/widgets.js"></script>
</head>
<body>
    <div id="response"></div>
    <script type="text/javascript">
        function readythis(){
            outerDiv = document.getElementById('response')
            xhr = new XMLHttpRequest()
            xhr.open("GET","bq_ChelseaFC.txt",true)
            xhr.onreadystatechange = updatePage
            xhr.send(null)
            alert("sent data")
        }
        function updatePage() {
            if(xhr.readyState==4 && xhr.status==200){
                var contents = xhr.responseText
                contents = contents.split("\n")
                // alert(contents)
                for (var i = 0; i < contents.length; i++) {
                    var div1 = document.createElement("div")
                    div1.innerHTML = contents[i]
                    outerDiv.appendChild(div1)
                }
            }
        }
        readythis()
    </script>
</body>
</html>