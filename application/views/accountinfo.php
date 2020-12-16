<?php
/**
 * Created by PhpStorm.
 * User: DREAM
 * Date: 12/12/2020
 * Time: 9:27 AM
 */
?>

<div class="mainBg" >

  <div class = "row mt-5 mb-5">
    <div class = "col-md-3"></div>
    <h3 class="dayHead mt-5" >
      <i class="flaticon2-user-outline-symbol"></i> &nbspACCOUNT INFORMATION

    </h3>

  </div>
  <div class = "row">

    <div class = "col-md-3"></div>
    <form class="normalText  col-md-6">

      <div class="">
        <div class="form-group row">
          <label>Country<span class="textRed">*</span></label>
          <select class="form-control selectpicker" name="country">
            <option val = "eng"> England</option>
            <option val = "chn"> China</option>



          </select>
        </div>
        <div class=" row">
          <label class="col-md-6 pl-0 ml-0">First Name<span class="textRed">*</span></label>
          <label class="col-md-6 pl-0 m-0">Last Name<span class="textRed">*</span></label>
        </div>
        <div class="form-group row">
          <input type="text" class="col-md-5 form-control" name = "firstName">
          <div class="col-md-1"></div>
          <input type="text" class="col-md-6 form-control" name = "lastName">
        </div>

        <div class="form-group row">
          <label>Contact Email<span class="textRed">*</span></label>
          <input type="email" class="form-control" aria-describedby="emailHelp" name="email">

        </div>

        <div class="form-group row">
          <label>Company Name</label>
          <input type="text" class="form-control" name = "companyName" >

        </div>
        <div class="form-group row">
          <label>Address</label>
          <input type="text" class="form-control" name = "address">

        </div>
        <div class=" row">
          <label class="col-md-6 pl-0 ml-0">Town/City</label>
          <label class="col-md-6 pl-0 m-0">Zip Code</label>
        </div>
        <div class="form-group row">
          <input type="text" class="col-md-5 form-control" name = "town">
          <div class="col-md-1"></div>
          <input type="text" class="col-md-6 form-control" name = "zipCode">
        </div>
        <div class="form-group row mt-5 mb-5">
          <button type="submit" class="btn btn-success btn-lg btn-save mb-5 mt-5">Save</button>

        </div>
      </div>


    </form>

    <div class = "col-md-3"></div>
  </div>
</div>

