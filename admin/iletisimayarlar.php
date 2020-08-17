<?php
include "header.php";
?>

        <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1 style="color: white;">İletisim Ayarları</h1>
                                    
                        
                    <?php 

                    if ($_GET['durum']=="ok") {?>

                    <b style="color:green;">İşlem Başarılı...</b>
                        
                    <?php } elseif ($_GET['durum']=="no") {?>

                        <b style="color:red;">İşlem Başarısız...</b>

                    <?php }

                    ?>
                
                </small></h2>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                <form action="netting/islem.php" method="POST">
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <br>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro "style="color: white;">Telefon</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="ayar_tel" value="<?php echo $ayarcek['ayar_tel'];?>" style="color: white;">
                                                            </div>
                                                            <br> <br><br>

                                                            
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro "style="color: white;">GSM</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="ayar_gsm" value="<?php echo $ayarcek['ayar_gsm'];?>" style="color: white;">
                                                            </div>
                                                            <br> <br><br>

                                                            
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro "style="color: white;">Faks</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="ayar_faks" value="<?php echo $ayarcek['ayar_faks'];?>" style="color: white;">
                                                            </div>
                                                            <br> <br><br>
                                                            
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro "style="color: white;">Mail</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail'];?>" style="color: white;">
                                                            </div>
                                                            <br> <br><br>
                                                                      <div class="ln_solid"></div>
                                                                        <div class="form-group">
                                                                            <div align="center" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                            
                                                                            <button type="submit" name="iletisimayarkaydet" class="btn btn-success">Güncelle</button>
                                                                            </div>
                                                                        </div>
                                                                                                                
                                                         

                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        




<?php
include "footer.php"
?>

