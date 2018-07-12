	<script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="<?php echo base_url();?>thirdparty/theme/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>thirdparty/theme/js/chart.min.js"></script>
	<script src="<?php echo base_url();?>thirdparty/theme/js/chart-data.js"></script>
	<script src="<?php echo base_url();?>thirdparty/theme/js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>thirdparty/theme/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>thirdparty/theme/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>thirdparty/jquery-editable-select.min.js"></script>
	<script src="<?php echo base_url();?>thirdparty/theme/js/custom.js"></script>	
	<script type="text/javascript">
		$('#customer').editableSelect();
		$('.datepicker').datepicker({
	    format: 'dd/mm/yyyy'    
	});

	</script>
	<script>
	function show() {
    var x = document.getElementById("createnew");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
		
</body>
</html>