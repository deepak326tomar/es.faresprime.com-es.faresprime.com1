<link rel="stylesheet" type="text/css" href="Searchform/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<section class="bg_clrddd">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="panel with-nav-tabs panel-default">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab1default" data-toggle="tab"> <i class="fa fa-plane"></i> Flights </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane in active" id="tab1default">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 frm_gap">
                                        <div class="form_bx">
                                        
                                            <form method="GET" name="f1" action="flight/results.php" onsubmit="return first_form(), validate();">
											<input type="hidden" name="flight_srch" value="<?= date('Ymdhis');?>"/>
											<input type="hidden" name="meta" value="faresprime"/>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="flight_type">
                                                            <div class="form-check-inline">

                                                                <label class="radio-inline customradio" id="round_trip">Round Trip
                                                                    <input type="radio" checked="checked" onClick="show_date(this.value)" value="roundtrip" name="JType">
                                                                    <span class="checkmark"></span>
                                                                </label>

                                                                <label class="radio-inline customradio" id="one_way">One Way
                                                                    <input type="radio" onClick="show_date(this.value)" value="oneway" name="JType">
                                                                    <span class="checkmark"></span>
                                                                </label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row fm_ln1">
												  <div class="rounded_iimg">
                                                    <div class="col-md-12 col-sm-6 col-xs-12 ffrms_ppd">
													   <div class="res_hh">  From airport / city  </div>
													    <div class="tion_sea"> From airport / city </div>
                                                        <div class="form-group">
                                                            <label class="frm_llbs"> <img src="Searchform/images/plane_fly.png"> </label>
                                                            <input type="text" required="required" class="form-control ipt1 location-fld serlocation" autocomplete="off" placeholder="City or airport" name="org" id="location">
                                                            
                                                        </div>
                                                    </div>
                                                   
												     <div class="roud_icons"> <img src="Searchform/images/swipe-icn.png"> </div>
												   
                                                    <div class="col-md-12 col-sm-6 col-xs-12 ffrms_ppd">
													  <div class="res_hh">  To airport / city  </div>
													  <div class="tion_sea"> To airport / city </div>
                                                        <div class="form-group">
                                                            <label class="frm_llbs">  <img src="Searchform/images/plane_fly.png">  </label>
                                                            <input required="required" type="text" class="form-control ipt1 location-fld serlocation" placeholder="City or airport" name="dest" autocomplete="off" id="location2">
                                                            <div style="display: none;" onclick="close_btn(this.id);" id="location2_cleardata" class="closed_icon"> <i class="fa fa-remove"></i> </div>
                                                            
                                                        </div>
                                                    </div>
                                                 </div>
													
                                                    <div class="col-md-6  col-xs-6 ffrms_ppd">
													<div class="res_hh">  Departure  </div>
													<div class="tion_sea"> Departure </div>
                                                        <div class="form-group">
                                                            <label class="frm_llbs"> <img src="Searchform/images/dateoick.png"> </label>
                                                            <input name="depDt" id="depDt" type="hidden" value=''>
															<input name="" id="depDtMin" type="hidden" value=''>
                                                            <input type="text" class="form-control ipt1 readtrue" id="datepicker" required="required" autocomplete="off" placeholder="Depart Date" name="" readonly="true" value="">
                                                           
                                                        </div>
                                                    </div>

                                                <style>
												.readtrue{ cursor: pointer !important; background-color: #fff !important; opacity: 1;}
												</style>

                                                    <div class="col-md-6 col-xs-6 ffrms_ppd">
													<div class="res_hh"> Return </div>
													<div class="tion_sea"> Return </div>
                                                        <div class="form-group">
                                                            <label class="frm_llbs"> <img src="Searchform/images/dateoick.png"> </label>
                                                            <input name="retDt" id="retDt" type="hidden" value=''>
                                                            <input type="text" autocomplete="off" class="form-control ipt1 readtrue" required="required" id="datepicker2" placeholder="Return Date" readonly="true" value="">                                                           
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 ffrms_ppd">
                                                        <div class="tion_sea"> Class </div>
                                                        <div class="col-xs-12 gapres_dd">
                                                                    <div class="form-group">
                                                                        <!-- <label> Class</label> -->
                                                                        <select class="form-control ipt1" name="ct" placeholder="Economy">
                                                                            <option selected="selected" value="Y">Economy</option>
                                                                            <option value="S"> Premium Economy </option>
                                                                            <option value="C"> Business Class </option>
                                                                            <option value="F"> First Class </option>
                                                                        </select>
                                                                    </div>
                                                                </div>


                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 ffrms_ppd">
													<div class="res_hh">  Cabin Class & Travelers  </div>
													<div class="tion_sea"> Travelers </div>
                                                        <div class="form-group">
                                                            <label class="frm_llbs"> <img src="Searchform/images/passenger_iim.png"> </label>
<input type="text" class="form-control ipt1" placeholder="Passengers 1" name="" autocomplete="off" id="btm_clk">
                                                          
                                                            <div class="psg_dls" style="display: none;">

                                                                

                                                                <div class="col-sm-12">
                                                                    <div class="row">
                                                                        <div class="pass_bx">
                                                                            <label>Adults <small>(+11 yrs)</small></label>
                                                                            <div class="input-group number-spinner">
                                                                                <span class="input-group-btn">
                                                                <a class="btn mns_btn" data-dir="dwn" onclick="decrease_adult_rt()"><span class="glyphicon glyphicon-minus"></span></a>
                                                                                </span>
                                             <input type="text" id="AdultsRT" class="form-control text-center add_num" name="adt" value="1">
                                            <span class="input-group-btn">
                                                                <a class="btn add_btn" data-dir="up" onclick="increase_adult_rt()"><span class="glyphicon glyphicon-plus"></span></a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="row">
                                                                        <div class="pass_bx">
                                                                            <label>Child <small>(2-11 yrs)</small></label>
                                                                            <div class="input-group number-spinner">
                                                                                <span class="input-group-btn">
                                                                <a class="btn mns_btn" data-dir="dwn" onclick="decrease_child_rt()"><span class="glyphicon glyphicon-minus"></span></a>
                                                                                </span>
                                                                                <input type="text" id="ChildrenRT" class="form-control text-center add_num" name="chd" value="0">
                                                                                <span class="input-group-btn">
                                                                <a class="btn add_btn" data-dir="up" onclick="increase_child_rt()"><span class="glyphicon glyphicon-plus"></span></a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <div class="row">
                                                                        <div class="pass_bx">
                                                                            <label> Infant <small>(Upto 2 yrs)</small></label> 
			<br>												      <label class="radio-inline">
			  <input type="radio" name="infon" value="F" checked style="margin-top:-2px;"> On Lap
			</label>
			<label class="radio-inline">
			  <input type="radio" name="infon" value="S" style="margin-top:-2px;">On Seat
			</label>
                                                                            <div class="input-group number-spinner">
                                                                                <span class="input-group-btn">
                                                                <a class="btn mns_btn" data-dir="dwn" onclick="decrease_infant_rt()"><span class="glyphicon glyphicon-minus" ></span></a>
                                                                                </span>
                                                                                <input type="text" class="form-control text-center add_num" id="InfantsRT" name="inf" value="0">
                                                                                <span class="input-group-btn">
                                                                <a class="btn add_btn" data-dir="up" onclick="increase_infant_rt()"><span class="glyphicon glyphicon-plus"></span></a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-sm-12 col-xs-12">
                                                                    <!-- <div class="row"> -->
                                                                        <div class="btn_dn">
                                                                            <button type="button" onclick="all_pesenger();" class="btn_done">Done</button>
                                                                        </div>
                                                                    <!-- </div> -->
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 ffrms_ppd">
                                                    
                                                    	<div class="tion_sea"> Name </div>
                                                        <div class="form-group" style=" margin-right: 2px;">
                                                            <label class="frm_llbs"><i class="fa fa-male"></i></label>
                                                             <input type="text"   onkeypress="return only_character(event)" class="form-control ipt1 location-fld serlocation form_ds" name="name" autocomplete="off" placeholder="Name"  >
                                                             <span class="" id="name_err" style="color: red;"></span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6 col-sm-6 col-xs-12 ffrms_ppd">
                                                     
                                                    <div class="tion_sea"> Email </div>
                                                        <div class="form-group" style="margin-top: 3px !important; margin-right: 2px;">
                                                            <label class="frm_llbs"><i class="fa fa-envelope"></i></label>
                                                            <input type="Email" class="form-control ipt1 location-fld serlocation form_ds" name="email" autocomplete="off" placeholder="Email">
                                                        <span class="" id="email_err" style="color: red;"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 ffrms_ppd">
                                                     
                                                    <div class="tion_sea"> Phone </div>
                                                        <div class="form-group" style="margin-top: 3px !important; margin-right: 2px;">
                                                            <label class="frm_llbs"><i class="fa fa-phone"></i></label>
                                                            <input   type="phone" onkeypress="return IsNumeric(event);" maxlength="14" class="form-control ipt1 location-fld serlocation form_ds" name="phone" placeholder="Phone" autocomplete="off">
                                                            <!--<span id="error" style="color: Red; display: none">* Input digits (0 - )</span>-->
                                                           <span class="" id="phone_err" style="color: red;"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 ffrms_ppd" style="">
                                                         <button type="submit" name="submit">Search Now</button> 
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- FIRST TAB END -->

                       
						
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<link rel="stylesheet" href="<?=$website_path;?>Searchform/css/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="<?=$website_path;?>Searchform/js/jquery-ui.js"></script>
<!-- <script src="js/airports.js"></script> -->

<script type="text/javascript">
   function only_character(e)
{
var e=window.event || e
var keyunicode=e.charCode || e.keyCode
return (keyunicode>=65 && keyunicode<=122 || keyunicode==8 || keyunicode==32)? true : false
}
</script>
<script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
        
        
    </script> 
   <script>
function mobileValidate(phone)
{
//var mobile = $("#mobileV").val();
//var phoneno = ;
if(phone.match(/^\+?\d*$/))
        {
      return true;
        }
      else
        {
        //alert("message");
        return false;
        }
}


 /*function validateName(name)
  {
    
    var regex = /^[a-zA-Z]+$/;
        if(regex.test(name))
        {
          //alert(name);
        return true;
        }
       else
       {
        return false;
        //alert(); 
       }  
  }*/
  function isContainUrl(message)
{
   if(new RegExp("([a-zA-Z0-9]+://)?([a-zA-Z0-9_]+:[a-zA-Z0-9_]+@)?([a-zA-Z0-9.-]+\\.[A-Za-z]{2,4})(:[0-9]+)?(/.*)?").test(message)) {
     return false;
       // alert("url inside");
}
else
{
  return true;
}
}
function validateEmail(email) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(email)) {
        return true;
    }
    else {
        return false;
    }
}

   
  
  function validate()
  {
      //alert('hiiiiiiiii');
   var name=document.f1.name.value;  
   var email=document.f1.email.value;
   var phone=document.f1.phone.value;
    
   
  
  document.getElementById("name_err").innerHTML='';
  document.getElementById("email_err").innerHTML='';
  document.getElementById("phone_err").innerHTML='';
   
  


  
if(name==''){ 

document.getElementById("name_err").innerHTML="Name Required";  
return false;
}
 

if(email==''){  
document.getElementById("email_err").innerHTML="Email Required";  
return false;  
}
else if(!validateEmail(email))
{  
document.getElementById("email_err").innerHTML="Enter valid Email : Illigal charecter not allowed";  
return false; 
} 

if(phone=='')
{
  document.getElementById("phone_err").innerHTML='Phone Required';
  return false;
}
else
{
   if(!mobileValidate(phone)){
 document.getElementById("phone_err").innerHTML='Enter valid mobile : Illigal charecter not allowed';
  return false;
    }
    
}
 

 }
  
 </script>

 
