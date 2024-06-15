<section class="page-section bg-dark" id="home">
	<div class="container">
		<h2 class="text-center">Founders</h2>
	<div class="d-flex w-100 justify-content-center">
		<hr class="border-warning" style="border:3px solid" width="15%">
	</div>
	<div class="w-100">
		<?php
		$founders = $conn->query("SELECT * FROM `founders` order by rand() ");
			while($row = $founders->fetch_assoc() ):
				$cover='';
				if(is_dir(base_app.'uploads/founder_'.$row['id'])){
					$img = scandir(base_app.'uploads/founder_'.$row['id']);
					$k = array_search('.',$img);
					if($k !== false)
						unset($img[$k]);
					$k = array_search('..',$img);
					if($k !== false)
						unset($img[$k]);
					$cover = isset($img[2]) ? 'uploads/founder_'.$row['id'].'/'.$img[2] : "";
				}
				$row['description'] = strip_tags(stripslashes(html_entity_decode($row['description'])));
				
		?>
			<div class="card d-flex w-100 rounded-0 mb-3 package-item">
				<img class="card-img-top" src="<?php echo validate_image($cover) ?>" alt="<?php echo $row['title'] ?>" height="300rem" width="200rem" style="object-fit:cover">
				<div class="card-body">
				<h5 class="card-title truncate-1"><?php echo $row['title'] ?></h5>
				<div class=" w-100 d-flex justify-content-start">
				
				</div>
				<p class="card-text truncate"><?php echo $row['description'] ?></p>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	
	</div>
</section>