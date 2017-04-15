


    
    $(document).ready(function()
{		
	// function to get all records from table
	function getAll(){
		
		$.ajax
		({
			url: 'getcart.php',
			data: {},
			type:'POST',
			cache: false,
			success: function(r)
			{
			   
				$("#cart_list").html(r);
			}
		});			
	}
	
	getAll();
	hideshow();
	
	// function to get all records from table
	
	function hideshow()
	{
		var redirect='<?php echo $_SESSION['redirect']; ?>';
		     
		                   
		if(redirect=='true')
		{
			var first=document.getElementById('cart_list');
			var second=document.getElementById('address');
			var third=document.getElementById('payment');

			first.style.display="none";
			second.style.display="block";
			first.style.display="none";
		}
		if(redirect=='payment')	
		{
			var first=document.getElementById('cart_list');
			var second=document.getElementById('address');
			var third=document.getElementById('payment');

			first.style.display="none";
			second.style.display="none";
			third.style.display="block";
		}

	}
   


	// code to get all records from table via select box
	$("#otherDelivery").change(function()
	{				
		if($(this).prop("checked") == true){
                $('#defaultDelivery').val("");
                $("#defaultDelivery").attr("readonly", false);
            }
            else if($(this).prop("checked") == false){
                
                var txt='<?php echo $defaultDelivery; ?>';

                $('#defaultDelivery').val(txt); 
                $("#defaultDelivery").attr("readonly", true);
            }
	})

	$("input[type=radio][name=optradio]").change(function()
	{	

	   var id=this.value;

	   if(id==0)
	   {

	   	    var offer=document.getElementById('offer');

			offer.style.display="block";

	   }	
	   else
	   {

	   	     var offer=document.getElementById('offer');

			 offer.style.display="none";

			  

			
              
             $.ajax({
                          url: 'offerData.php',
                          type: 'POST',
                          dataType: 'json',
                          data: {
                          'id': id,
                          'sub': 'offers'
                          },
                         success:function(result)//we got the response
                         {
                             
                             if(result=="Max usage limit exceeded for this coupon | Try Another !")
                             {
                             	alert(result);
                             }
                             else if(result=="Invalid coupon | Order total is less than Min Balance !")
                             {
                             	alert(result);
                             }
                             else
                             {

                             	
                             	var offercode=result[5];
                             	var discount=parseInt(result[6]);
                             	var temp=<?php echo $_SESSION['ordertotal']; ?>;
                             	var balance=parseInt(temp);
                             	var finaltotal=parseInt(balance-((balance*discount)/100));
                             	//alert(discount+" "+finaltotal);
                                if(discount>0)
                             	   var discount1="Flat "+discount+"% OFF*";
                                 else
                                 	discount1="No Flat discount";

                                 var offerdetails=result[1]+"*"+result[2]+"-"+discount1;
                             	document.getElementById('appliedoffer').innerHTML=offercode;
                             	document.getElementById('offerdetails').innerHTML=offerdetails;
                             	document.getElementById('ordertotal').innerHTML=finaltotal;
                             	changefinal(finaltotal,offercode,offerdetails);
                             	alert("Offer Applied !");



                             	
                             }
                              
                              
                                                                                  
                         },
                         error:function(exception){alert('Exception:'+exception.responseText);}


                      })  
             


	   }

		
	})
	// code to get all records from table via select box
});

