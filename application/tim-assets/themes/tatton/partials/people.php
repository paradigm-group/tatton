<section>
	<div class="container people mb-lg">
		<?php 
			if(have_rows('person'))
			{
				$output = '';

				while (have_rows('person')) 
				{
					the_row();

					$name = get_sub_field('name');
					$position = get_sub_field('position');
					$linkedin = get_sub_field('linkedin_profile');
					$bio = get_sub_field('bio');
					$image = get_sub_field('image');

					$output .= "
						<div class='row mt-lg'>
							<div class='col-xs-12'>
								<hr class='hr--emphasise'>
							</div>
						</div>
						<div class='row mt-md'>
							<div class='col-xs-9'>
								<h2 class='people__title'>{$name}</h2>
								<p class='people__position cl-{$sector}'>{$position}</p>
							</div>
							<div class='col-xs-3 text-right'>
								<a class='linkedin social--linkedin' href='{$linkedin}' target='_blank'><span class='hidden-xs'>Linkedin Profile:</span></a>
							</div>
						</div>
						<div class='row'>
							<div class='col-xs-12'>
								<hr class='hr'>
							</div>
						</div>
						<div class='row mt-md'>
							<div class='col-sm-5'>
								<img class='img-responsive' src='{$image}'>
							</div>
							<div class='col-sm-7'>
								{$bio}
							</div>
						</div>
					";
				}

				echo $output;
			}
		?>
	</div>
</section>