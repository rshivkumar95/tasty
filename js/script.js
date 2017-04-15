// autocomplet : this function will be executed every time we change the text
function autocomplet() {

	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#search').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh.php',
			type: 'POST',
			data: {
				keyword:keyword,
				key:'any'
			},
			success:function(data){
				$('#search_list').show();
				$('#search_list').html(data);
			}
		});
	} else {
		$('#search_list').hide();
	}
}

function autocomplet1() {

	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#search1').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh.php',
			type: 'POST',
			data: {
				keyword:keyword,
				key:'landmark'
			},
			success:function(data){
				$('#search_list1').show();
				$('#search_list1').html(data);
			}
		});
	} else {
		$('#search_list1').hide();
	}
}

// set_item : this function will be executed when we select an item
function set_item(item) {
	// change input value
	$('#search').val(item);
	// hide proposition list
	$('#search_list').hide();
}

// set_item : this function will be executed when we select an item
function set_item1(item) {
	// change input value
	$('#search1').val(item);
	// hide proposition list
	$('#search_list1').hide();
}


	
    function search1(key1)
    {
        
    	  window.location="search.php?by=landmark&key="+encodeURIComponent(key1);

    	  /*$http({
			    method: 'POST',
			    url: 'search.php',
			    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			    transformRequest: function(obj) {
			        var str = [];
			        for(var p in obj)
			        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
			        return str.join("&");
			    },
			    data: { by:'landmark',key:key1 }
			}).success(function () {});*/
    }

 function search(key)
    {
        
    	  window.location.href="search.php?by=any&key="+encodeURIComponent(key);
    }


