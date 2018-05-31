<?php

$function_GetAllAdminMenuSidebar = GetAllAdminMenuSidebar();

$belah_module = explode('module', $_SERVER['REQUEST_URI']);
$module_kanan = $belah_module[1];
$belah_module_kanan = explode('/',$module_kanan);
$nama_module = $belah_module_kanan[1];

?>
				<!-- start sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
								
									<?php
							
									$input_parameter['ID'] = $_SESSION['JSMR_HRD']['USER_ID'];
									$function_GetUserByID = GetUserByID($input_parameter);
									
									for( $i=0;$i<$function_GetAllAdminMenuSidebar['TOTAL_ROW'];$i++ ){
		                            
		                            	$this_array_menu_uac = explode(',',$function_GetUserByID['MENU_UAC']);
		                            	
		                            	if( $function_GetAllAdminMenuSidebar['IS_ACTIVE'][$i] == 1 && in_array( $function_GetAllAdminMenuSidebar['ID'][$i] , $this_array_menu_uac ) ){
		                            	
		                            		
		                            	
		                            		if( $function_GetAllAdminMenuSidebar['ID'][$i] == 99 ){
			                            		$menu_red_indicator = '<span style="color:red;" >';
			                            		$menu_red_close_indicator = '<span>';
		                            		} else {
			                            		$menu_red_indicator = '';
			                            		$menu_red_close_indicator = '';
		                            		}
		                            		
		                            		
			                            	if( strlen($function_GetAllAdminMenuSidebar['MODULE'][$i]) > 0 ){
				                            	$module_url = "module/".$function_GetAllAdminMenuSidebar['MODULE'][$i]."/";
			                            	} else {
				                            	$module_url = '';
			                            	}
			                            	
		                            	
				                            if( $function_GetAllAdminMenuSidebar['DESTINATION_LINK'][$i] == '#' ){
					                            ?>
					                           
					                            <li class="nav-parent"> 
					                            	<a href="<?php echo $function_GetAllAdminMenuSidebar['DESTINATION_LINK'][$i];?>"> 
					                            		<i class="<?php echo $function_GetAllAdminMenuSidebar['CUSTOM_CLASS'][$i] ?>"></i> 
														<span><?php echo $function_GetAllAdminMenuSidebar['NAME'][$i] ?></span>
					                            		
					                            	</a>
					                            	
					                            	<ul class="nav nav-children">
					                            	<?php
					                            	
					                            	$this_submenu_metadata['PARENT_MENU_ID'] = $function_GetAllAdminMenuSidebar['ID'][$i];
					                            	$function_GetAllAdminSubmenuSidebar = GetAllAdminSubmenuSidebar($this_submenu_metadata);
					                            	
					                            	for( $j=0;$j<$function_GetAllAdminSubmenuSidebar['TOTAL_ROW'];$j++ ){
					                            		
					                            		$this_array_submenu_uac = explode(',',$function_GetUserByID['SUBMENU_UAC']);
					                            		
					                            		if( $function_GetAllAdminSubmenuSidebar['IS_ACTIVE'][$j] == 1 && $function_GetAllAdminSubmenuSidebar['IS_VISIBLE'][$j] == 1 && in_array( $function_GetAllAdminSubmenuSidebar['ID'][$j] , $this_array_submenu_uac )  ){
					                            		
					                            			if( $function_GetAllAdminSubmenuSidebar['ID'][$j] == 99 ){
							                            		$submenu_red_indicator = ' style="color:red;" ';
						                            		} else {
							                            		$submenu_red_indicator = '';
						                            		}
						                            		
						                            		if( strlen($function_GetAllAdminSubmenuSidebar['MODULE'][$j]) > 0 ){
								                            	$submodule_url = "module/".$function_GetAllAdminSubmenuSidebar['MODULE'][$j]."/";
							                            	} else {
								                            	$submodule_url = '';
							                            	}
					                            		
						                            	?>
						                            	
															<li> 
																<a href="<?php echo GetMasterLink().$submodule_url.$function_GetAllAdminSubmenuSidebar['DESTINATION_LINK'][$j]; ?> "  <?php echo $submenu_red_indicator;?> > 
																	
																	
																	<?php echo $function_GetAllAdminSubmenuSidebar['NAME'][$j]; ?>
																</a> 
															</li>
						                            	
						                            	<?php	
					                            		} else {
						                            		continue;
					                            		}
					                            		
					                            	}
					                            	
					                            	?>
					                            	</ul>
					                            	
					                            </li>
					                            <?php
				                            }
				                            
				                            else if( $function_GetAllAdminMenuSidebar['DESTINATION_LINK'][$i] != '#' ){
				                            
				                            	if( strlen($function_GetAllAdminMenuSidebar['MODULE'][$i]) > 0 ){
					                            	$module_url = "module/".$function_GetAllAdminMenuSidebar['MODULE'][$i]."/";
				                            	} else {
					                            	$module_url = '';
				                            	}
				                            	
					                            ?>
					                            <li>
					                            	<a href="<?php echo GetMasterLink().$module_url.$function_GetAllAdminMenuSidebar['DESTINATION_LINK'][$i];?>">
					                            		<i class="<?php echo $function_GetAllAdminMenuSidebar['CUSTOM_CLASS'][$i] ?>"></i> 
					                            		<span><?php echo $function_GetAllAdminMenuSidebar['NAME'][$i] ?></span>
					                            		<span class="left_nav_pointer"></span> 
					                            	</a>
					                            </li>
					                            
					                            
					                            <?php
				                            }	
		                            	} else {
		                            		continue;
		                            	}
			                            
		                            }
		                            
		                            ?>
		                            
								
									
								</ul>
							</nav>
				
							<hr class="separator" />
				
							
						</div>
				
						<script>
							// Maintain Scroll Position
							if (typeof localStorage !== 'undefined') {
								if (localStorage.getItem('sidebar-left-position') !== null) {
									var initialPosition = localStorage.getItem('sidebar-left-position'),
										sidebarLeft = document.querySelector('#sidebar-left .nano-content');
									
									sidebarLeft.scrollTop = initialPosition;
								}
							}
						</script>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->