function changefinal(finaltotal,offercode,offerdetails)
{
     $.ajax({
                          url: 'changequant.php',
                          type: 'POST',
                          dataType: 'json',
                          data: {
                          'finaltotal': finaltotal,
                          'offerdetails':offerdetails,
                          'offercode':offercode,
                          'sub': 'finaltotal'
                          },
                         success:function(result)//we got the response
                         {
  	
                             
                                                                                                                                             
                         }
                         

                      })
}


	
    function search1(key)
    {
        
    	  window.location="search.php?by=landmark&key="+key;
    }

 function search(key)
    {
        
    	  window.location="search.php?by=any&key="+key;
    }

    function pricecal(price,itemid,restid)
    {
    	

    	var quant=document.getElementById("qty"+itemid).innerHTML;

     if(quant<=0)
     {
     	alert('Order Quantity Must Be Minimum One !');
     	document.getElementById("qty"+itemid).innerHTML="1";
     }
     else if (quant>10) 
     {
     	alert('Maximum Order Quantity Exceeded !');
     	document.getElementById("qty"+itemid).innerHTML="10";
     }     
     else
     {        
    	var total=quant*price;
    	var oldprice=parseInt(document.getElementById('totalprice'+itemid).innerHTML);
    	
    	document.getElementById('totalprice'+itemid).innerHTML=total;
    	var newprice=parseInt(document.getElementById('totalprice'+itemid).innerHTML);
    	
        var totalproductold=parseInt(document.getElementById("total"+restid).innerHTML);
        var totalproductnew=(totalproductold-oldprice)+newprice;
      
        document.getElementById("total"+restid).innerHTML=totalproductnew;
        var totalrestaurantold=parseInt(document.getElementById("total_restaurant"+restid).innerHTML);
       
        var totalrestaurantnew=(totalrestaurantold-totalproductold)+totalproductnew;
        document.getElementById("total_restaurant"+restid).innerHTML=totalrestaurantnew;


        var totalorderold=parseInt(document.getElementById("total_order").innerHTML);
       
        var totalordernew=(totalorderold-totalrestaurantold)+totalrestaurantnew;
        document.getElementById("total_order").innerHTML=totalordernew;
        //alert(totalordernew);
        $.ajax({
                          url: 'changequant.php',
                          type: 'POST',
                         
                          data: {
                          'itemid': itemid,
                          'quant': quant,
                          'ordertotal':totalordernew,
                          'sub': 'quant'
                          },
                         success:function(result)//we got the response
                         {
                         	
                         },
                         error:function(exception){alert(JSON.stringify(exception));}


                      })  



     }

    }

    function increase(price,itemid,restid)
    {
    	//alert("Called +");
    	var quant=parseInt(document.getElementById("qty"+itemid).innerHTML);
    	
    	document.getElementById("qty"+itemid).innerHTML=quant+1;
    	pricecal(price,itemid,restid);

    }
    function decrease(price,itemid,restid)
    {
    	var quant=document.getElementById("qty"+itemid).innerHTML;
    	document.getElementById("qty"+itemid).innerHTML=quant-1;
    	pricecal(price,itemid,restid);

    }

    function removeitem(itemid)
    {
    	if(confirm('Remove this item from cart ?'))
    	{
    		$.ajax({
                          url: 'removeitem.php',
                          type: 'POST',
                         
                          data: {
                          'itemid': itemid,                          
                          'sub': 'remove'
                          },
                         success:function(result)//we got the response
                         {
                         	var result1=$.trim(result);
                         	alert(result1);

                            if(result1=='Item removed from Cart !')
                         	    refreshcart();


                         },
                         error:function(exception){alert(JSON.stringify(exception));}


                      })
    	}
    }


   function refreshcart()
   {

  
      $.ajax
		({
			url: 'getcart.php',
			data: {},
			type:'POST',
			cache: false,
			success: function(r)
			{
				
				$("#cart_list").html(r);
			}
		});

   }


   function checklogin()
   {
   	             $.ajax({
                          url: 'check.php',
                          type: 'POST',
                         
                          data: {
                                                    
                          'sub': 'checklogin'
                          },
                         success:function(result)//we got the response
                         {
                         	var result1=$.trim(result);
                         	//alert(result1);

                            if(result1=='false')
                            {

                         	   alert("You Need to login First | Login to Continue !");
                         	   window.location="login.php";
                            }
                            else
                            {

                            	proceedaddress();
                            }


                         },
                         error:function(exception){alert(JSON.stringify(exception));}


                      })
   }

   function proceedaddress()
   {

      $.ajax({
			                          url: 'check.php',
			                          type: 'POST',
			                         
			                          data: {
			                                                    
			                          'sub': 'proceedaddress'
			                          },
			                         success:function(result)//we got the response
			                         {
			                         	var result1=$.trim(result);
			                            if(result1=='true')
			                            {
			                         	   
			                         	   window.location="cart.php";
			                            }
			                         },
			                         error:function(exception){alert(JSON.stringify(exception));}
			                      })

   }

   function takemeback()
   {
   	   $.ajax({
                          url: 'check.php',
                          type: 'POST',
                         
                          data: {
                                                    
                          'sub': 'takemeback'
                          },
                         success:function(result)//we got the response
                         {
                         	var result1=$.trim(result);
                            if(result1=='true')
                            {
                         	   
                         	   window.location="cart.php";
                            }
                         },
                         error:function(exception){alert(JSON.stringify(exception));}


                      })
   }

   function proceedme()
   {
   	   
   	   $.ajax({
                          url: 'check.php',
                          type: 'POST',
                         
                          data: {
                                                    
                          'sub': 'confirmpayment'
                          },
                         success:function(result)//we got the response
                         {
                         	var result1=$.trim(result);
                         	//alert(result1);

                            if(result1=='payment')
                            {
                                   window.location="cart.php";
                         	    
                            }
                            


                         },
                         error:function(exception){alert(JSON.stringify(exception));}


                      })

   }

   function proceedmepayment()
   {
   	   
   	   alert('order Placed');

   }

   function takemebackpayment()
   {
   	   $.ajax({
                          url: 'check.php',
                          type: 'POST',
                         
                          data: {
                                                    
                          'sub': 'takemebackpayment'
                          },
                         success:function(result)//we got the response
                         {
                         	var result1=$.trim(result);
                            if(result1=='true')
                            {
                         	   
                         	   window.location="cart.php";
                            }
                         },
                         error:function(exception){alert(JSON.stringify(exception));}


                      })
   }





