<?php
$ses_msg = Session::has('success');
if (!empty($ses_msg)) {
    ?>
<div class="alert alert-success alert-dismissable">
    {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button> --}}
    <p style="margin-bottom: 0px"><i class="far fa-bell"></i> <?php echo Session::get('success'); ?></p>
</div>
<?php
}// 
$ses_msg = Session::has('error');
if (!empty($ses_msg)) {
    ?>
<div class="alert alert-danger alert-dismissable">
    {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button> --}}
    <p style="margin-bottom: 0px"><i class="far fa-bell"></i> <?php echo Session::get('error'); ?></p>
</div>
<?php
}// ?>
