<?php include("includes/header.php")?>
<?php include("includes/nav.php")?>
   
      <div>
          <h2>Ask Any Enquiry</h2>          
      </div>
        <div class="row">
            <div class="col-lg-6 col-md-offset-3"></div>
            
        </div>
        <div class="row">
            <input id="pid" type="hidden" value="e">
            <div class="col-lg-6 col-md-offset-3">
                <div class="panel panel-enquiry">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="enquiry-form" method="post" role="form" style="display: block" action="#">
                                    <div class="form-group">
                                        <input type="text" name="NAME" id="Name" tabindex="1" class="form-control" placeholder="Name" required>
                                    </div>
                                     <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="2" class="form-control" placeholder="email" required>
                                    </div>
                                     <div class="form-group">
                                        <input type="number" name="Mobile Number" id="Mobile Number" tabindex="3" class="form-control" placeholder="Mobile Number" required>
                                    </div>
                                     <div class="form-group">
                                        <input type="text" name="Subject" id="Subject" tabindex="4" class="form-control" placeholder="Subject" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="cmessage" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="enquiry-submit" id="enquiry-submit" tabindex="1" class="form-control btn btn-enquiry" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script> 
    var a = document.getElementById("pid").value ;
    document.getElementById(a).setAttribute("class","active") ;    
</script>


<?php include("includes/header.php")?>