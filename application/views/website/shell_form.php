<?php
include('header.php');
?>

<br>
<br>
<div id="pricing" class="pricing-area area-padding">
<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="section-headline text-center">
        <h2>Shell Form</h2>
      </div>
    </div>
  </div>
<div class="col-md-12">
<div class="form contact-form">

  <form action="" method="post" role="form" class="">
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="title"> Enter Shell Title</label>
        </div>
      </div>
      <div class="col-md-8">
        <div class="form-group">
          <input type="text" />
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="title"> Enter Product Title</label>
        </div>
      </div>
      <div class="col-md-8">
        <div class="form-group">
          <input type="text" />
        </div>
      </div>
    </div>

    <div class="form-group">
      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
      <div class="validation"></div>
    </div>

  </form>
</div>
</div>
</div>
</div>
<?php
include('footer.php');
?>
