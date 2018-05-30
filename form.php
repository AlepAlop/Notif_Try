<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="assets/img/logo.png">
  <title>A.F.S. (UiTM)</title>

  <?php 
    include('conn.php');
    include('_lib.php');
    include('_val.php');
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
                    <option selected="selected" disabled>--Department--</option>
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
                        <input class='form-control' name='timestart' id='timestart' type='time'/>
                        <span class='input-group-addon'>
                          Start Time
                        </span>
                      </div>
                    </div>
                    <div class='col-md-3'>
                      <div class='input-group'>
                        <input class='form-control' name='timeend'id='timeend' type='time'/>
                        <span class='input-group-addon'>
                          End Time
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-9'>
                  <div class='col-md-5'>
                    <div class="form-group internal">
                      <input class='form-control' id='id_last_name' placeholder="Venue" type='text'/>
                    </div>
                  </div>
                  <p id="cli">click Me</p>
                  <div class="form-group internal">
                    <label class='control-label col-md-4 indent-small' for='id_title'>Outside Campus</label>
                    <div class='col-md-1 indent-small'>
                      <input class='form-control' type="checkbox" id="venueC" name="venueC"> 
                    </div>  
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-3 col-md-offset-1' for='id_title'>Number of Participants</label>
            <div class='col-md-6'>
              <div class='col-md-2'>
                <div class='form-group internal'>
                  <input class='form-control' id='numL' name='numL' placeholder='Male' type='number'>
                </div>
              </div>
              <div class='col-md-2 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='numP' name='numP' placeholder='Female' type='number'>
                </div>
              </div>
                  <label class='control-label col-md-1' for='id_title'>=</label>
              <div class='col-md-2 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='numLP' name="numLP" placeholder='Total' type='number' disabled>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='course'>Program Adviser</label>
              <div class='col-md-4'>
                <select class='form-control' id='Staff ID'>
                  <option selected="selected" disabled>--Staff ID--</option>
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
            <label class='control-label col-md-3 col-md-offset-1' for='id_title'>Transport</label>
            <div class='col-md-3'>
              <div class='form-group internal'>
                <label class='control-label col-md-3' for='id_title'>Include</label>
                <div class='col-md-2'>
                  <input class='form-control' id='tranC' name='tranC' type="checkbox" data-toggle="collapse" data-target="#tranD"> 
                </div>
              </div>
            </div>
            <div class='col-md-7 col-md-offset-4'>
              <div class='form-group collapse' id="tranD">
                <div class='col-md-8'>
                  <textarea class='form-control' placeholder='Transport Type' rows='2'></textarea>
                </div>
                <div class='col-md-3'>
                  <input class='form-control' id='course' id="numTran" name="numTran" placeholder='Quantity' type='number'> 
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-3 col-md-offset-1' for='id_title'>Guest Speaker</label>
            <div class='col-md-3'>
              <div class='form-group internal'>
                <label class='control-label col-md-3' for='id_title'>Include</label>
                <div class='col-md-2'>
                  <input class='form-control' id='speC' name='speC' type="checkbox" data-toggle="collapse" data-target="#speaker"> 
                </div>
              </div>
            </div>
            <div class='col-md-7 col-md-offset-4'>
              <div class='form-group collapse' id="speaker">
                <div class='col-md-8'>
                  <textarea class='form-control' placeholder='Speaker Name' rows='2'></textarea>
                </div>
                <div class='col-md-3'>
                  <input class='form-control' id='course' id="numSpe" name="numSpe" placeholder='Amount' type='number'> 
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-3 col-md-offset-1' for='id_title'>Facilitator</label>
            <div class='col-md-3'>
              <div class='form-group internal'>
                <label class='control-label col-md-3' for='id_title'>Student</label>
                <div class='col-md-2'>
                  <input class='form-control' id="stuC" name="stuC" type="checkbox" data-toggle="collapse" data-target="#faciStud"> 
                </div>
                <label class='control-label col-md-2' for='id_title'>Staff</label>
                <div class='col-md-2'>
                  <input class='form-control'id="staC" name="staC" type="checkbox" data-toggle="collapse" data-target="#faciStaf"> 
                </div>
              </div>
            </div>
            <div class='col-md-7 col-md-offset-4'>
              <div class='form-group internal'>
                <div class='col-md-12 collapse' id="faciStud">
                  <div class='col-md-8'>
                    <textarea class='form-control' placeholder='Student Name' rows='2'></textarea>
                  </div>
                  <div class='col-md-4'>
                    <input class='form-control' id='course' placeholder='Student Amount' type='number'> 
                  </div>
                </div>
              </div>
              <div class='form-group internal'>
                <div class='col-md-12 collapse' id="faciStaf">
                  <div class='col-md-8'>
                    <textarea class='form-control' placeholder='Staff Name' rows='2'></textarea>
                  </div>
                  <div class='col-md-4'>
                    <input class='form-control' id='course' placeholder='Staff Amount' type='number'> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-3 col-md-offset-1' for='id_title'>Other Details</label>
            <div class='col-md-6'>
              <div class='form-group internal'>
                <label class='control-label col-md-1' for='id_title'>Hostel</label>
                <div class='col-md-1'>
                  <div class='col-md-13'>
                    <input class='form-control' name="hoC" id="hoC" type="checkbox"> 
                  </div>
                </div>
                <label class='control-label col-md-1' for='id_title'>Food</label>
                <div class='col-md-1'>
                  <div class='col-md-13'>
                    <input class='form-control' name="foC" id="foC" type="checkbox"> 
                  </div>
                </div>
                <label class='control-label col-md-3 collapse' id="hofo" for='id_title'>Hostel & Food In Package</label>
                <div class='col-md-1 collapse' id="hofo1">
                  <div class='col-md-13'>
                    <input class='form-control' name="hofoC" id="hofoC" type="checkbox"> 
                  </div>
                </div>
                <label class='control-label col-md-2 collapse' id="ram" for='id_title'>Ramadan Package</label>
                <div class='col-md-1 collapse' id="ram1">
                  <div class='col-md-13'>
                    <input class='form-control internal' name="ramC" id="ramC" type="checkbox"> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Summary</label>
            <div class='col-md-6'>
              <textarea class='form-control' id='summary' name="summary" placeholder='' rows='8' disabled></textarea>
            </div>
          </div>
          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='course'>Estimated Cost</label>
            <div class='col-md-2'>
              <div class="input-group">
                <span class='input-group-addon'>
                  RM
                </span>
                <input class='form-control' id='estiCost' placeholder='' type='number'>
              </div>
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
<footer class="container-fluid text-center">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
        <p>Activity & Funding System (A.F.S) - Universiti Teknologi Mara (UiTM)</p>
        <p class="h6" style="color: #b1afaf;">&copy All right Reversed <i>by Alif Fitri</i>.</p>
      </div>
    </div>
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
  var element = document.getElementById("navApply");
  element.classList.add("active");
