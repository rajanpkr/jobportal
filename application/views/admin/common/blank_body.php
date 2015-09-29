<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
    $this->load->view('admin/common/header');
?>

<?php
    $this->load->view('admin/common/sidenav');
?>

 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol> 
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

<?php
if ($this->session->flashdata('flash_msg'))
{
    if ($this->session->userdata('flash_msg_type'))
    {
        $flash_class = $this->session->userdata('flash_msg_type');
        $this->session->unset_userdata('flash_msg_type');
    }
    else
    {
        $flash_class = "info";
    }
    

?>
<div class="alert alert-<?php echo $flash_class; ?> fade in" role="alert" >
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
<?php echo $this->session->flashdata('flash_msg'); ?>
</div>
<?php
// SESSION::delete('flash_msg');
// SESSION::delete('flash_msg_type');
}
?>

                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
<?php
    $this->load->view('admin/common/footer');
?>