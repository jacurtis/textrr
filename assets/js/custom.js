$( document ).ready(function() {
	var deleteConfirmField = $('#deletelist');
    $("#deletelist").keyup(function() {
    	if (deleteConfirmField.val() === "DELETE") {
    		$('#confirm-delete-btn').addClass("btn-success").prop("disabled",false);
       	} else {
       		$('#confirm-delete-btn').removeClass("btn-success").prop("disabled",true);
       	};
    });
});