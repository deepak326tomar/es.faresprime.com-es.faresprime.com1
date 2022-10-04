<!-- HEADER START -->
	   
<style>

/*#boxes{ display:none;}*/

 #mask { position: fixed !important; left: 0;top: 0; z-index: 9000 !important; background: rgba(0, 0, 0, 0.9); display: none; height: 100% !important; width: 100% !important;
   z-index: 999; }
   
#boxes .window { display: none;left: 15%; position: fixed; top: 90px !important; z-index: 9999; width: 700px;}
#boxes #dialog { background-color: #ffffff; border-radius: 10px;}
.text-success2 { color: #0b4075; font-size: 20px; text-transform: uppercase; font-weight: 600; border-bottom: solid 1px #ee372b; padding-bottom: 6px;}
.home-page-popup {}
.home-page-popup .form-horizontal .form-group { margin-left: 0; margin-right: 0; }
.home-page-popup .close { display: block; height: 29px; margin: 0 auto; opacity: 1; overflow: hidden; position: absolute; right: 9px; text-indent: 0; top: 5px; width: 30px; }

.flight { width: 100%; display: table; position: relative;}
.flight img { position: absolute; top: 310px; width: 100%; height: 200px; }
   
.search-box_design { position: relative; height: 160px; font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; }
.search-box {position: absolute; top: 0; left: 0; width: 100%; display: table;}
.result-box { width: 45%; display: table; float: left; text-align: center; }
.search-heading { text-align: center; font-size: 25px; padding: 0px 0; font-weight: bold; color: #454545; }
.arrow img { width: 65px; float: left; margin-top: 20px; }
.one_way { text-align: center; font-weight: bold; background: #e67817; display: table; margin: 0 auto; padding: 5px 5px; color: #fff;}
.close img {
    height: 100%;
    position: relative;
    z-index: 9999999;
    width: 23px;
    height: 23px;
    margin-left: 8px;
}
   

</style>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --> 
<style type="text/css"> 
.popup-dsgn { width: 100%; display: table; }
.popup-dsgn-box { width: 100%; display: table; background: url(./img/country-footer.png) no-repeat; background-size: contain; background-position: 100% 100%; position:relative;  border-radius:2px;}

.popup-dsgn-box .popup-dsgn { border-radius: 2px; }

.content_set2{ margin-top:25px; display:table; width:100%;} 

.content_bx { background: #fff; display:table; width:100%; background-size: cover; padding: 0 0 32px 0; box-shadow: 0 2px 6px 0 rgba(255,255,255,.4);}
.content_bx a{ text-decoration: none;}
.mymodal_body{padding: 0}
.my_model_ctnt{border:5px solid #02416c;}
.close2{position: absolute;right: 9px;top: 4px;z-index: 11;opacity: 1;color: #fff;}
.mymodel_here{border-bottom: 0;padding: 0;}

.pnd_ddl{ background:#003b67; padding:10px 0; text-align:center;}
.pnd_ddl h4{ font-size:18px; color:#fff; margin:0px; text-transform: uppercase; font-weight:600;}
.nn_dst { text-align: center;}
.nn_dst h3 { font-size: 23px; text-transform: uppercase; line-height: 30px; color: #003b67; margin: 20px 0 22px 0; font-weight: 600; 
             letter-spacing: -0.5px;}
.nn_dst h4 { font-size: 20px; letter-spacing: 0px; text-transform: uppercase; color: #464343; margin: 0 0 30px 0; font-weight: 600;}
.nn_dst h5 { font-size: 22px; letter-spacing: 0px; text-transform: uppercase; color: #333; margin: 0 0 20px 0; font-weight: 600;}
.lakdi_pn { height: 185px; overflow: hidden; width: 185px; margin: 25px auto 25px auto; text-align: center; border-radius: 50%;
         background: #fff; box-shadow: 0 2px 6px 0 rgba(0,0,0,.4);}
.lakdi_pn img { width: 100%; height: 185px;}

.exbt_cl{ text-align:center; margin: 15px 0 0 0;}
.exbt_cl h6 { font-size: 19px; color: #003b67; margin: 20px 0 32px 0; text-transform: uppercase;  position: relative; font-weight: 600;}
.exbt_cl h4 { font-size: 24px; color: #fff; margin: 0px 0 15px 0; padding: 15px 25px 15px 25px; border: dashed 1px #fff; display: inline-block;
    border-radius: 12px; background: #003b67;}

.fttr_ttl{ background:#4f4f79; padding:5px 10px; position: relative;}	
.fttr_ttl p { font-size: 13px; color: #fff; margin: 0px; text-transform: uppercase; text-align: right;}
.fttr_ttl a { font-size: 26px; color: #fff; margin: 0px; text-decoration: none; display: block; text-align: right; line-height: 40px;}
.fttr_ttl img { position: absolute; bottom: 0; width: 75px;}


/** RESONSIVE CSS START **/

@media (min-width:320px) and (max-width:479px) {
#boxes .window{ display:block; width: 100%; left: 0 !important; top: 20px !important;}	
#boxes{ display:block;}
}

@media (min-width:360px) and (max-width:639px){
#boxes .window{ display:block; width: 100%; left: 0 !important; top: 20px !important;}	
#boxes{ display:block;}
}
   
</style>
<div id="boxes" class="col-sm-6 col-sm-offset-3">
   <div class="home-page-popup">
      <div style="display: none;" id="dialog" class="window">
       <a href="#" id="close_id" onClick="close_dilog(this.id)" class="close">
		 <img width="30px" height="20px" src="images/close-icons.png" alt="cheap flight to Paris">  </a> 
         <div class="popup-dsgn-box">
          <div class="content_bx">
		    <a href="tel: +1-855-500-0223">
		   <div class="pnd_ddl">
		    <h4> Exclusive Flight Deals !! </h4>
		   </div>
            <div class="nn_dst">
			  <div class="lakdi_pn">
				 <img src="images/calling.png">
			</div>
			 <h3> Airlines Reservations </h3>
			  
			 <img src="images/bell-small.png" style="width: 30px;"> 
			</div>
             
			 <div class="exbt_cl">
			  <h6> Exclusive Phone Only Deals </h6>
			  <h4> <i class="fa fa-headphones"></i> +1-855-500-0223 </h4>
			 </div>
			 </a>
          </div>
		   <div class="fttr_ttl">
		    <img src="images/bt_call.png">
		    <p> Call Now Toll Free </p>
			<a href="tel: +1-855-500-0223"> <i class="fa fa-headphones"></i>  +1-855-500-0223 </a> 
		   </div>
         </div>
      </div>
      <div opacity: 0.8;
      " id="mask">
   </div>
</div>
</div> <script type="text/javascript"> function close_dilog(id) {
   document.getElementById(id).style.display="none";
   document.getElementById("mask").style.display="none";
   document.getElementById("dialog").style.display="none";
   }
   setTimeout(function() {
   document.getElementById("dialog").style.display="block";
   document.getElementById("mask").style.display="block";
   var id='#dialog';
   //Get the screen height and width
   var maskHeight=$(document).height();
   var maskWidth=$(window).width();
   //Set heigth and width to mask to fill up the whole screen
   $('#mask').css( {
       'width': maskWidth, 'height': maskHeight
   }
   );
   //transition effect		
   $('#mask').fadeIn(1000);
   $('#mask').fadeTo("slow", 0.8);
   //Get the window height and width
   var winH=$(window).height();
   var winW=$(window).width();
   //Set the popup window to center
   $(id).css('top', winH/2-$(id).height()/2);
   $(id).css('left', winW/2-$(id).width()/2);
   //transition effect
   $(id).fadeIn(2000);
   //if close button is clicked
   $('.window .close').click(function (e) {
       //Cancel the link behavior
       e.preventDefault();
       $('#mask').hide();
       $('.window').hide();
   }
   );
   //if mask is clicked
   $('#mask').click(function () {
       $(this).hide();
       $('.window').hide();
   }
   );
   }
   , 1000);
</script>	
	