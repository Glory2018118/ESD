<?php
/**
 * Created by PhpStorm.
 * User: DREAM
 * Date: 12/12/2020
 * Time: 10:25 AM
 */
?>


<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor mainBg" id="kt_content">

  <div class = "kt-form kt-form--label-right descriptBg mt-5">
    <div class="form-group row kt mt-5 mb-5" >
        <label class="col-form-label col-md-4 dayHead textBold">Search</label>
        <input class = "form-control col-md-4 kt-align-center" name = "globalSearch" >
        <div class="input-group-append col-md-4">
          <span class = "btn btn-globalSearch" >
            <i class="la la-search"></i>
          </span>
        </div>
    </div>
    <div class = "form-group row" >
      <label class="col-form-label col-md-2 dayHead textBold">Filters</label>
      <div class = "row col-md-10">
        <div class = "col-md-2 m-0">
          <select class = "form-control selectpicker" name = "sportSearch">
            <option value = "ftb"> Football</option>
            <option value = "bkb"> Basketball</option>
            <option value = "ten"> Tennis</option>
          </select>
        </div>
        <div class = "col-md-2 m-0">
          <select class = "form-control selectpicker" name = "countrySearch">

            <option value = "eng"> England</option>
            <option value = "chn"> China</option>
            <option value = "frn"> France</option>

          </select>

        </div>
        <div class = "col-md-2 m-0">
          <select class = "form-control selectpicker" name = "competitionSearch">

            <option value = "leg"> League</option>

          </select>

        </div>

        <div class = "col-md-2 m-0">
          <select class = "form-control selectpicker" name = "seasonFromSearch">

            <option value = "0"> Season From</option>
            <option value = "2019"> 2019</option>
            <option value = "2020"> 2020</option>

          </select>

        </div>

        <div class = "col-md-2 m-0">
          <select class = "form-control selectpicker" name = "seasonTomSearch">

            <option value = "0"> Season to</option>
            <option value = "2019"> 2019</option>
            <option value = "2020"> 2020</option>

          </select>

        </div>

        <button class = "input-group-append btn btn-md btn-signup">Apply</button>
      </div>



    </div>
  </div>

  <div class = "kt-datatable mt-5"></div>

  <div class = "row mb-2 mt-5 mb-5">
    <div class = "col-md-5"></div>
    <button class = "btn btn-md btn-save ml-5">Lead More...</button>
  </div>
</div>

<script src = "<?=base_url()?>assets/js/index/home.js" type = "text/javascript"></script>
