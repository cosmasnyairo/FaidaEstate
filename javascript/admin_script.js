// Add Record
function addRecord() {
    // get values
    var name = $("#name").val();
    var position = $("#position").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var phoneNo = $("#phoneNo").val();
    var username = $("#username").val();

    // Add record
    $.post("../ajax/addAdmin.php", {
        name: username,
        position: position,
        email: email,
        phoneNo: phoneNo,
        password: pass,
        username: username

    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#name").val("");
        $("#position").val("");
        $("#email").val("");
        $("#phoneNo").val("");
        $("#password").val("");
        $("#username").val("");
    });
}

// READ records
function readRecords() {
    $.get("../ajax/readAdminRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(adminID) {
    var conf = confirm("Are you sure you want to delete this user?");
    if (conf == true) {
        $.post("../ajax/deleteAdmin.php", {
                adminID: adminID
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(adminID) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_adminID").val(adminID);
    $.post("../ajax/readAdminDetails.php", {
            adminID: adminID
        },
        function (data, status) {
            // PARSE json data
            var admin = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_name").val(admin.name);
            $("#update_position").val(admin.position);
            $("#update_email").val(admin.email);
            $("#update_phoneNo").val(admin.phoneNo);
            $("#update_username").val(admin.username);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var name = $("#update_name").val();
    var position = $("#update_position").val();
    var email = $("#update_email").val();
    var phoneNo =  $("#update_phoneNo").val();
    var username =  $("#update_username").val();
    // get hidden field value
    var adminID = $("#hidden_adminID").val();

    // Update the details by requesting to the server using ajax
    $.post("../ajax/updateAdminDetails.php", {
            adminID:adminID,
            name: name,
            position: position,
            email: email,
            phoneNo: phoneNo,
            username: username
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});