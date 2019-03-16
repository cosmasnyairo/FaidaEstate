

// READ records
function readRecords() {
    $.get("../ajax/readRequestRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function deleteRequest(requestID) {
    var conf = confirm("Are you sure you want to delete this request?");
    if (conf == true) {
        $.post("../ajax/deleteRequest.php", {
                requestID: requestID
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(requestID) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(requestID);
    $.post("../ajax/readRequestDetails.php", {
            requestID: requestID
        },
        function (data, status) {
            // PARSE json data
            var request = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_name").val(request.name);
            $("#update_email").val(request.email);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});