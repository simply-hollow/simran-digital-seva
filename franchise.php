<?php include("includes/header.php")?>
<?php include("includes/nav.php")?>
    <b><hr></b>
      <div>
          <h2>Contact Franchise Forms With Register</h2>
      </div>
        <div class="row">
            <div class="col-lg-6 col-md-offset-3"></div>

        </div>
        <div class="row">
            <input id="pid" type="hidden" value="fra">
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
                                <form id="enquiry-form" method="post" action="server.php" role="form" style="display: block" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" name="cNAME" id="Name" class="form-control" placeholder="Name" required>
                                    </div>
                                     <div class="form-group">
                                        <input type="email" name="cemail" id="email" class="form-control" placeholder="email" required>
                                    </div>
                                     <div class="form-group">
                                        <input type="text" maxlength="10" name="cMobile" id="Mobile Number" class="form-control" placeholder="Mobile Number" required>
                                    </div>
                                     <div class="form-group">
                                        <input type="text" name="ccity" id="city" class="form-control" placeholder="city" required>
                                    </div>
                                    <div class="form-group">
                                        <select name="cstate" class="form-control">
                                           <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                                           <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                                           <option value="ASSAM">ASSAM</option>
                                           <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                                           <option value="GUJRAT">GUJRAT</option>
                                           <option value="BIHAR">BIHAR</option>
                                           <option value="HARYANA">HARYANA</option>
                                           <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                                           <option value="JAMMU KASHMIR">JAMMU &amp; KASHMIR</option>
                                           <option value="KARNATAKA">KARNATAKA</option>
                                           <option value="KERALA">KERALA</option>
                                           <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                                           <option value="MAHARASHTRA">MAHARASHTRA</option>
                                           <option value="MANIPUR">MANIPUR</option>
                                           <option value="MEGHALAYA">MEGHALAYA</option>
                                           <option value="MIZORAM">MIZORAM</option>
                                           <option value="NAGALAND">NAGALAND</option>
                                           <option value="ORISSA">ORISSA</option>
                                           <option value="PUNJAB">PUNJAB</option>
                                           <option value="RAJASTHAN">RAJASTHAN</option>
                                           <option value="SIKKIM">SIKKIM</option>
                                           <option value="TAMIL NADU">TAMIL NADU</option>
                                           <option value="TELANGANA">TELANGANA</option>
                                           <option value="TRIPURA">TRIPURA</option>
                                           <option value="WEST BENGAL">WEST BENGAL</option>
                                           <option value="DELHI">DELHI</option>
                                           <option value="GOA">GOA</option>
                                           <option value="PONDICHERY">PONDICHERY</option>
                                           <option value="LAKSHDWEEP">LAKSHDWEEP</option>
                                           <option value="DAMAN DIU">DAMAN &amp; DIU</option>
                                           <option value="DADRA NAGAR">DADRA &amp; NAGAR</option>
                                           <option value="CHANDIGARH">CHANDIGARH</option>
                                           <option value="ANDAMAN NICOBAR">ANDAMAN &amp; NICOBAR</option>
                                           <option value="UTTARANCHAL">UTTARANCHAL</option>
                                           <option value="JHARKHAND">JHARKHAND</option>
                                           <option value="CHATTISGARH">CHATTISGARH</option>
                                           <option value="MUMBAI">MUMBAI</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="cretailer" id="retailer shop name" class="form-control" placeholder="Retailer Shop Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="cAddress" id="Address" class="form-control" placeholder="Address" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" maxlength="7" name="cpincode" id="pin code" class="form-control" placeholder="Pin Code" required>
                                    </div>
                                    <div class="form-group">
                                        <select name="ccountry" class="form-control">
                                            <option value="India">India</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="cbuiseness" id="buiseness" class="form-control" placeholder="Buiseness Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Aadhar Card (only jpg, 300 DPI)</label>
                                          <input type="file" name="fileToUpload[]" placeholder="Upload Your Aadhar Card" class="form-control btn btn-enquiry" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Pan Card (only jpg, 300 DPI)</label>
                                        <input type="file" name="fileToUpload[]" placeholder="Upload Your Pan Card" class="form-control btn btn-enquiry" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Photograph (only jpg, 300 DPI)</label>
                                        <input type="file" name="fileToUpload[]" placeholder="Upload Your Photograph" class="form-control btn btn-enquiry" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Signature (only jpg, 300 DPI)</label>
                                        <input type="file" name="fileToUpload[]" placeholder="Upload Your Signature" class="form-control btn btn-enquiry" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="enquiry-submit" id="enquiry-submit" class="form-control btn btn-enquiry" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var a = document.getElementById("pid").value ;
                document.getElementById(a).setAttribute("class","active") ;
            </script>
        </div>

<?php include("includes/footer.php")?>
