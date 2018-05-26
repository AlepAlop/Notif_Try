<!DOCTYPE html>
<html lang="en">
<head>
  <title>A.F.S. (UiTM)</title>

  <?php 
    include('_lib.php');
  ?>
  <style>
    .form-control { padding: 0px 12px;
                    height: 28px;}
    .input-group-addon:last-child { padding: 0px 12px;}
  </style>
</head>
<body>

  <?php 
    include('_hed.php');
  ?>
  <div class='container'>
    <div class='panel panel-info dialog-panel'>
      <div class='panel-heading' >
        <h5 style="color: #31708f;">Activity Funding Form</h5>
      </div>
      <div id="main" class='panel-body'>
        <form class='form-horizontal' role='form'>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='course'>Department</label>
              <div class='col-md-4'>
                  <select class='form-control' id='department'>
                    <option>Mr</option>
                    <option>Ms</option>
                    <option>Mrs</option>
                    <option>Miss</option>
                    <option>Dr</option>
                  </select>
              </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Course Details</label>
            <div class='col-md-6'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <input class='form-control' id='program' placeholder='Program Code' type='text'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='course' placeholder='Course Code' type='text'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Program Details</label>
            <div class='col-md-8'>
              <div class='form-group'>
                <div class='col-md-3'>
                  <div class='input-group'>
                    <input class="form-control" id="date" name="datestart" placeholder="Start Date" type="text"/>
                    <span class='input-group-addon'>
                      <i class='glyphicon glyphicon-calendar'></i>
                    </span>
                  </div>
                </div>
                <div class='col-md-3'>
                  <div class='input-group'>
                    <input class="form-control" id="date" name="dateend" placeholder="End Date" type="text"/>
                    <span class='input-group-addon'>
                      <i class='glyphicon glyphicon-calendar'></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-8'>
                  <div class='form-group'>
                    <div class='col-md-6'>
                      <div class='input-group'>
                        <input class='form-control' id='id_last_name' type='time'/>
                        <span class='input-group-addon'>
                          Start Time
                        </span>
                      </div>
                    </div>
                    <div class='col-md-3'>
                      <div class='input-group'>
                        <input class='form-control' id='id_last_name' type='time'/>
                        <span class='input-group-addon'>
                          End Time
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-5'>
                  <input class='form-control' id='id_last_name' placeholder="Venue" type='text'/>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-3 col-md-offset-1' for='id_title'>Number of Participants</label>
            <div class='col-md-6'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='program' placeholder='Male' type='number'>
                </div>
              </div>
              <div class='col-md-2 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='course' placeholder='Female' type='number'>
                </div>
              </div>
                  <label class='control-label col-md-1' for='id_title'>=</label>
              <div class='col-md-2 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='course' placeholder='Total' type='number'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='course'>program adviser</label>
              <div class='col-md-4'>
                <select class='form-control' id='Staff ID'>
                  <option selected="selected" disabled>Staff ID</option>
                  <option>Ms</option>
                  <option>Mrs</option>
                  <option>Miss</option>
                  <option>Dr</option>
                </select>
            </div>
          </div>
          <div class='form-group internal'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Escort Officer</label>
            <div class='col-md-6'>
              <textarea class='form-control' id='id_comments' placeholder='Officer Name' rows='3'></textarea>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-3 col-md-offset-1' for='id_title'>Guest speaker</label>
            <div class='col-md-6'>
              <div class='form-group internal'>
                <div class='col-md-1'>
                  <input class='form-control' type="checkbox" data-toggle="collapse" data-target="#speaker"> 
                </div>
                <label class='control-label col-md-1' for='id_title'>Include</label>
              </div>
              <div class='form-group internal'>
                <div class='col-md-11 collapse' id="speaker">
                  <input class='form-control' id='id_phone' placeholder='Speaker Name' type='text'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-3 col-md-offset-1' for='id_title'>Facilitator</label>
            <div class='col-md-6'>
              <div class='form-group internal'>
                <div class='col-md-1'>
                  <input class='form-control' type="checkbox" data-toggle="collapse" data-target="#faciStud"> 
                </div>
                <label class='control-label col-md-2' for='id_title'>Student</label>
                <div class='col-md-1'>
                  <input class='form-control' type="checkbox" data-toggle="collapse" data-target="#faciStaf"> 
                </div>
                <label class='control-label col-md-1' for='id_title'>Staff</label>
              </div>
              <div class='form-group'>
                <div class='col-md-11 collapse' id="faciStud">
                  <textarea class='form-control' id='faciStud' placeholder='Student Name' rows='2'></textarea>
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-11 collapse' id="faciStaf">
                  <textarea class='form-control' id='faciStaf' placeholder='Staff Name' rows='2'></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='course'>Estimated Cost</label>
            <div class='col-md-2'>
              <div class="input-group">
                <span class='input-group-addon'>
                  RM
                </span>
                <input class='form-control' id='estiCost' placeholder='Speaker Name' type='number'>
              </div>
            </div>
          </div>





          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_title'>Name</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <select class='form-control' id='id_title'>
                    <option>Mr</option>
                    <option>Ms</option>
                    <option>Mrs</option>
                    <option>Miss</option>
                    <option>Dr</option>
                  </select>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_first_name' placeholder='First Name' type='text'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_last_name' placeholder='Last Name' type='text'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Guests</label>
            <div class='col-md-8'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control col-md-8' id='id_adults' placeholder='18+ years' type='number'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_children' placeholder='2-17 years' type='number'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='id_children_free' placeholder='&lt; 2 years' type='number'>
                </div>
              </div>

            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Contact</label>
            <div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_email' placeholder='E-mail' type='text'>
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-11'>
                  <input class='form-control' id='id_phone' placeholder='Phone: (xxx) - xxx xxxx' type='text'>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Checkin</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control' id='date'>
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                </div>
              </div>
              <label class='control-label col-md-2' for='id_checkout'>Checkout</label>
              <div class='col-md-3'>
                <div class='form-group internal input-group'>
                  <input class='form-control datepicker' id='id_checkout'>
                  <span class='input-group-addon'>
                    <i class='glyphicon glyphicon-calendar'></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_equipment'>Equipment type</label>
            <div class='col-md-8'>
              <div class='col-md-3'>
                <div class='form-group internal'>
                  <select class='form-control' id='id_equipment'>
                    <option>Travel trailer</option>
                    <option>Fifth wheel</option>
                    <option>RV/Motorhome</option>
                    <option>Tent trailer</option>
                    <option>Pickup camper</option>
                    <option>Camper van</option>
                  </select>
                </div>
              </div>
              <div class='col-md-9'>
                <div class='form-group internal'>
                  <label class='control-label col-md-3' for='id_slide'>Slide-outs</label>
                  <div class='make-switch' data-off-label='NO' data-on-label='YES' id='id_slide_switch'>
                    <input id='id_slide' type='checkbox' value='chk_hydro' data-toggle="collapse" data-target=".collapseOne:not(.in)"/>
                    <input id='id_slide' type='checkbox' value='chk_hy'  data-toggle="collapse" data-target=".collapseOne.in" checked/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Contact</label>
            <div class='col-md-3'>
              <input class='form-control' id='id_email' placeholder='E-mail' type='text'>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2'>Place</label>
            <div class='col-md-2'>
              <select class='form-control' name="place">
                <option>RV</option>
                <option>Tent</option>
                <option>Cabin/Lodging</option>
              </select>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_pets'>Pets</label>
            <div class='col-md-1'>
              <div class='make-switch' data-off-label='NO' data-on-label='YES' id='id_pets_switch'>
                <input id='id_pets' type='checkbox' value='chk_hydro'>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Comments</label>
            <div class='col-md-6'>
              <textarea class='form-control' id='id_comments' placeholder='Additional comments' rows='3'></textarea>
            </div>
          </div>
          <div class='form-group'>
            <div class='col-md-offset-5 col-md-1'>
              <button class='btn' type='submit' style="color: #ffffff; background-color: #1da1f2">Submit</button>
            </div>
            <div class='col-md-1'>
              <button class='btn' style='float:right; color: #ffffff; background-color: #ff0000' type='reset'>reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

    
		<div class="container">
  			<div class="row">

<input type="radio" name="group1" value="1" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
<input type="radio" name="group1" value="2" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
<input type="radio" name="group1" value="3" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">

<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                1. What is HTML?
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="http://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                2. What is Bootstrap?
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                <p>Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                3. What is CSS?
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="http://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
            </div>
        </div>
    </div>
</div>





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

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

<script>
  $(document).ready(function(){
    var date_input=$('input[id="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
      format: 'mm/dd/yyyy',
      container: container,
      todayHighlight: true,
      autoclose: true,
    })
  })
</script>

<script>

  var element = document.getElementById("navForm");
  element.classList.add("active");

</script>

</body>
</html>