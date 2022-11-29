<?php include "../connection.php"; ?>
<script>
	Morris.Donut({
		element: 'morris-donut-chart',
		data: [{
			label: "All Residents",
			value: <?php
							$q = mysqli_query($con, "SELECT * from tblresident ");
							$numrow = mysqli_num_rows($q);
							echo $numrow;
							?>
		}, {
			label: "4P's Members",
			value: <?php
							$q = mysqli_query($con, "SELECT * from tblresident where four_ps_member = 1 ");
							$numrow = mysqli_num_rows($q);
							echo $numrow;
							?>
		}, {
			label: "Senior Citizens",
			value: <?php
							$q = mysqli_query($con, "SELECT * from tblresident where senior_citizen = 1 ");
							$numrow = mysqli_num_rows($q);
							echo $numrow;
							?>
		}],
		resize: true
	});
</script>