<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<div class=" panel panel-default">
				<div class="panel-body">
					<div class="page-header">
						<h3>Ready to make appointment </h3>
					</div>
					
					
				<?php require_once('calendar/classes/tc_calendar.php');?>

<?php echo form_open('insert'); ?>
<div>
<label>Doctor:</label>
<input type="text"  id="doctor" name="doctor"  value="<?php echo $row['DOCTOR'];?>">
</div>
<div >
<label >Shift:</label>
<input type="text"  id="shift" name="shift"  value="<?php echo $row['DOCTOR'];?>">
</div>

<label >Select Date:</label>
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
<!--</div>-->
<div><input type="submit" value="Submit" /></div>
 </form> 
					
					
					
					
				</div>
			</div>
		</div>
		
		<!--<div class="col-lg-3">
			<div class="list-group">
				<a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">Details</h4>
	
				
				<p class="list-group-item-text">
				Our selection of amazing stock photos and images is huge, with millions of professional photos that have been carefully chosen and sorted specifically for Microsoft Office users like you. Whether you are looking for cool backgrounds, clipart or digital pictures to illustrate PPT slide presentations, Outlook emails, webpages, printed brochures or other Word documents, we’ve got you covered. And whether your application is high-tech business, education or medical technology, and whether you are looking for something creative or corporate, you guessed it: We’ve got you covered. 
				</p>
				
				</a>
			
			</div>
		</div>-->
	</div>

</div>