<script>
    jQuery(function($) {
        $("#datepicker").datepicker({
            minDate: 'D',
            dateFormat: "dd-M-yy-D",
            // defaultDate: "+1w",
            numberOfMonths: Resolution(),
            onClose: function(selectedDate) {
                var s = selectedDate.split('-');
                var depdate = s[0]+ '-' + s[1] + '-' + s[2];
                $('#depDt').val(depdate);
                var d_dat = s[0]+ '-' + s[1] + '-' + s[2];
                $('#datepicker').val(d_dat);
                $('#datepicker_label').html(s[1] + '-' + s[3]);
                $("#datepicker2").datepicker("option", "minDate", selectedDate);
                $("#datepicker2").select();
                return false;
            }
        });
    });

    jQuery(function($) {
        $("#datepicker2").datepicker({
            minDate: '+1D',
            dateFormat: "dd-M-yy-D",
            // defaultDate: "+1w",
            numberOfMonths: Resolution(),
            onClose: function(selectedDate) {
                var s = selectedDate.split('-');
                var depdate = s[0]+ '-' + s[1] + '-' + s[2];


                $('#retDt').val(depdate);
                var d_dat = s[0]+ '-' + s[1] + '-' + s[2];
                $('#datepicker2').val(d_dat);
                $('#datepicker2_label').html(s[1] + '-' + s[3]);
                return false;
            }
        });
    });
