<div class="stickyposition_mobile sticky-header header-main">

  <aside id="siteRedirect" class="sticky-top bg-dark text-white p-3 p-sm-2 d-none" style="z-index:1025">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-auto order-sm-2 align-self-start align-self-sm-center">
          <button type="button" class="close text-white" aria-label="Close">&times;</button>
        </div>
        <div class="col-12 col-sm-auto order-sm-1">
          <a href="#" class="js-url btn btn-secondary w-100">Yes, continue</a>
        </div>
      </div>
    </div>
  </aside>
  <nav class="container-fluid c-navbar  top-navbar py-1 px-0">
    <a class="col-auto" href="{{url('/')}}">
      <img alt="Universities Page Logo" src="{{ url('/filemanager/photos/1/thumbs/unipage_logo_2.png') }}" alt="" class="header-logo">
    </a>
    <style>
     body {
            user-select: none;
            -webkit-user-select: none;f
            -moz-user-select: none;
            -ms-user-select: none;
            bac
        }

        img {
            -webkit-user-drag: none;
            -moz-user-drag: none;
            -o-user-drag: none;
            user-drag: none;
        }
      .blink_me_text_on_header {
        animation: blinker 1s linear infinite;
        font-weight: bold;
        text-align: center;
        color: red;
      }

      @keyframes blinker {
        50% {
          opacity: 0;
        }
      }
      .nav-item .nav-link{
        display: flex;
        align-items: center;
        min-width: max-content;
      }
      .nav-item .nav-link i{
        margin-right: 5px;
      }
      .bottom-navbar-main{
        justify-content: center;
      }
    </style>


    <!--<div class="blink_me_text_on_header">Due to Covid-19,we are only accepting online applications</div>-->
    <!-- <div class="col p-0"></div> -->
    {{-- <form  >--}}
    {{-- <input type="text" class="form-control"  placeholder="Search Uni for courses, universities, guides and articles" v-model="search" @keyup="suggest($event)" autocomplete="off" data-autoselect="desktop">--}}
    {{-- <span class="input-group-btn">--}}
    {{-- <button class="btn btn-secondary search-btn"  type="button"><i class="fa fa-search c-pulsate-infreq"></i></button>--}}
    {{-- </span>--}}
    {{-- <div class="suggestion-box scroll2">--}}
    {{-- <ul>--}}

    {{-- <span v-if="suggestion.uni && suggestion.uni.length>0">--}}
    {{-- <li v-for="(suggest,key) in suggestion.uni" class="suggestion-url" :data-url="baseUrl+'/university/'+suggest.slug">--}}
    {{-- <p>@{{suggest.name}}</p> <span>(@{{suggest.founded_in}})</span>--}}
    {{-- <span class="ms-city">@{{suggest.city}}, @{{suggest.country}}</span>--}}
    {{-- <i>University</i>--}}
    {{-- </li>--}}
    {{-- </span>--}}
    {{-- <span v-if="suggestion.guide && suggestion.guide.length>0">--}}
    {{-- <li v-for="(suggest,key) in suggestion.guide" class="suggestion-url" :data-url="baseUrl+'/guides/'+suggest.slug">--}}
    {{-- <p>@{{suggest.title}}</p> <span v-text="(suggest.guide_type == 'university')?'(University Guide)':'(Subject Guide)'"></span>--}}
    {{-- <span class="ms-city">@{{suggest.sub_title.split(" ").splice(0,4).join(" ")}} @{{(suggest.sub_title.split(" ").length>4)?'...':''}}</span>--}}
    {{-- <i>Guide</i>--}}
    {{-- </li>--}}
    {{-- </span>--}}
    {{-- <span v-if="suggestion.course && suggestion.course.length>0">--}}
    {{-- <li v-for="(suggest,key) in suggestion.course" class="suggestion-url" :data-url="baseUrl+'/courses/'+suggest.id">--}}
    {{-- <p>@{{suggest.name}}</p> <span v-if="suggest.university">(@{{suggest.university.name}})</span>--}}
    {{-- <span class="ms-city" v-if="suggest.university">@{{suggest.university.city}}, @{{suggest.university.country}}</span>--}}
    {{-- <i>Course</i>--}}
    {{-- </li>--}}
    {{-- </span>--}}
    {{-- <span v-if="suggestion.article && suggestion.article.length>0">--}}
    {{-- <li v-for="(suggest,key) in suggestion.article" class="suggestion-url" :data-url="baseUrl+'/'+suggest.slug">--}}
    {{-- <p>@{{suggest.title}}</p> <span>(@{{suggest.category.name}})</span>--}}
    {{-- <span class="ms-city">Posted on @{{moment(suggest.created_at).format('Do MMM YYYY')}} By @{{suggest.user.first_name}} </span>--}}
    {{-- <i>Article</i>--}}
    {{-- </li>--}}
    {{-- </span>--}}
    {{-- </ul>--}}
    {{-- </div>--}}
    {{-- </form>--}}
    <!--<a class="col-auto c-navbar-icon d-md-none rounded-circle bg-secondary px-1 c-pulsate-infreq js-onModalOpen-highlight" tabindex="0" title="Search" data-toggle="modal" data-target="#SearchModal">-->
    <!--<i class="fa fa-fw fa-search"></i>-->
    <!--</a>-->

    <style>
      .border-bottom span {
        color: #000000;
        padding-left: 5px;
        font-family: Poppins;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
      }

      @media (max-width: 570px) {
        .displaynonethis {
          display: none;
        }
      }
    </style>
    <div class="bottom-nav-links col-auto c-navbar-contactUs">
      <!--<small>Need help?</small>-->
      @foreach(getSocialMeta() as $key => $social)
      @if($social!==null)
      <!-- <i class="fa fa-{{$key}} fa_icon" onclick="window.location.href=`{{url(($social)??'#.')}}`"></i> -->
      @endif
      @endforeach
      <!-- <i class="fa fa-whatsapp fa_icon" onclick="window.open('https://api.whatsapp.com/send?phone=923112853194')"><span>Lahore</span> <span class="displaynonethis">03112853194</span></i>

      <i class="fa fa-whatsapp fa_icon" onclick="window.open('https://api.whatsapp.com/send?phone=923349990308')"><span>Islamabad</span> <span class="displaynonethis">03349990308</span></i>
      <i class="fa fa-whatsapp fa_icon" onclick="window.open('https://api.whatsapp.com/send?phone=923106225430')"><span>Karachi</span> <span class="displaynonethis">03106225430</span></i> -->

      <i class="fa fa-phone fa_icon" onclick="makePhoneCall('03004010284')">
        <span>Lahore</span>
        <span class="displaynonethis">03004010284</span>
      </i>

      <i class="fa fa-phone fa_icon" onclick="makePhoneCall('03349990308')">
          <span>Islamabad</span>
          <span class="displaynonethis">03349990308</span>
      </i>

      <i class="fa fa-phone fa_icon" onclick="makePhoneCall('03106225430')">
          <span>Karachi</span>
          <span class="displaynonethis">03106225430</span>
      </i>

      <i class="fa fa-envelope" onclick="window.location.href=`mailto:info@universitiespage.com`"><span class=""> Email </span> <span class="displaynonethis">Click Mail</span></i>


      <!-- <i class="fa fa-user-o" data-toggle="modal" data-target="#login_model"><span>Student</i>
          <i class="fa fa-user-o" data-toggle="modal" data-target="#login_model_consult"><span>Consultant </span></i> -->
      <!-- <i class="fa fa-user-o"><span><a href="{{route('student-login')}}" class="">Student</a></i>
          <i class="fa fa-user-o"><span><a href="{{route('consultant-login')}}" class="">Consultant</a></span></i> -->
      @if(Auth::check())
      <!-- User is logged in, hide the links -->
      @else
      <!-- User is not logged in, show the links -->
      <i class="fa fa-user"><span><a href="{{ route('student-login') }}" class="">Student</a></span></i>
      <!-- <div class="fa username-box bottom-nav-links user-login-icons">
        <a class="logedin-user" href="javascript:void(0);" style="font-size: 20px;">
          <i class="fa fa-user-o">
            <span style="font-size: 14px; font-weight:300; color:black; display:inline-block;">
              Student
            </span>
          </i>
        </a>
        <div class="dropdown-login-user">
          <div class="carot"></div>
          <ul>
            <li align="center"><a href="{{ route('student-login') }}">Login</a></li>
            <li align="center"><a href="{{route('student-register')}}">Register</a></li>
          </ul>
        </div>
      </div>

      <div class="fa username-box bottom-nav-links user-login-icons">
        <a class="logedin-user" href="javascript:void(0);" style="font-size: 20px;">
          <i class="fa fa-user-o">
            <span style="font-size: 14px; font-weight:300; color:black; display:inline-block;">
            Consultant
            </span>
          </i>
        </a>
        <div class="dropdown-login-user">
          <div class="carot"></div>
          <ul>
            <li align="center"><a href="{{ route('student-login') }}">Login</a></li>
            <li align="center"><a href="{{route('consultant-register')}}">Register</a></li>
          </ul>
        </div>
      </div> -->
      <i class="fa fa-user" id="consultant"><span><a href="{{ route('consultant-login') }}" class="">Consultant</a></span></i>
      @endif
      
      @if(Auth::check())
      @if(auth()->user()->user_type=='student')
      <div id="vue-notification" class="fa bottom-nav-links user-login-icons">
        <a class="col-auto c-navbar-contactUs notification-btn">
          <i class="fa fa-bell"></i>
          <b v-if="(notifications && notifications.length>0)?true:false" v-text="notifications.length"></b>
        </a>

        <div class="dropdown-noti">
          <div class="pointer-up"></div>
          <h5 class="noti-heading">Notification</h5>
          <div v-for="notification in notifications.slice(0, 3)" @click="read(notification.id)">
            <a v-if="notification.type=='application'" :href="baseUrl+'/dashboard#applications'">
              <div class="notes">
                <h5 class="notes-title">Application @{{notification.meta}}</h5>
                <p class="notes-date"> @{{moment(notification.created_at).format('Do MMM YYYY, h:mm a')}}</p>
              </div>
            </a>
            <a v-if="notification.type=='application_status'" :href="baseUrl+'/dashboard#applications'">
              <div class="notes">
                <h5 class="notes-title">Application @{{notification.meta}}</h5>
                <p class="notes-date"> @{{moment(notification.created_at).format('Do MMM YYYY, h:mm a')}}</p>
              </div>
            </a>
            <a v-if="notification.type=='review-replay'" :href="baseUrl+'/university/'+notification.message">
              <div class="notes">
                <h5 class="notes-title">@{{notification.meta}}</h5>
                <p class="notes-date"> @{{moment(notification.created_at).format('Do MMM YYYY, h:mm a')}}</p>
              </div>
            </a>
          </div>
          <div class="notes" v-if="(notifications && notifications.length==0)?true:false">
            <p class="notes-date" align="center" style="font-size: 12px;margin: 0;"> No Notification</p>
          </div>

          <a href="{{url('dashboard#notification')}}" class="noti-seemore">See All Notification</a>
        </div>
      </div>
      @endif

    {{-- <div class="username-box bottom-nav-links">--}}
    {{-- <a class="logedin-user" href="javascript:void(0);"><i class="fa fa-fw fa-user-circle-o"></i></a>--}}
    {{-- <div class="dropdown-login-user">--}}
    {{-- <div class="carot"></div>--}}
    {{-- <ul>--}}
    {{-- <li>HI, {{(auth()->user()->first_name)??''}} {{(auth()->user()->last_name)??''}}</li>--}}
    {{-- <li><a href="{{url((auth()->user()->user_type=='student')?'dashboard':'admin')}}" target="_blank">Dashboard</a></li>--}}
    {{-- @if(auth()->user()->user_type=='student')<li><a href="{{url('dashboard#profile')}}" target="_blank">Profile</a></li>@endif--}}
    {{-- <li class="logout-btn">Logout</li>--}}
    {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
    {{-- {{ csrf_field() }}--}}
    {{-- </form>--}}
    {{-- </ul>--}}
    {{-- </div>--}}
    {{-- --}}{{-- <div class="username-name">--}}
    {{-- <span>{{(auth()->user()->first_name)??''}} {{(auth()->user()->last_name)??''}}</span>--}}
    {{-- </div> --}}
    {{-- </div>--}}
    @else
    {{-- <a class="bottom-nav-links" style="cursor:pointer;font-size: 21px;" data-toggle="modal" data-target="#login_model">--}}
    {{-- <i class="fa fa-fw fa-key"></i>--}}
    {{-- </a>--}}
    
    <!-- modal start here -->
    <div class="modal c-navbarModal" id="login_model" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
              <!-- login start -->
                    <div class="login-form">
                        <div class="modal-heading-container">
                            <h3 class=" user-modal-heading">Login as Student
                            </h3>
                            <button type="button" class="close modal-close-button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="form-inline login-student" method="POST">
                            {{csrf_field()}}
                            <label class="sr-only" for="login_email">Email</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text input-icon student-login-icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                </div>
                                <input type="email" name="email" class="form-control"  placeholder="Enter Your Email">
                                <div id="ResetMsg" style="font-size: 12px;color: red;position: absolute;text-align: center;width: 100%;font-weight: 500;top: -20px;"></div>
                            </div>

                            <label class="sr-only" for="login_password">Password</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text input-icon student-login-icon">
                                        <i class="fa fa-key"></i>
                                    </div>
                                </div>
                                <input type="password" name="password" class="form-control"  placeholder="Password">
                            </div>

                            <div class="login-forgot-main pt-2 pb-4">
                                <div class="form-check mb-0">
                                    <label class="login-remember-label mb-0">
                                        <input type="checkbox" name="" value="1">
                                        <span> Remember me </span>
                                    </label>
                                </div>
                                {{-- =========Amir edit --}}
                                <a class="forgot-link" href="{{ route('password.request') }}">@lang('Forgot password?')</a>
                                {{-- =======End amir edit======= --}}
                            </div>

                            <button type="submit" class="btn btn-primary mb-2 w100p submit-btn">Submit</button>
                        </form>
                        <p class="register-as-student">Register As Student</p>
                    </div>
                    <!-- login end -->
                    <!-- registration start -->
                    <div class="registration-form" id="register-validate" style="display:none;">
                        <div class="modal-heading-container">
                            <h3 class="user-modal-heading">Registration as Student
                            </h3>
                            <button type="button" class="close modal-close-button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="form-inline" method="POST" @submit="submitReg($event)">
                            <input type="hidden" value="student" name="user_type">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text input-icon student-login-icon">
                                                <i class="fa fa-user-o"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="first_name" v-model="list.first_name" class="form-control" placeholder="First/given name(s)">
                                        <div class="reg-error-msg" v-if="errors.first_name" v-for="error in errors.first_name">
                                            <span v-text="error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                            <div class="input-group-text input-icon student-login-icon">
                                                <i class="fa fa-user-o"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="last_name" v-model="list.last_name" class="form-control" placeholder="Enter Your Last Name">
                                        <div class="reg-error-msg" v-if="errors.last_name" v-for="error in errors.last_name">
                                            <span v-text="error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text input-icon student-login-icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                        </div>
                                        <input type="email" name="email" v-model="list.email" class="form-control" placeholder="Enter Valid Email Address">
                                        <div class="reg-error-msg" v-if="errors.email" v-for="error in errors.email">
                                            <span v-text="error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text input-icon student-login-icon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                        </div>
                                        <input type="number" name="phone" v-model="list.phone" class="form-control" placeholder="Mobile Number">
                                        <div class="reg-error-msg" v-if="errors.phone" v-for="error in errors.phone">
                                            <span v-text="error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text input-icon student-login-icon">
                                                <i class="fa fa-key"></i>
                                            </div>
                                        </div>
                                        <input type="password" name="password" v-model="list.password" class="form-control" placeholder="Password">
                                        <div class="reg-error-msg" v-if="errors.password" v-for="error in errors.password">
                                            <span v-text="error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                            <div class="input-group-text input-icon student-login-icon">
                                                <i class="fa fa-key"></i>
                                            </div>
                                        </div>
                                        <input type="password" name="password_confirmation" v-model="list.password_confirmation" class="form-control" placeholder="Confirm Password">
                                        <div class="reg-error-msg" v-if="errors.password_confirmation" v-for="error in errors.password_confirmation">
                                            <span v-text="error"></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 mb-3">
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text input-icon student-login-icon">
                                        <i class="fa fa-home"></i>
                                      </div>
                                    </div>
                                        <select name="country" class="form-control w100p country-select" required>
                                            <option selected="" disabled>--Nationality--</option>

                                            <option value="Afganistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaco">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="India">India</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Phillipines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>

                                        </select>
                                        <div class="reg-error-msg" v-if="errors.country" v-for="error in errors.country">
                                            <span v-text="error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text input-icon student-login-icon">
                                                <i class="fa fa-home"></i>
                                            </div>
                                        </div>
                                         <select name="city"  v-model="list.city" class="form-control w100p city-select" required>
                                            <option selected="" disabled>--Select City--</option>
                                            <option value="Karachi">Karachi</option>
                                                    <option value="Lahore">Lahore</option>
                                                    <option value="Islamabad">Islamabad</option>
                                                    <option value="Faisalabad">Faisalabad</option>
                                                    <option value="Rawalpindi">Rawalpindi</option>
                                                    <option value="Multan">Multan</option>
                                                    <option value="Peshawar">Peshawar</option>
                                                    <option value="Quetta">Quetta</option>
                                                    <option value="Sialkot">Sialkot</option>
                                                    <option value="Bahawalpur">Bahawalpur</option>
                                                    <option value="Gujranwala">Gujranwala</option>
                                                    <option value="Sargodha">Sargodha</option>
                                                    <option value="Hyderabad">Hyderabad</option>
                                                    <option value="Jhang">Jhang</option>
                                                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                                    <option value="Mardan">Mardan</option>
                                                    <option value="Chiniot">Chiniot</option>
                                                    <option value="Larkana">Larkana</option>
                                                    <option value="Muzaffarabad">Muzaffarabad</option>
                                                    <option value="Skardu">Skardu</option>
                                                    <option value="Gwadar">Gwadar</option>
                                                    <option value="Bannu">Bannu</option>
                                                    <option value="Khuzdar">Khuzdar</option>
                                                    <option value="Kasur">Kasur</option>
                                                    <option value="Jhelum">Jhelum</option>
                                                    <option value="Mianwali">Mianwali</option>
                                                    <option value="Sahiwal">Sahiwal</option>
                                                    <option value="Tando Adam">Tando Adam</option>
                                                    <option value="Tando Allahyar">Tando Allahyar</option>
                                                    <option value="Sukkur">Sukkur</option>
                                                    <option value="Chaman">Chaman</option>
                                                    <option value="Kohat">Kohat</option>
                                                    <option value="Dir">Dir</option>
                                                    <option value="Swat">Swat</option>
                                                    <option value="Pishin">Pishin</option>
                                                    <option value="Sadiqabad">Sadiqabad</option>
                                                    <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                                    <option value="Hafizabad">Hafizabad</option>
                                                    <option value="Pakpattan">Pakpattan</option>
                                                    <option value="Sheikhupura">Sheikhupura</option>
                                                    <option value="Mingora">Mingora</option>
                                                    <option value="Chiniot">Chiniot</option>
                                                    <option value="Jampur">Jampur</option>
                                                    <option value="Lodhran">Lodhran</option>
                                                    <option value="Khushab">Khushab</option>
                                                    <option value="Layyah">Layyah</option>
                                                    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                                    <option value="Gujrat">Gujrat</option>
                                                    <option value="Chakwal">Chakwal</option>
                                                    <option value="Jaranwala">Jaranwala</option>
                                                    <option value="Sohawa">Sohawa</option>
                                                    <option value="Nowshera">Nowshera</option>
                                                    <option value="Shikarpur">Shikarpur</option>
                                                    <option value="Hangu">Hangu</option>
                                                    <option value="Bannu">Bannu</option>
                                                    <option value="Mirpurkhas">Mirpurkhas</option>
                                                    <option value="Chak Jhumra">Chak Jhumra</option>
                                                    <option value="Bhakkar">Bhakkar</option>
                                                    <option value="Patti">Patti</option>
                                                    <option value="Ghotki">Ghotki</option>
                                                    <option value="Kashmore">Kashmore</option>
                                                    <option value="Jacobabad">Jacobabad</option>
                                                    <option value="Kotli">Kotli</option>
                                                    <option value="Haveli">Haveli</option>
                                                    <option value="Malkwal">Malkwal</option>
                                                    <option value="Barkhan">Barkhan</option>
                                                    <option value="Mastung">Mastung</option>
                                                    <option value="Kalat">Kalat</option>
                                                    <option value="Loralai">Loralai</option>
                                                    <option value="Turbat">Turbat</option>
                                                    <option value="Zhob">Zhob</option>
                                        </select>
                                        <div class="reg-error-msg" v-if="errors.city" v-for="error in errors.city">
                                            <span v-text="error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text input-icon student-login-icon">
                                          <i class="fa fa-building"></i>
                                        </div>
                                      </div>
                                        <select name="prefer" class="form-control w100p prefer-select">
                                            <option selected="" disabled>--What type of program would you prefer?--</option>
                                            @foreach(qualification() as $prefer)
                                            <option value="{{$prefer->id}}" @if(old('prefer')==$prefer->id) selected="" @endif>{{$prefer->title}}</option>
                                            @endforeach
                                        </select>
                                        <div class="reg-error-msg" v-if="errors.prefer" v-for="error in errors.prefer">
                                            <span v-text="error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-2 text-left" style="height: 26px;">
                                    <label class="custom-radio mr-1" style="display: inline-block; padding-left:25px"> Male
                                        <input type="radio" name="gender" checked="" v-model="list.gender" value="male">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom-radio" style="display: inline-block; padding-left:30px"> Female
                                        <input type="radio" name="gender" v-model="list.gender" value="female">
                                        <span class="checkmark" style="margin-left: 8px;"></span>
                                    </label>
                                    <div class="reg-error-msg" v-if="errors.gender" v-for="error in errors.gender">
                                        <span v-text="error"></span>
                                    </div>
                                </div>
                            </div>



                            <input type="hidden" name="company_name" value="none">
                            <input type="hidden" name="employeeno" value="none">
                            <input type="hidden" name="state" value="none">
                            <input type="hidden" name="designation" value="none">
                            <input type="hidden" name="comment" value="none">



                            <div class="form-check text-left mb-4">
                                <label class="login-remember-label mb-0">
                                    <input type="checkbox" name="terms" v-model="list.terms" value="1">
                                    <span> I agree to the <a class="term-condition-link" href="{{url('terms-and-condition')}}">Terms And Conditions</a> </span>
                                </label>
                                <div class="reg-error-msg" style="bottom:-3px;" v-if="errors.terms" v-for="error in errors.terms">
                                    <span v-text="error"></span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mb-2 w100p submit-btn">Register</button>
                        </form>
                        <p class="login-as-student">Login</p>
                    </div>
                    <!-- registration end -->

            <div id="autocomplete_result_model" class="autocomplete-result o-ruled-list"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- consultion modal start -->
    <div class="modal c-navbarModal" id="login_model_consult" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">

          <!-- consultant login start here -->
            <div class="login-form">
              <div class="modal-heading-container">
                <h2 class="user-modal-heading" align="center">Login as Consultant</h2>
                    <button type="button modal-close-button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form class="form-inline login-student" method="POST">
                {{csrf_field()}}
                <label class="sr-only" for="login_email">Email</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text input-icon student-login-icon">
                      <i class="fa fa-envelope-o"></i>
                    </div>
                  </div>
                  <input type="email" name="email" class="form-control"  placeholder="Enter Your Email">
                  <div id="ResetMsg" style="font-size: 12px;color: red;position: absolute;text-align: center;width: 100%;font-weight: 500;top: -20px;"></div>
                </div>

                <label class="sr-only" for="login_password">Password</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text input-icon student-login-icon">
                      <i class="fa fa-key"></i>
                    </div>
                  </div>
                  <input type="password" name="password" class="form-control"  placeholder="Password">
                </div>

                <!-- <div class="form-check mb-2">
                  <label>
                    <input type="checkbox" name="" value="1">
                    <span> Remember me </span>
                  </label>
                </div>
                {{-- =========Amir edit --}}
                <p><small><a href="{{ route('password.request') }}">@lang('Forgot password?')</a></small></p>
                {{-- =======End amir edit======= --}} -->

                <div class="login-forgot-main pt-2 pb-4">
                  <div class="form-check mb-0">
                    <label class="login-remember-label mb-0">
                    <input type="checkbox" name="" value="1">
                      <span> Remember me </span>
                    </label>
                  </div>
                  {{-- =========Amir edit --}}
                    <a class="forgot-link" href="{{ route('password.request') }}">@lang('Forgot password?')</a>
                  {{-- =======End amir edit======= --}}
                </div>


                <button type="submit" class="btn btn-primary mb-2 w100p submit-btn">Submit</button>
              </form>
              <p class="register-as-student">Register As Consultant</p>
            </div>
          <!-- consultant login end here -->

          <!-- consultant register start here -->

            <div class="registration-form" id="register-validateconsult" style="display:none;">
              <div div class="modal-heading-container">
                  <h2 class="user-modal-heading" align="center">Registration as Consultant</h2>
                    <button type="button modal-close-button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form class="form-inline" method="POST" @submit="submitReg($event)">
                <input type="hidden" value="consultant" name="user_type">
                <div class="row">
                  <div class="col-sm-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text input-icon student-login-icon">
                          <i class="fa fa-building"></i>
                        </div>
                      </div>
                      <input type="text" name="company_name" v-model="list.company_name" class="form-control" placeholder="Company name">
                      <div class="reg-error-msg" v-if="errors.company_name" v-for="error in errors.company_name">
                        <span v-text="error"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-3">
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text input-icon student-login-icon">
                          <i class="fa fa-user-o"></i>
                        </div>
                      </div>
                      <select name="employeeno" class="form-control" v-model="list.employeeno">
                        <option selected="" value="">--No Of Employees--</option>

                        <option value="1-5">1-5</option>
                        <option value="6-10">6-10</option>
                        <option value="11-50">11-50</option>
                        <option value="50_more">50+</option>

                      </select>
                      <div class="reg-error-msg" v-if="errors.employeeno" v-for="error in errors.employeeno">
                        <span v-text="error"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-3">
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text input-icon student-login-icon">
                          <i class="fa fa-home"></i>
                        </div>
                      </div>
                      <select name="country" class="form-control w100p country-select" required>
                        <option selected="">--Nationality--</option>
                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bonaire">Bonaire</option>
                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Canary Islands">Canary Islands</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Channel Islands">Channel Islands</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Island">Cocos Island</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote DIvoire">Cote DIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curaco">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Ter">French Southern Ter</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Midway Islands">Midway Islands</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nambia">Nambia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherland Antilles">Netherland Antilles</option>
                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                        <option value="Nevis">Nevis</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau Island">Palau Island</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Pitcairn Island">Pitcairn Island</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                        <option value="Republic of Serbia">Republic of Serbia</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="St Barthelemy">St Barthelemy</option>
                        <option value="St Eustatius">St Eustatius</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                        <option value="St Lucia">St Lucia</option>
                        <option value="St Maarten">St Maarten</option>
                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                        <option value="Saipan">Saipan</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa American">Samoa American</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tahiti">Tahiti</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Emirates</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uraguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State">Vatican City State</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                        <option value="Wake Island">Wake Island</option>
                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zaire">Zaire</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>

                      </select>
                      <div class="reg-error-msg" v-if="errors.country" v-for="error in errors.country">
                        <span v-text="error"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text input-icon student-login-icon">
                          <i class="fa fa-home"></i>
                        </div>
                      </div>
                      <input type="text" name="state" v-model="list.state" class="form-control" placeholder="State">
                      <div class="reg-error-msg" v-if="errors.state" v-for="error in errors.state">
                        <span v-text="error"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text input-icon student-login-icon">
                          <i class="fa fa-home"></i>
                        </div>
                      </div>
                       <select name="city"  v-model="list.city" class="form-control w100p city-select" required>
                                            <option value="Karachi">Karachi</option>
                                            <option value="Lahore">Lahore</option>
                                            <option value="Islamabad">Islamabad</option>
                                            <option value="Faisalabad">Faisalabad</option>
                                            <option value="Rawalpindi">Rawalpindi</option>
                                            <option value="Multan">Multan</option>
                                            <option value="Peshawar">Peshawar</option>
                                            <option value="Quetta">Quetta</option>
                                            <option value="Sialkot">Sialkot</option>
                                            <option value="Bahawalpur">Bahawalpur</option>
                                            <option value="Gujranwala">Gujranwala</option>
                                            <option value="Sargodha">Sargodha</option>
                                            <option value="Hyderabad">Hyderabad</option>
                                            <option value="Jhang">Jhang</option>
                                            <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                            <option value="Mardan">Mardan</option>
                                            <option value="Chiniot">Chiniot</option>
                                            <option value="Larkana">Larkana</option>
                                            <option value="Muzaffarabad">Muzaffarabad</option>
                                            <option value="Skardu">Skardu</option>
                                            <option value="Gwadar">Gwadar</option>
                                            <option value="Bannu">Bannu</option>
                                            <option value="Khuzdar">Khuzdar</option>
                                            <option value="Kasur">Kasur</option>
                                            <option value="Jhelum">Jhelum</option>
                                            <option value="Mianwali">Mianwali</option>
                                            <option value="Sahiwal">Sahiwal</option>
                                            <option value="Tando Adam">Tando Adam</option>
                                            <option value="Tando Allahyar">Tando Allahyar</option>
                                            <option value="Sukkur">Sukkur</option>
                                            <option value="Chaman">Chaman</option>
                                            <option value="Kohat">Kohat</option>
                                            <option value="Dir">Dir</option>
                                            <option value="Swat">Swat</option>
                                            <option value="Pishin">Pishin</option>
                                            <option value="Sadiqabad">Sadiqabad</option>
                                            <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                            <option value="Hafizabad">Hafizabad</option>
                                            <option value="Pakpattan">Pakpattan</option>
                                            <option value="Sheikhupura">Sheikhupura</option>
                                            <option value="Mingora">Mingora</option>
                                            <option value="Chiniot">Chiniot</option>
                                            <option value="Jampur">Jampur</option>
                                            <option value="Lodhran">Lodhran</option>
                                            <option value="Khushab">Khushab</option>
                                            <option value="Layyah">Layyah</option>
                                            <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                            <option value="Gujrat">Gujrat</option>
                                            <option value="Chakwal">Chakwal</option>
                                            <option value="Jaranwala">Jaranwala</option>
                                            <option value="Sohawa">Sohawa</option>
                                            <option value="Nowshera">Nowshera</option>
                                            <option value="Shikarpur">Shikarpur</option>
                                            <option value="Hangu">Hangu</option>
                                            <option value="Bannu">Bannu</option>
                                            <option value="Mirpurkhas">Mirpurkhas</option>
                                            <option value="Chak Jhumra">Chak Jhumra</option>
                                            <option value="Bhakkar">Bhakkar</option>
                                            <option value="Patti">Patti</option>
                                            <option value="Ghotki">Ghotki</option>
                                            <option value="Kashmore">Kashmore</option>
                                            <option value="Jacobabad">Jacobabad</option>
                                            <option value="Kotli">Kotli</option>
                                            <option value="Haveli">Haveli</option>
                                            <option value="Malkwal">Malkwal</option>
                                            <option value="Barkhan">Barkhan</option>
                                            <option value="Mastung">Mastung</option>
                                            <option value="Kalat">Kalat</option>
                                            <option value="Loralai">Loralai</option>
                                            <option value="Turbat">Turbat</option>
                                            <option value="Zhob">Zhob</option>
                                        </select>
                      <div class="reg-error-msg" v-if="errors.city" v-for="error in errors.city">
                        <span v-text="error"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-3">
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text input-icon student-login-icon">
                          <i class="fa fa-home"></i>
                        </div>
                      </div>
                      <input type="text" name="address" v-model="list.address" class="form-control" placeholder="Address">
                      <div class="reg-error-msg" v-if="errors.address" v-for="error in errors.address">
                        <span v-text="error"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text input-icon student-login-icon">
                          <i class="fa fa-user-o"></i>
                        </div>
                      </div>
                      <input type="text" name="first_name" v-model="list.first_name" class="form-control" placeholder="First/given name(s)">
                      <div class="reg-error-msg" v-if="errors.first_name" v-for="error in errors.first_name">
                        <span v-text="error"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text input-icon student-login-icon">
                          <i class="fa fa-user-o"></i>
                        </div>
                      </div>
                      <input type="text" name="last_name" v-model="list.last_name" class="form-control" placeholder="Enter Your Last Name">
                      <div class="reg-error-msg" v-if="errors.last_name" v-for="error in errors.last_name">
                        <span v-text="error"></span>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text input-icon student-login-icon">
                          <i class="fa fa-user-o"></i>
                        </div>
                      </div>
                      <input type="text" name="designation" v-model="list.designation" class="form-control" placeholder="Designation">
                      <div class="reg-error-msg" v-if="errors.designation" v-for="error in errors.designation">
                        <span v-text="error"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text input-icon student-login-icon">
                          <i class="fa fa-envelope-o"></i>
                        </div>
                      </div>
                      <input type="email" name="email" v-model="list.email" class="form-control" placeholder="Enter Valid Email Address">
                      <div class="reg-error-msg" v-if="errors.email" v-for="error in errors.email">
                        <span v-text="error"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text input-icon student-login-icon">
                          <i class="fa fa-phone"></i>
                        </div>
                      </div>
                      <input type="number" name="phone" v-model="list.phone" class="form-control" placeholder="Mobile Number">
                      <div class="reg-error-msg" v-if="errors.phone" v-for="error in errors.phone">
                        <span v-text="error"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text input-icon student-login-icon">
                          <i class="fa fa-key"></i>
                        </div>
                      </div>
                      <input type="password" name="password" v-model="list.password" class="form-control" placeholder="Password">
                      <div class="reg-error-msg" v-if="errors.password" v-for="error in errors.password">
                        <span v-text="error"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text input-icon student-login-icon">
                          <i class="fa fa-key"></i>
                        </div>
                      </div>
                      <input type="password" name="password_confirmation" v-model="list.password_confirmation" class="form-control" placeholder="Confirm Password">
                      <div class="reg-error-msg" v-if="errors.password_confirmation" v-for="error in errors.password_confirmation">
                        <span v-text="error"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text input-icon student-login-icon">
                          <i class="fa fa-comment"></i>
                        </div>
                      </div>
                      <input type="text" name="comment" v-model="list.comment" class="form-control" placeholder="Comment">
                      <div class="reg-error-msg" v-if="errors.comment" v-for="error in errors.comment">
                        <span v-text="error"></span>
                      </div>
                    </div>
                  </div>
                </div>


                <div style="display: none;" class="row">
                  <div class="col-sm-6 mb-3" style="height: 26px;">
                    <label class="custom-radio" style="display: inline-block;"> Male
                      <input type="radio" name="gender" checked="" v-model="list.gender" value="male">
                      <span class="checkmark" style="margin-left: 8px;"></span>
                    </label>
                    <label class="custom-radio" style="display: inline-block;"> Female
                      <input type="radio" name="gender" v-model="list.gender" value="female">
                      <span class="checkmark" style="margin-left: 8px;"></span>
                    </label>
                    <div class="reg-error-msg" v-if="errors.gender" v-for="error in errors.gender">
                      <span v-text="error"></span>
                    </div>
                  </div>
                </div>

                <div style="display: none;" class="row">

                  <input type="hidden" name="prefer" value="none">

                </div>

                <!-- <div class="form-check mb-2">
                  <label>
                    <input type="checkbox" name="terms" v-model="list.terms" value="1">
                    <span> I agree to the <a href="{{url('terms-and-condition')}}" style="color: #c52228 !important;">Terms And Conditions</a> </span>
                  </label>
                  <div class="reg-error-msg" style="bottom:-3px;" v-if="errors.terms" v-for="error in errors.terms">
                    <span v-text="error"></span>
                  </div>
                </div> -->

                <div class="form-check text-left mb-4">
                  <label class="login-remember-label mb-0">
                    <input type="checkbox" name="terms" v-model="list.terms" value="1">
                    <span> I agree to the <a class="term-condition-link" href="{{url('terms-and-condition')}}">Terms And Conditions</a> </span>
                  </label>
                  <div class="reg-error-msg" style="bottom:-3px;" v-if="errors.terms" v-for="error in errors.terms">
                    <span v-text="error"></span>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary mb-2 w100p submit-btn">Register</button>
              </form>
              <p class="login-as-student">Login</p>
            </div>
            <!-- consultant register end here -->
            <div id="autocomplete_result_model" class="autocomplete-result o-ruled-list"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- modal end here -->
    @endif


      @if(Auth::check())
      @if(auth()->user()->user_type=='student' OR auth()->user()->user_type=='consultant')
      <div class="fa username-box bottom-nav-links user-login-icons">
        <a class="logedin-user" href="javascript:void(0);" style="font-size: 20px;"><i class="fa fa-fw fa-user-circle-o">
            <span style="font-size: 14px; font-weight:300; color:black; display:inline-block;">{{(auth()->user()->first_name)??''}} {{(auth()->user()->last_name)??''}}</span>
            
          </i>

        </a>
        <div class="dropdown-login-user">
          <div class="carot"></div>
          <ul>
            <li align="center">HI, {{(auth()->user()->first_name)??''}} {{(auth()->user()->last_name)??''}}</li>
            <li align="center"><a href="{{url((auth()->user()->user_type=='student')?'dashboard':'admin')}}">Dashboard</a></li>
            @if(auth()->user()->user_type=='student')<li align="center"><a href="{{url('dashboard#profile')}}">Profile</a></li>@endif
            <li align="center" class="logout-btn">Logout</li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </ul>
        </div>
        {{-- <div class="username-name">
               <span>{{(auth()->user()->first_name)??''}} {{(auth()->user()->last_name)??''}}</span>
      </div> --}}
    </div>
    @endif
    @endif


</div>
<div class="largest-portal-block">

  <!-- <p class="largest-portal-paragraph blue">Pakistan's Largest <br><span class="largest-span">Study Abroad Portal</span></p>
  <div class="largest-icon-main">
    <img class="largest-icon" src="{{ url('/filemanager/photos/1/new_style/svg/golden-one.svg') }}" alt="" srcset="">
    <img class="largest-icon img-hidden" src="{{ url('/filemanager/photos/1/new_style/svg/blue-one.svg') }}" alt="" srcset="">
  </div> -->
  <img alt="Pakistani No 1Study Abroad Portal" class="top-right-one-image" src="{{ url('/filemanager/photos/1/new_style/animation/no1.gif') }}" alt="" srcset="">
</div>
</nav>
{{-- <div class="modal c-navbarModal" id="SearchModal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header is-borderless">
            <h5 class="modal-title">Search</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <p>Search Uni for courses, universities, guides and articles</p>
            <form class="input-group" method="GET" action="">
               <input id="search_text_mobile" type="text" name="q" data-autoselect="mobile" class="form-control js-search-text js-onModalOpen-focus" placeholder="" autocomplete="off" value="">
               <span class="input-group-btn">
               <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
               </span>
            </form>
            <div id="autocomplete_result_model" class="autocomplete-result o-ruled-list"></div>
         </div>
      </div>
   </div>
</div> --}}



<style type="text/css">
  #navbarNav ul li a {
    font-size: 14px !important;
  }
