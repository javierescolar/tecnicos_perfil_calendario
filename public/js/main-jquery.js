
$(document).ready(function(){
    $('.btn_edit_profile_index').click(function(){
    	var btn = $(this).parent().parent().find('.btn-display-none');
    	if(btn.css('display') == 'none'){
    	    btn.css('display','inline');
    	} else {
    	    btn.css('display','none');
    	}
    });
});
