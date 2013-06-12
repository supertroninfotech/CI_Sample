    <!-- content_holder start -->
  <div class="content_holder">       
        	<!-- Left start -->
        	<div class="Left">
            		<div class="nav_holder">
                    	<div class="navgation">
                        	<ul class="nav">
                            	<li><a href="<?php echo base_url();?>" class="one active">COMPLETE OWNER DETAILS</a></li>
                                <li><a href="javascript:void(0);" class="two">PROPERTY DETAILS</a></li>
                                <li><a href="javascript:void(0);" class="three">PACKAGE SELECTION</a></li>
                                <li><a href="javascript:void(0);" class="four">OPTIONAL EXTRAS</a></li>
                                <li><a href="javascript:void(0);" class="five">SUMMARY</a></li>
                            </ul>
                        
                        </div>
                    
                    </div>
                    <div class="left_footer">
                    <p class="copyright">
                       info@supertroninfotech.com.au<br />
                       www.supertroninfotech.in
                     </p>
                     </div>
            </div>
            <!-- Left end -->
             <!-- content start -->    
            <div class="content">
            
            	
            <form action="<?php echo base_url();?>home/propertydetails" method="post">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="padd_left">
                      <tr class="r_one">
                        <td>
                        	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr >
                                <td class="row_left"><label>First Name </label><span style="color:#FF0000;">*</span></td>  
                                <td class="row_right">Last Name <span style="color:#FF0000;">*</span></td>                              
                              </tr>
                              <tr class="row_margin">
                                <td class="row_left"><input name="firstName" type="text" class="w215" value="<?php echo isset($userinfoinstep1['firstName'])?$userinfoinstep1['firstName']:'';?>"/>
                                <div><?php echo form_error('firstName'); ?></div>
                                </td>
                                <td class="row_right"><input name="lastName" type="text" class="w215" value="<?php echo isset($userinfoinstep1['lastName'])?$userinfoinstep1['lastName']:'';?>"/>
                                <?php echo form_error('lastName'); ?>
                                </td>
                              </tr>
                              
                              <tr>
                                <td class="row_left"><label>Email <span style="color:#FF0000;">*</span></label></td>  
                                <td class="row_right"><label>Mobile </label></td>                              
                              </tr>
                              <tr>
                                <td class="row_left"><input name="email" type="text" class="w215" value="<?php echo isset($userinfoinstep1['email'])?$userinfoinstep1['email']:'';?>"/><div><?php echo form_error('email'); ?>
		</div></td>
                                <td class="row_right"><input name="mobile" type="text" class="w215" value="<?php echo isset($userinfoinstep1['mobile'])?$userinfoinstep1['mobile']:'';?>"/></td>
                              </tr>
                            </table>

                        
                        </td>
                      </tr>
                                            
                    </table>

            	<div class="border_white"></div>
                <?php
				$hear_about_us = isset($userinfoinstep1['hear_about_us'])?$userinfoinstep1['hear_about_us']:'';
				$hear_about_us = explode(',',$hear_about_us);
				//print_r($hear_about_us);
				?>
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="r_twos">
                    <tr>
                            <td>
                            	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td><p class="heading">How did you hear about us?</p></td>
                                  </tr>
                                  <!--<tr>
                                    <td>&nbsp;</td>
                                  </tr>-->
                                  <tr >
                                    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td width="20%"><table width="92%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="19%">
                                            <input type="checkbox" name="hear_about_us[]" value="Seminar" <?php if(isset($hear_about_us) && in_array('Seminar',$hear_about_us))echo ' checked="checked"';?> id="checkbox1" /><label for="checkbox1"></label>
											
                                            </td>
                                         
                                            <td width="81%">Seminar</td>
                                          </tr>
                                        </table>
                                        </td>
                                        <td width="26%"><table width="76%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="19%">
                                            <input type="checkbox" name="hear_about_us[]" value="Property Boards"  <?php if(isset($hear_about_us) && in_array('Property Boards',$hear_about_us))echo ' checked="checked"';?> id="checkbox2" /><label for="checkbox2"></label>
											
                                            
                                            </td>
                                         
                                            <td width="81%">Property Boards</td>
                                          </tr>
                                        </table></td>
                                        <td width="54%"><table width="46%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="16%">
                                            <input type="checkbox" name="hear_about_us[]" value="Letterbox Drop"  <?php if(isset($hear_about_us) && in_array('Letterbox Drop',$hear_about_us))echo ' checked="checked"';?> id="checkbox3" /><label for="checkbox3"></label>
											
                                            </td>
                                         
                                            <td width="84%">Letterbox drop</td>
                                          </tr>
                                        </table></td>
                                      </tr>
                                    </table>
                                    
                                    </td>
                                  </tr>
                                  <tr >
                                    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td width="20%"><table width="92%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="19%">
                                            <input type="checkbox" name="hear_about_us[]" value="Web"  <?php if(isset($hear_about_us) && in_array('Web',$hear_about_us))echo ' checked="checked"';?> id="checkbox4" /><label for="checkbox4"></label>
											
                                            </td>
                                         
                                            <td width="81%">Web</td>
                                          </tr>
                                        </table>
                                        </td>
                                        <td width="26%"><table width="76%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="19%">
                                            <input type="checkbox" name="hear_about_us[]" value="Current Client"  <?php if(isset($hear_about_us) && in_array('Current Client',$hear_about_us))echo ' checked="checked"';?> id="checkbox5" /><label for="checkbox5"></label>
											
                                            </td>
                                         
                                            <td width="81%">Current client </td>
                                          </tr>
                                        </table></td>
                                        <td width="54%"><table width="46%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td width="16%">
                                            <input type="checkbox" name="hear_about_us[]" value="Other"  <?php if(isset($hear_about_us) && in_array('Other',$hear_about_us))echo ' checked="checked"';?> id="checkbox6" /><label for="checkbox6"></label>
											
                                            </td>
                                         
                                            <td width="84%">Other</td>
                                          </tr>
                                        </table></td>
                                      </tr>
                                    </table>
                                    
                                    </td>
                                  </tr>
                                </table>
                            </td>
                        </tr>
                     
                    </table>
                    
                <div class="border_white"></div>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="padd_left_top">
                    <tr class="r_one">
                         <td class="row_left"><label>Referred by</label></td>  
                         </tr>
                         <tr>                            
                    
                         <td>
                         <input name="referred_by" type="text" class="w215" value="<?php echo isset($userinfoinstep1['referred_by'])?$userinfoinstep1['referred_by']:'';?>"/>
                        </td>
                    </tr>
                    </table>
                    
                    <div class="border_white"></div>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="r_twos gap" style="padding-bottom:9px !important;">
                    <tr>
                         <td class="row_left"><label>Promotion Code</label></td>  
                         </tr>
                         <tr>                            
                    
                         <td>
                         <input name="promotion_code" type="text" class="w215" value="<?php echo isset($userinfoinstep1['promotion_code'])?$userinfoinstep1['promotion_code']:'';?>"/><?php //echo form_error('promotion_code'); ?>
                        </td>
  </tr>
                        <tr> 
                          <td align="right" >
                         
                          <input type="submit" value="NEXT" class="next" />
                          </td>   
    </tr>
              </table>
            </form>
            
            
            
            </div>  
        <!-- content end -->
    </div>
    <!-- content_holder end -->
	<div class="spacer"></div>

