<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>POST-PROD</title>
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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- ************************* Semantic *************************-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <!--PayPal-->
    <script
    src="https://www.paypal.com/sdk/js?client-id=AUe_rMwFfEroSrSzXwJxbKePwUN9SLpI0_bVIrY19emRQIkgSQeYZa_HAdhQibWMxqBGkRFhP54m0Upa&components=messages"
    data-namespace="paypal2">
</script>
</head>
<body>
    <!-- Preloader Start -->
    <div class="">
    </div>
    <!-- Preloader End -->
    <div id="text-container">
    <div
    data-pp-message
    data-pp-style-layout="flex"
    data-pp-style-color="white-no-border"
    data-pp-style-ratio="20x1">
</div>
</div>
<div class="ui category search">
  <div class="ui icon input">
    <input class="prompt" type="text" placeholder="Name search...">
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</div>
<h5 class="description">
    <span class="blue"> Video Editing | Sound Editing | VFX | Color Correction | 3D | Animation | Motion Graphics</span>
</h5>
<div class="ui floating labeled icon dropdown button">
  <i class="filter icon"></i>
  <span class="text">Filter</span>
  <div class="menu">
    <div class="header">
      <i class="tags icon"></i>
      Filter by tag
    </div>
    <div class="item">
      Important
    </div>
    <div class="item">
      Announcement
    </div>
    <div class="item">
      Discussion
    </div>
  </div>
</div>
<select name="skills" multiple="" class="ui fluid dropdown">
  <option value="">Skills</option>
<option value="angular">Angular</option>
<option value="css">CSS</option>
<option value="design">Graphic Design</option>
<option value="ember">Ember</option>
<option value="html">HTML</option>
<option value="ia">Information Architecture</option>
<option value="javascript">Javascript</option>
<option value="mech">Mechanical Engineering</option>
<option value="meteor">Meteor</option>
<option value="node">NodeJS</option>
<option value="plumbing">Plumbing</option>
<option value="python">Python</option>
<option value="rails">Rails</option>
<option value="react">React</option>
<option value="repair">Kitchen Repair</option>
<option value="ruby">Ruby</option>
<option value="ui">UI Design</option>
<option value="ux">User Experience</option>
</select>
<form action="index.php" method="post">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Type</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="type-check" onclick="checkboxFilter()">
                <label class="form-check-label" for="type-check" id="type">Video Editing</label><br>
                <input class="form-check-input" type="checkbox" value="" id="type-check" onclick="checkboxFilter()">
                <label class="form-check-label" for="type-check" id="type">Audio Editing</label><br>
        <input class="form-check-input" type="checkbox" value="" id="type-check">
        <label class="form-check-label" for="type-check" id="type">Color Correction</label><br>
        <input class="form-check-input" type="checkbox" value="" id="type-check">
        <label class="form-check-label" for="type-check" id="type">VFX</label><br>
        <input class="form-check-input" type="checkbox" value="" id="type-check">
        <label class="form-check-label" for="type-check" id="type">3D</label><br>
        <input class="form-check-input" type="checkbox" value="" id="type-check">
        <label class="form-check-label" for="type-check" id="type">Animation</label><br>
        <input class="form-check-input" type="checkbox" value="" id="type-check">
        <label class="form-check-label" for="type-check" id="type">Motion Graphics</label>
        </div></div></div>
        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Software</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">Adobe Premiere Pro</label><br>
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
        <label class="form-check-label" for="defaultCheck2">Adobe After Effects</label><br>
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
        <label class="form-check-label" for="defaultCheck3">DaVinci Resolve</label><br>
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
        <label class="form-check-label" for="defaultCheck4">Final Cut X</label><br>
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
        <label class="form-check-label" for="defaultCheck5">Avid</label><br>
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
        <label class="form-check-label" for="defaultCheck6">Adobe Audition</label><br>
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
        <label class="form-check-label" for="defaultCheck7">Pro Tools</label><br>
        </div></div></div>
        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">English</label><br>
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
        <label class="form-check-label" for="defaultCheck2">Spanish</label><br>
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
        <label class="form-check-label" for="defaultCheck3">Chineese</label><br>
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
        <label class="form-check-label" for="defaultCheck4">Russian</label><br>
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
        <label class="form-check-label" for="defaultCheck5">Japaneese</label>
        </div></div></div>
</form>
<span class="badge badge-primary" style="display:none" id="filterBadge">Video Editing</span>
</div>
<div class="artist-card">
    <img class="artist-card-photo"></img>
    <p class="artist-card-name">Nasty Bohemia</p>
    <p class="artist-category">Video Editor</p>
    <div class="btn-profile">
    <button class="ui button">Profile</button>
    </div>
    <div class="artist-software">
        <p>Software</p>
    </div>
    <div class="artist-language">
        <p>Language</p>
    </div>
</div>
    <!-- ************************* JS Files ************************* -->
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>