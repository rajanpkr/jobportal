<link href="<?=base_url();?>assets/admin/template/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
<link href="<?=base_url()?>assets/admin/template/dist/css/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables JavaScript -->
    <script src="<?=base_url();?>assets/admin/template/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url();?>assets/admin/template/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<div class="col-md-8 single_right">
    <h3>Your Experiences</h3>
    <div class="well">
        <div class="dataTable_wrapper">
            <table class="table table-striped table-hover" id="employer_jobs-dataTables">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Position</th>
                  <th>Company</th>
                  <th>Started on</th>
                  <th>Duration</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if(count($experiences)>0){
                  foreach($experiences as $experience){
                ?>
                <tr> 
                  <td><a href="<?=base_url().'user_profile/edit_experience/'.$experience['id']?>"><?=$experience['title']?></a></td>
                  <td><a href="<?=base_url().'user_profile/edit_experience/'.$experience['id']?>"><?=$experience['position']?></a></td>
                  <td><a href="<?=base_url().'user_profile/edit_experience/'.$experience['id']?>"><?=$experience['company']?></a></td>
                  <td><a href="<?=base_url().'user_profile/edit_experience/'.$experience['id']?>"><?=$experience['start_year']?></a></td>
                  <td><a href="<?=base_url().'user_profile/edit_experience/'.$experience['id']?>"><?=$experience['deadline_date']?></a></td>
                  <td><a href="javascript:void(0)">Delete</a></td>
                </tr>
                      <?php
                          
                        }
                      } else {
                        ?>
                <tr>
                  <td colspan="5">
                    <center>
                      <font color="#FF0000">::You have not uploaded any experience yet..::</font>
                    </center>
                  </td>
                </tr>
                  <?php
                    
                  }
                ?>
              </tbody>
            </table>
        </div>
        <!-- dataTable_wrapper -->
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#employer_jobs-dataTables').dataTable({
                responsive: true,
                sPaginationType: "full_numbers",
                "aaSorting": [4, "asc"]
                //"order": [[ 3, "desc" ]]
        });
    });
</script>