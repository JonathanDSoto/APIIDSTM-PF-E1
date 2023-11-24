<!DOCTYPE html>
<!-- =========================================================
* Vuexy - Bootstrap Admin Template | v9.0.0
==============================================================
* Product Page: https://1.envato.market/vuexy_admin
* Created by: Pixinvent
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright Pixinvent (https://pixinvent.com)
=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>AutoExpress</title>
    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">
    
    
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5J3LMKC');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/logo_small_icon_only_inverted-_2.ico" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/tabler-icons.css"/>
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" /> 
    <!-- Vendor -->
<link rel="stylesheet" href="../../assets/vendor/libs/bs-stepper/bs-stepper.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/@form-validation/umd/styles/index.min.css" />
    <!-- Page CSS -->
    
<!-- Page -->
<link rel="stylesheet" href="../../assets/vendor/css/pages/page-auth.css">
    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
    
</head>
<body>
  
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Content -->
<div class="authentication-wrapper authentication-cover authentication-bg">
  <div class="authentication-inner row">
    <!-- Left Text -->
    <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-center p-5 auth-cover-bg-color position-relative auth-multisteps-bg-height">
      <img src="../../assets/img/illustrations/auth-register-multisteps-illustration.png" alt="auth-register-multisteps" class="img-fluid" width="280">
      <img src="../../assets/img/illustrations/bg-shape-image-light.png" alt="auth-register-multisteps" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.png">
    </div>
    <!-- /Left Text -->
    <!--  Multi Steps Registration -->
    <div class="d-flex col-lg-8 align-items-center justify-content-center p-sm-5 p-3">
      <div class="w-px-700">
        <div id="multiStepsValidation" class="bs-stepper shadow-none">
          <div class="bs-stepper-header border-bottom-0">
            <div class="step" data-target="#accountDetailsValidation">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="ti ti-smart-home ti-sm"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Account</span>
                  <span class="bs-stepper-subtitle">Account Details</span>
                </span>
              </button>
            </div>
            <div class="line">
              <i class="ti ti-chevron-right"></i>
            </div>
            <div class="step" data-target="#personalInfoValidation">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="ti ti-users ti-sm"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Personal</span>
                  <span class="bs-stepper-subtitle">Enter Information</span>
                </span>
              </button>
            </div>

            
          </div>
          <div class="bs-stepper-content">
            <form id="multiStepsForm" onSubmit="return false">
              <!-- Account Details -->
              <div id="accountDetailsValidation" class="content">
                <div class="content-header mb-4">
                  <h3 class="mb-1">Account Information</h3>
                  <p>Enter Your Account Details</p>
                </div>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsUsername">Username</label>
                    <input type="text" name="multiStepsUsername" id="multiStepsUsername" class="form-control" placeholder="johndoe" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsEmail">Email</label>
                    <input type="email" name="multiStepsEmail" id="multiStepsEmail" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe" />
                  </div>
                  <div class="col-sm-6 form-password-toggle">
                    <label class="form-label" for="multiStepsPass">Password</label>
                    <div class="input-group input-group-merge">
                      <input type="password" id="multiStepsPass" name="multiStepsPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multiStepsPass2" />
                      <span class="input-group-text cursor-pointer" id="multiStepsPass2"><i class="ti ti-eye-off"></i></span>
                    </div>
                  </div>
                  <div class="col-sm-6 form-password-toggle">
                    <label class="form-label" for="multiStepsConfirmPass">Confirm Password</label>
                    <div class="input-group input-group-merge">
                      <input type="password" id="multiStepsConfirmPass" name="multiStepsConfirmPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multiStepsConfirmPass2" />
                      <span class="input-group-text cursor-pointer" id="multiStepsConfirmPass2"><i class="ti ti-eye-off"></i></span>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label class="form-label" for="multiStepsURL">Profile Link</label>
                    <input type="text" name="multiStepsURL" id="multiStepsURL" class="form-control" placeholder="johndoe/profile" aria-label="johndoe" />
                  </div>
                  <div class="col-12 d-flex justify-content-between mt-4">
                    <button class="btn btn-label-secondary btn-prev" disabled> <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                      <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
                  </div>
                </div>
              </div>
              <!-- Personal Info -->
              <div id="personalInfoValidation" class="content">
                <div class="content-header mb-4">
                  <h3 class="mb-1">Personal Information</h3>
                  <p>Enter Your Personal Information</p>
                </div>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsFirstName">First Name</label>
                    <input type="text" id="multiStepsFirstName" name="multiStepsFirstName" class="form-control" placeholder="John" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsLastName">Last Name</label>
                    <input type="text" id="multiStepsLastName" name="multiStepsLastName" class="form-control" placeholder="Doe" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsMobile">Mobile</label>
                    <div class="input-group">
                      <span class="input-group-text">US (+1)</span>
                      <input type="text" id="multiStepsMobile" name="multiStepsMobile" class="form-control multi-steps-mobile" placeholder="202 555 0111" />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsPincode">Pincode</label>
                    <input type="text" id="multiStepsPincode" name="multiStepsPincode" class="form-control multi-steps-pincode" placeholder="Postal Code" maxlength="6" />
                  </div>
                  <div class="col-md-12">
                    <label class="form-label" for="multiStepsAddress">Address</label>
                    <input type="text" id="multiStepsAddress" name="multiStepsAddress" class="form-control" placeholder="Address" />
                  </div>
                  <div class="col-md-12">
                    <label class="form-label" for="multiStepsArea">Landmark</label>
                    <input type="text" id="multiStepsArea" name="multiStepsArea" class="form-control" placeholder="Area/Landmark" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsCity">City</label>
                    <input type="text" id="multiStepsCity" class="form-control" placeholder="Jackson" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsState">State</label>
                    <select id="multiStepsState" class="select2 form-select" data-allow-clear="true">
                      <option value="">Select</option>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="DC">District Of Columbia</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </select>
                  </div>
                  <div class="col-12 d-flex justify-content-between mt-4">
                    <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                      <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- / Multi Steps Registration -->
  </div>
</div>
<script>
// Check selected custom option
window.Helpers.initCustomOptionCheck();
</script>
<!-- / Content -->
  
  <div class="buy-now">
    <a href="https://1.envato.market/vuexy_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div>
  
  
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  
  <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../../assets/vendor/libs/popper/popper.js"></script>
  <script src="../../assets/vendor/js/bootstrap.js"></script>
  <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
  <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
  <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
   <script src="../../assets/vendor/js/menu.js"></script>
  
  <!-- endbuild -->
  <!-- Vendors JS -->
  <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
<script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>
<script src="../../assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
<script src="../../assets/vendor/libs/select2/select2.js"></script>
<script src="../../assets/vendor/libs/@form-validation/umd/bundle/popular.min.js"></script>
<script src="../../assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js"></script>
<script src="../../assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js"></script>
  <!-- Main JS -->
  <script src="../../assets/js/main.js"></script>
  
  <!-- Page JS -->
  <script src="../../assets/js/pages-auth-multisteps.js"></script>
  
</body>
</html>
<!-- beautify ignore:end -->
