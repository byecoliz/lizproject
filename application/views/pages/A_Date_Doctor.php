<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<div class=" panel panel-default">
				<div class="panel-body">
					<div class="page-header">
						<h3>You are logged in as: <small><?php  echo $this->session->userdata('username');?></small></h3>
					 </div>
					 
					<div id="container">
						<h3>Doctor shift</h3>
						<?php echo $this->table->generate($records); ?>
						<?php echo $this->pagination->create_links(); ?>

					</div>
					 
					 <div >Select Date</div>
					<link href="calendar/calendar.css" rel="stylesheet" type="text/css" />
					<script language="javascript" src="calendar/calendar.js"></script>
					<table border="0" cellspacing="0" cellpadding="2">
                <tr>
                      <td><?php
					  $myCalendar = new tc_calendar("date5",true, false);
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));
					  $myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(2012, 2020);
					  $myCalendar->dateAllow('2008-05-13', '2015-03-01',false);
					  $myCalendar->startMonday(true);
					  $myCalendar->setHeight(350);
					  $myCalendar->setAlignment('left', 'bottom');
					  $myCalendar->disabledDay("Sat");
					  $myCalendar->disabledDay("sun");
					  $myCalendar->showWeeks(true);  
					  $myCalendar->writeScript();
					  ?></td>
                
               </tr>
              </table>
					
					
					
					
					
				</div>
			</div>
		</div>
		
		<div class="col-lg-3">
			<div class="list-group">
				
				
				<p class="list-group-item-text">
				Our selection of amazing stock photos and images is huge, with millions of professional photos that have been carefully chosen and sorted specifically for Microsoft Office users like you. Whether you are looking for cool backgrounds, clipart or digital pictures to illustrate PPT slide presentations, Outlook emails, webpages, printed brochures or other Word documents, we�ve got you covered. And whether your application is high-tech business, education or medical technology, and whether you are looking for something creative or corporate, you guessed it: We�ve got you covered. 
				</p>
			
				
		
		
			
			</div>
		</div>
	</div>

</div>