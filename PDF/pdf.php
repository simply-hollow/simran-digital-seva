<?php
if(!empty($_POST['submit']))
{
    require '../FPDF/fpdf.php';
 $f_name = $_POST['cfName'];
 $l_name = $_POST['clName'];
 $gender = $_POST['cGender'];
 $dob = $_POST['cDOB'];
 $mobile = $_POST['cMnumber'];
 $email = $_POST['cEmail'];
 $pimg = $_POST['img'];
 $sign = $_POST['sign'];
class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont("Arial","B",10);
        $this->Image('image/2.jpg',10,10,30,30);
        $this->cell(0,5,"Form No.49A",0,1,'C');
        $this->cell(0,5,"Application for Allotment of Permanent Account Number",0,1,'C');
        $this->cell(0,5,"[In the case of Indian citizen/Indian Companies/Entitiesincorporated in India/",0,1,'C');
        $this->cell(0,5,"Unincorporated entities formed in India]",0,1,'C');
        $this->cell(0,5,"See Rule 114",0,1,'C');
        $this->cell(0,5,"",0,1,'C');
        $this->Image('image/2.jpg',178,10,30,30);


    }
}

 $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial","B",10);
    $pdf->Image('image/2.jpg',10,10,30,30);
    $pdf->cell(0,5,"Form No.49A",0,1,'C');
    $pdf->cell(0,5,"Application for Allotment of Permanent Account Number",0,1,'C');
    $pdf->cell(0,5,"[In the case of Indian citizen/Indian Companies/Entitiesincorporated in India/",0,1,'C');
    $pdf->cell(0,5,"Unincorporated entities formed in India]",0,1,'C');
    $pdf->cell(0,5,"See Rule 114",0,1,'C');
    $pdf->cell(0,5,"",0,1,'C');
    $pdf->Image('image/2.jpg',178,10,30,30);

    $pdf->SetFont("Arial","B",16);
    $pdf->cell(50,10,"Assesing Officer",0,1,'C');
    $pdf->SetFont("Arial","B",12);
    $pdf->cell(45,5,"Area Code",1,0);
    $pdf->cell(30,5,"AO type",1,0);
    $pdf->cell(45,5,"Range Code",1,0);
    $pdf->cell(30,5,"AO No.",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(15,5,"",1,0);
    $pdf->cell(15,5,"",1,0);
    $pdf->cell(15,5,"",1,0);
    $pdf->cell(15,5,"",1,0);
    $pdf->cell(15,5,"",1,0);
    $pdf->cell(15,5,"",1,0);
    $pdf->cell(15,5,"",1,0);
    $pdf->cell(15,5,"",1,0);
    $pdf->cell(15,5,"",1,0);
    $pdf->cell(15,5,"",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);
    $pdf->SetFont("Arial","B",10);
    $pdf->cell(0,5,"sir,",0,1);
    $pdf->cell(0,1,"",0,1);
    $pdf->cell(0,5,"I/WE hereby request that a permanent account number be allotted to me/us.",0,1);
    $pdf->cell(0,1,"",0,1);
    $pdf->cell(0,5,"I/WE give below necessary particulars:",0,1);
    $pdf->cell(0,5,"",0,1);


    $pdf->SetFont("Arial","B",13);
    $pdf->cell(0,5,"1. Full Name (Full expanded name to be mentioned as appearing in proof of identity)",0,1);
    $pdf->SetFont("Arial","B",10);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(50,5,"Please Select As applicable",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"Shri",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"Smt",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(15,5,"Kumari",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(15,5,"M/S",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);



    $pdf->cell(40,5,"Last Name/SurName",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,3,"",0,1);
    $pdf->cell(0,3,"",0,1);



    $pdf->cell(40,5,"First Name",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,3,"",0,1);
    $pdf->cell(0,3,"",0,1);


    $pdf->cell(40,5,"Middle Name",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);


    $pdf->SetFont("Arial","B",13);
    $pdf->cell(0,5,"2. Abbreviations of the above name,as you would like it,to be printed on PAN card",0,1);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);


    $pdf->cell(95,5,"3. Gender(For Individual applicants only)",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(12,5,"Male",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(12,5,"Female",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);



    $pdf->SetFont("Arial","B",13);
    $pdf->cell(0,5,"4. Date of Birth/Incorporation/Agreement/Partnership or Trust Deed/Formation of body",0,1);
    $pdf->cell(0,1,"",0,1);
    $pdf->cell(0,5,"of individuals or association of persons");
    $pdf->cell(0,5,"",0,1);
    $pdf->SetFont("Arial","B",11);
    $pdf->cell(20,5,"Day",0,0,'C');
    $pdf->cell(20,5,"Month",0,0,'C');
    $pdf->cell(40,5,"Year",0,0,'C');
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(2,5,"",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(2,5,"",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);


    $pdf->SetFont("Arial","B",13);
    $pdf->cell(0,5,"5. Details Of Parents(applicable only for individual applicants)",0,1);
    $pdf->cell(0,2,"",0,1);
    $pdf->SetFont("Arial","B",11);
    $pdf->cell(0,5,"Father's Name(Mandatory Even married women should fill in father's name only)",0,1);



    $pdf->cell(40,5,"Last Name/SurName",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,3,"",0,1);
    $pdf->cell(0,3,"",0,1);



    $pdf->cell(40,5,"First Name",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,3,"",0,1);
    $pdf->cell(0,3,"",0,1);


    $pdf->cell(40,5,"Middle Name",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);



    $pdf->cell(0,2,"",0,1);
    $pdf->SetFont("Arial","B",11);
    $pdf->cell(0,5,"Mother's Name(optional)",0,1);
    $pdf->cell(40,5,"Last Name/SurName",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,3,"",0,1);
    $pdf->cell(0,3,"",0,1);



    $pdf->cell(40,5,"First Name",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,3,"",0,1);
    $pdf->cell(0,3,"",0,1);


    $pdf->cell(40,5,"Middle Name",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);



    $pdf->SetFont("Arial","B",11);
    $pdf->cell(0,5,"Select the name of either father or Mother which you may like to be printed on PAN card(select one only)",0,1);
    $pdf->cell(0,2,"",0,1);
    $pdf->cell(0,5,"In case no option is provided then PAN card will be issued father's name");
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(30,5,"Mother's name",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(30,5,"Father's name",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);


    $pdf->SetFont("Arial","B",13);
    $pdf->cell(0,5,"6. Address",0,1);
    $pdf->cell(0,2,"",0,1);
    $pdf->cell(0,5,"Residence Adress");
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(40,5,"Flat/room/Door/Block No.",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,3,"",0,1);
    $pdf->cell(0,3,"",0,1);



    $pdf->cell(40,5,"Name Of Premises/Building/Village",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,3,"",0,1);
    $pdf->cell(0,3,"",0,1);


    $pdf->cell(40,5,"Road/Street/Lane/Post Office",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);



    $pdf->cell(40,5,"Area/Locality/Taluka/Sub-Division",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);



    $pdf->cell(40,5,"Town/City/District",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);


    $pdf->cell(40,5,"Statte/Union Territory",0,0);
    $pdf->cell(10,5,"",0,0);
    $pdf->cell(10,5,"",0,0);
    $pdf->cell(40,5,"Pincode/Zip code",0,0);
    $pdf->cell(10,5,"",0,0);
    $pdf->cell(40,5,"Country Name",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(40,5,"Uttar Pradesh",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(40,5,"India",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);




    $pdf->cell(0,5,"Office Address");
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(40,5,"Flat/room/Door/Block No.",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,3,"",0,1);
    $pdf->cell(0,3,"",0,1);



    $pdf->cell(40,5,"Name Of Premises/Building/Village",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,3,"",0,1);
    $pdf->cell(0,3,"",0,1);


    $pdf->cell(40,5,"Road/Street/Lane/Post Office",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);



    $pdf->cell(40,5,"Area/Locality/Taluka/Sub-Division",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);



    $pdf->cell(40,5,"Town/City/District",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);


    $pdf->cell(40,5,"Statte/Union Territory",0,0);
    $pdf->cell(10,5,"",0,0);
    $pdf->cell(10,5,"",0,0);
    $pdf->cell(40,5,"Pincode/Zip code",0,0);
    $pdf->cell(10,5,"",0,0);
    $pdf->cell(40,5,"Country Name",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(40,5,"Uttar Pradesh",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(40,5,"India",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);


    $pdf->cell(95,5,"8. Address for Communication",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(25,5,"Residence",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(12,5,"Office",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);


    $pdf->cell(40,5,"Telephone Number & Email Id Details",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(30,5,"Country code",0,0);
    $pdf->cell(10,5,"",0,0);
    $pdf->cell(70,5,"Area/STD Code",0,0);
    $pdf->cell(10,5,"",0,0);
    $pdf->cell(70,5,"Telephone Number",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(10,5,"+",1,0);
    $pdf->cell(10,5,"9",1,0);
    $pdf->cell(10,5,"1",1,0);
    $pdf->cell(10,5,"",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(10,5,"",0,0);
    $pdf->cell(8,5,"",1,0);
    $pdf->cell(8,5,"",1,0);
    $pdf->cell(8,5,"",1,0);
    $pdf->cell(8,5,"",1,0);
    $pdf->cell(8,5,"",1,0);
    $pdf->cell(8,5,"",1,0);
    $pdf->cell(8,5,"",1,0);
    $pdf->cell(8,5,"",1,0);
    $pdf->cell(8,5,"",1,0);
    $pdf->cell(7,5,"",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);


    $pdf->cell(40,5,"10. Status Of applicant",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(40,5,"Please slect status as applicable",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(25,5,"Individual",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(55,5,"Hindu Applicable family",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(20,5,"Company",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(40,5,"Partnership Firm",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(40,5,"Association Of Persons",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(12,5,"",0,0);
    $pdf->cell(10,5,"",1,0);
    $pdf->cell(12,5,"Hindu Applicable family",0,0);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);




    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,5,"",0,1);
    $pdf->cell(0,10,"Welcome {$f_name}",1,1,'C');

    $pdf->cell(50,10,"Last Name: ",1,0);
    $pdf->cell(65,10,$l_name,1,1);


    $pdf->cell(50,10,"Gender: ",1,0);
    $pdf->cell(65,10,$gender,1,1);

    $pdf->cell(50,10,"Date of Birth: ",1,0);
    $pdf->cell(65,10,$dob,1,1);

    $pdf->cell(50,10,"Mobile Number: ",1,0);
    $pdf->cell(65,10,$mobile,1,1);

    $pdf->cell(50,10,"E-mail: ",1,0);
    $pdf->cell(65,10,$email,1,1);
 $pdf->output();
}
?>