</script>

</body>
<script type="text/javascript">
var tot=0;
var Total=0;
var Days;
var Hours;
var numP;
var numL;
var numLP;
var mssg;
var t=false;

var Hos_U_P = parseInt(<?php echo "'$Hos_U_P'"; ?>);
var Hos_I_P = parseInt(<?php echo "'$Hos_I_P'"; ?>);
var Hos_Foo_P = parseInt(<?php echo "'$Hos_Foo_P'"; ?>);

var Foo_I_M_P = parseInt(<?php echo "'$Foo_I_M_P'"; ?>);
var Foo_I_A_P = parseInt(<?php echo "'$Foo_I_A_P'"; ?>);
var Foo_I_N_P = parseInt(<?php echo "'$Foo_I_N_P'"; ?>);
    
var Foo_U_O5_P = parseInt(<?php echo "'$Foo_U_O5_P'"; ?>);
var Foo_U_L5_P = parseInt(<?php echo "'$Foo_U_L5_P'"; ?>);
var Foo_U_L2_P = parseInt(<?php echo "'$Foo_U_L2_P'"; ?>);

var Sa_P = parseInt(<?php echo "'$Sa_P'"; ?>);
var If_P = parseInt(<?php echo "'$If_P'"; ?>);

var Spe_O5_P = parseInt(<?php echo "'$Spe_O5_P'"; ?>);
var Spe_L5_P = parseInt(<?php echo "'$Spe_L5_P'"; ?>);

