// Add Record
function addRecord() {
    // get values
    var name = $("#name").val();
    var houseNumber = $("#houseNumber").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var phoneNo = $("#phoneNo").val();

    // Add record
    $.post("ajax/addRecord.php", {
        name: name,
        houseNumber: houseNumber,
        email: email,
        phoneNo: phoneNo,
        password: password

    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#name").val("");
        $("#houseNumber").val("");
        $("#email").val("");
        $("#phoneNo").val("");
        $("#password").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(residentID) {
    var conf = confirm("Are you sure, do you really want to delete User?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
                residentID: residentID
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(residentID) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_residentID").val(residentID);
    $.post("ajax/readUserDetails.php", {
            residentID: residentID
        },
        function (data, status) {
            // PARSE json data
            var resident = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_name").val(resident.name);
            $("#update_houseNumber").val(resident.houseNumber);
            $("#update_email").val(resident.email);
            $("#update_phoneNo").val(resident.phoneNo)
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var name = $("#update_name").val();
    var houseNumber = $("#update_houseNumber").val();
    var email = $("#update_email").val();
    var phoneNo =  $("#update_phoneNo").val();

    // get hidden field value
    var residentID = $("#hidden_residentID").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
            residentID:residentID,
            name: name,
            houseNumber: houseNumber,
            email: email,
            phoneNo: phoneNo
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