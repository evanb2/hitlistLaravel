/**
* Validate the UPC
* Makes sure the UPC/EAN entered is 12 - 13 INTEGERS in length
*/
function validUPC(input) {
    /** Search for letters and special characters, if found returns index */
    var integercheck = input.search(/[a-zA-Z!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/);
    /** Length of upc string */
    var upc_ean = input.length;
    /** If == 12 or == 13 and NO letters found, then TRUE */
    if (((upc_ean == 12) || (upc_ean == 13)) && (integercheck == -1)) {
        return true;
    } else {
        return false;
    }
};

/**
* Validate the Store Release Date
* Makes sure the Store Release Date the user inputs is at least two business weeks from the current date
*/
function validReleaseDate(input) {
    var D = input;
    var storedate = new Date(D +'T00:00:00Z');
    storedate.setMinutes(storedate.getMinutes() + storedate.getTimezoneOffset());

    var start_date = setStartDate();

    /** Checks if the input date is greater then the minimum_release_date */
    if (storedate > start_date) {
        return true;
    } else {
        return false;
    }
};

function setStartDate() {
    var current_date = new Date();
    /** Grabs current day of the week 1-7 */
    var todays_day = current_date.getDay() + 1;
    /** If the current day is saturday add 16 days */
    if (todays_day == 7) {
        var minimum_release_date = new Date(+new Date + 12960e5);
    } else if (todays_day == 1) {/** If the current day is sunday add 15 days */
        var minimum_release_date = new Date(+new Date + 13824e5);
    } else { /** Else the current day is m-f add 14 days */
        var minimum_release_date = new Date(+new Date + 12096e5);
    }
        return minimum_release_date;
}

$(document).ready(function() {
    $("#label_name").focus();
    $("#error").hide();
    $("#valid").hide();
    $("#invalid").hide();
    $("#valid_date").hide();
    $("#invalid_date").hide();

    var minimum_release_date = setStartDate();
    var date_string = minimum_release_date.toString("yyyy-MM-dd");

    $('#datepicker .input-group.date').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
        startDate: minimum_release_date
    });

        $("input#upc_ean").bind("input propertychange", function(event) {
            var upc_ean = $("input#upc_ean").val();
            var upc_output = validUPC(upc_ean);
            if (upc_output) {
                $("#valid").fadeIn();
                $("#invalid").hide();
                $("#index_submit_btn").prop('disabled', false);
                $("#error").hide();
            } else {
                $("#valid").hide();
                $("#invalid").fadeIn();
                $("#index_submit_btn").prop('disabled', 'disabled');
                $("#error").show();
            }
        });

        // $("#datepicker .input-group.date").datepicker()
        //     .on(hide, function(event) {
        //         var storedate = $("input#storedate").val();
        //         var storedate_output = validReleaseDate(storedate);  //format needs to be yyyy-mm-dd
        //         if (storedate_output) {
        //             $("#valid_date").show();
        //             $("#invalid_date").hide();
        //             $("#index_submit_btn").prop('disabled', false);
        //             $("#error").hide();
        //         } else {
        //             $("#valid_date").hide();
        //             $("#invalid_date").show();
        //             $("#index_submit_btn").prop('disabled', 'disabled');
        //             $("#error").show();
        //         }
        //     });

        $("div.datepicker").click(function(event) {  //event not triggered by clicking on calender
            var storedate = $("input#storedate").val();
            // console.log("Val: " + storedate);
            var storedate_output = validReleaseDate(storedate);  //format needs to be yyyy-mm-dd
            // console.log("Output: " + storedate_output);

            if (storedate_output) {
                $("#valid_date").show();
                $("#invalid_date").hide();
                $("#index_submit_btn").prop('disabled', false);
                $("#error").hide();
            } else {
                $("#valid_date").hide();
                $("#invalid_date").show();
                $("#index_submit_btn").prop('disabled', 'disabled');
                $("#error").show();
            }
        });
/**
*   SUBMIT FORM VIA AJAX
*/
    $("#hitlist_form").submit(function(event) {
        event.preventDefault();
        /** Sets the url = the form action from index.php; action = 'Save.php' */
        var url = $(this).attr("action");
        /** Serialize form data to be sent to server */
        var formData = $(this).serialize();
        /** Send POST request to server with url and formData, callback response
        *   is placing html from Save.php into DIV in index.php
        */
        $.post(url, formData, function(response) {
            $(".ajax").html(response);
        });
    });
}); /** End jQuery */
