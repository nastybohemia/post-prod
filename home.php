<!doctype html>
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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html, body {
  height: 100%;
}

body {
  -webkit-font-smoothing: antialiased;
  font-family: "Montserrat", sans-serif;
  text-rendering: optimizeLegibility;
  background: #fcfcfc;
}

.mock-up-link {
  display: none;
}
@media (min-width: 768px) {
  .mock-up-link {
    display: block;
  }
}

.main-container-wrapper {
  background-color: #F8FAFA;
  min-width: 320px;
  min-height: 568px;
  max-width: 414px;
  overflow-y: auto;
}
@media (min-width: 415px) {
  .main-container-wrapper {
    -moz-box-shadow: 0px 32px 47px rgba(32, 23, 23, 0.09);
    -webkit-box-shadow: 0px 32px 47px rgba(32, 23, 23, 0.09);
    box-shadow: 0px 32px 47px rgba(32, 23, 23, 0.09);
    margin: 24px auto;
  }
}

header {
  background-color: #fff;
  display: flex;
  height: 58px;
  justify-content: space-between;
  overflow: hidden;
  position: relative;
}

.header__btn {
  background-color: #86D8C9;
  border: 2px solid #fff;
  border-radius: 50%;
  -moz-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  height: 80px;
  padding-top: 18px;
  position: absolute;
  top: -25px;
  width: 80px;
}
.header__btn:hover, .header__btn:focus {
  background: #67cebb;
  transition: all 0.3s ease-in;
  outline: none;
}
.header__btn .icon {
  display: inline-block;
}
.header__btn--left {
  left: -25px;
  padding-left: 38px;
  text-align: left;
}
.header__btn--right {
  padding-right: 32px;
  right: -25px;
  text-align: right;
}

.calendar-container {
  background-color: #fff;
  padding: 16px;
  margin-bottom: 24px;
}
.calendar-container__header {
  display: flex;
  justify-content: space-between;
}
.calendar-container__btn {
  background: transparent;
  border: 0;
  cursor: pointer;
  font-size: 16px;
  outline: none;
  color: #E9E8E8;
}
.calendar-container__btn:hover, .calendar-container__btn:focus {
  color: #9FAAB7;
  transition: all 0.3s ease-in;
}
.calendar-container__title {
  color: #222741;
  font-size: 20px;
  font-weight: 700;
}

.calendar-table {
  margin-top: 12px;
  width: 100%;
}
.calendar-table__item {
  border: 2px solid transparent;
  border-radius: 50%;
  color: #424588;
  font-size: 12px;
  font-weight: 700;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}
