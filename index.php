
<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>
<?php include("includes/aside.php") ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-dark0">


    

    

    


           
            
    <!-- Content Header (Page header) -->
    <div class="content-header ">
      <div class="container-fluid">
        <div class="welcome bg-dark rounded py-3 px-5 mt-4">
          <h3>Dashboard | 
            <small> Welcome back Username - Last log in on <span class="date">16 November</span> at <span class="hs">1:30 pm</span></small>
          </h3>
          
        </div>



        <div class="marquee info-current my-4">
          <ul class="marquee-content-items quotation font2">
            <li class="quotation">ETH: £ 372.67 (<i class="fas fa-arrow-circle-up text-success"></i>   3.08 %)</li>
            <li class="quotation">XMR: $ 128.07 (<i class="fas fa-arrow-circle-down text-danger"></i>   6.74 %)</li>
            <li class="quotation">XMR: € 110.89 (<i class="fas fa-arrow-circle-up text-success"></i>   -1.27 %)</li>
            <li class="quotation">XMR: ¥ 904.47 (<i class="fas fa-arrow-circle-up text-success"></i>  1.27 %)</li>
            <li class="quotation">XMR: £ 96.69 (<i class="fas fa-arrow-circle-up text-success"></i>  1.27 %)</li>
            <li class="quotation">LTC: $ 96.95 (<i class="fas fa-arrow-circle-up text-success"></i>   -7.26 %)</li>
            <li class="quotation">XMR: ¥ 904.47 (<i class="fas fa-arrow-circle-up text-success"></i>  1.27 %)</li>

          </ul>
        </div>

        

        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content mt-4">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-3">
            <div class="card bg-warning-gradient py-4">
              <div class="card-body">
                <h4>CREDIT</h4>
                <h4 class="font2">98500.00</h4>
                <div class="icon">
                  <i> <img src="dist/img/icons/coins.png" alt=""> </i>
                </div> 
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-dark py-4">
              <div class="card-body">
                <h5>LIFETIME HEARNING</h5>
                <h4 class="font2">98500.00</h4>
                <div class="icon">
                  <i class="fas fa-2x fa-coins text-warning"></i>
                </div> 
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-dark py-4">
              <div class="card-body">
                <h5>DAILY</h5>
                <h4 class="font2">837.59</h4>
                <div class="icon">
                  <i class="fas fa-2x fa-calendar-check text-warning"></i>
                </div> 
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-dark py-4">
              <div class="card-body">
                <h5>COMMISSIONS</h5>
                <h4 class="font2">132.40</h4>
                <div class="icon">
                  <i class="fas fa-2x fa-chart-pie text-warning"></i>
                </div> 
              </div>
            </div>
          </div>
        </div>


        <section class="stats text-light my-4 py-4">
          <h4>STATS</h4>
          <div class="row mt-3">
            <div class="col-md-6">
              <div class="card bg-dark">
                <div class="card-header">
                  <div class="float-right">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-ellipsis-v"></i>
                  </button>
                </div>
                </div>
                <div class="card-body">
                 <div class="row align-items-center justify-content-center mb-5">
                   <div class="col-md-5">
                     <p class="h4">REPURCHASE PERCENTAGE</p>
                   </div>


                   <div class="col-md-5">
                    <!-- colocar jquery de grafica de torta - colocar color #d8b020 amarillo como en la imagen -->
                     <img src="dist/img/charts.png" alt="">
                   </div>
                 </div>

                  
                </div>
                <div class="card-footer">
                  
                </div>
              </div>
            </div><!-- col chart -->
            <div class="col-md-3">
              <div class="card card-warning bg-dark card-outline">
                <div class="card-header">
                  NEW USERS LIVE FEED
                </div>
                <div class="card-table">
                  <table class="table table-dark  ">
                    <thead class="text-warning">
                      <tr>                        
                        <th scope="col">Username</th>
                        <th scope="col">Country</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>                        
                        <td>Juaj Nose</td>
                        <td>ES <i class="float-right flag-sm flag-sm-ES mr-2"></i></td>
                      </tr>
                      <tr>                        
                        <td>Thornton</td>
                        <td>ARG <i class="float-right flag-sm flag-sm-AR mr-2"></i></td>
                      </tr>
                      <tr>                        
                        <td>the Bird</td>
                        <td>USA <i class="float-right flag-sm flag-sm-US mr-2"></i></td>
                      </tr>
                      <tr>                        
                        <td>Abeja Reina</td>
                        <td>MEX <i class="float-right flag-sm flag-sm-MX mr-2"></i></td>
                      </tr>
                      <tr>                        
                        <td>Thornton</td>
                        <td>USA <i class="float-right flag-sm flag-sm-US mr-2"></i></td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- table life feed -->
            <div class="col-md-3">
              <div class="card  bg-dark card-outline">
                <div class="card-header">
                  USERS PER COUNTRY
                </div>
                <div class="card-table">
                  <table class="table table-dark  ">
                    <thead class="text-warning">
                      <tr>                        
                        <th scope="col">Country</th>
                        <th scope="col">#</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>                        
                        <td><i class=" flag-sm flag-sm-AR mr-2"></i> Argentina</td>
                        <td>2 </td>
                      </tr>
                      <tr>                        
                        <td><i class=" flag-sm flag-sm-US mr-2"></i> Estados Unidos</td>
                        <td>5 </td>
                      </tr>
                      <tr>                        
                        <td><i class=" flag-sm flag-sm-ES mr-2"></i> España</td>
                        <td>3</td>
                      </tr>
                      
                      <tr>                        
                        <td><i class=" flag-sm flag-sm-EN mr-2"></i> Inglaterra</td>
                        <td>1 </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>

                <div class="card-footer">
                  <a href="#" class="btn btn-block btn-outline-warning btn-sm"> Show all</a>
                </div>
              </div>
            </div><!-- table user conutry -->
          </div>
        </section>

        <img class="w-100" src="dist/img/banners/banner-bcr.png" alt="">

        



      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
<?php include("includes/footer.php") ?>
  
