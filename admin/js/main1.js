console.log('Hello world!');

function thisformsubmit() {
    var checkBox = document.getElementById("pay");
    var show = document.getElementById("show");
    var checkBox1 = document.getElementById("pay1");
    var show1 = document.getElementById("show1");
    var checkBox2 = document.getElementById("pay1");
    var show2 = document.getElementById("show2");
    
    if(checkBox == false && checkBox1 == false && checkBox2 == false)
    {
        show.style.display = "none";
        show1.style.display = "block";
        show2.style.display = "block";
    }
    else
    {
        if (checkBox.checked == true)
        {
            show.style.display = "none";
        }
        else if(checkBox1.checked == true)
        {    
            show.style.display = "none";
        }
        else if(checkBox2.checked == true)
        {    
            show.style.display = "none";
        }
    
    }
    
    
}