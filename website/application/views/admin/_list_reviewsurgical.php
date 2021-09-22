<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap admin template">
	<meta name="author" content="">

	<title>รีวิวศัลยกรรม | Lenista Clinic </title>

	<link rel="shortcut icon" href="<?=base_url('./assets/img/core-img/logo.png');?>">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/bootstrap-extend.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/site.css');?>">

	<!-- Plugins -->
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/animsition/animsition.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/asscrollable/asScrollable.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/switchery/switchery.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/intro-js/introjs.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/slidepanel/slidePanel.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/flag-icon-css/flag-icon.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/v2.css');?>">

	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/bootstrap-table/bootstrap-table.css?v4.0.2');?>">

	<!-- Fonts -->
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/fonts/web-icons/web-icons.min.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/fonts/font-awesome/font-awesome.min.css');?>">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

	<!--[if lt IE 9]>
	<script src="vendor/html5shiv/html5shiv.min.js"></script>
	<![endif]-->

	<!--[if lt IE 10]>
	<script src="vendor/media-match/media.match.min.js"></script>
	<script src="vendor/respond/respond.min.js"></script>
	<![endif]-->

	<!-- Scripts -->
	<script src="<?=base_url('./assets/admin/vendor/breakpoints/breakpoints.js');?>"></script>
	<script>
		Breakpoints();
	</script>
