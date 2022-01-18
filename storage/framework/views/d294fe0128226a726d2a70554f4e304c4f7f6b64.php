
<?php $__env->startSection('content'); ?>
<div class="container my-5 z-depth-1">


  <!--Section: Content-->
  <section class="dark-grey-text">

    <div class="row pr-lg-5">
      <div class="col-md-7 mb-4">
          
        <div class="view">
          <img src="https://cf.shopee.ph/file/1a1078d04b7ac711e6a7692738b9ca45" class="img-fluid" alt="smaple image">
        </div>

      </div>
      <div class="col-md-5 d-flex align-items-center">
        <div>
          
          <h3 class="font-weight-bold mb-4">Shikishi ; Luo Binghe (Human ver)</h3>

          <p class="font-arial mb-4">Bagi yang kolektor yang nama nya kertas ganteng, mungkin akan terasa familiar sama yang nama nya Shikishi.</p>
          <p>Yup! Shikishi adalah sebuah kertas yang cukup keras dan tebal dan memiliki gambar seperti yang ada di foto ini.</p>
          <p>Shikishi ini dibuat oleh Nanmanshe yang bekerja sama dengan tencent.</p>
        </div>
      </div>
    </div>
    <div class="row pr-lg-5">
      <div class="col-md-7 mb-4">

  <!--Section: Content-->
  <!--Section heading-->
<h2 class="h1-responsive font-weight-bold text-center my-4">Comment</h2>
<!--Section description-->
<div class="row">
    <!--Grid column-->
    <div class="col-md-20 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
            <!--Grid row-->
            <div class="row">
            </div>>
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <label for="message">Your Comment</label>
                    </div>
                </div>
            </div>
            <!--Grid row-->
        </form>

        <div class="text-center text-md-left">
        <a button type="button" class="btn btn-primary"a href="http://127.0.0.1:8000/">Submit</a>
        </div>
        <div class="status"></div>
    </div>
    <!--Grid column-->
</div>

</section>
<!--Section: Contact v.2-->



</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\aimerch\resources\views/frontend/articles/shikishi.blade.php ENDPATH**/ ?>