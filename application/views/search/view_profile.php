<?php
// var_dump($user);
// var_dump($images);

?>
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
.mi{
  font-size: 20px;
  line-height: 30px;
}
.mi-img{
  width: 250px;
  height: auto;
}
</style>

<div class="container-fluid" style="max-width:800px ;">
  <div class="px-lg-5">

    <!-- Heading -->
    <div class="row py-5">
      <div class="col-lg-12 mx-auto">
        <div class="text-white p-5 shadow-sm rounded banner">
          <div class="mi-img">
        <picture>
                <source srcset="<?=base_url($images[0]['upload_path'].$images[0]['raw_name']).'.webp'?>" type="image/webp">
                <img src="<?=base_url($images[0]['upload_path'].$images[0]['file_name'])?>" class="img-fluid card-img-top" alt="user image">
        </picture>
        </div>
            <h1 class="display-5"><?= $user[0]['name']?></h1>
            <p class="mi">
            Completed <?= $user[0]['education'] ?> , works as <?= $user[0]['occupation'] ?> . 
            <br>
            Profile created by : <?= ucwords($user[0]['created_by'])?>
            <br>
              House Name : <?= $user[0]['house_name'] ?>
              <br>
              Address : <?= $user[0]['address_line_1'] ?> , <?= $user[0]['city'] ?> , <?= $user[0]['district'] ?> , <?= $user[0]['state'] ?> , <?= $user[0]['country'] ?> , <?= $user[0]['pincode'] ?> .
              <br>
              Mother Tounge : <?= $user[0]['mother_tounge'] ?>
              <br>
              Relegion : <?= $user[0]['relegion'] ?>
              <br>
              Caste : <?= ucwords(strtolower(($user[0]['caste']))) ?>
              <br>
              Sub-caste : <?= ucwords(strtolower(($user[0]['sub_caste']))) ?>
              <br>
              Family Details : <br>
              <?php
              // fem,ale id = 1
              if($user[0]['gender_id']) {echo "Doughter of ";}else{echo "Son of";} 
              ?>
              <?= $user[0]['mothers_name'] ?> and <?= $user[0]['fathers_name'] ?>
              <br>
              Grew up in a <?= $user[0]['family_class'] ?> family.
              <br>
              Contact Number : <?= $user[0]['phone_no'] ?>
          </p>
        </div>
        </div>
        </div>
        </div>
        </div>