var Fasi_Sta_P = parseInt(<?php echo "'$Fasi_Sta_P'"; ?>);
var Fasi_Stu_P = parseInt(<?php echo "'$Fasi_Stu_P'"; ?>);

  document.getElementById("cli").onclick = function() {calAll()};
  function calAll() {

    numP = parseInt($('input[name=numP]').val());
    numL = parseInt($('input[name=numL]').val());
    numLP = numL+numP;
    numSpe = parseInt($('input[name=numSpe]').val());


    document.getElementById("cli").innerHTML = "YOU CLICKED ME!";
    var data1 = $('input[name=dateend]').val();
    var data2 = $('input[name=datestart]').val();
    var date1 = new Date(data1);
    var date2 = new Date(data2);
    var timeDiff = Math.abs(date2.getTime() - date1.getTime());
    Days = Math.ceil(timeDiff / (1000 * 3600 * 24));
    var valuestart = $('input[name=timestart]').val();
    var valuestop = $('input[name=timeend]').val();
    Hours=6;
    if(Days==0){
      Days=1;
      Hours = parseInt($('input[name=timeend]').val().split(':')[0], 10) - parseInt($('input[name=timestart]').val().split(':')[0], 10);
      if(Hours < 0) Hours = 12 + Hours;
      document.getElementById('numLP').value=numLP;
      //alert(Days+' Days '+Hours+' Hours');
    }
    else{
      
      document.getElementById('numLP').value=numLP;
      //alert(Days+' Days '+Hours+' Hours '+numLP+' numLP :'+Total+' Total');
    }
  }

   function calAll2() {
    Total=0;
    mssg="";
    var venueC = document.getElementById("venueC");
    var speC = document.getElementById("speC");
    var stuC = document.getElementById("stuC");
    var staC = document.getElementById("staC");
    var hoC = document.getElementById("hoC");
    var foC = document.getElementById("foC");
    var hofoC = document.getElementById("hofoC");
    var ramC = document.getElementById("ramC");
    var venueC1;
    var speC1;
    var stuC1;
    var staC1;
    var hoC1;
    var foC1;
    var hofoC1;
    var ramC1;
    if (venueC.checked == true){venueC1=true;}
    else{venueC1=false;}
    if (speC.checked == true){speC1=true;}
    else{speC1=false;}
    if (stuC.checked == true){stuC1=true;}
    else{stuC1=false;}    
    if (staC.checked == true){staC1=true;}
    else{staC1=false;}
    if (hoC.checked == true){hoC1=true;}
    else{hoC1=false;}
    if (foC.checked == true){foC1=true;}
    else{foC1=false;}
    if (hofoC.checked == true){hofoC1=true;}
    else{hofoC1=false;}
    if (ramC.checked == true){ramC1=true;}
    else{ramC1=false;}

    if(venueC1 != true && hoC1==true && hofoC1!=true)
    {//1
      tot=0;
      tot=tot+(Days*Hos_U_P*numLP);
      Total=Total+tot;
      mssg="Hostel:\n UiTM Room: RM"+Hos_U_P+" x "+Days+" days x "+numLP+" students = RM"+tot;
    }
    if(venueC1 == true && hoC1==true && hofoC1!=true)
    {//2
      tot=0;
      tot=tot+(Days*Hos_I_P*numLP);
      Total=Total+tot;
      mssg="Hostel:\n Outside UiTM: RM"+Hos_I_P+" x "+Days+" days x "+numLP+" students = RM"+tot;
    }
    if(foC1 == true && hoC1==true && hofoC1==true)
    {//3
      tot=0;
      tot=tot+(Days*Hos_Foo_P*numLP);
      Total=Total+tot;
      mssg="Hostel & Food (Package):\n RM"+Hos_Foo_P+" x "+Days+" days x "+numLP+" students = RM"+tot;
    }
    if(foC1 == true && venueC1 == true && hofoC1!=true && ramC1 != true)
    {//4
      tot=0;
      tot=tot+((Days*Foo_I_M_P*numLP)+(Days*Foo_I_A_P*numLP)+(Days*Foo_I_N_P*numLP));
      Total=Total+tot;
      mssg=mssg+"\n"+"Student Elaun:\n Outside UiTM\n Brakefast: RM"+Foo_I_M_P+" x "+Days+" days x "+numLP+" students\n Lunch: RM"+Foo_I_A_P+" x "+Days+" days x "+numLP+" students\n Dinner: RM"+Foo_I_N_P+" x "+Days+" days x "+numLP+" students = RM"+tot;
    }
    if(foC1 == true && venueC1 != true && hofoC1!=true && ramC1 != true)
    {//567
      if(Hours>=5){
        tot=0;
        tot=(Days*Foo_U_O5_P*numLP);
        Total=Total+tot;
        mssg=mssg+"\n"+"Student Elaun:\n Inside UiTM Activity More 5 Hours: RM"+Foo_U_O5_P+" x "+Days+" days x "+numLP+" students = RM"+tot;
      }
      else if(Hours<5 && Hours >= 2){
        tot=0;
        tot=(Days*Foo_U_L5_P*numLP);
        Total=Total+tot;
        mssg=mssg+"\n"+"Student Elaun:\n Inside UiTM Activity Less 5 Hours: RM"+Foo_U_L5_P+" x "+Days+" days x "+numLP+" students = RM"+tot;
      }
      else if(Hours<2){
        tot=0;
        tot=(Days*Foo_U_L2_P*numLP);
        Total=Total+tot;
        mssg=mssg+"\n"+"Student Elaun:\n Inside UiTM Activity Less 2 Hours: RM"+Foo_U_L2_P+" x "+Days+" days x "+numLP+" students = RM"+tot;
      }
    }
    if(foC1 == true && venueC1 != true && hofoC1!=true && ramC1 == true)
    {//8
      mssg=mssg+"\n"+8;
    }
    if(speC1 == true)
    {//910-------------
      mssg=mssg+"\n"+910;
    }
    if(stuC1 == true || staC1 == true)
    {//1112--------------
      mssg=mssg+"\n"+1112;
    }

    if(mssg=="") mssg="TOTAL = RM"+Total;
    else mssg=mssg+"\n"+"TOTAL = RM"+Total;
    document.getElementById('summary').value=mssg;
    
    if(hoC1 == true && foC1 == true)
    {
      var a = document.getElementById("ram");
      a.classList.remove("collapse");
      var b = document.getElementById("ram1");
      b.classList.remove("collapse");
      var c = document.getElementById("hofo1");
      c.classList.remove("collapse");
      var d = document.getElementById("hofo");
      d.classList.remove("collapse");
      t=true;
    }
    else if(t == true){
      var a = document.getElementById("ram");
      a.classList.add("collapse");
      var b = document.getElementById("ram1");
      b.classList.add("collapse");
      var c = document.getElementById("hofo1");
      c.classList.add("collapse");
      var d = document.getElementById("hofo");
      d.classList.add("collapse");
      document.getElementById("ramC").checked=false;
      document.getElementById("hofoC").checked=false;

      t=false;
    }

    if(hofoC1==true  && ramC1 != true){
      var b = document.getElementById("ram1");
      b.classList.add("collapse");
      var c = document.getElementById("ram");
      c.classList.add("collapse");
    }
    if(hofoC1!=true  && ramC1 == true){
      var b = document.getElementById("hofo");
      b.classList.add("collapse");
      var c = document.getElementById("hofo1");
      c.classList.add("collapse");
    }
  }

document.getElementById("venueC").onclick = function() {calAll2()};
document.getElementById("speC").onclick = function() {calAll2()};
document.getElementById("stuC").onclick = function() {calAll2()};
document.getElementById("staC").onclick = function() {calAll2()};
document.getElementById("hoC").onclick = function() {calAll2()};
document.getElementById("foC").onclick = function() {calAll2()};
document.getElementById("hofoC").onclick = function() {calAll2()};
document.getElementById("ramC").onclick = function() {calAll2()};
  

setInterval(function(){ calAll(); }, 1000);

function check(){
  var venueC = document.getElementById("local");
    if (venueC.checked == true){

      var abc = parseInt(<?php echo "'$Hos_I_P'"; ?>);
      var abcd = 1+abc;
      alert(abcd);
    }
  }
  
</script>



</html>