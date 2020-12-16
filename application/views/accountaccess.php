<?php
/**
 * Created by PhpStorm.
 * User: DREAM
 * Date: 12/12/2020
 * Time: 9:55 AM
 */
?>


<div class="mainBg" >

  <div class = "row mt-5 mb-5">
    <div class = "col-md-3"></div>
    <h3 class="dayHead mt-5 " >
      <i class="flaticon-lock"></i> &nbspACCOUNT ACCESS

    </h3>

  </div>
  <div class = "row">

    <div class = "col-md-3"></div>
    <form class="col-md-6">

      <div class="form normalText">
        <div class = "form-group row">
          Your password must be at least 6 characters long, <br>
          you can add special characters *@# to make stronger.
        </div>
        <div class="form-group row">
          <label>Current Password<span class="textRed">*</span></label>
          <input type="password" class="form-control" name = "currentPassword">

        </div>
        <div class="form-group row">
          <label>New Password<span class="textRed">*</span></label>
          <input type="password" class="form-control" name = "newPassword">

        </div>
        <div class="form-group row">
          <label>Confirm New Password<span class="textRed">*</span></label>
          <input type="password" class="form-control" name = "confirmNewPassword">

        </div>
        <div class="form-group row mb-5">
          <button type="submit" class="btn btn-md btn-save mt-5 mb-5">Save Password</button>

        </div>


      </div>


    </form>

    <div class = "col-md-3"></div>
  </div>
</div>