</head>
<body class="">
	<!-- menu -->
	<?php $this->load->view('admin/menu'); ?>
	<!-- end -->
	<!-- Page -->
	<div class="page">
		<div class="page-content container-fluid">

	      	<!-- Panel Other -->
	      	<div class="panel">
		        <div class="panel-heading">
		          	<h3 class="panel-title">รายการรีวิวศัลยกรรม</h3>
		        </div>
		        <div class="panel-body">
		          	<div class="row row-lg">
			            <div class="col-md-12">
			              	<!-- Example Toolbar -->
			              	<div class="example-wrap">			                  
			                  	<div class="bootstrap-table">
			                  		<div class="fixed-table-toolbar">
			                  			<div class="bs-bars pull-left">
			                  				<div class="btn-group hidden-sm-down" id="exampleToolbar" role="group">
							                    <button type="button" class="btn btn-success btn-outline btn-sm" onclick="window.location.href = '<?=base_url('Admin/formReviewSurgical/?slug=รีวิวศัลยกรรม');?>';">
							                      	<i class="icon wb-plus" aria-hidden="true"></i> เพิ่ม
							                    </button>
			                  				</div>
			                  			</div>
			                  		</div>
			                  		<div class="" style="padding-bottom: 0px;">
			                  			<div class="fixed-table-body">
			                  				<table id="exampleTableToolbar" data-mobile-responsive="true" class="table table-hover" data-pagination="true" data-search="true" style="margin-top: 0px;">
			                    				<thead style="">
			                    					<tr>
			                    						<th style="" data-field="id" data-align="center">
			                    							<div class="th-inner ">#</div>
			                    							<div class="fht-cell"></div>
			                    						</th>
			                    						<th style="" data-field="name">
			                    							<div class="th-inner ">Name</div>
			                    							<div class="fht-cell"></div>
			                    						</th>
														<th style="" data-field="category">
			                    							<div class="th-inner ">หมวดหมู่</div>
			                    							<div class="fht-cell"></div>
			                    						</th>
														<th style="" data-field="sub-category">
			                    							<div class="th-inner ">หมวดหมู่ย่อย</div>
			                    							<div class="fht-cell"></div>
			                    						</th>
			                    						<!-- <th style="" data-field="is_status" data-align="center">
			                    							<div class="th-inner ">is_status</div>
			                    							<div class="fht-cell"></div>
			                    						</th> -->
			                    						<th style="" data-field="Created">
			                    							<div class="th-inner ">Created</div>
			                    							<div class="fht-cell"></div>
			                    						</th>
			                    						<th style="" data-field="edit" data-align="center" data-width="120px">
			                    							<div class="th-inner "></div>
			                    							<div class="fht-cell"></div>
			                    						</th>
			                    					</tr>
			                    				</thead>
			                    				<?php if(!empty($list_rwsurgicals)) { ?>
			                  					<tbody>
			                  						<?php 
													$i = 0;
													foreach($list_rwsurgicals as $surgic_val) { ?>
														<tr> 
															<td class=""><?=$i+1; ?></td> 
															<td style=""><?=$surgic_val['rw_name']; ?></td>
															<td style=""><?=$surgic_val['cate_name']; ?></td>
															<td style=""><?=$surgic_val['subcate_name']; ?></td>
															<?php
																//   Hot Deal
																//if($surgic_val['is_status'] =='1'){ ?>
																	<!-- <td style="">
																		<button type="button" class="btn btn-round btn-outline-primary btn-sm" 
																		onclick="pdChange(<?=$surgic_val['id']; ?>)"
																		>Hot Deal</i> </button>
																	</td> -->
																	
																<?php //} elseif($surgic_val['is_status'] =='2') {?> 
																	<!-- <td style="">
																		<button type="button" class="btn btn-round btn-outline-success btn-sm" 
																		onclick="pdChange(<?=$surgic_val['id']; ?>)"
																		>New Arrival</i> </button>
																	</td> -->
																<?php //} elseif($surgic_val['is_status'] =='3'){?> 
																	<!-- <td style="">
																		<button type="button" class="btn btn-round btn-outline-danger btn-sm" 
																		onclick="pdChange(<?=$surgic_val['id']; ?>)"
																		>SOLD</i> </button>
																	</td> -->
																<?php //} else { ?>
																	<!-- <td style="">
																		<button type="button" class="btn btn-round btn-outline-secondary btn-sm" 
																		onclick="pdChange(<?=$surgic_val['id']; ?>)"
																		><i class="icon wb-pencil" aria-hidden="true"></i></button>
																	</td> -->

																<?php //}
															?>
															<td style=""><?=date("d/m/Y H:i:s", strtotime($surgic_val['update_date'])); ?></td>
															<td>
																<button type="button" class="btn btn-round btn-warning btn-sm" onclick="window.location.href = '<?=base_url('Admin/editRwSurgical/'.$surgic_val['id'].'/?slug=รีวิวศัลยกรรม');?>';" data-toggle="tooltip" data-placement="top" title="แก้ไข"><i class="icon wb-pencil" aria-hidden="true"></i></button>
																<button type="button" class="btn btn-round btn-danger btn-sm" onclick="delP(<?=$surgic_val['id']; ?>, <?=$surgic_val['is_active']; ?>)" data-toggle="tooltip" data-placement="top" title="ลบ"><i class="icon wb-close" aria-hidden="true"></i></button>
															</td> 
														</tr>
			                  						<?php
			                  							$i++;
													} 
			                  						?>
			                  					</tbody>
			                  					<?php } /* if(!empty($product_list)) : */ ?>
			                  				</table>
			                  			</div>
			                  			<div class="fixed-table-pagination" style="display: none;"></div>
			                  		</div>
				                  	<div class="clearfix"></div>
				                </div>
			              	</div>
			              	<!-- End Example Toolbar -->
			            </div>	         
		          	</div>
		        </div>
	      </div>
	      <!-- End Panel Other -->
    </div>
	</div>
	<!-- End Page -->
	<!-- footer -->
	<?php
		$this->load->view('admin/footer');
	?>

	<div class="modal fade bs-example-modal-sm" id="modalChange" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title" id="myModalLabel2">Change</h4>
				</div>
				<div class="modal-body">
				<select class="form-control form-control-sm" name="p_status" id="p_status">
					<option value="0">-- please select --</option>
					<option value="1">HOT DEAL</option>
					<option value="2">NEW ARRIVAL</option>
					<option value="3">SOLD</option>
					</select>
				</div>
				<div class="modal-footer">
					<input type="hidden" id="product_id" name="product_id">
					<input type="hidden" id="pmStatus" name="pmStatus">
					<button type="button" class="btn btn-success" id="conf_st" onclick="changeSt()"><i class="fa fa-check"></i> Confirm</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade bs-example-modal-sm" id="modaldelete" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title" id="myModalLabel2">Delete</h4>
				</div>
				<div class="modal-body">
					<h4>คุณต้องการลบสิ่งนี้หรือไม่ ?</h4>
				</div>
				<div class="modal-footer">
					<input type="hidden" id="p_id" name="p_id">
					<input type="hidden" id="p_ststus" name="p_ststus">
					<!--  -->
					<button type="button" class="btn btn-success" onclick="deleteProduct()"><i class="fa fa-check"></i> Confirm</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /modals -->

	<!-- Core-->
	<script src="<?=base_url('./assets/admin/vendor/babel-external-helpers/babel-external-helpers.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/jquery/jquery.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/popper-js/umd/popper.min.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/bootstrap/bootstrap.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/animsition/animsition.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/mousewheel/jquery.mousewheel.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/asscrollbar/jquery-asScrollbar.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/asscrollable/jquery-asScrollable.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/ashoverscroll/jquery-asHoverScroll.js');?>"></script>

	<!-- Plugins -->
	<script src="<?=base_url('./assets/admin/vendor/switchery/switchery.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/intro-js/intro.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/screenfull/screenfull.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/slidepanel/jquery-slidePanel.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/skycons/skycons.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/aspieprogress/jquery-asPieProgress.min.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/matchheight/jquery.matchHeight-min.js');?>"></script>

	<script src="<?=base_url('./assets/admin/vendor/bootstrap-table/bootstrap-table.js?v4.0.2');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/bootstrap-table/extensions/mobile/bootstrap-table-mobile.min.js?v4.0.2');?>"></script>

	<!-- Scripts -->
	<script src="<?=base_url('./assets/admin/assets/js/Component.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Base.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Config.js');?>"></script>

	<script src="<?=base_url('./assets/admin/assets/js/Section/Menubar.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Section/GridMenu.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Section/Sidebar.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Section/PageAside.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin/menu.js');?>"></script>

	<script src="<?=base_url('./assets/admin/assets/js/config/colors.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/config/tour.js');?>"></script>

	<!-- Page -->
	<script src="<?=base_url('./assets/admin/assets/js/Site.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin/asscrollable.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin/slidepanel.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin/switchery.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin/matchheight.js');?>"></script>

	<script src="<?=base_url('./assets/admin/assets/js/v1.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/tables/bootstrap.js?v4.0.2');?>"></script>

	<script type="text/javascript">
	$(document).ready(function() {
		// bind change event handler
		$('#p_status').change(function() {
			// update disabled property
			$("#conf_st").prop('disabled', this.value == '');
			// trigger change event to set initial value
		}).change();
	});

	function pdChange(pid)
    {
		console.log('pid=' + pid);
    	$('#product_id').val(pid);
    	//$('#pmStatus').val(status)
    	$('#modalChange').modal('show');
    }

    function changeSt()
    {
		var pStatus = $('#p_status').val();
		console.log('pStatus=' + pStatus);
   		$.ajax({
		  	type 	: 'POST',
		  	url 	: '<?=base_url("Admin/pdChgStatus"); ?>',
		  	data 	: {pid:$('#product_id').val(), st:pStatus, action:'changeStpd', '<?=$this->security->get_csrf_token_name(); ?>':'<?=$this->security->get_csrf_hash(); ?>'},
		  	success: function(data) {
				if (data == 'true') {
					alert("Status Changed ok to refresh  page");
    				location.reload();
		        } else {
		        	alert("Not Found click ok to refresh  page");
    				location.reload();
		        }      	
		    }
		});
	}

	function delP(pid, pstus)
    {
    	$('#p_id').val(pid);
		$('#p_ststus').val(pstus);
    	$('#modaldelete').modal('show');
    }

     function deleteProduct()
    {
   		$.ajax({
		  	type 	: 'POST',
		  	url 	: '<?=base_url("Admin/distroyProduct"); ?>',
		  	data 	: {pid:$('#p_id').val(),sts:$('#p_ststus').val(), action:'delProduct', '<?=$this->security->get_csrf_token_name(); ?>':'<?=$this->security->get_csrf_hash(); ?>'},
		  	success: function(data) {
				if (data == 'true') {
					alert("Deleted click ok to refresh  page");
    				location.reload();
		        } else {
		        	alert("Not Found click ok to refresh  page");
    				location.reload();
		        }    	
		    }
		});
	}

	</script>
</body>
</html>
