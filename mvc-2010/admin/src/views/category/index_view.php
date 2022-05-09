<?php if(!defined('PATH_ADMIN')) die('Can not access !!!'); ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
<div class="row">
    <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
        <form method="post" id="js-form-category" class="border p-3">
            <div class="form-group">
                <label for="cateName">Name:</label>
                <input type="text" class="form-control" name="cateName" id="cateName">
            </div>
            <div class="form-group">
                <label for="cateDesc">Description:</label>
                <textarea name="cateDesc" id="cateDesc" rows="5"  class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="cateParent">Parent:</label>
                <select name="cateParent" id="cateParent" class="form-control">
                    <option value="">--Vui long chon--</option>
                    <option value="0" selected>Root</option>
                </select>
            </div>
            <button type="button" class="btn btn-success" id="btnAdd" name="btnAdd">Add Category</button>
        </form>
    </div>
</div>

<div class="row mt-3">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
       <div id="js-data-category"></div>
    </div>
</div>
