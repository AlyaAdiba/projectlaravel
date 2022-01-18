@extends ('layout')
@section ('content')
<div class="container my-5 z-depth-1">


  <!--Section: Content-->
  <section class="dark-grey-text">

    <div class="row pr-lg-5">
      <div class="col-md-7 mb-4">
          
        <div class="view">
          <img src="https://images.goodsmile.info/cgm/images/product/20201026/10301/76362/large/cf289f4f42bfa46180c3a0f0984a73a0.jpg" class="img-fluid" alt="smaple image">
        </div>

      </div>
      <div class="col-md-5 d-flex align-items-center">
        <div>
          
          <h3 class="font-weight-bold mb-4">Nendoroid Luo BingHe</h3>

        	<p>Mungkin dari sebagian orang yang mengunjungi website ini pastii menyukai yang nama nya figure. Baik figure 1:6 scale yang memiliki tinggi 30 cm, figure 1:1 scale yang berukuran layak nya seperti manusia, atau mini figure seperti Nendoroid ini. </p>
            <p>Pada nendoroid ini, kalian bisa menggerakan part (bagian) tangan dan kaki yang ada di figure ini. Kalian juga dapat mengganti ekspresi wajah nendoroid tersebut dengan face plate tambahan yang sudah diberikan oleh pihak Good Smile Company.</p>
            <p>Nendoroid ini dibuat oleh perusahaan besar di Jepang yang bernama Good Smile Company (GSC) yang memiliki kantor produksi di Jepang dan China.</p>
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
@endsection