</script>

<script>

      jQuery(function($) {
        $("#datepickerH").datepicker({
            minDate: 'D',
            dateFormat: "dd-mm-yy",
            // defaultDate: "+1w",
            numberOfMonths: Resolution(),
            onClose: function(selectedDate) {
                $('#depdth').val(selectedDate);
                $('#datepickerH').val(selectedDate);
                $("#datepickerH2").datepicker("option", "minDate", selectedDate);
                $("#datepickerH2").select();
                return false;
            }
        });
    });



    jQuery(function($) {
        $("#datepickerH11").datepicker({
            minDate: 'D',
            dateFormat: "M-D-dd-yy",
            // defaultDate: "+1w",
            numberOfMonths: Resolution(),
            onClose: function(selectedDate) {
                alert(selectedDate);
                var s = selectedDate.split('-');
                var depdate = s[0] + '-' + s[2] + '-' + s[3];
                $('#depdth').val(depdate);
                var d_dat = s[0] + '-' + s[2];
                $('#datepickerH').val(d_dat);
                $('#datepicker_label').html(s[1] + '-' + s[3]);
                $("#datepickerH2").datepicker("option", "minDate", selectedDate);
                $("#datepickerH2").select();
                return false;
            }
        });
    });

    jQuery(function($) {
        $("#datepickerH2").datepicker({
            minDate: '+1D',
            dateFormat: "dd-mm-yy",
            // defaultDate: "+1w",
            numberOfMonths: Resolution(),
            onClose: function(selectedDate) {
                
                $('#retdth').val(selectedDate);
               
                $('#datepickerH2').val(selectedDate);
                return false;
            }
        });
    });
