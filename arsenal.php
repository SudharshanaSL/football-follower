<?php
include 'header.php'
?>

	<div class="well"><h2 style="text-align: center;font-size: 50px;font-family: Times; padding:10px;background-color:rgba(5,5,5,.9);color: grey"> Latest Tweets From Arsenal FC</h2></div>
    <div id="response" style="margin-left: 310px; "></div>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script id="twitter-wjs" type="text/javascript" src="js/widgets.js"></script>
    <script type="text/javascript">
    	document.body.style.marginTop = "90px";
        function readythis(){
            outerDiv = document.getElementById('response')
            xhr = new XMLHttpRequest()
            xhr.open("GET","bq_Arsenal.txt",false)
            xhr.onreadystatechange = updatePage
            xhr.send(null)
            // alert("Hello Football Fanatic!!")

            
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