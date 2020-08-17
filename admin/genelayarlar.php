<?php
include "header.php";
?>

        <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1 style="color: white;">Site Ayarları</h1>
                                    
                        
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
                                                                <label class="login2 pull-right pull-right-pro "style="color: white;">Site adı</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="ayar_title" value="<?php echo $ayarcek['ayar_title'];?>" style="color: white;">
                                                            </div>
                                                            <br> <br><br>

                                                            
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro "style="color: white;">Site description</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="ayar_description" value="<?php echo $ayarcek['ayar_description'];?>" style="color: white;">
                                                            </div>
                                                            <br> <br><br>

                                                            
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro "style="color: white;">Site keywords</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords'];?>" style="color: white;">
                                                            </div>
                                                            <br> <br><br>
                                                            
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro "style="color: white;">Site author</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" name="ayar_author" value="<?php echo $ayarcek['ayar_author'];?>" style="color: white;">
                                                            </div>
                                                            <br> <br><br>
                                                                      <div class="ln_solid"></div>
                                                                        <div class="form-group">
                                                                            <div align="center" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                            
                                                                            <button type="submit" name="genelayarkaydet" class="btn btn-success">Güncelle</button>
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

