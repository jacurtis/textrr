$( document ).ready(function() {
	var deleteConfirmField = $('#deletelist');
    $("#deletelist").keyup(function() {
    	if (deleteConfirmField.val() === "DELETE") {
    		$('#confirm-delete-btn').addClass("btn-success").prop("disabled",false);
       	} else {
       		$('#confirm-delete-btn').removeClass("btn-success").prop("disabled",true);
       	};
    });

    $(".phone-mask").mask("(999) 999-9999");
    $("#add-number-to-list-form").submit(function(e) {
    	//e.preventDefault();
    	if ($('#phone-number-consent').is(':checked')) {
    		console.log('checked the consenst');
    		var rawnumber = $('#addNumber').val();
    		if (rawnumber.length == 14) {
    			return true;
    		} else {
    			console.log('add number');
    			return false;
    		};
    	} else {
    		console.log('check the box first');
    		var errorMsg = '<div class="alert alert-danger" <button type="button" class="close" data-dismiss="alert">×</button><i class="fa fa-ban-circle"></i><strong>Error: </strong>Please acknowledge that permission has been given to add this user to your list</div>';
    		$(".message-area").html(errorMsg);
    		return false;
    	};
    });
    
});