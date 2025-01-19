<!DOCTYPE html>
<html>

<head>
	<style>
		#customers {
			font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#customers td,
		#customers th {
			border: 1px solid #ddd;
			padding: 8px;
		}

		#customers tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		#customers tr:hover {
			background-color: #ddd;
		}

		#customers th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #04AA6D;
			color: white;
		}

		.loader-div {
			display: none;
			position: fixed;
			margin: 0px;
			padding: 0px;
			right: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			background-color: #fff;
			z-index: 30001;
			opacity: 0.8;
		}

		.loader-img {
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			margin: auto;
		}
	</style>
</head>

<body>

	<div class="loader-div">
		<img class="loader-img" src="assets/write.gif" />
	</div>

	<h1 style='text-align: center;'>Python Auto form example</h1>
	<table id="customers">
		<thead>
			<tr>
				<th>Name</th>
				<th>Contact</th>
				<th>Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Spiderman Jariwala</td>
				<td>789654123</td>
				<td>14-02-2025</td>
				<td><button type="button" onClick="sendData('Spiderman Jariwala','789654123','12-02-2025')">Check</button></td>
			</tr>
			<tr>
				<td>Superman Patel</td>
				<td>456879321</td>
				<td>28-02-2025</td>
				<td><button type="button" onClick="sendData('Superman Patel','456879321','12-02-2025')">Check</button></td>
			</tr>
		</tbody>
	</table>

</body>
<script>
	function sendData(name, contact,date) {
		$(".loader-div").show();
		dataString = 'action=addData&name='+name+'&contact=' +contact+'&date='+date;
		$.ajax({
			type: 'POST',
			async: true,
			url: 'ajax_data.php',
			data: dataString,
			success: function (data) {
				$(".loader-div").hide();
				alert(data)
				//$("#div1").html(data);
			},
			error: function () {
				$(".loader-div").hide();
			}
		});
	}
</script>

<script src="assets/jquery-3.7.1.min.js"></script>

</html>