</script>

<script>
    jQuery(function($) {
        $("#datepicker_car").datepicker({
            minDate: 'D',
            dateFormat: "M-dd-yy",
            // defaultDate: "+1w",
            numberOfMonths: Resolution(),
            onClose: function(selectedDate) {
                $('#datepicker_car').val(selectedDate);
                $("#datepicker_car2").datepicker("option", "minDate", selectedDate);
                $("#datepicker_car2").select();
                return false;
            }
        });
    });

    jQuery(function($) {
        $("#datepicker_car2").datepicker({
            minDate: '+1D',
            dateFormat: "M-dd-yy",
            // defaultDate: "+1w",
            numberOfMonths: Resolution(),
            onClose: function(selectedDate) {
                $('#datepicker_car2').val(selectedDate);
                return false;
            }
        });
    });
</script>


<script>
    jQuery(function($) {
        $("#datepicker_HA").datepicker({
            minDate: 'D',
            dateFormat: "M-dd-yy",
            // defaultDate: "+1w",
            numberOfMonths: Resolution(),
            onClose: function(selectedDate) {
                $('#datepicker_HA').val(selectedDate);
                $("#datepicker_HA2").datepicker("option", "minDate", selectedDate);
                $("#datepicker_HA2").select();
                return false;
            }
        });
    });

    jQuery(function($) {
        $("#datepicker_HA2").datepicker({
            minDate: '+1D',
            dateFormat: "M-dd-yy",
            // defaultDate: "+1w",
            numberOfMonths: Resolution(),
            onClose: function(selectedDate) {
                $('#datepicker_HA2').val(selectedDate);
                return false;
            }
        });
    });
