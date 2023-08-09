<!DOCTYPE html>
<html>
<head>
<head>
	<title>Date Range Picker Form</title>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <script>
    function loadData() {
      $.ajax({
        url: 'get_data.php',
        type: 'POST',
        data: { },
        dataType: 'json',
        success: function(response) {
          // handle the response data
          var data = JSON.parse(response);
        },
        error: function(xhr, status, error) {
          console.log("An error occurred: " + error);
        }
      });
    }

	$(function() {
		$(".datepicker").datepicker({
			dateFormat: "yy-mm-dd",
			changeMonth: true,
			changeYear: true,
			yearRange: "2000:+0",
			duration: 0,
			beforeShow: function(input, inst) {
				inst.dpDiv.css({marginLeft: input.offsetWidth + "px", marginTop: input.offsetHeight + "px", width: $(input).outerWidth() + "px"});
			},
			beforeShowDay: function(date) {
				var day = date.getDay();
				if (day === 0 || day === 2 || day === 4) {
					return [false, "ui-state-disabled"];
				} else {
					return [true, ""];
				}
			}
		}).datepicker("show");
        // $unavailable_dates = array("2023-02-24", "2023-02-25", "2023-02-26");
        // $unavailable_dates_json = json_encode($unavailable_dates);
        // if (json_last_error() !== JSON_ERROR_NONE) {
        //     echo "JSON encoding failed with error: " . json_last_error_msg();
        // } else {
        //     // use the $unavailable_dates_json variable
        //     // ...
        //     $unavailable_dates_json;
        // }

        $(function() {
		    function disableDates(date) {
		    	var dateString = $.datepicker.formatDate("yy-mm-dd", date);
		    	if ($.inArray(dateString, unavailableDates) != -1) {
		    		return [false, "unavailable-date"];
		    	} else {
		    		return [true, ""];
		    	}
		    }

		    $("#datepicker").datepicker({
		    	beforeShowDay: disableDates
		    });
	    });
	});
    </script>







</head>
<body>
	<h1>Date Range Picker Form</h1>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	    <label for="start_date">Start Date:</label>
	    <input type="text" id="datepicker" name="start_date" required class="datepicker">
	    <!-- <span class="error"><?php echo $start_date_error;?></span><br><br> -->
    
	    <label for="end_date">End Date:</label>
	    <input type="text" id="datepicker" name="end_date" required class="datepicker">
	    <!-- <span class="error"><?php echo $end_date_error;?></span><br><br> -->
    
	    <input type="submit" name="submit" value="Submit">
    </form>
 
	<?php
		// Check if the form has been submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Retrieve the start and end dates from the $_POST superglobal array
			$start_date = $_POST['start_date'];
			$end_date = $_POST['end_date'];

			// Validate the start and end dates
			if (empty($start_date)) {
				$start_date_error = "Please select a start date.";
			} else if (empty($end_date)) {
				$end_date_error = "Please select an end date.";
			} else {
				$start_date_obj = new DateTime($start_date);
				$end_date_obj = new DateTime($end_date);

				if ($start_date_obj > $end_date_obj) {
					$start_date_error = "Start date must be before end date.";
				} else {
					// Dates are valid, proceed with further processing
					// ...
				}
			}
		}
	?>
</body>
</html>