.calendar-table__item:hover {
  background: #f8fafa;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  transition: 0.2s all ease-in;
}
.calendar-table__row {
  display: flex;
  justify-content: center;
}
.calendar-table__header {
  border-bottom: 2px solid #F2F6F8;
  margin-bottom: 4px;
}
.calendar-table__header .calendar-table__col {
  display: inline-block;
  color: #99A4AE;
  font-size: 12px;
  font-weight: 700;
  padding: 12px 3px;
  text-align: center;
  text-transform: uppercase;
  width: 40px;
  height: 38px;
}
@media (min-width: 360px) {
  .calendar-table__header .calendar-table__col {
    width: 46px;
  }
}
@media (min-width: 410px) {
  .calendar-table__header .calendar-table__col {
    width: 54px;
  }
}
.calendar-table__body .calendar-table__col {
  width: 40px;
  height: 42px;
  padding-bottom: 2px;
}
@media (min-width: 360px) {
  .calendar-table__body .calendar-table__col {
    width: 46px;
    height: 48px;
  }
}
@media (min-width: 410px) {
  .calendar-table__body .calendar-table__col {
    width: 54px;
    height: 56px;
  }
}
.calendar-table__today .calendar-table__item {
  border-color: #FEFEFE;
  background-color: #F2F6F8;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.calendar-table__event .calendar-table__item {
  background-color: #66DCEC;
  border-color: #FEFEFE;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  color: #fff;
}
.calendar-table__event--long {
  overflow-x: hidden;
}
.calendar-table__event--long .calendar-table__item {
  border-radius: 0;
  border-width: 2px 0;
}
.calendar-table__event--start .calendar-table__item {
  border-left: 2px solid #fff;
  border-radius: 50% 0 0 50%;
}
.calendar-table__event--start.calendar-table__col:last-child .calendar-table__item {
  border-width: 2px;
}
.calendar-table__event--end .calendar-table__item {
  border-right: 2px solid #fff;
  border-radius: 0 50% 50% 0;
}
.calendar-table__event--end.calendar-table__col:first-child .calendar-table__item {
  border-width: 2px;
}
.calendar-table__inactive .calendar-table__item {
  color: #DCDCE3;
  cursor: default;
}
.calendar-table__inactive .calendar-table__item:hover {
  background: transparent;
  box-shadow: none;
}
.calendar-table__inactive.calendar-table__event .calendar-table__item {
  color: #fff;
  opacity: 0.25;
}
.calendar-table__inactive.calendar-table__event .calendar-table__item:hover {
  background: #66DCEC;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}

.events-container {
  padding: 0 15px;
}

.events__title {
  color: #BEC1CA;
  display: inline-block;
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 16px;
}
.events__tag {
  background: #66DCEC;
  border: 2px solid #FEFEFE;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  border-radius: 20px;
  color: #fff;
  font-size: 10px;
  font-weight: 600;
  width: 60px;
  margin-left: 16px;
  padding: 5px 2px;
  text-align: center;
}
.events__tag--highlighted {
  background: #FDCA40;
}
.events__item {
  background: #fff;
  border-left: 8px solid #86D8C9;
  border-radius: 2px;
  -moz-box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
  box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
  padding: 15px 16px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 16px;
}
.events__item--left {
  width: calc(100% - 76px);
}
.events__name {
  font-size: 12px;
  font-weight: 700;
  color: #222741;
  display: block;
  margin-bottom: 6px;
}
.events__date {
  font-size: 12px;
  color: #9FAAB7;
  display: inline-block;
}
    </style>
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
    $('.ui.fluid.dropdown')
  .dropdown()
;
    </script>
    </head>
    <body>
    <!-- Preloader Start -->
    <div class="">
    </div>
    <!-- Preloader End -->
    <div id="text-container">
    <h1 class="red-text">
    <span class="red">SNAPROLL</span><span> is the first<br>
post-production agency<br>
in Los Angeles.</span>
</h1>
<h5 class="description">
    <span>Our artists do:</span><span class="blue"> Video Editing | Sound Editing | VFX | Color Correction | 3D | Animation</span>
</h5>
</div>
<div id="btn-container">
<button class="btn-blue">SEARCH ARTISTS</button>
<br><br><br>
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
  <p class="mock-up-link">Mock up link <a href="https://dribbble.com/shots/5465486-Calendar-UI#comment-7928835">here</a></p>
  <div class="main-container-wrapper">
    <header>
      <button class="header__btn header__btn--left" title="Menu">
        <svg class="icon" width="20px" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill="#fff" d="M0 0h20v2H0zM0 7h20v2H0zM0 14h20v2H0z"/>
        </svg>
      </button>
      <button class="header__btn header__btn--right" title="Add event">
        <svg class="icon" width="26px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="#fff" d="M416 277.333H277.333V416h-42.666V277.333H96v-42.666h138.667V96h42.666v138.667H416v42.666z"/>
        </svg>
      </button>
    </header>
    <main>
      <div class="calendar-container">
        <div class="calendar-container__header">
          <button class="calendar-container__btn calendar-container__btn--left" title="Previous">
            <i class="icon ion-ios-arrow-back"></i>
          </button>
          <h2 class="calendar-container__title">October 2018</h2>
          <button class="calendar-container__btn calendar-container__btn--right" title="Next">
            <i class="icon ion-ios-arrow-forward"></i>
          </button>
        </div>
        <div class="calendar-container__body">
          <div class="calendar-table">
            <div class="calendar-table__header">
              <div class="calendar-table__row">
                <div class="calendar-table__col">S</div>
                <div class="calendar-table__col">M</div>
                <div class="calendar-table__col">T</div>
                <div class="calendar-table__col">W</div>
                <div class="calendar-table__col">T</div>
                <div class="calendar-table__col">F</div>
                <div class="calendar-table__col">S</div>
              </div>
            </div>
            <div class="calendar-table__body">
              <div class="calendar-table__row">
                <div class="calendar-table__col calendar-table__inactive">
                  <div class="calendar-table__item">
                    <span>30</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__today">
                  <div class="calendar-table__item">
                    <span>1</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>2</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>3</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>4</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__event">
                  <div class="calendar-table__item">
                    <span>5</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>6</span>
                  </div>
                </div>
              </div>
              <div class="calendar-table__row">
                <div class="calendar-table__col calendar-table__event">
                  <div class="calendar-table__item">
                    <span>7</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>8</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>9</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>10</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>11</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>12</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>13</span>
                  </div>
                </div>
              </div>
              <div class="calendar-table__row">
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>14</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>15</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__event calendar-table__event--long calendar-table__event--start">
                  <div class="calendar-table__item">
                    <span>16</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__event calendar-table__event--long">
                  <div class="calendar-table__item">
                    <span>17</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__event calendar-table__event--long calendar-table__event--end">
                  <div class="calendar-table__item">
                    <span>18</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>19</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>20</span>
                  </div>
                </div>
              </div>
              <div class="calendar-table__row">
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>21</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>22</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>23</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>24</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>25</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>26</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__event calendar-table__event--long calendar-table__event--start">
                  <div class="calendar-table__item">
                    <span>27</span>
                  </div>
                </div>
              </div>
              <div class="calendar-table__row">
                <div class="calendar-table__col calendar-table__event calendar-table__event--long calendar-table__event--end">
                  <div class="calendar-table__item">
                    <span>28</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>29</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>30</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>31</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__event calendar-table__inactive">
                  <div class="calendar-table__item">
                    <span>1</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__inactive">
                  <div class="calendar-table__item">
                    <span>2</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__inactive">
                  <div class="calendar-table__item">
                    <span>3</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="events-container">
        <span class="events__title">Upcoming events this month</span>
        <ul class="events__list">
          <li class="events__item">
            <div class="events__item--left">
              <span class="events__name">Town hall meeting</span>
              <span class="events__date">Oct 5</span>
            </div>
            <span class="events__tag">16:00</span>
          </li>
          <li class="events__item">
            <div class="events__item--left">
              <span class="events__name">Meet with George</span>
              <span class="events__date">Oct 7</span>
            </div>
            <span class="events__tag">10:00</span>
          </li>
          <li class="events__item">
            <div class="events__item--left">
              <span class="events__name">Vacation!!!</span>
              <span class="events__date">Oct 16 - Oct 18</span>
            </div>
            <span class="events__tag events__tag--highlighted">All day</span>
          </li>
          <li class="events__item">
            <div class="events__item--left">
              <span class="events__name">Visit Grandma</span>
              <span class="events__date">Oct 27 - Oct 28</span>
            </div>
          </li>
        </ul>
      </div>
    </main>
  </div>
</body>
</html>
<table>
  <thead>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
  </tr>
  </thead>
  <tbody id="myTable">
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>john@example.com</td>
  </tr>
  <tr>
    <td>Mary</td>
    <td>Moe</td>
    <td>mary@mail.com</td>
  </tr>
  <tr>
    <td>July</td>
    <td>Dooley</td>
    <td>july@greatstuff.com</td>
  </tr>
  <tr>
    <td>Anja</td>
    <td>Ravendale</td>
    <td>a_r@test.com</td>
  </tr>
  </tbody>
</table>
</body>

</html>