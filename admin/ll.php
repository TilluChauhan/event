$(document).ready(function(){
			$("#add").click(function(){
					
						
					var image=$('#event_image')[0].files[0];					
					var name=$('#event_name') .val();
					var description=$('#description').val();
					var type=$('#type_event').val();
					var price=$('#price').val();
					
					
					console.log(image);
					console.log(name);
					console.log(description);
					console.log(type);
					console.log(price);
					

				 var data=  new FormData();
						data.append('T_image',image);
						data.append('T_name',name);
						data.append('T_description',description);
						data.append('T_type',type);
						data.append('T_price',price);
						
					console.log(data);


						$.ajax({
						url:'ajax/add_event.php',

						type:'POST',
						
						contentType:false,
						processData:false,
						data:data,

						success:function(response){
						//console.log(response);
							if(response == 1){
							window.location.href='add_event.php';
						}else{

						}	
						}
							
					});
					
			});
			
		
			
			
			$("#edit").click(function(){
				var name=$("#event_name").val();
				var description=$("#description").val();
				var type=$("#type_event").val();
				var price=$("#price").val();
				
				
				console.log(name);
				console.log(description);
				
				console.log(type);
				console.log(price);
				
				var data=new FormData();
				data.append('U_name',name);
				data.append('U_description',description);
				data.append('U_type',type);
				data.append('U_price',price);
				//console.log(data);
				$.ajax({
					url: 'ajax/update_event.php',	
					type: 'POST',
					data: data,
					contentType: false,
					processData: false,
					success: function(response){
						console.log(response);
					}
					
				})
			});
			
		});