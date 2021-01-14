$(document).ready(function ()  
{
    $(".close").on("click", function () 
	{
		$("#modal").css("display", "none")
	});
});

if (sessionStorage.getItem('#modal') !== 'true') 
{
    $('#modal').css('display','block');
    sessionStorage.setItem('#ad_modal','true');
}