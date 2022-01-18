
<?php $__env->startSection('content'); ?>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-4">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-2 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>
              <a button type="button" class="btn btn-primary"a href="http://127.0.0.1:8000/home">Login</a>
            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="http://127.0.0.1:8000/Register" class="text-white-50 fw-bold">Register</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\aimerch\resources\views/masuk/login.blade.php ENDPATH**/ ?>