
function log()
{
$.ajax({
	url:"logus.php",
	method:"POST",
	dataType:"JSON",
	success:function(data)
	{
		{
		$('#logusr').html(data.logus);
		}
	}
	
});
}
log();