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
    		var errorMsg = '<div class="alert alert-danger" <button type="button" class="close" data-dismiss="alert">&times;</button><i class="fa fa-ban-circle"></i><strong>Error: </strong>Please acknowledge that permission has been given to add this user to your list</div>';
    		$(".message-area").html(errorMsg);
    		return false;
    	};
    });


    $('#applyActions').click(function() {
        // console.log('clicked actions');
        var checkValues = $('input[name=actioncheckbox]:checked').map(function() {
            return $(this).val();
        }).get();
        // console.log(checkValues);
        $.ajax({
            url: '/list_controller/ajaxBulkAction/'+$('#list-id-reference').val(),
            type: 'post',
            data: {
                ids: checkValues,
                desiredAction: $('.bulk-action').val()
            },
            success:function(data) {
                // refresh
                if (data == "0") {
                    // error
                } else {
                    location.reload();
                };
            }
        });
    });

    $('#input-password').hideShowPassword(false, true);
    $('.parsley-validate').parsley();

    $('#form-campaign-message').keyup(function() {
        var fieldVal = $(this).val();
        var fieldLength = fieldVal.length;
        var charCountDiv = $('.char-count');
        $('.char-count span').html(fieldLength.toString());
        
        if (fieldLength < 20) {
            $(charCountDiv).css("color", "#717171");
            $(charCountDiv).css("font-weight", "normal");
        } else if (fieldLength < 120) {
            $(charCountDiv).css("color", "#8ec165");
            $(charCountDiv).css("font-weight", "normal");
        } else if (fieldLength <= 160) {
            $(charCountDiv).css("color", "#B8C000");
            $(charCountDiv).css("font-weight", "normal");
        } else {
            $(charCountDiv).css("color", "red");
            $(charCountDiv).css("font-weight", "bold");
        };
    });

    // $('#btn-create-campaign').click(function() {
    //     $(this).parsley('validate');
    //     return false;
    // })

});