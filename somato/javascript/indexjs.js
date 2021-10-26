$(document).ready(function(){
    
    
//    slide js
    let array=['chilli_paneer-removebg-preview.png','chawming-removebg-preview.png','burger-PNG-removebg-preview.png','briyani-removebg-preview.png'];
    let array_name=['chilli paneer','chawming','Burger','Briyani'];let array_price=['100 INR','70 INR','55 INR','210 INR'];
    let l=array.length;
    let i=0;
    function slide(){
        if(i<l)
            {
                  var v=$('#slide_img').attr('src','image/'+array[i]);
                $('#food_name_tag').html(array_name[i]);$('#food_name_price').html(array_price[i]);
                i++;
            }
        else{
            i=0;
        }
      
    }
     setInterval(slide,2000);
console.log(array);
//     slide js end
    
    
//   indian_food page js
    
//    $('#quantity1').change(function(){
//        console.log("raadhey");
//        
//        var status_id = $('anchor1').attr("href");
//           alert(status_id); 
//           return false;
//        console.log(va);
//    });
  
    
    
    
});

function getLink(x,y,z){
    var va=document.getElementById(x).value;
    var r=document.getElementById(y).getAttribute("href");
    var s=document.getElementById(z).getAttribute("href");
   var s=s.split('1234');
    s=s[0].toString();
    var r=r.split('1234');
    r=r[0].toString();
//    console.log(r1[0]);
     var newhrefs=s+'1234&quantity='+va;
    var newhrefr=r+'1234&quantity='+va;
    console.log(newhrefs);
//    console.log(newhrefr1);
   console.log(typeof(s));
    document.getElementById(y).setAttribute('href',newhrefr);
    document.getElementById(z).setAttribute('href',newhrefs);
    console.log(x,y,z);
}

