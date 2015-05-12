<!DOCTYPE html>
<html lang="en">
<header>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Compare all banking tranction</title>

    <!--css for main page-->
    <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet"  />
    <!--css for all browser page support-->
    <link href="<?php echo base_url() ?>css/normalize.css" rel="stylesheet"  />
    <!--css for bootstrp-->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url() ?>css/bootstrap-theme.min.css" rel="stylesheet"/>
    <!--css for manu-->

    <link href="<?php echo base_url() ?>css/style_common.css" rel="stylesheet" type="text/css">
    <!--css for fonts-->
    <link href="<?php echo base_url() ?>fonts/stylesheet.css" rel="stylesheet"/>
    <!--css for Owl Carousel Assets slider -->
    <link href="<?php echo base_url() ?>css/bootstrapTheme.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>css/owl.theme.css" rel="stylesheet">
    
    <!--js for bootstarp-->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <!--js for slider-->
    <script src="<?php echo base_url() ?>js/jquery-1.9.1.min.js"></script> 
    <script src="<?php echo base_url() ?>js/owl.carousel.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap-tab.js"></script>
    
</header>

<body class="co-fluidntainer wrapper"> 

    <!--start code for body-->
    <div class="body_wrapper body_color">
      <div>
       	 <div class="retaire1">Education Saving Plan....</div>
         	<!--code for form-->
            <div class="retaire2">Comparison Form....</div>
            <div class="retaired_form">
            	<form action="<?php echo base_url() ?>compare/education_saving_plan" method="get">
                	<div class="retaired_form1">Minimum Installment:<input name="installment" type="number" style="width:100px; margin-left:20px">
                    	<p class="retaired_form3">**Minimum Instalment start from 300 taka</p>
                    </div>
                    
                    <div class="retaired_form1">Maturity Period:<input name="period" type="number" style="width:100px; margin-left:20px">
                    	<p class="retaired_form3">**Maturity Period start from 3 years</p>
                    </div>
                    
                    <div class="retaired_form2">
                        <input name="" type="reset" value="Reset">
                        <input name="btn_education_saving_plan" type="submit" value="Submit">
                    </div>
                </form>
            </div>
         	<div class="retaired_line"></div>
            
           <div class="retaire2">Banks List....</div>
         <!--all code for slider--> 
         	<div id="demo">
            <div class="container">
                <div class="row" id="body_slider_set">
                    <div class="span10">
                        <div id="owl-demo" class="owl-carousel">
                            <div class="item"><a href=""""><img class="lazyOwl" src="<?php echo base_url() ?>images/banks_logo/sonali.png" ></a></div>
                            <div class="item"><a href='http://www.eximbankbd.com/deposit/Hajj_Deposit_Scheme'><img class="lazyOwl" src="<?php echo base_url() ?>images/bank_logo/islamii_bank.png" ></a></div>
                            <div class="item"><a href='http://www.eximbankbd.com/deposit/Hajj_Deposit_Scheme'><img class="lazyOwl" src="<?php echo base_url() ?>images/bank_logo/arafah.png" ></a></div>
                            <div class="item"><a href='http://www.eximbankbd.com/deposit/Hajj_Deposit_Scheme'><img class="lazyOwl" src="<?php echo base_url() ?>images/bank_logo/exim.png" ></a></div>
                            <div class="item"><a href='http://www.sonalibank.com.bd/'><img class="lazyOwl" src="<?php echo base_url() ?>images/bank_logo/sonali.png" ></a></div>
                            <div class="item"><a href='http://www.trustbank.com.bd/barakat-hajj-deposit-scheme'><img class="lazyOwl" src="<?php echo base_url() ?>images/bank_logo/trust.png" ></a></div>
                            <div class="item"><a href='https://www.thecitybank.com/Manarah-Hajj-Deposit.php'><img class="lazyOwl" src="<?php echo base_url() ?>images/bank_logo/city.png" ></a></div>
                            <div class="item"><a href='http://www.bankasia-bd.com/home/islamic_hajj_savings'><img class="lazyOwl" src="<?php echo base_url() ?>images/bank_logo/asia.png" ></a></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
     	</div>        
    </div>
    <!--end code for body-->
   
    
    <!--start code for footer-->
    
</body>
