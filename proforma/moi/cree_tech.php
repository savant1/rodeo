<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="#">Cree un technicien</a>
        </li>
    </ul>
</div>
<?php prin_err(); ?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-content">
                <form action="../mod/cree_tech.php" method="post" role="form">
                    <div class="form-group">
                        <label for="exampleInputNom">Nom  du technicien</label>
                        <input type="text" class="form-control" name="nom" id="exampleInputNom" placeholder="Nom du technicien">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPrenom">Prenom du technicien</label>
                        <input type="text" class="form-control" name="prenom" id="exampleInputPrenom" placeholder="Prenom du technicien">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="email" class="form-control" name="email" required id="exampleInputEmail" placeholder="Email ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTel">Télèphone</label>
                        <input type="text" class="form-control" name="tel" id="exampleInputTel" placeholder="Télèphone ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAdr">Adresse</label>
                        <input type="text" class="form-control" name="adres" id="exampleInputAdr" placeholder="Adresse ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPays">Pays</label>
                        <select name="pays" class="form-control" id="exampleInputPays">
                            <option value="cameroun">cameroun</option>
                            <option value="congo">congo</option>
                            <option value="gabon">gabon</option>
                            <option value="guinée équatoriale">guinée équatoriale</option>
                            <option value="tchad">tchad</option>
                            <option value="republique centrafricaine">republique centrafricaine</option>
                            <option value="tchad">republique démocratique de congo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCp">Ville</label>
                        <input type="text" class="form-control" name="cpv" id="exampleInputCp" placeholder=" Ville ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputId">Login</label>
                        <input type="text" class="form-control" name="id" id="exampleInputId" placeholder="Login ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMdp">Password</label>
                        <input type="password" class="form-control" name="mdp" id="exampleInputMdp" placeholder="Password ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputType">Type</label>
                        <select name="type" class="form-control" id="exampleInputType">
                            <option value="installateur">installateur</option>
                            <option value="technicien">technicien</option>
                            <option value="boss">boss</option>
                        </select>
                    </div>
                    <button type="submit" name="cree_client" class="btn btn-primary">Crée</button>
                </form>

            </div>
            <br>
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

