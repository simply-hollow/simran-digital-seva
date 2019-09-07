<?php include("includes/header.php")?>
<?php include("includes/nav.php")?>
   
    
    <div class="download col-md-12">
        <input id="pid" type="hidden" value="c">
        <h2>Download forms</h2>
        <table class="table">
            <tr>
                <td class="col-md-6">Form</td>
                <td class="col-md-6">Download link</td>
            </tr>
            <tr>
                <td class="col-md-6">Pan Register</td>
                <td class="col-md-6"><a href="https://www.tin-nsdl.com/downloads/pan/download/Form49A-%20July%201,%202017.pdf" class="btn btn-success" download>Download</a></td>
            </tr>
            <tr>
                <td class="col-md-6">Pan Updation</td>
                <td class="col-md-6"><a href="https://www.tin-nsdl.com/downloads/pan/download/PAN-CR-Form_NSDL%20e-Gov_01.06.16.pdf" class="btn btn-success" download>Download</a></td>
            </tr>
        </table>
    </div>
<script> 
    var a = document.getElementById("pid").value ;
    document.getElementById(a).setAttribute("class","active") ;
</script>
    

<?php include("includes/footer.php")?>