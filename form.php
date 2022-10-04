    <link rel="stylesheet" type="text/css" href="Searchform/css/style.css">
	<script src="Searchform/js/jquery.min.js"></script>
	<script src="Searchform/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          
			  <div class="tdrp_serch">
				<div class="panel-heading gaps_onrt">
					<ul class="nav nav-tabs">
						
						<li class="active">
							<a href="#Section2" data-toggle="tab" onClick="banner_change('2')"> <i class="fa fa-plane"></i> Vuelo </a>
						</li> 
						
					</ul>
				</div>
				<div class="tab-pane in active" id="tab1default">
				 <div class="form_bx">
				   <!-- <h4 class="easy_srch"> Fast and Easy Search </h4> -->
					<form method="GET" action="https://faresprime.com:8001/flights.html" onsubmit="return first_form()">
					 <input type="hidden" name="r" value="1">
		
							<div class="col-sm-12">
								<div class="flight_type">
									<div class="form-check-inline">

										<label class="radio-inline customradio"> Viaje ida y vuelta
											<input type="radio" checked="checked" onClick="show_date(this.value)" value="roundtrip" name="tripType">
											<span class="checkmark"></span>
										</label>

										<label class="radio-inline customradio"> Un camino
											<input type="radio" onClick="show_date(this.value)" value="oneway" name="tripType">
											<span class="checkmark"></span>
										</label>
						 
									</div>
								</div>
							</div>
						
						
						
						<div class="fm_ln1">
							<div class="col-md-6 ffrms_ppd">
							<div class="res_hh">  Del aeropuerto  </div>
								<div class="form-group">
									<label class="frm_llbs"> <img src="Searchform/images/map_lc.png"> </label>
									<input type="text" required="required" class="form-control ipt1 location-fld serlocation" autocomplete="off" placeholder="ciudad o aeropuerto" name="origin1" id="location">
									<div style="display: none;" onclick="close_btn(this.id);" id="location_cleardata" class="closed_icon"><i class="fa fa-remove"></i> </div>
								</div>
							</div>
						   
						  
						   
							<div class="col-md-6 ffrms_ppd">
							<div class="res_hh">  Al aeropuerto  </div>
								<div class="form-group">
									<label class="frm_llbs">  <img src="Searchform/images/map_lc.png">  </label>
									<input required="required" type="text" class="form-control ipt1 location-fld serlocation" placeholder="ciudad o aeropuerto" name="destination1" autocomplete="off" id="location2">
									<div style="display: none;" onclick="close_btn(this.id);" id="location2_cleardata" class="closed_icon"> <i class="fa fa-remove"></i> </div>
									
								</div>
							</div>
						
							
							<div class="col-md-6 col-xs-6 ffrms_ppd">
							<div class="res_hh">  Fecha de salida </div>
								<div class="form-group">
									<label class="frm_llbs"> <img src="Searchform/images/dateoick.png"> </label>
									<input name="departDate1" id="depDt" type="hidden" value='<?php $ds=strtotime("2 day"); echo date("d-M-Y", $ds);?>'>
									<input type="text" class="form-control ipt1 readtrue" id="datepicker" required="required" autocomplete="off" placeholder="Fecha de salida" name="" readonly="true" value='<?php $ds=strtotime("2 day"); echo date("d-M-Y", $ds);?>'>
								   
								</div>
							</div>
							
						

						<style>
						.readtrue{ cursor: pointer !important; background-color: #fff !important; opacity: 1;}
						.form-control[disabled] { background: #a9a9a9 !important; opacity: 0.4;}
						</style>

							<div class="col-md-6 col-xs-6 ffrms_ppd">
							<div class="res_hh">  Fecha de regreso </div>
								<div class="form-group">
									<label class="frm_llbs"> <img src="Searchform/images/dateoick.png"> </label>
									<input name="returnDate1" id="retDt" type="hidden" value='<?php $ds=strtotime("10 day"); echo date("d-M-Y", $ds);?>'>
									<input type="text" autocomplete="off" class="form-control ipt1 readtrue" required="required" id="datepicker2" placeholder="Fecha de regreso" readonly="true" value='<?php $ds=strtotime("10 day"); echo date("d-M-Y", $ds);?>'>
								   
								</div>
							</div>
							
							
							
							

							<div class="col-md-6 col-xs-12 ffrms_ppd">
							<div class="res_hh"> Pasajeras </div> 
								<div class="form-group">
									<label class="frm_llbs"> <img src="Searchform/images/passenger_iim.png"> </label>
							  <input type="text" class="form-control ipt1_small readtrue" placeholder="Pasajeras 1" name="" id="btm_clk" readonly="true">
								  
							   <div class="psg_dls" style="display: none;">
							   

							   
									<div class="row">
										<div class="col-sm-12">
											
												<div class="pass_bx">
													<label>Adultas <small>(+17 años)</small></label>
													<div class="input-group number-spinner">
														<span class="input-group-btn">
										<a class="btn mns_btn" data-dir="dwn" onclick="decrease_adult_rt()"><i class="fa fa-minus"></i></a>
														</span>
					 <input type="text" id="AdultsRT" class="form-control text-center add_num" name="adults" value="1">
					<span class="input-group-btn">
										<a class="btn add_btn" data-dir="up" onclick="increase_adult_rt()"><i class="fa fa-plus"></i></a>
														</span>
													</div>
												</div>
											</div>
										
										<div class="col-sm-12">
												<div class="pass_bx">
													<label>Niña <small>(0-17 años)</small></label>
													<div class="input-group number-spinner">
														<span class="input-group-btn">
										<a class="btn mns_btn" data-dir="dwn" onclick="decrease_child_rt()"><i class="fa fa-minus"></i></a>
														</span>
														<input type="text" id="ChildrenRT" class="form-control text-center add_num" name="childs" value="0">
														<span class="input-group-btn">
										<a class="btn add_btn" data-dir="up" onclick="increase_child_rt()"><i class="fa fa-plus"></i></a>
														</span>
													</div>
												</div>
										</div>

										<div class="col-sm-12">
												<div class="pass_bx">
													
													<label> Niña <small>(Hasta 2 años)</small></label>
													
													<div class="input-group number-spinner">
														<span class="input-group-btn">
										<a class="btn mns_btn" data-dir="dwn" onclick="decrease_infant_rt()"><i class="fa fa-minus" ></i></a>
														</span>
														<input type="text" class="form-control text-center add_num" id="InfantsRT" name="infants" value="0">
														<span class="input-group-btn">
										<a class="btn add_btn" data-dir="up" onclick="increase_infant_rt()"><i class="fa fa-plus"></i></a>
														</span>
													</div>
												</div>
										</div>
										</div>

										
										<div class="col-sm-12 col-xs-6">
												<div class="btn_dn">
													<button type="button" onclick="all_pesenger();" class="btn_done">Hecho</button>
												</div>
										</div>

									</div>
								</div>
							</div>

							
							<div class="col-md-6 col-xs-12 ffrms_ppd">
                              <div class="res_hh"> Tipo de clase </div> 							
								<div class="form-group">
									<label class="frm_llbs"> <img src="Searchform/images/class_dd.png"> </label>
									<select class="form-control ipt1" name="classType" placeholder="Economía">
										<option selected="selected" value="Y">Economía</option>
										<option value="S"> Economia Premiu </option>
										<option value="C"> Clase de negocio </option>
										<option value="F"> Primera clase </option>
									</select>
								</div>
							</div>
							
				<input type="hidden" id="currency_id" name="currency" value="USD">
				<input type="hidden" value="975551A632" required="required" name="customerId">	
				<input type="hidden" value="faresprime_us" required="required" name="website">	
				<input type="hidden" value="faresprime_us" required="required" name="metaName">
				<input type="hidden" value="no" required="required" name="b2b">	
				<input type="hidden" value="3G" required="required" name="gt">
					   

						  <div class="col-md-12 col-xs-12 ffrms_ppd" style="text-align:center;">
						<button type="sumit" name="submitForm"> <i class="fa fa-search"></i> Buscar Vuelo </button>
					</div>

						</div>
					</form>
				</div>
			   </div>
		   </div>	
	<!-- FIRST TAB END -->

                       
						
                
<link rel="stylesheet" href="Searchform/css/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="Searchform/js/jquery-ui.js"></script>
<!--<script src="js/airports.js"></script>-->

<script>

function addDays(date, days) {
  var result = new Date(date);
  result.setDate(result.getDate() + days);
  return result;
}

function formatDate(date)
{
var d = new Date(date);
var curr_date = d.getDate();
var curr_month = d.getMonth() + 1; //Months are zero based
var curr_year = d.getFullYear();
return curr_date + "-" + curr_month + "-" + curr_year;  
}

    jQuery(function($) {
        $("#datepicker").datepicker({
            minDate: 'D',
            dateFormat: "dd-D-M-yy",
            // defaultDate: "+1w",
            numberOfMonths: Resolution(),
            onClose: function(selectedDate) {
                var s = selectedDate.split('-');
                var depdate = s[0] + '-' + s[2] + '-' + s[3];
                $('#depDt').val(depdate);
                var d_dat = s[0] + '-' + s[2];
                $('#datepicker').val(d_dat);
                $('#datepicker_label').html(s[1] + '-' + s[3]);
                $("#datepicker2").datepicker("option", "minDate", selectedDate);
                $("#datepicker2").select();
				 return this._dates[this._getLastPickedDateIndex()]; 
                return false;
            }
        });
    });

    jQuery(function($) {
        $("#datepicker2").datepicker({
            minDate: '+1D',
            dateFormat: "dd-D-M-yy",
            // defaultDate: "+1w",
            numberOfMonths: Resolution(),
            onClose: function(selectedDate) {
                var s = selectedDate.split('-');
                var depdate = s[0] + '-' + s[2] + '-' + s[3];
                $('#retDt').val(depdate);
                var d_dat = s[0] + '-' + s[2];
                $('#datepicker2').val(d_dat);
                $('#datepicker2_label').html(s[1] + '-' + s[3]);
				 return this._dates[this._getLastPickedDateIndex()]; 
                return false;
            }
        });
    });
</script>

<script>

      jQuery(function($) {
        $("#datepickerH").datepicker({
            minDate: 'D',
            dateFormat: "dd-m-yy",
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
            dateFormat: "dd-m-yy",
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
            dateFormat: "M-D-dd-yy",
            // defaultDate: "+1w",
            numberOfMonths: Resolution(),
            onClose: function(selectedDate) {
                var s = selectedDate.split('-');
                var depdate = s[0] + '-' + s[2] + '-' + s[3];
                $('#depDt').val(depdate);
                var d_dat = s[0] + '-' + s[2];
                $('#datepicker_car').val(d_dat);
                $('#datepicker_label').html(s[1] + '-' + s[3]);
                $("#datepicker_car2").datepicker("option", "minDate", selectedDate);
                $("#datepicker_car2").select();
                return false;
            }
        });
    });

    jQuery(function($) {
        $("#datepicker_car2").datepicker({
            minDate: '+1D',
            dateFormat: "M-D-dd-yy",
            // defaultDate: "+1w",
            numberOfMonths: Resolution(),
            onClose: function(selectedDate) {
                var s = selectedDate.split('-');
                var depdate = s[0] + '-' + s[2] + '-' + s[3];
                $('#retDt').val(depdate);
                var d_dat = s[0] + '-' + s[2];
                $('#datepicker_car2').val(d_dat);
                $('#datepickerH2_label').html(s[1] + '-' + s[3]);
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
            $(".psg_dls").toggle('slideUp');
        });
        $(".btn_done").click(function() {

            var total = all_pesenger();
            $("#btm_clk").val('Passengers ' + total);
            $(".psg_dls").hide('slideUp');
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#btm_clkH").click(function() {
            $(".psg_dls").toggle('slideUp');
        });
        $(".btn_doneH").click(function() {

            var total = all_pesenger();
            $("#btm_clkH").val('Adults/child ' + total);
            $(".psg_dls").hide('slideUp');
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
$.getJSON('airport.json', function(data) {
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