</script>





<script>

	
function first_form()
	{
	var a=document.getElementById("location").value;	
	var b=document.getElementById("location2").value;	
	
	document.getElementById("location").value=a.substring(0,3);	
	document.getElementById("location2").value=b.substring(0,3);	
	
	
	  
	}

</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#btm_clk").click(function() {
            $(".psg_dls").toggle(1000);
        });
        $(".btn_done").click(function() {

            var total = all_pesenger();
            $("#btm_clk").val('Passengers ' + total);
            $(".psg_dls").hide(1000);
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#btm_clkH").click(function() {
            $(".psg_dls").toggle(1000);
        });
        $(".btn_doneH").click(function() {

            var total = all_pesenger();
            $("#btm_clkH").val('Adults/child ' + total);
            $(".psg_dls").hide(1000);
        });
    });
</script>



<script type="text/javascript">
    function show_date(data) {

        if (data == 'oneway') {
            document.getElementById("datepicker2").disabled = true;
            var a = document.getElementById("datepicker2");
            a.removeAttribute("required");
        } else if (data == 'roundtrip') {
            document.getElementById("datepicker2").disabled = false;
            var b = document.getElementById("datepicker2");
            b.setAttribute("required", true);
        }

    }
</script>

<script>
    jQuery(function($) {

        $('input').focus(function() {
            $(this).removeAttr('placeholder');
        });

    });

    
</script>


  
  <script>
       jQuery(function($) {   
//alert("hiiii");
   var arr = [];
$.getJSON('<?=$website_path;?>airport.json', function(data) {
    $.each(data, function(key, value) {
		//alert(value);
		var codes = value.substring(0,3);
		//alert(codes);
        if ($.inArray(value, arr) === -1) {
            arr.push(value);
        }
    })
});
//console.log(arr);
$("#location").autocomplete({
    source: function( request, response ) {
		var stringLength = $.ui.autocomplete.escapeRegex( request.term ).length;
		//alert(stringLength);
               var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
			   var matcher2 = new RegExp( $.ui.autocomplete.escapeRegex( request.term )+"+", "i" );
			  
			   //alert(matcher);
			   var isData = 1;
             response( $.grep( arr, function( item ){
				 //alert(item);
				 //alert(matcher.test( item ));
				 
				 if(stringLength<=3)
				 {
					 if(matcher.test( item ))
					 {
					   isData = 22;
					 }
                       return matcher.test( item );
					  
				 }
				 else
				 {
					 if(matcher2.test( item ))
					 {
					 isData = 22;
					 }
					return matcher2.test( item ); 
				 }
				 
             }) );
			 //alert(isData);
			 if(stringLength==3 && isData == 1 )
				 {
			 response( $.grep( arr, function( item ){
				 //alert(item);
				 //alert(matcher.test( item ));
				 
				 
                       return matcher2.test( item );
					  
				 
				 
             }) );
			 }
    },
    minLength: 1,
});

$("#location2").autocomplete({
            source: function( request, response ) {
		var stringLength = $.ui.autocomplete.escapeRegex( request.term ).length;
		//alert(stringLength);
               var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
			   var matcher2 = new RegExp( $.ui.autocomplete.escapeRegex( request.term )+"+", "i" );
			   var isData = 1;
             response( $.grep( arr, function( item ){
				 //alert(item);
				 //alert(matcher.test( item ));
				 
				 if(stringLength<=3)
				 {
					 if(matcher.test( item ))
					 {
					   isData = 22;
					 }
                       return matcher.test( item );
					  
				 }
				 else
				 {
					 if(matcher2.test( item ))
					 {
					 isData = 22;
					 }
					return matcher2.test( item ); 
				 }
				 
             }) );
			 //alert(isData);
			 if(stringLength==3 && isData == 1 )
				 {
			 response( $.grep( arr, function( item ){
				 //alert(item);
				 //alert(matcher.test( item ));
				 
				 
                       return matcher2.test( item );
					  
				 
				 
             }) );
			 }
    },
    minLength: 1,
       });
	   });
