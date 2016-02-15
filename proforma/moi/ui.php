<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="#">Editez une Proforma</a>
        </li>
    </ul>
</div>
<?php prin_err(); ?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <div class="control-group">
                    <form action="../mod/pro.php" method="post" class="form-inline" role="form">
                        <div class="controls">
                            <label class="control-label" for="selectError">Choix du client pour la proforma</label>
                            <select id="selectError" name="art1"  data-rel="chosen">
                                <option>Sélectionner le client</option>
                                <?php print_r(print_client()); ?>
                            </select>
                            <input type="hidden" name="num" value=" <?php echo date('d').date('s').date('h').date('i')."/".date('Y'); ?> ">
                            <input type="submit" class="btn btn-primary">
                        </div>
                        <br>
                    </form>
                </div>
                <br>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->
<div class="row">
    <!--/span-->
    <!--/span-->

    <!--   <div class="box col-md-7">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-refresh"></i> Ajax Loaders</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <ul class="ajax-loaders">
                    <?php for ($i = 1; $i <= 8; $i++) { ?>
                        <li><img src="img/ajax-loaders/ajax-loader-<?php echo $i ?>.gif"
                                 title="img/ajax-loaders/ajax-loader-<?php echo $i ?>.gif"></li>
                    <?php } ?>
                </ul>
                <span class="clearfix">From / More <a href="http://ajaxload.info/"
                                                      target="_blank">http://ajaxload.info/</a></span>
            </div>
        </div>
    </div>-->
    <!--/span-->
</div><!--/row-->


<?php require('footer.php'); ?>

