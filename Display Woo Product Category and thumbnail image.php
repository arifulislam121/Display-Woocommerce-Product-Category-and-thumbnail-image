=============== Display Woo Product Category and thumbnail image  ==========

<?php global  $woocommerce;  ?>
					
	<?php

	$terms = get_terms( array(
		'taxonomy' => 'product_cat',
		'hide_empty' => false,
		) ); // Get Terms

	
		
	foreach ($terms as $key => $value) 
	{
		$metaterms = get_term_meta($value->term_id);
		$thumbnail_id = get_woocommerce_term_meta($value->term_id, 'thumbnail_id', true );
		$cat_id=$value->term_id;
		
		
		
		
		$image = wp_get_attachment_url( $thumbnail_id );
		$product_cat_name = $value->name; 

		echo '<div class="single-category-item">
			<div class="category-item-box">
				<div class="category-box-bg"></div>
				<img src="'.$image.'" alt="Product">
				<div class="category-item-info">
					<h5><a href="'. get_category_link( $cat_id ) .'">'.$product_cat_name.'</a></h5>
					<a href="'. get_category_link( $cat_id ) .'">
						<i class="fas fa-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>';
	} // Get Images

	?>

============end==========
