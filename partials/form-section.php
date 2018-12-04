<style type="text/css">
  .slidecontainer {
    width: 100%;
}
  .slidecontainer p{
    color: #fff;
    font-weight: bold;
        margin-bottom: 15px;
        margin-top:10px;
        font-size: 1.3rem;
}

.slider {
    -webkit-appearance: none;
    width: 100%;
    height: 10px;
    background: #d3d3d3;
    outline: none;
    opacity: 1;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider:hover {
    opacity: 1;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    background: #00ab4d;
    cursor: pointer;
    border-radius: 50px;
}

.slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    border-radius: 50px;
    background: #00ab4d;
    cursor: pointer;
}
.success{background:#CFFFF5;}
.error{background-color: #e30000}
.errorTextBox {
    border: 1px solid #cc0000 !important;
}
</style>

<form action="<?php echo $path; ?>paydayloan" method="get" name="ShortForm" class="landing-wide-form landing-form-overlay dark nobottommargin clearfix">
            <div class="heading-block nobottommargin nobottomborder text-center">
              <h2>Get Started</h2>
            </div>
            <div class="col_full">
                <div class="slidecontainer">
                  <input type="range" min="100" max="1000" value="500" name="RequestedAmount" step="100" class="slider" id="myRange">
                  <p>Amount : $<span id="demo"></span></p>
                </div>
            </div>
            
            <div class="col_full">
              <input  class="form-control pb_height-50 reverse" type="text" placeholder="First name" name="FirstName" id="First-Name" value="FirstName" onfocus="if(this.value == 'FirstName') this.value = '';" onblur="if(this.value=='') this.value='FirstName';"/>
            </div>
            <div class="col_full">
              <input  class="form-control pb_height-50 reverse" placeholder="Email" type="text" name="Email"  value="Email" id="EmailID" onfocus="if(this.value == 'Email') this.value = '';" onblur="if(this.value=='') this.value='Email';"/>
            </div>
            <div class="col_full">
              <input class="form-control pb_height-50 reverse" placeholder="Zip" type="text" name="ZipCode"  value="Zip" id="Zip" onfocus="if(this.value == 'Zip') this.value = '';" onblur="if(this.value=='') this.value='Zip';"/>
            </div>
            <div class="col_full">
              <p class="terms">
                            <input type="checkbox" name="consent" id="consent" onchange="if(jQuery(this).is(':checked')){jQuery('#consent_title').removeClass('error');}">
                            <span id="consent_title" style="color: #fff">
                             By submitting your information, you acknowledge<br> you have read, understand, and agree to the terms of <br>our <a href="<?php echo $path; ?>privacy" target="_blank">Privacy Policy</a> and <a href="<?php echo $path; ?>terms" target="_blank">Disclaimer</a>.</span>
                            </p>
            </div>
            <div class="col_full ">
              <input type="submit" value="Get Your Cash" ONCLICK="javascript:validateForm()" class="btn btn-primary btn-md btn-block pb_btn-pill  btn-shadow-blue" value="Get Your Cash">
            </div>
            <div class="sec-ico">
              <div style="float: left;">
                  <img src="<?php echo $path; ?>images/protected.png" alt="Antivirus Safe"><span><strong>ANTIVIRUS </strong>Safe</span>
              </div>
              <div style="float: right;">
                  <img src="<?php echo $path; ?>images/locked.png" alt="256 Bit Secure"><span><strong>256 bit</strong>Secure</span>
              </div>
            </div>
          </form>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

