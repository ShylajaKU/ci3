
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

<div class="container-fluid" style="max-width:800px ;">
  <div class="px-lg-5">

    <!-- Heading -->
    <div class="row py-5">
      <div class="col-lg-12 mx-auto">
        <div class="text-white p-5 shadow-sm rounded banner">
            <h1 class="display-5">Search by</h1>

<?php if($user_gender == 'female'){
            $edu = 'highest_education_grooms';
            $pro = 'professions_list_grooms';
            $inc = 'annual_income_grooms';
            $class = 'family_class_grooms';
            $mar = 'marital_status_grooms';
            $lan = 'language_list_grooms';
            }
            if($user_gender == 'male'){
              $edu = 'highest_education_brides';
              $pro = 'professions_list_brides';
              $inc = 'annual_income_brides';
              $class = 'family_class_brides';
              $mar = 'marital_status_brides';
              $lan = 'language_list_brides';
            }
            ?>
    <!-- <input type="text" name="hidden" value="hidden" hidden> -->
    <!-- this works only on each forms not in common -->
    <!-- ============================ -->
    <?= form_open('',array('id'=>'form-1',)) ?>
    <!-- ============================ -->
    <input type="text" name="hidden" value="hidden" hidden>
    <label class="form-label" for="he">Highest Education Qualification *</label>
        <select class="form-control" id="he" name="highest_education" required onchange="fn1()">
            <?php 
            $array = explode(',',$user_id_table[0][$edu]);
            $count = count($array);
            ?>
          <option value="any" selected>Select</option>
          <?php for ($i = 0; $i < $count; $i++) { ?>
            <option value="<?php echo $array[$i] ?>"><?=  $array[$i] ?></option>'
          <?php }?>
        </select>
        <!-- ============================ -->
    <?= form_close()?>
    <?= form_open('',array('id'=>'form-2',)) ?>
        <!-- ============================ -->
    <input type="text" name="hidden" value="hidden" hidden>
        <label class="form-label" for="o">Occupation *</label>
    <select class="form-control" id="o" name="occupation" required onchange="fn2()">
      <?php 
      $array = explode(',',$user_id_table[0][$pro]);
      $count = count($array);
      ?>
        <option value="0" selected>Select</option>
      <?php for ($i = 0; $i < $count; $i++) { ?>
        <option value="<?php echo $array[$i] ?>"><?=  $array[$i] ?></option>'
      <?php }?>
    </select>
        <!-- ============================ -->
            <?= form_close()?>
        <?= form_open('',array('id'=>'form-3',)) ?>
        <!-- ============================ -->
    <input type="text" name="hidden" value="hidden" hidden>

        <label class="form-label" for="he">Annual Income *</label>
    <select class="form-control" id="he" name="income_bracket" required onchange="fn3()">
      <?php 
      $array = explode(',',$user_id_table[0][$inc]);
      $count = count($array);
      ?>
        <option value="0" selected>Select</option>
      <?php for ($i = 0; $i < $count; $i++) { ?>
        <option value="<?php echo $array[$i] ?>"><?=  $array[$i] ?></option>'
      <?php }?>
    </select>
        <!-- ============================ -->
        <?= form_close()?>
        <?= form_open('',array('id'=>'form-4',)) ?>
        <!-- ============================ -->
    <input type="text" name="hidden" value="hidden" hidden>

        <label class="form-label" for="fc">Family Class *</label>
    <select class="form-control" id="fc" name="family_class" required onchange="fn4()">
      <?php 
      $array = explode(',',$user_id_table[0][$class]);
      $count = count($array);
      ?>
        <option value="0" selected>Select</option>
      <?php for ($i = 0; $i < $count; $i++) { ?>
        <option value="<?php echo $array[$i] ?>"><?=  $array[$i] ?></option>'
      <?php }?>
    </select>
        <!-- ============================ -->
                <?= form_close()?>
        <?= form_open('',array('id'=>'form-5',)) ?>
        <!-- ============================ -->
    <input type="text" name="hidden" value="hidden" hidden>

        <label class="form-label" for="ms">Marital Status *</label>
    <select class="form-control" id="ms" name="marital_status" required onchange="fn5()">
      <?php 
      $array = explode(',',$user_id_table[0][$mar]);
      $count = count($array);
      ?>
        <option value="0" selected>Select</option>
      <?php for ($i = 0; $i < $count; $i++) { ?>
        <option value="<?php echo $array[$i] ?>"><?=  ucwords($array[$i]) ?></option>'
      <?php }?>
    </select>
    <!-- ============================ -->
    <?= form_close()?>
        <?= form_open('',array('id'=>'form-6',)) ?>
        <!-- ============================ -->
    <input type="text" name="hidden" value="hidden" hidden>

    <label class="form-label" for="ms">Mother Tounge *</label>
    <select class="form-control" id="ms" name="mother_tounge" required onchange="fn6()">
      <?php 
      $array = explode(',',$user_id_table[0][$lan]);
      $count = count($array);
      ?>
        <option value="0" selected>Select</option>
      <?php for ($i = 0; $i < $count; $i++) { ?>
        <option value="<?php echo $array[$i] ?>"><?=  ucwords($array[$i]) ?></option>'
      <?php }?>
    </select>
    <!-- ============================ -->
    <?= form_close()?>
    <!-- ============================ -->
    <br>

  </div>
      </div>
    </div>
    <!-- End Heading -->

  </div>
  </div>




<script>
    function fn1(){
    setTimeout = 100;
    document.getElementById("form-1").submit();}
    function fn2(){
    setTimeout = 100;
    document.getElementById("form-2").submit();}
    function fn3(){
    setTimeout = 100;
    document.getElementById("form-3").submit();}
    function fn4(){
    setTimeout = 100;
    document.getElementById("form-4").submit();}
    function fn5(){
    setTimeout = 100;
    document.getElementById("form-5").submit();}
    function fn6(){
    setTimeout = 100;
    document.getElementById("form-6").submit();}
</script>


