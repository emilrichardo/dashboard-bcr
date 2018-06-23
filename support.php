
<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>
<?php include("includes/aside.php") ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-dark0">


    

    

    


           
            
    <!-- Content Header (Page header) -->
    <div class="content-header ">
      <div class="container-fluid">
        <div class="welcome bg-dark rounded py-3 px-5 mt-4">
          <h3> <i class="fas fa-headset text-warning"></i> Support        
          </h3>
          
        </div>


        <section class="filter-wallets my-3">
          <div class="card bg-warning text-dark ">
                <div class="card-header">
                  <h3 class="card-title ls3">FILTERS</h3>
          
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body my-3">
                  <form class="form text-uppercase">
                    <div class="row justify-content-center">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label for="username"  class="mr-3  ">Username</label>
                          <input type="text"  class="form-control  form-control-lg" id="username" placeholder="Username">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group ">
                          <label for="status" class="mr-3  ">Status</label>
                          <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                            <option>All</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group ">
                          <label for="date-star" class="mr-3  ">Start date</label>
                          <input type="text"  class="form-control  form-control-lg" id="date-star" placeholder="DD/MM/AAAA">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group ">
                          <label for="date-end" class="mr-3  ">End date</label>
                          <input type="text"  class="form-control  form-control-lg" id="date-end" placeholder="DD/MM/AAAA">
                        </div>
                      </div>

                      <div class="col-md-10 text-right">
                        <button type="submit" class="btn btn-dark btn-lg  mb-2">SEARCH <i class="fas fa-search ml-4"></i></button>

                        <button type="submit" class="btn btn-outline-dark  btn-lg  mb-2">Recet <i class="fas fa-sync ml-4"></i></button>
                      </div>
                      
                    </div>

                  </form>
                  
                </div>
                <!-- /.card-body -->
              </div>
        </section>

        <section class="wallet-detail">
          <div class="card my-5 bg-dark  card-outline">
            <div class="card-header ls3">
              <div class="card-title">TICKETS</div>
            </div>
            <div class="card-table">
              <table class="table table-dark">
                <thead class="text-warning">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">DATE</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">FIRST NAME</th>
                    <th scope="col">LAST NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">VIEW</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>                    
                    <td>5</td>
                    <td>June 18, 2018 23:01</td>
                    <td>Aguilablanca</td>
                    <td>Rodrigo </td>
                    <td>Carabajal</td>
                    <td>roc@carabajal.com</td>
                    <td>New</td>
                    <td><a href="#" class="btn  btn-outline-warning btn-sm ">Tread</a></td>
                  </tr>
                  <tr>                    
                    <td>5</td>
                    <td>June 18, 2018 23:01</td>
                    <td>Aguilablanca</td>
                    <td>Rodrigo </td>
                    <td>Carabajal</td>
                    <td>roc@carabajal.com</td>
                    <td>New</td>
                    <td><a href="#" class="btn  btn-outline-warning btn-sm ">Tread</a></td>
                  </tr>
                  <tr>                    
                    <td>5</td>
                    <td>June 18, 2018 23:01</td>
                    <td>Aguilablanca</td>
                    <td>Rodrigo </td>
                    <td>Carabajal</td>
                    <td>roc@carabajal.com</td>
                    <td>New</td>
                    <td><a href="#" class="btn  btn-outline-warning btn-sm ">Tread</a></td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-outline-warning btn-lg">
                NEW TICKET <i class="fas fa-plus"></i>
              </a>
            </div>
          </div>
        </section>



        

        

        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content mt-4">
      <div class="container-fluid">

        


        

        



      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
<?php include("includes/footer.php") ?>
  
