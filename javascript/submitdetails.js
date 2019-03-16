
function submitDetails(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
	var validphone = /^\d{12}$/;
    var name =  $('#inputName').val();
    var email = $('#inputEmail').val();
	var houseNumber = $('#inputHouse').val();
	var phoneNo = $('#inputPhone').val();
    
    if(name.trim() == '' ){
        alert('Please enter your name.');
        $('#inputName').focus();
        return false;
    }else if(email.trim() == '' ){
        alert('Please enter your email.');
        $('#inputEmail').focus();
        return false;
	}else if(houseNumber.trim() == '' ){
        alert('Please enter your house number.');
        $('#inputHouse').focus();
        return false;
	}else if(phoneNo.trim() == '' ){
        alert('Please enter your phone number.');
        $('#inputPhone').focus();
        return false;
	}else if(!validphone.test(phoneNo)){
        alert('Your number should begin with 254 e.g. 254712345678 ');
        $('#inputPhone').focus();
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
        alert('Please enter valid email.');
        $('#inputEmail').focus();
        return false;
    }
    else{
        $.ajax({
            type:'POST',
            url:'submit_details.php',
            data:'frmSubmit=1&name='+name+'&email='+email+'&houseNumber='+houseNumber+'&phoneNo='+phoneNo,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                if(msg == 'ok'){
                    $('#inputName').val('');
                    $('#inputEmail').val('');
                    $('#inputMessage').val('');
                    $('.statusMsg').html('<span style="color:green;">Your Changes have been Saved</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}
