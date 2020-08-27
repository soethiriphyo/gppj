	$(document).ready(function(){

	getData();
	// count();

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});



	$('.row').on('click','.view_detail',function(){
		var id = $(this).data('id');
		var name = $(this).data('name');
		var photo = $(this).data('photo');
		var price = $(this).data('price');
		var discount = $(this).data('discount');
		var brand = $(this).data('brand');
		var subcategory = $(this).data('subcategory');
		var description = $(this).data('description');

		$(".pimg").attr('src',"backend/"+photo);
		$(".pname").html("Item Name: "+name);
		$(".pprice").html("Item Price: "+price);
		$(".pbrand").html("Item Brand: "+brand);
		$(".psubcategory").html("Item Category: "+subcategory);
		$(".pdiscount").html("Item Discount: "+discount);
		$(".pdescription").html("Description: </br>"+description);
		$(".cart").attr({'data-id':id,'data-name':name,'data-photo':photo,'data-price':price,'data-discount':discount});


	});

	// Count
	function count(){
		var shopString = localStorage.getItem("onlineshop");
		if (shopString) {
			var shopArray = JSON.parse(shopString);
			if (shopArray!=0) {
				var count=shopArray.length;
				$("#item_count").text('['+count+']');
			}else {
				$("#item_count").text('[]');	
			}

		}else {
				$("#item_count").text('[]');
		}
	};


	// Add To Cart

	$(".buyplan").on('click',function(){
		
		var item_dur=parseInt($('#duration').val());
		var id = $(this).data('id');
		var name = $(this).data('name');
		var photo = $(this).data('photo');
		var price = $(this).data('price');
			
		var duration=1;
		if (item_dur) {
			duration+=--item_dur;
		}

		var policy = {
			id:id,
			name:name,
			price:price,			
			photo:photo,
			duration:duration
		}

		var policyString = localStorage.getItem("insurance");
		var policyArray;
		if (policyString==null) {
			policyArray=Array();
		}else {
			policyArray=JSON.parse(policyString);
		}

		
			policyArray.push(policy);

		var policyData = JSON.stringify(policyArray);
		localStorage.setItem("insurance", policyData);
		
		
	});

	// Show to Table Data
	function getData(){
		var policyString = localStorage.getItem("insurance");
		if (policyString) {
			var policyArray = JSON.parse(policyString);

			var html='';
			var no=1;
			var total=0;
			$.each(policyArray,function(i,v){
				console.log(v);
				var name = v.name;
				var photo=v.photo;
				var unit_price = v.price;				
				var duration = v.duration;				
				var price_show = unit_price;
				var price = unit_price;
				

				html += `<tr>
						<td>${no++}</td>
						<td>${name}</td>
						<td class="w-25"><img src="${photo}" class="checkout_img"></td>
						<td>${price_show}</td>
						<td><button class="btn btn-light btn-sm min" data-item_i="${i}"><i class="fa fa-caret-down" aria-hidden="true"></i></button> ${duration} <button class="btn btn-light btn-sm max" data-item_i="${i}"><i class="fa fa-caret-up" aria-hidden="true"></i></button></td>
						<td>${price*duration}</td>
					</tr>`;	
					total += price*duration;
			});

			html+=`<tr>
				<td colspan="5">Total</td>
				<td>${total}</td>
				</tr>`

			$("tbody").html(html);
			$(".total").val(total);

		}else{
			html='';
			$("tbody").html(html);
		}

	}



	$("tbody").on('click','.max',function(){

		var item_i = $(this).data('item_i');

		var policyString = localStorage.getItem("insurance");
		if (policyString) {

			var policyArray = JSON.parse(policyString);

			$.each(policyArray,function(i,v){
				if (item_i==i) {
					v.duration++;
				}

			})

			var policyData=JSON.stringify(policyArray);
			localStorage.setItem("insurance",policyData);
			getData();
			// count();

		}

	});

	$("tbody").on('click','.min',function(){
		var item_i = $(this).data('item_i');

		var policyString = localStorage.getItem("insurance");
		if (policyString) {

			var policyArray = JSON.parse(policyString);

			$.each(policyArray,function(i,v){
				if (item_i==i) {
					v.duration--;
					if (v.duration==0) {
						policyArray.splice(item_i,1);
					}
				}

			})

			var policyData=JSON.stringify(policyArray);
			localStorage.setItem("insurance",policyData);
			getData();
			// count();

		}

	})
// For Buy Now

$('.purchase').on('click',function(){
	// alert("LoL");
	var notes=$('.notes').val();
	// var total=$('.total').val();
	// alert(notes);
	var policyString=localStorage.getItem("insurance");

	if (policyString) {
		// var policyArray=JSON.parse(policyString);

		$.post('/policies',{policy_arr:policyString,notes:notes},function(response){
			// console.log(response); //AJAX
			if (response) {
				alert(response);
				localStorage.clear();
				getData();
				location.href="/";
			}
		});
	}
})

})

