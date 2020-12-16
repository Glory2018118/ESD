<?php
/**
 * Created by PhpStorm.
 * User: DREAM
 * Date: 12/12/2020
 * Time: 10:20 AM
 */
?>

<div class="mainBg" >

  <div class = "row mt-5 mb-5">
    <div class = "col-md-3"></div>
    <h3 class="dayHead mt-5" >
      <i class="flaticon-interface-11"></i> &nbspBILLING INFORMATION

    </h3>

  </div>
  <div class = "row normalText">

    <div class = "col-md-3"></div>
    <form class="myNavBg  col-md-6">

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
          <label>Company Name</label>
          <input type="text" class="form-control" name = "companyName" >

        </div>
        <div class="form-group row">
          <label>VAT number</label>
          <input type="text" class="form-control" name = "vatNumber" >

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

          <label class="kt-checkbox kt-checkbox--bold mt-5">
            <input type="checkbox"> Use this address as default billing address
            <span></span>
          </label>
        </div>

        <div class="form-group row mb-5 mt-5">
          <button type="submit" class="btn btn-success btn-md btn-save mb-5">Save</button>

        </div>
      </div>


    </form>

    <div class = "col-md-3"></div>
  </div>
</div>

