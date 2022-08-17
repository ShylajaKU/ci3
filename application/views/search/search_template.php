
<link rel="stylesheet" href="<?= base_url('assets/css/selectize.bootstrap3.min.css')?>">
<script src="<?= base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/js/selectize.min.js')?>"></script>

<style>
body {
  background: #f4f4f4;
}

.banner {
  background: #a770ef;
  background: -webkit-linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
  background: linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
}

</style>

<div class="container-fluid">
  <div class="px-lg-5">

    <!-- Heading -->
    <div class="row py-5">
      <div class="col-lg-12 mx-auto">
        <div class="text-white p-5 shadow-sm rounded banner">
            <h1 class="display-5">Search</h1>
            <?= form_open() ?>
    <!-- ============================ -->
<label class="form-label" for="he">Highest Education Qualification *</label>
<select class="form-control" id="he" name="highest_education" onchange="showDiv('hidden_div', this)" required>
    
        <option value="0" selected>Any</option>
    <?php foreach($highest_education_list as $he){ ?>
        <option value="<?= $he['highest_education'] ?>"><?=  $he['highest_education'] ?></option>
    <?php }?>
        <option value="0">Other</option>

</select>
    <!-- ============================ -->

            <?= form_close() ?>
        </div>
      </div>
    </div>
    <!-- End Heading -->

  </div>
  </div>