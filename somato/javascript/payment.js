var amount=document.getElementById('amount').innerHTML;
var payable_amount=parseInt(amount)*100;

   var options = {
                        "key": "rzp_test_ujm4ymwD1sJnrz", // Enter the Key ID generated from the Dashboard
                        "amount": payable_amount , // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                        "currency": "INR",
                        "name": "Acme Corp",
                        "description": "Test Transaction",
                        "image": "https://example.com/your_logo",
                        "handler": function (response){
                            
                            var payment_id=response.razorpay_payment_id;
                            localStorage.setItem("payment_id",payment_id);
                            alert("hiii");
                            $.ajax({
                                url: 'payment_id.php',
                                type: 'post',
                                data: {payment_id:payment_id},
                                success: function(data){
                                    alert(data);
                                }
                        
                        
                        }); 

                            // window.location.href="thank_you.php";                                      
                        }
                    };

var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
    
}
    