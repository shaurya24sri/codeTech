$(document).ready(function(){
	$('.chat-icon').click(function(event){
		$('.chat-box').toggleClass('active')
	});
	$('.my-conv-form-wrapper').convform({selectInputStyle: 'disable'});
});