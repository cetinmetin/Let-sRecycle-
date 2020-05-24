<?php
  require_once 'header.php';
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Talepler <small>Kullanıcıların oluşturduğu talepler.</small><small style="color: #e74c3c; font-weight: 800;"><?php if($_SESSION["reportWarning"]) echo $_SESSION["reportWarning"]; ?></small></h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="table-responsive">
                      
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">ID</th>
                            <th class="column-title">Ad-Soyad</th>
                            <th class="column-title">E-mail</th>
                            <th class="column-title">Telefon</th>
                            <th class="column-title">Mesaj</th>
                            <th class="column-title">İlce</th>
                            <th class="column-title">Atık Türü</th>
                            <th class="column-title">Ağırlık</th>
                            <th class="column-title">Durum</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $query = $db->query("SELECT * FROM talepview WHERE talepDurum = 0 ORDER BY talepID DESC", PDO::FETCH_ASSOC);
                            $query2 = $db->query("SELECT * FROM talepview WHERE talepDurum = 1 ORDER BY talepID DESC", PDO::FETCH_ASSOC);
                            if ( $query->rowCount() ){
                              foreach( $query as $row ){
                                if($row["talepDurum"]==0){
                                  $style = "background-color:#e74c3c; color:#FFF;";
                                  $button = "<a href='../../config/index.php?id={$row['talepID']}&durum=1' class='btn btn-success'>0</a>";
                                }
                                  echo "<tr style='{$style}'>
                                          <td class='column-content'>".$row["talepID"]."</td>
                                          <td class='column-content'>".$row["talepAd"]." ".$row["talepSoyad"]."</td>
                                          <td class='column-content'>".$row["talepEmail"]."</td>
                                          <td class='column-content'>".$row["talepTelefon"]."</td>
                                          <td class='column-content'>".$row["talepMesaj"]."</td>
                                          <td class='column-content'>".$row["ilceAd"]."</td>
                                          <td class='column-content'>".$row["atikAd"]."</td>
                                          <td class='column-content'>".$row["talepMiktar"]."</td>
                                          <td class='column-content'>{$button}</td>
                                        </tr>";
                              }
                            }
                            if($query2 ->rowCount()){
                              foreach( $query2 as $row ){
                                if($row["talepDurum"]==1){
                                $style = "background-color:#2ecc71; color:#FFF;";
                                $button = "<a href='../../config/index.php?id={$row['talepID']}&durum=0' class='btn btn-danger'>1</a>";
                              }
                                  echo "<tr style='{$style}'>
                                          <td class='column-content'>".$row["talepID"]."</td>
                                          <td class='column-content'>".$row["talepAd"]." ".$row["talepSoyad"]."</td>
                                          <td class='column-content'>".$row["talepEmail"]."</td>
                                          <td class='column-content'>".$row["talepTelefon"]."</td>
                                          <td class='column-content'>".$row["talepMesaj"]."</td>
                                          <td class='column-content'>".$row["ilceAd"]."</td>
                                          <td class='column-content'>".$row["atikAd"]."</td>
                                          <td class='column-content'>".$row["talepMiktar"]."</td>
                                          <td class='column-content'>{$button}</td>
                                        </tr>";
                              }
                            }
                          ?>
                        </tbody>
                      </table>                
                    </div>
                    <div class="col-md-6">
                      <div class="form-group"><form action="../../config/index.php" method="post">
                        <label for="talepSil">ID:<small> Silmek istediğiniz talebin ID'sini giriniz. </small></label>
                          <input type="number" name="talepSil" id="talepSil" placeholder="ID" class="form-control">
                      </div>
                      <div class="form-group">
                          <input type="submit" name="talepSilButton" id="talepSilButton" value="Sil" class="btn btn-info">
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