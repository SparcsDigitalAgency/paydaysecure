<!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

      <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

          <div class="col_two_third">

            <div class="col_one_third">

              <div class="widget clearfix">

                <img src="http://localhost//git/paydaysecure/images/footer-widget-logo.png" alt="" class="footer-logo" style="    margin: -5px 0px 10px 0px;">

                <p>Here at USASecureLoans.com, We connect you with one of several lenders in our network who can provide you with access to the emergency funds you need, regardless of the reason. We can help you find loans of up to $1,000 without any Hassle.</p>

                <!-- <div style="background: url('<?php echo $path; ?>images/world-map.png') no-repeat center center; background-size: 100%;">
                  <address>
                    <strong>Headquarters:</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                  </address>
                  <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                  <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                  <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                </div> -->

              </div>

            </div>

            <div class="col_one_third">

              <div class="widget widget_links clearfix">

                <h4>Quick Links</h4>

                <ul>
                  <li><a href="http://codex.wordpress.org/">Marketing Practices</a></li>
                  <li><a href="http://wordpress.org/support/forum/requests-and-feedback">How It Works?</a></li>
                  <li><a href="http://wordpress.org/extend/plugins/">Blog</a></li>
                  <li><a href="http://wordpress.org/support/">Contact</a></li>
                </ul>

              </div>

            </div>

            <div class="col_one_third col_last">

              <div class="widget widget_links clearfix">
                <h4>Information Links</h4>

                <ul>
                  <li><a href="http://codex.wordpress.org/">Rates & Fees</a></li>
                  <li><a href="http://wordpress.org/support/forum/requests-and-feedback">Terms & Conditions</a></li>
                  <li><a href="http://wordpress.org/extend/plugins/">Privacy Policy</a></li>
                  <li><a href="http://wordpress.org/support/">FAQ's</a></li>
                </ul>
              </div>

            </div>

          </div>

          <div class="col_one_third col_last">
            

            <div class="widget clearfix" style="margin-bottom: -20px;">
              <h4>Follow Us</h4>
              <div class="row">

                <div class="col-lg-6 clearfix bottommargin-sm">
                  <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                  </a>
                  <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                </div>
                <div class="col-lg-6 clearfix">
                  <a href="#" class="social-icon si-dark si-colored si-twitter nobottommargin" style="margin-right: 10px;">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                  </a>
                  <a href="#"><small style="display: block; margin-top: 3px;"><strong>Follow us</strong><br>on Twitter</small></a>
                </div>

              </div>

            </div>

          </div>

        </div><!-- .footer-widgets-wrap end -->

      </div>

      <!-- Copyrights
      ============================================= -->
      <div id="copyrights">

        <div class="container clearfix">

          <div class="col_half">
            2014 © Copyright Paydaysecure.com
          </div>

        </div>

      </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

  </div><!-- #wrapper end -->

  <!-- Go To Top
  ============================================= -->
  <div id="gotoTop" class="icon-angle-up"></div>

  <!-- External JavaScripts
    <script type="text/javascript">
   function main_page_form_submit(){
    if(!jQuery('#consent').is(':checked'))
    {
        jQuery('#consent_title').addClass('error');
        return false;
    }else{
        return true;
    }
}
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-24740586-2', 'auto');
  ga('send', 'pageview');

</script>

 <script language="JavaScript"><!--
function validatecontactForm() 
{
 var okSoFar=true
 with (document.phpformmailer)
 {
  var foundAt = email.value.indexOf("@",0)
   if (name.value=="" && okSoFar)
  {
    okSoFar=false
    alert("Please enter your name.")
    name.focus()
  }
  if (foundAt < 1 && okSoFar)
  {
    okSoFar = false
    alert ("Please enter a valid email address.")
    email.focus()
  }
 
  if (thesubject.value=="" && okSoFar)
  {
    okSoFar=false
    alert("Please enter your subject.")
    thesubject.focus()
  }
  if (themessage.value=="" && okSoFar)
  {
    okSoFar=false
    alert("Please enter the details for your enquiry.")
    themessage.focus()
  }
  if (okSoFar==true)  
  {
   block_spam_bots.value=4*3;//spam bots currently can not read JavaScript, if could then they'd fail the maths!
   submit();                  // do check for updatea often at:  www.TheDemoSite.co.uk 
  } 
 }
}
// --></script>


