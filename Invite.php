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
                        <h5 class="mb-0" style="margin-top:15px; color: #fff;">Invite</h5>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
   <!-- Page Content -->
   <div class="Invite-content">
        <div class="Invite-body-1">
			<div class="Invite-body-1-1 row">
                <div class="Invite-body-1-11 col-6">
                    <span style="color: #fff;">Invite code</span>
                    <br>
                  <span id="code" style="font-size: 12px;" >81kfmhfk</span>
                  <span id="line"></span>
                  <br>
                </div>
                
                <div class="Invite-body-1-12 col-6">
                    <div class="Invite-body-1-12-1">
                        <div class="Invite-body-1-12-1-1">
                            <button onclick="copyText()" style="color: #ffcf57;background: #ffff0000;border:none;">Copy Code</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Invite-body-1-2 row"> 
                <div class="Invite-body-1-21 col-6">
                <span style="color: #fff;">Invite code</span>
                   
                  <span style="font-size: 12px;" >https://digital-energy-mining.d4ll.com/#/pages/init/reg?code=81kfmhfk</span>
                  <span id="line"></span>
                  <br>
                </div>
                <div class="Invite-body-1-22 col-6">
                <div class="Invite-body-1-22-1">
                        <div class="Invite-body-1-22-1-1">
                        <button onclick="copylink()" style="margin-top: 4px;color: #ee552d;background: #ffff0000;border:none;">Copy Link</button>
                            
                        
                        </div>
                    </div>
                </div>
            </div>
           
		</div> 
        <div class="Invite-body-2">
			<div><h6 style="font-family: auto;font-size: 16px;font-weight: 600;">Notice</h6></div>
            <div class="text-notice">
                <div style="color:black"><p>1. Copy your exclusive invitation link or invitation code to invite your friends to join your team.</p></div>
          <div style="color:black"><p>   2. Invite your friends to join your team and you will get team commission.</p></div>
           <div style="color:black"><p> After your members join your team, you can get the daily revenue share of all device of your team members: 10%, 4%, 2%.</p> </div> 
            </div>
          
		</div>    
    </div>    
    <!-- Page Content End -->

    
</div>
<script>
        function copyText() {
      
            /* Copy text into clipboard */
            navigator.clipboard.writeText
                ("81kfmhfk");
        }
        function copylink() {
      
      /* Copy text into clipboard */
      navigator.clipboard.writeText
          (" https://digital-energy-mining.d4ll.com/#/pages/init/reg?code=81kfmhfk");
  }
    </script>

<?php require_once('Include/Footer.php');?>