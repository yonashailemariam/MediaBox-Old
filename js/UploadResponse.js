/**
 Author: Yonas haileamriam
 Date: 8/14/2016
 Time:
 @Copywrite [2016]
 */
$(function(){
	$('#EmptyUploadError').hide(); $('#DBUploadError').hide(); $('#UploadSuccess').hide();

	var ResponseLabel=$('#ResponseLabel').val();
	if(ResponseLabel=='102'){
		$('#UploadSuccess').slideDown().delay(2000).slideUp();
	}
	else if(ResponseLabel=='104'){
		$('#DBUploadError').slideDown().delay(2000).slideUp();
	}
	/*else if(ResponseLabel=='2' || ResponseLabel=='4' || ResponseLabel=='5' || ResponseLabel=='6' || ResponseLabel=='7'
		|| ResponseLabel=='8' || ResponseLabel=='9'){
		$('#DBUploadError').delay(800).slideDown().delay(2000).slideUp();
	}*/

});