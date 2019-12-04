<?php
include('admin_header.php');
?>


<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">


        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Make</h4>
              <!-- <p class="card-description">
                Make
              </p> -->
              <br><br>
              <form class="forms-sample" id="make_add" action="<?php echo base_url() ?>Admin/Add_make" method="POST" class="comment-form" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="row">
                  <div class="col-md-4">
                      <label for="exampleInputName1"> Make Name</label>
                  </div>
                <div class="col-md-8">
                    <input type="text" name="make_name" class="form-control" id="exampleInputName1" placeholder="Name" Required>
                </div>
                  </div>

<br><br>
                  <div class="row ">
                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary mr-2">ADD</button>
                    <button class="btn btn-light">Cancel</button>
                  </div>

                  </div>

              </form>
                </div>
            </div>
          </div>
        </div>









      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

        <!-- content-wrapper ends -->
        <?php
      include('admin_footer.php');
      ?>
