<?php
/**
 * Created by PhpStorm.
 * User: DREAM
 * Date: 12/9/2020
 * Time: 8:46 PM
 */
?>

<script src="<?=base_url()?>assets/js/form-controls.js" type="text/javascript"></script>

<div class="mainBg" >

  <div class = "mt-5 mb-5 kt-align-center">

    <h3 class="dayHead mt-5" align = "center">
      CREATE ACCOUNT

    </h3>


  </div>
  <div class = "row">

    <div class = "col-md-3"></div>
    <form class="normalText kt-container col-md-6 kt-form" id="signUpForm" type = "post" action = "<?=base_url()?>user/login">

      <div class="kt-container ">

        <div class="form-group row ">
          <div class = "col-md-6">
            <label>Username*</label>
            <input  class="form-control" type = "text" name="username">
          </div>
          <div class = "col-md-6">
            <label>Email address*</label>
            <input  class="form-control" type = "text" name="email">
          </div>
        </div>

        <div class="form-group row">
          <div class = "col-md-6">
            <label>Password</label>
            <input type="password" class="form-control" name = "password" >
          </div>

          <div class = "col-md-6">
            <label>Repeat password</label>
            <input type="password" class="form-control" name = "repeatPassword" >
          </div>
        </div>



        <div class = "form-group row">

          <div class = "col-md-12">
            <label class=" kt-checkbox kt-checkbox--bold">
              <input type="checkbox"> I have read and agree the
              <a href = "<?=base_url()?>">
                <label class = "dayHead underlineText">Terms & Conditions</label>
              </a>
              <span></span>
            </label>
          </div>


        </div>
        <div class="form-group row kt-form__actions">
          <div class = "col-md-12">
            <button type="submit" class="btn btn-lg btn-signup">Sign up</button>
          </div>

        </div>
        <div class = "form-group row mb-5">
          <div class = "col-md-12 mt-2 mb-2">
            * Already have an account?  <a href = "<?=base_url()?>user/login"> <span class = "dayHead underlineText">Login page</span></a>
          </div>

        </div>
      </div>


    </form>

    <div class = "col-md-3"></div>
  </div>
</div>

