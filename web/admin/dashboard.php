<!DOCTYPE html>
<html lang="en">
   <head>
      <?php 
         $title = "Dashboard";
         $css_file = "dashboard.css";
         include("../layout/header.php");
         ?>
   </head>
   <body>
      <div class="d-flex" id="wrapper">
         <!-- Sidebar-->
         <?php include("../layout/sidebar.php")?>
         <!-- Page content wrapper-->
         <div id="page-content-wrapper">
            <!-- Top navigation-->
            <?php include("../layout/navbar.php")?>
            <!-- Page content-->
            <div class="container">
               <div class="row">
                  <div class="col-9">
                     <br>
                     <br>
                     <div class="card4" style="height: 515px;">
                        <table class="table table-bordered table-striped table-hover table-light" style="border-radius: 20px;">
                           <thead class="table-dark">
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Laporan</th>
                                 <th scope="col">Karyawan</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">1</th>
                                 <td>Frontend perusahaan.com</td>
                                 <td>Muhammad Fauzan Muharram</td>
                              </tr>
                              <tr>
                                 <th scope="row">2</th>
                                 <td>frontend shoroommobil.com</td>
                                 <td>Alfian Fakhrudin</td>
                              </tr>
                              <tr>
                                 <th scope="row">3</th>
                                 <td>frontend codinglab.com</td>
                                 <td>Rafi Fajar</td>
                              </tr>
                              <tr>
                                 <th scope="row">4</th>
                                 <td>Frontend perusahaan.com</td>
                                 <td>Muhammad Fauzan Muharram</td>
                              </tr>
                              <tr>
                                 <th scope="row">5</th>
                                 <td>frontend shoroommobil.com</td>
                                 <td>Alfian Fakhrudin</td>
                              </tr>
                              <tr>
                                 <th scope="row">6</th>
                                 <td>frontend codinglab.com</td>
                                 <td>Rafi Fajar</td>
                              <tr>
                                 <th scope="row">7</th>
                                 <td>Frontend perusahaan.com</td>
                                 <td>Muhammad Fauzan Muharram</td>
                              </tr>
                              <tr>
                                 <th scope="row">8</th>
                                 <td>frontend shoroommobil.com</td>
                                 <td>Alfian Fakhrudin</td>
                              </tr>
                              <tr>
                                 <th scope="row">9</th>
                                 <td>frontend codinglab.com</td>
                                 <td>Rafi Fajar</td>
                              </tr>
                              <tr>
                                 <th scope="row">10</th>
                                 <td>Frontend perusahaan.com</td>
                                 <td>Muhammad Fauzan Muharram</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <center>
                     <div class="card-pagination">
                     <nav aria-label="Page-navigation ">
                        <ul class="pagination  ">
                           <li class="page-item disabled">
                              <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              </a>
                           </li>
                           <li class="page-item active"><a class="page-link" href="#">1</a></li>
                           <li class="page-item"><a class="page-link" href="#">2</a></li>
                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                           <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              </a>
                           </li>
                        </ul>
                     </nav>
                     </div>
                     </center>
                  </div>
                  <div class="card2">
                     <div class="card3">
                        <center>
                           Zaki ketoprak
                           <br>
                           Username
                        </center>
                     </div>
                     <div class="card3">
                        <center>
                           Divisi
                           <br>
                           Jabatan
                        </center>
                     </div>
                     <center>
                        <table class="table table-bordered table-striped table-hover table-light" style="border-radius: 20px;">
                           <thead class="table-dark">
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Karyawan Terbaik</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">1</th>
                                 <td>Muhammad <br> Fauzan <br> Muharram</td>
                              </tr>
                              <tr>
                                 <th scope="row">2</th>
                                 <td>Alfian Fakhrudin</td>
                              </tr>
                              <tr>
                                 <th scope="row">3</th>
                                 <td>Rafi Fajar</td>
                              </tr>
                           </tbody>
                        </table>
                     </center>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <script src="../../asset/js/darkmode.js"></script>
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Core theme JS-->
      <?php include("../layout/script.php");?>
   </body>
</html>