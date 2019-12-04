<?php
include('admin_header.php');
?>


<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">


        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Product</h4>
              <!-- <p class="card-description">
                Make
              </p> -->
              <br><br>
              <form class="forms-sample" action="<?php echo base_url() ?>Admin/Add_product" method="POST" class="comment-form" enctype="multipart/form-data" >
                <div class="form-group">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="exampleInputName1"> Select Make</label>
                      </div>
                  <div class="col-md-8">
                    <select class="form-control form-control-lg" name="make_id" id="exampleFormControlSelect1">
                      <?php  foreach ($make_list as $make_name) {
                        ?>
                        <option value="<?php echo $make_name->make_id; ?>"> <?php echo $make_name->make_name; ?></option>
                      <?php }  ?>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="exampleInputName1"> Select Make</label>
                      </div>
                  <div class="col-md-8">
                    <select class="form-control form-control-lg" name="category_id" id="exampleFormControlSelect1">
                      <?php  foreach ($category_list as $category_name) {
                        ?>
                        <option value="<?php echo $category_name->category_id; ?>"> <?php echo $category_name->category_name; ?></option>
                      <?php }  ?>
                      </select>
                    </div>
                  </div>
                </div>



              <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <label for="exampleInputName1"> Product Name</label>
                    </div>
                <div class="col-md-8">
                  <input type="text" name="product_name" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
              </div>
            </div>

            <div class="form-group">
                <div class="row">
                  <div class="col-md-4">
                      <label>File upload</label>
                  </div>
                  <div class="col-md-8">
                      <input type="file" name="" value="">
                  </div>
                </div>
              </div>
                <br><br>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                            <label>File upload</label>
                        </div>
                        <div class="col-md-8">
                            <input type="file" name="" value="">
                        </div>

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









      <!-- </div>
    </div> -->
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

        <!-- content-wrapper ends -->
        <?php
      include('admin_footer.php');
      ?>
