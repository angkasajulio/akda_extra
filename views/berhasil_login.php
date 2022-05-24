<script>
	var url = '<?php echo $this->session->flashdata('url')?>';
	//document.getElementById("test").innerHTML = url; 
	window.location.replace(url);
</script>