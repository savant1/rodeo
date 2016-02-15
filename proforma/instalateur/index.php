<?php require('header.php'); ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="<?php $cl = count_client(); echo $cl['client'];?>  members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Clients</div>
            <div><?php $cl = count_client(); echo $cl['client'];?></div>
            <span class="notification"><?php $cl = count_client(); echo $cl['client'];?></span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="<?php $cli = count_proforma(); echo $cli['profor'];?> proformas." class="well top-block" href="#">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Total Proforma</div>
            <div><?php $cli = count_proforma(); echo $cli['profor'];?></div>
            <span class="notification green"><?php $cli = count_proforma(); echo $cli['profor'];?></span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="<?php $cli = count_tech_insta('technicien'); echo $cli['tech'];?> techniciens" class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Techniciens</div>
            <div><?php $cli = count_tech_insta('technicien'); echo $cli['tech'];?></div>
            <span class="notification yellow"><?php $cli = count_tech_insta('technicien'); echo $cli['tech'];?></span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="<?php $cli = count_tech_insta('installateur'); echo $cli['tech'];?> installateur" class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Installateur</div>
            <div><?php $cli = count_tech_insta('installateur'); echo $cli['tech'];?></div>
            <span class="notification red"><?php $cli = count_tech_insta('installateur'); echo $cli['tech'];?></span>
        </a>
    </div>
</div>

<?php require('footer.php'); ?>
