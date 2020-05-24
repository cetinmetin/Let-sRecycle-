<?php
  require_once 'header.php';
  error_reporting(0);
  if($_SESSION["userState"]!=0) header("Location: index.php");
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kullanıcılar <small>Çalışan listesi.</small><small style="color: #e74c3c; font-weight: 800;"><?php if($_SESSION["employeeRemove"]) echo $_SESSION["employeeRemove"]; ?></small></h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="table-responsive">
                      
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">ID</th>
                            <th class="column-title">Ad-Soyad</th>
                            <th class="column-title">Kullanıcı Adı</th>
                            <th class="column-title">Email</th>
                            <th class="column-title">Telefon</th>
                            <th class="column-title">Durum</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $query = $db->query("SELECT * FROM kullanici WHERE kullaniciDurum <> 0", PDO::FETCH_ASSOC);
                            if ( $query->rowCount() ){
                              foreach( $query as $row ){
                                
                                  echo "<tr>
                                          <td class='column-content'>".$row["kullaniciID"]."</td>
                                          <td class='column-content'>".$row["kullaniciIsim"]." ".$row["kullaniciSoyad"]."</td>
                                          <td class='column-content'>".$row["kullaniciAd"]."</td>
                                          <td class='column-content'>".$row["kullaniciEmail"]."</td>
                                          <td class='column-content'>".$row["kullaniciTelefon"]."</td>
                                          <td class='column-content'>".$row["kullaniciDurum"]."</td>
                                        </tr>";
                              }
                            }
                          ?>
                        </tbody>
                      </table>                
                    </div>
                    <div class="col-md-6">
                      <div class="form-group"><form action="../../config/index.php" method="post">
                        <label for="talepSil">ID:<small> Silmek istediğiniz kullanıcının ID'sini giriniz. </small></label>
                          <input type="number" name="removeUserID" id="removeUserID" placeholder="ID" class="form-control">
                      </div>
                      <div class="form-group">
                          <input type="submit" name="removeUserButton" id="removeUserButton" value="Sil" class="btn btn-info">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Geri Dönüşüm - Bootstrap Admin Template by <a href="https://instagram.com/batuc35">Batuhan ÇAM</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>