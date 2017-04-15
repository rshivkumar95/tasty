$(document).ready(function() {
$("#submit").click(function() {
var Item_Name = $("#Item_Name").val();
var Item_Details = $("#Item_Details").val();
var Item_Price = $("#Item_Price").val();
var Item_Image = $("#Item_Image").val();
var Item_Category = $("#Item_Category").val();
var Discount = $("#Discount").val();

if (Item_Name == '' || Item_Details == '' || Item_Price == '' || Item_Image == '' || Item_Category == '' || Discount == '') {
alert("Insertion Failed Some Fields are Blank....!!");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("additem.php", {
Item_Name1: Item_Name,
Item_Details1: Item_Details,
Item_Price1: Item_Price,
Item_Image1: Item_Image,
Item_Category1: Item_Category,
Discount1: Discount
}, function(data) {
alert(data);
$('#additem')[0].reset(); // To reset form fields
});
}
});
});