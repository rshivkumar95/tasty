<html>
    <head>
        <style>
		#customers {
		    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}

		#customers td, #customers th {
		    border: 1px solid #ddd;
		    padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
		    padding-top: 12px;
		    padding-bottom: 12px;
		    text-align: left;
		    background-color: #a4a5a4;
		    color: white;
		}
		</style>
    </head>
    <body style="background: #e0e0e0;text-align: center;padding:50px;">
       <div><img src="https://tastytadkaa.com/img/TastyTadka.gif" style="width:200px;height: 200px;"></div>
        <h3 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:30px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0">Congratulations ! Your Order Is Placed !</h3><br><br>
        
        <div style="width:80%;background: #fff;	height:500px;margin: 0 auto;border-radius: 10px;padding:20px;">
           <h3 style="font-family:HelveticaNeue-Light,arial,sans-serif;font-size:20px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0">Your Order Summary</h3>
          
          <?php
                  $totalorder=0;
					$error=0;
					foreach ($_SESSION['cartrestaurant'] as $restaurant) {


						      $query="SELECT * FROM `restaurant_info` WHERE `Restaurant_ID`='$restaurant'";

						      $row = mysql_query($query);
						      $result = mysql_fetch_assoc($row);

						      ?>
     
           <h4>Restaurant Name:$result['Restaurant_Name']; </h4>
           <table id="customers">
			  <tr>
			    <th>Image</th>
			    <th>Name</th>
			    <th>Price</th>
			    <th>Quantity</th>
			    <th>Total</th>

			  </tr>
			 <?php
			 
			 $total=0;

               foreach ($_SESSION['cartitem'] as $item => $value) {
				$newprice=0;

               //var_dump($_SESSION['cartitem']);
                $query1="SELECT * FROM `restaurant_menu` WHERE `Restaurant_Id`='$restaurant' and `Item_Id`='$item'";

	            $row1= mysql_query($query1) or die(mysql_error());

	            while($result1 = mysql_fetch_assoc($row1))
	              {

?>
			
			  <tr>
			    <td style="text-align: center;"><img src="https://tastytadkaa.com/$result1['Item_Image'];  " style="width: 80px;height: 80px;"></td>
			    <td><?php echo $result1['Item_Name'];  ?></td>
			    <td>
			    <?php
                               if($result1['Discount']>0)
                               {
                               	  $price1=($result1['Item_price']-(($result1['Item_price']*$result1['Discount'])/100));
                               	  $newprice=($result1['Item_price']-(($result1['Item_price']*$result1['Discount'])/100))*$_SESSION['cartitem'][$item];
								  echo "<del>&#8377;".$result1['Item_price']."/-</del>  &#8377;".$newprice."/-";
								  $total=$total+$newprice;

                               }
								else{
								 echo "&#8377;".$result1['Item_price']."/-";
								  $price1=$result1['Item_price'];
								  $newprice=$result1['Item_price']*$_SESSION['cartitem'][$item];

								  $total=$total+$newprice;
								 } 
								  ?></td>
			    <td><?php echo $_SESSION['cartitem'][$item]; ?></td>
			    <td><?php 
                               
								 echo "&#8377;".$newprice."/-";	 
								  ?>
								  	
								  </td>
			  </tr>
			  <?php
                    }
			  ?>
			  </table>

			  <?php

                 }
             }
  
			  ?>
        	

        </div>
        <p style="font-size: 12px;">This email was sent from a notification-only address that cannot accept incoming email. Please do not reply to this message.For any query mail us at support@tastytadkaa.com.</p>
    </body>
    </html>