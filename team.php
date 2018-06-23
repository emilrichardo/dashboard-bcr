
<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>
<?php include("includes/aside.php") ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-dark0">


    

    

    


           
            
    <!-- Content Header (Page header) -->
    <div class="content-header ">
      <div class="container-fluid">
        <div class="welcome bg-dark rounded py-3 px-5 mt-4">
          <h3> <i class="fas fa-users text-warning"></i> Team       
          </h3>
          
        </div>


        <section class="tabs my-5">
          <ul class="nav nav-tabs bg-dark" id="myTab" role="tablist">
            <li class="nav-item ">
              <a class="nav-link  active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><span class="h4 py-5 px-5">Unilevel List</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><span class="h4 py-5 px-5">Unilevel Tree</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><span class="h4 py-5 px-5">Binary Tree</span></a>
            </li>
          </ul>
          <div class="tab-content bg-dark2" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="card-body">
                <form class="form-inline py-5">
                  <label  for="s-user" class="text-light mr-3">Search by <br> username:</label>
                  <input type="text" class="form-control form-control-lg mb-2 mr-sm-2 w-50" id="s-user" placeholder="Username">

                  

                  

                  <button type="submit" class="btn btn-outline-warning mb-2 btn-lg">search <i class="fas fa-search ml-3"></i></button>
                </form>
              </div>
              <div class="card-table">
                <table class="table table-dark">
                  <thead class="text-warning">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="card-footer py-3">
                <a href="#" class="btn btn-lg btn-warning text-uppercase px-5">goo to my tree <i class="fas fa-sitemap ml-4"></i></a>
              </div>


            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
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
  
