<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['DOCTOR_CODE'] ?></h2>
    <div id="main">
	<table><tr>
	<td><?php echo $news_item['DOCTOR_CODE'] ?></td>
	<td><?php echo $news_item['D_INITIAL_NAME'] ?></td>
	<td><?php echo $news_item['D_LAST_NAME'] ?></td>
	<!--<td><?php echo $news_item['CLINICAL_DEPARTMENT'] ?></td> -->
	</tr></table>
    </div>
    <p><a href="news/<?php echo $news_item['CLINICAL_DEPARTMENT'] ?>">View doctors list</a></p>

<?php endforeach ?>