<script language="JavaScript"><!--
function validateForm() 

{
  var okSoFar=true
 
  with (document.ShortForm){
    
  //document.getElementById("First-Name").classList.remove("errorTextBox")
  //document.getElementById("Zip").classList.remove("errorTextBox")
  document.getElementById("EmailID").classList.remove("errorTextBox")
  
  
  //var foundAt     = Email.value.indexOf("@",0)
  var emailPattern  = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
  var termscheck    = document.getElementById("consent")
  var consemtTitle  = document.getElementById("consent_title")
  
 
   if (FirstName.value=="" || FirstName.value=="FirstName")
  {
    okSoFar=false
  document.getElementById("First-Name").classList.add("errorTextBox")
  }
  
   /*
  
 if (foundAt.value=="" || foundAt < 1)
  {
    okSoFar = false
    document.getElementById("EmailID").classList.add("errorTextBox")
  }

  if (ZipCode.value=="" || ZipCode.value=="Zip" )
  {
    okSoFar=false
    document.getElementById("Zip").classList.add("errorTextBox")
  }
  */
  
    if(Email.value=='' || Email.value=='Email' || !emailPattern.test(Email.value))
      {
        okSoFar = false
      document.getElementById("EmailID").classList.add("errorTextBox")
    }
   
    if(termscheck.checked == false)
      {
        okSoFar=false
        consemtTitle.classList.add("error")
      }
    
    if (okSoFar==true)  
      {
        submit();
      } 
 }
}
// --></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
  <script src="<?php echo $path; ?>js/plugins.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.2/rangeslider.js"></script>
  <!-- Footer Scripts
  ============================================= -->
  <script src="<?php echo $path; ?>js/functions.js"></script>

  <script>
    $(function() {
      $( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
    });
  </script>

  <?php if ($contact): ?> 
   <script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() { 


        //get input field values
        var subject         = $('input[name=subject]').val(); 
        var user_name       = $('input[name=name]').val(); 
        var user_email      = $('input[name=email]').val();
        var user_message    = $('textarea[name=message]').val();
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()

       

        var proceed = true;
        if(user_name==""){ 
            $('input[name=name]').css('border-color','red'); 
            proceed = false;
        }
         if(subject==""){ 
            $('input[name=subject]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('input[name=email]').css('border-color','red'); 
            proceed = false;
        }
        if(user_message=="") {  
            $('textarea[name=message]').css('border-color','red'); 
            proceed = false;
        }

        //everything looks good! proceed...
        if(proceed) 
        {
            //data to be sent to server
            post_data = {'subject':subject,'userName':user_name, 'userEmail':user_email, 'userMessage':user_message};
            
         //Ajax loading gif
         $("#dvloader").show();
         
            //Ajax post data to server
            $.post('contact_me', post_data, function(response){ 
         
         $("#dvloader").hide(); 

                //load json data from server and output message     
            if(response.type == 'error')
            {
               output = '<div class="error">'+response.text+'</div>';
            }else{
                output = '<div class="success">'+response.text+'</div>';
               
               //reset values in all input fields
               $('#contact_form input').val(''); 
               $('#contact_form textarea').val('');
                     
                    //window.location.replace("./thank-you");
            }
            
            $("#result").hide().html(output).slideDown();

            }, 'json');

            
         
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() { 
        $("#contact_form input, #contact_form textarea").css('border-color',''); 
        $("#result").slideUp();
    });
    return false;
});
</script> 
<?php endif; ?>


</body>
</html>