<div class="col-md-8 single_right">
	      <div class="but_list">
	       <div data-example-id="togglable-tabs" role="tabpanel" class="bs-example bs-example-tabs">
			<ul role="tablist" class="nav nav-tabs" id="myTab">
			  <li class="active" role="presentation"><a aria-expanded="true" aria-controls="home" data-toggle="tab" role="tab" id="home-tab" href="#home"><?=$title?></a></li>
			</ul>
		<div class="tab-content" id="myTabContent">
		  <div aria-labelledby="home-tab" id="home" class="tab-pane fade active in" role="tabpanel">

		  <?php
		  if(count($jobs) > 0){
		  	foreach($jobs as $job):
		  ?>
		    <div class="tab_grid">
			    <div class="col-sm-3 loc_1">
			    	<a href="<?=base_url().'employer/'.$job['user_id']?>"><img style="height: 140px; width: 100%; display: block;" data-holder-rendered="true" src="<?=base_url().'uploads/user/'.$job['image']?>" alt="<?=$job['f_name']?>" title="<?=$job['f_name']?>" data-src="holder.js/100%x180"></a>
			    </div>
			    <div class="col-sm-9">
			       <div class="location_box1">
			    	 <h6><a href="<?=base_url().'jobs/'.$job['job_id']?>"><?=$job['title']?> </a>
			    	 	
			    	 	</h6>
			    	 <p><span class="m_2">Description : </span><?=$job["job_description"]?></p>
			    	 <p>	
			    	 	<span class="m_2">Posted : </span><?=humanize_date($job['published_date']);?> (<?=calculate_age_with_unit($job['published_date'])?>)
			    	 	<span class="m_2">Deadline : </span><?=humanize_date($job['deadline_date']);?> (<?=calculate_age_with_unit($job['deadline_date'])?>)
			    	 </p>
			    	 <ul class="links_bottom">
		  		    	<!-- <li><a href="location_single.html"><i class="fa fa-envelope-o icon_1"> </i><span class="icon_text">Email this Job</span></a></li> -->
			  			<li><a href="<?=base_url().'jobs/'.$job['job_id']?>"><i class="fa fa-eye icon_1"> </i><span class="icon_text">View full Job Description</span></a></li>
			  			<li class="last"><a href="<?=base_url().'category/'.$job['url']?>"><i class="fa fa-sort-desc icon_1"> </i><span class="icon_text">View similar Jobs</span></a></li>
					 </ul>
				   </div>
			    </div>
			    <div class="clearfix"> </div>
			 </div>
			 <?php
			 	endforeach;
			 } else {
			 	echo "<p align='center' style='color:red'><b> There are no jobs of this category. </b></p>";
			 }
			 ?>
		  </div>
		  
	  </div>
	  <?php if($links) { ?>
	  <div align="center"><?=$links?></div>
	  <?php } ?>
     </div>
    </div>
   </div>