</script>

<script>
    function close_btn(id) {
        var array = id.split("_");
        var content = array[0];
        document.getElementById(content).value = '';
        document.getElementById(id).style.display = 'none';
        var label_id = content + '_label';
        if (content == 'location') {
            $('#' + label_id).html('City Name');
            $("#location").attr("placeholder", "Airport");

        } else if (content == 'location2') {
            $('#' + label_id).html('City Name');
            $("#location2").attr("placeholder", "Airport");

        }

    }
</script>

<script>
    function add_rt_passenger() {
        var infow = $("#InfantsRT").val();
        var childow = $("#ChildrenRT").val();
        var adultow = $("#AdultsRT").val();
        var total = +infow + +childow + +adultow;
        return total;
    }

    function all_pesenger() {

        var infow = $("#InfantsRT").val();
        var childow = $("#ChildrenRT").val();
        var adultow = $("#AdultsRT").val();
        var total = +infow + +childow + +adultow;
        return total;
    }

    function increase_adult_rt() {
        var adult_pass = add_rt_passenger();
        var adult_rt = document.getElementById("AdultsRT").value;
        if (adult_pass < 9) {
            var k = parseInt(adult_rt) + 1;
            document.getElementById("AdultsRT").value = k;
        }

    }

    function decrease_adult_rt() {
        var adult_rt = document.getElementById("AdultsRT").value;
        var InfantsRT = document.getElementById("InfantsRT").value;
        if (adult_rt != '1') {
            var k = parseInt(adult_rt) - 1;
            document.getElementById("AdultsRT").value = k;

            if (InfantsRT >= adult_rt) {
                var k = parseInt(InfantsRT) - 1;
                document.getElementById("InfantsRT").value = k;
            }

        }
    }

    function increase_child_rt() {
        var adult_pass = add_rt_passenger();
        var adult_rt = document.getElementById("ChildrenRT").value;
        if (adult_pass < 9) {

            var k = parseInt(adult_rt) + 1;
            document.getElementById("ChildrenRT").value = k;
        }

    }

    function decrease_child_rt() {
        var adult_rt = document.getElementById("ChildrenRT").value;
        if (adult_rt != '0') {
            var k = parseInt(adult_rt) - 1;
            document.getElementById("ChildrenRT").value = k;
        }
    }

    function increase_infant_rt() {

        var total_pass = add_rt_passenger();

        var adult_rt = document.getElementById("AdultsRT").value;
        var InfantsRT = document.getElementById("InfantsRT").value;

        if (total_pass < 9 && InfantsRT < adult_rt) {
            var k = parseInt(InfantsRT) + 1;
            document.getElementById("InfantsRT").value = k;
        }

    }

    function decrease_infant_rt() {
        var adult_rt = document.getElementById("InfantsRT").value;
        if (adult_rt != '0') {
            var k = parseInt(adult_rt) - 1;
            document.getElementById("InfantsRT").value = k;
        }
    }

    function Resolution() {
        if (window.innerWidth < 780) {
            return 1;
        } else {
            return 2;
        }
    }


</script>

<!-- <script src="Searchform/js/jquery.min.js"></script>
<script src="Searchform/js/bootstrap.min.js"></script>
 -->


