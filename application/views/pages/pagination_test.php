<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/design.css" type="text/css" media="all">

<!-- jquery to insert calendar table   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>

<body>

<div id="container">
<h1>test pagination</h1>
<?php echo $this->table->generate($records); ?>
<?php echo $this->pagination->create_links(); ?>

</div>

<div>
<?php echo $calendar; ?>

<script type="text/javascript">
$(document).ready(function(){
  $('.calender.day').click(function(){
  day_num=$(this).find('.day_num').html();
  day_data=prompt('enter day description',$(this).find('.content').html());
  if(day_data != null){
  
  $.ajax({
  url:window.location,
  type:'POST',
  data:{
  day:day_num,
  data:day_data
  },
  succes:function(msg){
  location.reload();
  }
  
  });
  }
  
  });

});
</script>

</div>


</body>
</html>