</style>


<nav class="bg-primary navbar-main">
  <div class="container-fluid navbar navbar-expand-lg navbar-light mobile-menu bottom-navbar-main">
    <button style="background: white; cursor: pointer; line-height:0px; margin-left:auto;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="height: 30px; width:20px;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mt-0 bottom-nav-list">
        <!-- Your navigation list items go here -->
        <li class="nav-item">
          <a class="nav-link" style="margin-right: 7px;" href="{{url('/')}}">
            <i class="fa fa-home"></i> <span class="u-xs-small95">Home</span>
          </a>
        </li>

        @foreach(primaryMenu() as $menu)


        @continue($menu->url == 'complaint')
        @continue($menu->url == 'discount-offer')

        @if($menu->title !== ' Free Consulation')

        <li class="nav-item">
          <a class="nav-link " style="margin-right: 7px;" href="{{url(($menu['url'])??'#.')}}">
            <i class="{{($menu['icon'])??''}}"></i> <span class="u-xs-small95">{{($menu['title'])??''}}</span>
          </a>
        </li>
        @else

        <li class="nav-item">
          <a id="triggerFreeConsultation" class="nav-link" style="margin-right: 7px;" onclick="consulation()">
            <span class="u-xs-small95">Free Consultation</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('track-application')}}" style="margin-right: 7px;">
            <span class="u-xs-small95">Track Application</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('discount-offer')}}" style="margin-right: 7px;">
            <span class="u-xs-small95">100% Discount Offer</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('apply-online')}}" style="margin-right: 7px;">
            <span class="u-xs-small95">Apply Online</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('complaint')}}" style="margin-right: 7px;">
            <span class="u-xs-small95">Complaint</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact-us')}}" style="margin-right: 7px;">
            <span class="u-xs-small95">Contact Us</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('jobs')}}" style="margin-right: 7px;">
            <span class="u-xs-small95">Job Opportunities</span>
          </a>
        </li>
        @endif
        @endforeach
      </ul>
    </div>
  </div>
