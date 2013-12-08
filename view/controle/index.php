
<section class="feat">

			<div class="row">
				<div class="span12">

					<div class="tab-content row">
<?php foreach ($prods as $p) : ?>
	<!-- Feat tab -->
						<div class="tab-pane active" id="feat">
							<article class="span4">
								<div class="view view-thumb">
									<img src="img/products/<?php echo $p["image"]; ?>.jpg" alt="" />
									<div class="mask">

										<p>
											<?php echo $p["Desc"]; ?>
										</p>
										<a href="<?php echo WEBROOT; ?>controle/view/<?php echo $p['id']; ?>" class="info">Voir</a><a href="#" class="info">Acheter</a>
									</div>
								</div>
								<h2><?php echo $p["prix"] . " DH"; ?></h2>
								<p>
									<a href="#"><?php echo $p["nom"]; ?></a>
								</p>
							</article>

						</div>
		
		
<?php endforeach ; ?>
	</div>
	</div>
			</div>

		</section>

	</div>
</div>
		
		

	
