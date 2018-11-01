
function DeleteUser(pendingID) {
    var conf = confirm("Are you sure you want to delete this user?");
    if (conf == true) {
        $.post("../ajax/deleteUser.php", {
               pendingID: pendingID
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function UpdateStatus(pendingID) {
    // get values
    var conf = confirm("Are you sure you want to verify this resident?");
    if (conf == true) {
        $.post("../ajax/updateUserDetails.php", {
               pendingID: pendingID
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function readRecords() {
    $.get("../ajax/readResidentRecords.php", {}, function (data, status) {
        $(".residents_content").html(data);
    });
    $.get("../ajax/readNewResidentRecords.php", {}, function (data, status) {
        $(".new_residents_content").html(data);
    });
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});