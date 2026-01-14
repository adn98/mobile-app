<?php require_once('Include/Head.php');?> 

<body>
<div class="page-wraper">
    
<!-- Preloader -->
<div id="preloader">
		<div class="spinner"></div>
	</div>
    <!-- Preloader end-->

    <!-- Header -->
	<header class="header">
        <div class="main-bar">
            <div class="container">
                <div class="header-content h3d">
                <div class="left-content mt-2">
                        <a href="javascript:void(0);" class="back-btn">
                            <svg width="18" height="18" viewBox="0 0 10 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M9.03033 0.46967C9.2966 0.735936 9.3208 1.1526 9.10295 1.44621L9.03033 1.53033L2.561 8L9.03033 14.4697C9.2966 14.7359 9.3208 15.1526 9.10295 15.4462L9.03033 15.5303C8.76406 15.7966 8.3474 15.8208 8.05379 15.6029L7.96967 15.5303L0.96967 8.53033C0.703403 8.26406 0.679197 7.8474 0.897052 7.55379L0.96967 7.46967L7.96967 0.46967C8.26256 0.176777 8.73744 0.176777 9.03033 0.46967Z" fill="#fff"/>
							</svg>
                        </a>
                    </div>
                    <div class="mid-content">
                        <h5 class="mb-0" style="margin-top:15px; color: #fff;">Gift code</h5>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

        <!--Reward Content Start -->
        <div class="Gift-content">
        <div class="Gift-body">
        <div  style="padding-top: 20px;margin: 10px;border-bottom: 1px solid #aca2a2;">
    <div class="row" style="padding: 6px 9px;">
    <div class="col-2" style="margin-top: 8px;"> <p style="color: #5d5858;">Code</p></div>
    <div class="col-8"> <input type="text" placeholder="Please input gift code" name="" style="border: none;background: #fbfbfb;height: 35px;width: 125%;"></div>
</div>
    </div>
        <div>
            
        <input type="button" onclick="window.location.href='#' " style="border-radius: 10px;width: 85%;margin: 0 24px;color: #e7a10b;font-weight: 600;background: black;" value="Get gift"  />
              <div style="border-radius: 8px;padding: 9px;background-color: rgb(253, 246, 236);margin: 20px;">
        <i class="fa fa-info-circle" aria-hidden="true" style="color: #ff5b5b;  margin-right: 2px;"></i>
        <span style="color:black;font-size: 12px;">The gift amount also can be withdrawal or buy device.</span>
       </div>
        </div>
        </div>
    
    <!--Reward Content End -->
    
</div>

<?php require_once('Include/Footer.php');?>