</nav>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function makePhoneCall(phoneNumber) {
        // Remove non-numeric characters from the phone number
        phoneNumber = phoneNumber.replace(/\D/g, '');
        
        // Check if the platform supports the tel: protocol
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            // For mobile devices, use tel: protocol to trigger phone call
            window.location.href = 'tel:' + phoneNumber;
        } else {
            // For desktop or unsupported platforms, display a message or use a different method
            alert('This feature is not supported on your device. Please dial the number manually.');
        }
    }
</script>
<script>
  $(document).ready(function() {
    // Check if the user is on the home page
    if (window.location.pathname === '/') {
      // Remove the sticky class for mobile screens
      if ($(window).width() <= 770) {
        $('.stickyposition_mobile').removeClass('stickyposition_mobile');
        $('.bg-light').removeClass('bg-light');
      } else {
        $('.bg-light').addClass('bg-light');

      }
    }
    $('.navbar-nav .nav-item').on('click', function() {

      $('.mobile-menu .navbar-collapse').collapse('hide');
    });

    
        const articleModelStatus = 'articleFlag'; // Correctly spelled key
        const consaltationFormTime = 'formSubmittedTime';
        const timestampKey = 'articleFlagTimestamp'; // Key for the timestamp


        // const articleFlag = 'false';  // This is the value to be stored

        // If the value does not exist, set it to 'false'
        if (localStorage.getItem(articleModelStatus) === null) {
            const articleFlag = 'false'; // Initial value

            localStorage.setItem(articleModelStatus, articleFlag);
            
        }



        // Step 3: Use the retrieved value
        articleFlagStatus = localStorage.getItem(articleModelStatus);
        if (articleFlagStatus === 'false') {
            // setInterval(function() {
            //     showModal();
            // }, 20000);
            
             const urlSegments = window.location.pathname.split('/'); // Get the URL segments
                if (urlSegments[1] !== 'resume') { // Check if the first segment is not 'resume'
                    setInterval(function() {
                        showModal();
                    }, 20000); // 20000 milliseconds = 20 seconds
                }
        }



      // If the value does not exist, set it to 'false'
       if (localStorage.getItem(articleModelStatus) === 'true' && checkFormSubmittedTime() ) {
           
          localStorage.removeItem('formSubmittedTime');
          const articleFlag = 'false'; // Initial value
           localStorage.setItem(articleModelStatus, articleFlag);
          //   Show the modal again after 10 seconds
        const urlSegments = window.location.pathname.split('/'); // Get the URL segments
    if (urlSegments[1] !== 'resume') { // Check if the first segment is not 'resume'
        setTimeout(function () {
            showModal(); // Show the modal after 20 seconds
        }, 20000);
    }
        }
        




        function showModal() {
      
        $('#modal-property-languages').fadeIn(); // Show the modal
        $('#modal-property-languages').modal('show'); // Bootstrap method to show the modal
    }

    function checkFormSubmittedTime() {
        // Retrieve the value from local storage
        var storedTime = localStorage.getItem('formSubmittedTime');
        if (storedTime) {
          // Parse the stored time to a Date object
          var storedDate = new Date(storedTime)
          
            // Get the current date and time
            var currentDate = new Date();
            // Calculate the difference in milliseconds
            var timeDifference = currentDate - storedDate ;
            // Check if the difference is greater than 30 seconds (30000 ms)
            // if (timeDifference > 30000) {
            //   console.log("this os the current tuime and ais passed away");
            //   return true;
               
            // } else {
            //   return false;
            // }
            
             // Check if the difference is greater than 2 days (2 days = 2 * 24 * 60 * 60 * 1000 ms)
            if (timeDifference > 2 * 24 * 60 * 60 * 1000) {
                console.log("The time has exceeded 2 days. Removing from local storage.");
                return true; // Indicate that time is expired
            } else {
                console.log('Form submission time is still valid.');
                return false; // Time is still valid
            }
          } else {
          return false;
         
        }
    }

 

  });
</script>
<script>
    document.addEventListener('keydown', function(event) {
        // Disable F12
        if (event.key === 'F12') {
            event.preventDefault();
        }

        // Disable Ctrl+Shift+I (Inspect Element)
        if (event.ctrlKey && event.shiftKey && event.key === 'I') {
            event.preventDefault();
        }

        // Disable Ctrl+Shift+J (Console)
        if (event.ctrlKey && event.shiftKey && event.key === 'J') {
            event.preventDefault();
        }

        // Disable Ctrl+U (View Source)
        if (event.ctrlKey && event.key === 'U') {
            event.preventDefault();
        }
    });
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ED3GGDQ1XM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ED3GGDQ1XM');
</script>