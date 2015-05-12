<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Compare all banking tranction</title>
    
   
    <!--css for all browser page support-->
    <link href="<?php echo base_url();?>css/normalize.css" rel="stylesheet"  />
    <!--css for manu-->
    <link href="<?php echo base_url();?>SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style_common.css" rel="stylesheet" type="text/css">
    <!--css for fonts-->
	<link href="<?php echo base_url();?>fonts/stylesheet.css" rel="stylesheet"/>
    <!--css for jakat calculator-->
    <link href="<?php echo base_url();?>css/style_jakat.css" rel="stylesheet"/>
     <!--css for main page-->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet"  />
        
    <!--js for bootstarp-->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo base_url();?>js/jquery-1.10.2.min.js"></script>
    <!--js for jakat calculator-->  
    <script src="<?php echo base_url();?>js/jakat.js"></script> 
    
</head>

<body class="co-fluidntainer wrapper"> 
	<!--code for header section-->
	<div class="header">
    	<div class="header_color">
    		<img src="<?php echo base_url();?>img/logo.png" width="289">
            <!--code for navbar-->
            <div class="manu">
                <!--<div class="navbar">-->
                    <div class="manu_box">
                    	<div><a href="contact.html">Contact</a></div>
                        <div><a href="about.html">About</a></div>
                        <div><a href="index.html">Home</a></div>
                    </div>
                </div>
            </div>
            <!--end cod for navbar-->
            <div class=" header_color1"></div>
    	</div>
    </div>
    <!--end code for header-->
    
    <!--start code for body-->
    <div class="body_wrapper_calculator body_color">
       
       <div class='fix main'>
	<div class='fix cal'>
	<p class="h_text">Zakat Calculator:</p>
		<form name="calculator">  
  
		<!-- Here user will enter 1st number. -->  
		<div class='fix gold'>
			<div class='a1'><p>Enter price of goald:</p></div>
			<div class='b1'><input class='num1' type="text" name="number1"></div></br>  
		</div>
			<div class='fix silver'>
				<div class='a2'><p>Enter price of silver:</p></div>
				<div class='b1'><input class='num2' type="text" name="number2"></div></br>  
			</div>

				<div class='fix crops_naturally'>
					<div class='a3'><p>Enter price of crops naturally:</p></div>
					<div class='b1'><input class='num3' type="text" name="number3"> </div></br>  
				</div>
					<div class='fix crops_water'>
						<div class='a4'><p>Enter price of crops with irrigated water:</p></div> 
						<div class='b1'><input class='num4' type="text" name="number4"> </div></br>  
					</div>
						<div class='fix cash'>
							<div class='a5'><p>Enter Cash on hand and at bank: </p></div>
							<div class='b1'><input class='num5' type="text" name="number5"> </div></br>  
						</div>
							<div class='fix loans'>
								<div class='a6'><p>Enter Loans Receivable from Friends and Relatives:</p></div> 
								<div class='b1'><input class='num6' type="text" name="number6"> </div></br>  
							</div>
								<div class='fix profit'>
									<div class='a7'><p>Enter Shares, both value and profit: </p></div>
									<div class='b1'><input class='num7' type="text" name="number7"> </div></br>  
								</div>
									<div class='fix stock'>
										<div class='a8'><p>Enter Value of Saleable Stock: </p></div>
										<div class='b1'><input class='num8' type="text" name="number8"></div> </br>  
									</div>
										<div class='fix due_payment'>
											<div class='a9'><p>Enter Liabilities: Debts due for immediate payment:</p></div>
											<div class='b1'><input class='num9' type="text" name="number9"> </div></br>  
										</div>
											<div class='fix land'>
												<div class='a10'><p>Enter price of land: </p></div>
												<div class='b1'><input class='num10' type="text" name="number10"></div> </br>  
											</div>
					<!-- Here respective button when clicked, calls only respective artimetic function. -->
			<div class='btn'>
				<input class='calculate'type="button" value="Calculate" onClick="javascript:zakat();">
				<input class='reset' type="reset" value="Reset" />
				</br>
			</div>
		<!-- Here result will be displayed. --> 
					<div class=total>
						<div class='taka'><p>Total Taka:</p></div>
						
						<div class='taka1'><input class='total1' type="text" name="total">
						</div>
					
					</div></br>
					<div class=jakat>
						<div class='jakat_given'>
							<p>Given jakat:</p>
						</div>
							<div class='jakat1'>
								<input class='given_jakat'type="text" name="jakat">  
							</div>											
					</div>
				</form>  
			</div>
		</div>
           
    </div>
    <!--end code for body-->
    
    <!--start code for logo-->
	<!--<div class="social_bar">
    	<div class="fb_j"><a href="https://www.facebook.com"><img src="<?php echo base_url();?>img/logo/facebook_logo1.gif"></a></div>
        <div class="tw_j"><a href="https://www.twitter.com"><img src="<?php echo base_url();?>img/logo/twitter.gif"></a></div>
        <div class="go_j"><a href="https://www.google-plus.com"><img src="<?php echo base_url();?>img/logo/gooogle.gif"></a></div>
    </div>-->
    
    <!--start code for footer-->
    <footer>
    	<div class="footer0"></div>
        <div class="footer1">
            <div class="footer_text">&copy; Copyright 2014 all right protected. Design and develop by Nahid, Amirul & Rashed.</div>
        </div>
    </footer> 
</body>
</html>
