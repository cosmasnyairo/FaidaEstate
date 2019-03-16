
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

function UpdateStatus(user_id) {
    // get values
    var conf = confirm("Are you sure you want to verify this resident?");
    if (conf == true) {
        $.post("../ajax/updateNewUser.php", {
               user_id: user_id
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