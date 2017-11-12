

$(document).ready(function(){
        $(".picBoxImgContent").hide();
 });


$(function(){
$('.imgLink').click(function (){
	var imgSrcVal = $(this).children('img').attr('src'); 
	var imgDesc = $(this).children('p').text();

	$("#rightUpMidImg").attr('src',imgSrcVal);
	$('#rightDwn p').text(imgDesc);
});
});