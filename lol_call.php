<html>
<head>
<title>Control Page</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
    <script>
        //we need document.ready call to make sure that DOM loaded before we try to bind anything
        $(document).ready(function() {
            //Here we bind click event
            $('body').bind('click', function(e){e.preventDefault();
                //This is what happens on click - we send AJAX request
                var jqueryXHR = $.ajax({
                    'type': 'POST',
                    'url': 'http://localhost/project/lol_func.php',
                    'dataType': 'json'
                   });
                //And when AJAX requests complete(succeeded or failed) - we update text
                jqueryXHR.complete(function(){  
                    $('span#result').html('Oh no!!! the End is neearh! erver is shutting DoWn.')
                });
            })
        });
    </script>
</head>
<body>
    <input type="submit" id="mysubmit" value="Kill da server!" style = "margin-left:100px; margin-top:100px;" />
    <br/>
    <br/>
    <br/>
    <span id = "result">Not clicked yet - good!</span>

</body>
</html> 
