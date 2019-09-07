<?php
  include("includes/header.php");
  include("includes/nav.php");
  //push to deepak 
  ?>

<div class="services col-md-12">
    <h2>Services</h2>
</div>
<div class="col-sm-6 col-md-3">

    <?php
    if(isset($_SESSION['NAME']))
    {
        echo '<a href="panhome.php"><div class="thumbnail"><img src="img/icons/pan1.png" alt="Pan Services" height="200" width="150"><div class="caption"><h3>Pan Services</h3></div></div></a>';
    }
    else
    {
        echo '<a onclick="on()"><div class="thumbnail"><img src="img/icons/pan1.png" alt="Pan Services" height="200" width="150"><div class="caption"><h3>Pan Services</h3></div></div></a>';
    }
    ?>


</div>
<div class="col-sm-6 col-md-3">
    <input id="pid" type="hidden" value="a">
    <a href="tmanual.php?tmid=3">
        <div class="thumbnail">
            <img src="img/icons/gst.png" alt="GST">
            <div class="caption">
                <a href="https://www.gst.gov.in/" target="_blank"><h3>GST</h3></a>
            </div>
        </div>
    </a>
</div>
<div class="col-sm-6 col-md-3">
    <a href="tmanual.php?tmid=2">
        <div class="thumbnail">
            <img src="img/icons/aadhar.png" alt="Aadhaar Services">
            <div class="caption">
                <a href="https://uidai.gov.in/" target="_blank"><h3>Aadhaar Services</h3></a>
            </div>
        </div>
    </a>
</div>
<div class="col-sm-6 col-md-3">
    <a href="tmanual.php?tmid=4">
        <div class="thumbnail">
            <img src="img/icons/dsc.png" alt="Digital Signature">
            <div class="caption">
                <a href="https://www.dscsignature.com/" target="_blank"><h3>Digital Signature</h3></a>
            </div>
        </div>
    </a>
</div>
<div class="col-sm-6 col-md-3">
    <a href="tmanual.php?tmid=5">
        <div class="thumbnail">
            <img src="img/icons/pyoj.png" alt="Pension Yojana">
            <div class="caption">
                <a href="http://sspy-up.gov.in/" target="_blank"><h3>Pension Yojana</h3></a>
            </div>
        </div>
    </a>
</div>
<div class="col-sm-6 col-md-3">
    <a href="tmanual.php?tmid=6">
        <div class="thumbnail">
            <img src="img/icons/money-transfer.png" alt="Money Transfer">
            <div class="caption">
                <a href="https://www.bhimupi.org.in/" target="_blank"><h3>Money Transfer</h3></a>
            </div>
        </div>
    </a>
</div>
<div class="col-sm-6 col-md-3">
    <a href="tmanual.php?tmid=7">
        <div class="thumbnail">
            <img src="img/icons/irctcl.png" alt="IRCTC">
            <div class="caption">
                <a href="https://www.irctc.co.in" target="_blank"><h3>IRCTC</h3></a>
            </div>
        </div>
    </a>
</div>
<div class="col-sm-6 col-md-3">
    <a href="tmanual.php?tmid=8">
        <div class="thumbnail">
            <img src="img/icons/passportp.png" alt="Passport">
            <div class="caption">
                <a href="https://portal2.passportindia.gov.in" target="_blank"><h3>Passport</h3></a>
            </div>
        </div>
    </a>
</div>
<div class="col-sm-6 col-md-3">
    <a href="tmanual.php?tmid=9">
        <div class="thumbnail">
            <img src="img/icons/elctricity.png" alt="Electricity Bill">
            <div class="caption">
                <a href="https://www.uppclonline.com" target="_blank"><h3>Electricity Bill</h3></a>
            </div>
        </div>
    </a>
</div>
<div class="col-sm-6 col-md-3">
    <a href="tmanual.php?tmid=8">
        <div class="thumbnail">
            <img src="img/icons/bank.png" alt="Banking">
            <div class="caption">
                <a href="bank.php" target="_blank"><h3>Banking</h3></a>
            </div>
        </div>
    </a>
</div>
<div class="col-sm-6 col-md-3">
    <a href="tmanual.php?tmid=11">
        <div class="thumbnail">
            <img src="img/icons/itr.png" alt="ITR">
            <div class="caption">
                <a href="https://www.incometaxindiaefiling.gov.in" target="_blank"><h3>ITR</h3></a>
            </div>
        </div>
    </a>
</div>
<div class="col-sm-6 col-md-3">
    <a href="tmanual.php?tmid=13">
        <div class="thumbnail">
            <img src="img/icons/carinsurance.jpg" alt="Vehicle Insurance" height="200" width="150">
            <div class="caption">
                <a href="vehicle.php" target="_blank"><h3>Vehicle Insurance</h3></a>
            </div>
        </div>
    </a>
</div>
        <div class="container-fluid">
       <div class="row">
                 <div class="col-sm-4">
                   <div class="container">
         <div class="row">
           <div class="col-lg-4">
            <center>
        <div class="container">
         <div class="row">
             <div class="col-md-6 col-md-offset-4">
                 <h2>News & Update</h2><br><br>
                 <form>
                     <div class="input-group">
                         <input type="text" class="form-control" placeholder="Search">
                         <div class="input-group-btn">
                             <button class="btn btn-default" type="submit">
                                 <i class="glyphicon glyphicon-search"></i>
                             </button>
                         </div>
                     </div>
                 </form>
                 <marquee direction="down" style="height: 350px; color: #7688f1;font-size: 15px;">सभी केंद्र संचालक कृपया ध्यान दें सिमरन डिजिटल सेवाा पोर्टल बिल्कुल निशुल्क है</marquee>
             </div>
            </div>

        </div>
               </center>
             </div>
            </div>
           </div>
           </div>
            </div>
        </div>

        <!-- Modal -->
<div id="notificationModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <p style="font-size:40px; color:red;">Simran Digital Seva की तरफ से आप सभी को नववर्ष की हार्दिक शुभकामनाएं|</p>
      </div>
    </div>

  </div>
</div>

<script>

    $(document).ready(function(){

      $("#notificationModal").modal({backdrop: true});

    });

    var a = document.getElementById("pid").value ;
    document.getElementById(a).setAttribute("class","active") ;

</script>

<?php include("includes/footer.php")?>
