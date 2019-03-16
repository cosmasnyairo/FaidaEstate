// Add Record
function addRecord() {
    // get values
  
    var position = $("#position").val();
    var houseNumber = $("#houseNumber").val();
    var username = $("#username").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var phoneNo = $("#phoneNo").val();

    // Add record
    $.post("../ajax/addUser.php", {
       
        position: position,
        houseNumber: houseNumber,
        username: username,
        email: email,
        phoneNo: phoneNo,
        password: password

    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
      
        $("#position").val("");
        $("#houseNumber").val("");
        $("#username").val("");
        $("#email").val("");
        $("#phoneNo").val("");
        $("#password").val("");
    });
}

// READ records
function readRecords() {
    $.get("../ajax/readUserRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(user_id) {
    var conf = confirm("Are you sure you want to delete this user?");
    if (conf == true) {
        $.post("../ajax/deleteUser.php", {
               user_id: user_id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetail(user_id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_userid").val(user_id);
    $.post("../ajax/readUserDetails.php", {
            user_id: user_id
        },
        function (data, status) {
            // PARSE json data
            var update =JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#contact_houseNumber").val(update.houseNumber);
            $("#contact_email").val(update.email);
            $("#contact_username").val(update.username)
            
        }
    );
    // Open modal popup
    $("#user_modal").modal("show");
}

function GetUserDetails(user_id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_userid").val(user_id);
    $.post("../ajax/readUserDetails.php", {
            user_id: user_id
        },
        function (data, status) {
            // PARSE json data
            var update =JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_position").val(update.Position);
            $("#update_houseNumber").val(update.houseNumber);
            $("#update_email").val(update.email);
            $("#update_username").val(update.username);
            $("#update_phoneNo").val(update.phoneNo)
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    
    var position = $("#update_position").val();
    var houseNumber = $("#update_houseNumber").val();
    var email = $("#update_email").val();
    var username = $("#update_username").val();
    var phoneNo =  $("#update_phoneNo").val();

    // get hidden field value
    var user_id = $("#hidden_userid").val();

    // Update the details by requesting to the server using ajax
    $.post("../ajax/updateUserDetails.php", {
            user_id:user_id,
            position: position,
            houseNumber: houseNumber,
            email: email,
            username: username,
            phoneNo: phoneNo
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
            $("#update_position").val("");
            $("#update_houseNumber").val("");
            $("#update_username").val("");
            $("#update_email").val("");
            $("#update_phoneNo").val("");
            $("#update_password").val("");
        }
    );
}


$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});