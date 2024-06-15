
<style>
	header.masthead{
		background-image: url('<?php echo validate_image($_settings->info('cover')) ?>') !important;
	}
	header.masthead .container{
		background:#0000006b;
	}
</style>

<header class="masthead">
	<div class="container">
		<div class="masthead-subheading">Welcome To Since Inception</div>
		<div class="masthead-heading text-uppercase">Explore KSA</div>
	</div>
</header>


<section class="page-section" id="map">
	<div class="container">
		<h2 class="text-center">KSA Map</h2>
	<div class="d-flex w-100 justify-content-center">
		<hr class="border-warning" style="border:3px solid" width="15%">
	</div>
	
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 850 638">
  <image width="850" height="638" xlink:href="uploads/map.png"></image> 
  <a xlink:href="places/Jouf.php">
    <rect x="152" y="73" fill="#fff" opacity="0" width="98" height="69"></rect>
  </a>
  <a xlink:href="places/Tabuk.php">
    <rect x="81" y="148" fill="#fff" opacity="0" width="87" height="50"></rect>
  </a>
  <a xlink:href="places/Hail.php">
    <rect x="245" y="169" fill="#fff" opacity="0" width="100" height="50"></rect>
  </a>
  <a xlink:href="places/Madinah.php">
    <rect x="177" y="277" fill="#fff" opacity="0" width="100" height="68"></rect>
  </a>
  <a xlink:href="places/Riyadh.php">
    <rect x="393" y="308" fill="#fff" opacity="0" width="100" height="100"></rect>
  </a>
  <a xlink:href="places/NorthernRegion.php">
    <rect x="303" y="52" fill="#fff" opacity="0" width="99" height="85"></rect>
  </a>
  <a xlink:href="places/Qassim.php">
    <rect x="313" y="228" fill="#fff" opacity="0" width="100" height="50"></rect>
  </a>
  <a xlink:href="places/Makkah.php">
    <rect x="239" y="390" fill="#fff" opacity="0" width="100" height="50"></rect>
  </a>
  <a xlink:href="places/Najran.php">
    <rect x="404" y="514" fill="#fff" opacity="0" width="100" height="50"></rect>
  </a>
  <a xlink:href="places/Asir.php">
    <rect x="322" y="477" fill="#fff" opacity="0" width="63" height="50"></rect>
  </a>
  <a xlink:href="places/Jazan.php">
    <rect x="313" y="549" fill="#fff" opacity="0" width="50" height="50"></rect>
  </a>
  <a xlink:href="places/Baha.php">
    <rect x="266" y="446" fill="#fff" opacity="0" width="50" height="50"></rect>
  </a>
  <a xlink:href="places/EasternRegion.php">
    <rect x="556" y="288" fill="#fff" opacity="0" width="143" height="147"></rect>
  </a>
</svg>
					
		
	
	</div>
</section>


<section class="page-section bg-dark" id="home">
	<div class="container">
		<h2 class="text-center">Founders</h2>
	<div class="d-flex w-100 justify-content-center">
		<hr class="border-warning" style="border:3px solid" width="15%">
	</div>
	<div class="row">
		<?php
		$founders = $conn->query("SELECT * FROM `founders` order by rand() limit 3");
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
			<div class="col-md-4 p-4 ">
				<div class="card w-100 rounded-0">
					<img class="card-img-top" src="<?php echo validate_image($cover) ?>" alt="<?php echo $row['title'] ?>" height="500rem" style="object-fit:cover">
					<div class="card-body">
					<h5 class="card-title truncate-1 w-100"><?php echo $row['title'] ?></h5><br>
					<div class=" w-100 d-flex justify-content-start">
						
                    </div>
    				<p class="card-text truncate"><?php echo $row['description'] ?></p>
					
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	
	</div>
</section>
<!-- About-->
<section class="page-section" id="about">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">About Us</h2>
		</div>
		<div>
			<div class="card w-100">
				<div class="card-body">
					<?php echo file_get_contents(base_app.'about.html') ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Contact-->
<section class="page-section" id="contact">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Contact Us</h2>
			<h3 class="section-subheading text-muted">Send us a message for inquiries.</h3>
		</div>
		
		<form id="contactForm" >
			<div class="row align-items-stretch mb-5">
				<div class="col-md-6">
					<div class="form-group">
						<!-- Name input-->
						<input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required />
					</div>
					<div class="form-group">
						<!-- Email address input-->
						<input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
					</div>
					<div class="form-group mb-md-0">
						<input class="form-control" id="subject" name="subject" type="subject" placeholder="Subject *" required />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group form-group-textarea mb-md-0">
						<!-- Message input-->
						<textarea class="form-control" id="message" name="message" placeholder="Your Message *" required></textarea>
					</div>
				</div>
			</div>
			<div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send Message</button></div>
		</form>
	</div>
</section>
<script>
$(function(){
	$('#contactForm').submit(function(e){
		e.preventDefault()
		$.ajax({
			url:_base_url_+"classes/Master.php?f=save_inquiry",
			method:"POST",
			data:$(this).serialize(),
			dataType:"json",
			error:err=>{
				console.log(err)
				alert_toast("an error occured",'error')
				end_loader()
			},
			success:function(resp){
				if(typeof resp == 'object' && resp.status == 'success'){
					alert_toast("Inquiry sent",'success')
					$('#contactForm').get(0).reset()
				}else{
					console.log(resp)
					alert_toast("an error occured",'error')
					end_loader()
				}
			}
		})
	})
})
</script>