<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Snaproll Agency</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="" href="" type="">
    <!-- ************************* JQuery *************************-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <!-- ************************* Bootstrap *************************-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- ************************* CSS Files *************************-->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- ************************* Semantic *************************-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <!-- ************************* JS Code ************************* -->
    <script>
    function checkboxFilter() {
        // Get the checkbox
        var checkBox = document.getElementById("type-check");
        // Get the output text
        var text = document.getElementById("type");
        // Get the badge output
        var badge = document.getElementById("filterBadge");
        // If the checkbox is checked, display the badge
        if (checkBox.checked == true){
            filterBadge.style.display = "block";
            $(".form-check-label").text();
            } else {
                filterBadge.style.display = "none";
            }
    }
    $('.ui.dropdown')
  .dropdown()
;
    </script>
    </head>
    <body>
        <div class="ui inverted segment">
  <div class="ui inverted form">
    <div class="two fields">
      <div class="field">
        <label>First Name</label>
        <input placeholder="First Name" type="text">
      </div>
      <div class="field">
        <label>Last Name</label>
        <input placeholder="Last Name" type="text">
      </div>
    </div>
    <div class="inline field">
      <div class="ui checkbox">
        <input type="checkbox" tabindex="0" class="hidden">
        <label>I agree to the terms and conditions</label>
      </div>
    </div>
    <div class="ui submit button">Submit</div>
  </div>
</div>
</body>

</html>