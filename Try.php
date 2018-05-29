<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Simple Collapsible</h2>
  <p>Click on the button to toggle between showing and hiding content.</p>
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
  <div id="demo" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $("#but").click(function(){
        $("#he").toggle();
    });
});


alert(<?php echo "'$abc'"; ?>);//php to java
var abc = parseInt(<?php echo "'$abc'"; ?>); //get from php cnvert to int




</script>





          <span>Display panel: </span>
        <input name="collapseGroup" type="radio" data-toggle="collapse" data-target=".collapseOne:not(.in)"/> Yes
        <input name="collapseGroup" type="radio" data-toggle="collapse" data-target=".collapseOne.in" checked/> No
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                          Header
                      </h4>
                  </div>
                  <div class="collapseOne panel-collapse collapse">
                    <div class="panel-body">
                        <p>Content</p>
                    </div>
                  </div>
              </div>
            </div>
      </div>
    </div>

      <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
    </div>
  </div>
</div>

<div class="collapse" id="he">
<p">This is a paragraph.</p>
</div>

<button id="but">Toggle between hide() and show()</button>

</body>
</html>