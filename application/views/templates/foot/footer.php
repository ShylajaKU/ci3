<?php $site_name = 'matrimony.illikkal.com'; ?>
<!-- Footer-->
<footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; <?= $site_name; ?> 2022</p></div>
            <div class="container px-4"><p class="m-0 text-left text-white"><a href="<?= base_url('privacy-policy')?>">Privacy Policy</a></p></div>
            <div class="container px-4"><p class="m-0 text-left text-white"><a href="<?= base_url('terms-and-conditions')?>">Terms and Conditions</a></p></div>
            <div class="container px-4"><p class="m-0 text-left text-white"><a href="<?= base_url('#contact')?>">Contact Us</a></p></div>
            <br>
            <div class="container px-4"><p style="font-size:13px ;" class="m-0 text-center text-white">
                This website is strictly for matrimonial purpose only. You should not use this as a dating website.
            </p></div>

        </footer>
<!-- <footer class="py-5 bg-light">
            <div class="container"><p class="m-0 text-center text-black">Copyright &copy; <?= $site_name; ?> 2022</p></div>
        </footer>  -->

<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->

<script async src="<?= base_url('assets/js/bootstrap.bundle.min.js')?>"></script>

<?php $allowed_pages = array(
    '',
    'please-verify-your-email',
    ); ?>
<?php $page_name = $this->uri->uri_string(1); ?>
<?php if(in_array($page_name , $allowed_pages)){ ?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62ec006737898912e961466c/1g9ku35jl';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<?php } ?>

</body>
</html>