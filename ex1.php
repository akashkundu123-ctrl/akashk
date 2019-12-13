<!DOCTYPE html>
<html>
	<head>
		<style>
			
		</style>
	</head>
	<body>
		<script>
	let car ={
		name:"BMW",
		model:"e_serise",
		price:2500000,
		city: function(){
			console.log(`${car.name} for kolkata
on ${car.price} for ${car.model}`);
		},
		usa:'New York+New jercy',
		country:function(){
			console.log(`${car.usa.split(' ')[0]}`);
		},
		displayInfo : function(){ 
        console.log(`${car.usa.split('+')[1]}`); 
    }
	}

	car.city();
	car.country();
		car.displayInfo();
		</script>

		
	</body>
</html>