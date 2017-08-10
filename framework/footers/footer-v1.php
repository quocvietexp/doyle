<?php
	global $doyle_options;
	$f1_footer_top = (isset($doyle_options['f1_footer_top'])&&$doyle_options['f1_footer_top'])?$doyle_options['f1_footer_top']:'';
	$f1_footer_top_columns = (isset($doyle_options['f1_footer_top_columns'])&&$doyle_options['f1_footer_top_columns'])?$doyle_options['f1_footer_top_columns']:4;
	switch ($f1_footer_top_columns) {
        case 4:
            $f1_footer_top_col_1_class = $f1_footer_top_col_2_class = $f1_footer_top_col_3_class = $f1_footer_top_col_4_class = 'col-sm-6 col-md-3';
            break;
		case 3:
            $f1_footer_top_col_1_class = $f1_footer_top_col_2_class = $f1_footer_top_col_3_class = $f1_footer_top_col_4_class = 'col-md-4';
            break;	
		case 2:
            $f1_footer_top_col_1_class = $f1_footer_top_col_2_class = $f1_footer_top_col_3_class = $f1_footer_top_col_4_class = 'col-md-6';
            break;
		case 1:
            $f1_footer_top_col_1_class = $f1_footer_top_col_2_class = $f1_footer_top_col_3_class = $f1_footer_top_col_4_class = 'col-md-12';
            break;
		default :
			$f1_footer_top_col_1_class = $f1_footer_top_col_2_class = $f1_footer_top_col_3_class = $f1_footer_top_col_4_class = 'col-sm-6 col-md-3';
			break;
	}
	if((isset($doyle_options['f1_footer_top_columns_class'])&&$doyle_options['f1_footer_top_columns_class'])){
		$f1_footer_top_col_1_class = (isset($doyle_options['f1_footer_top_col_1_class'])&&$doyle_options['f1_footer_top_col_1_class'])?$doyle_options['f1_footer_top_col_1_class']:'col-sm-6 col-md-3';
		$f1_footer_top_col_2_class = (isset($doyle_options['f1_footer_top_col_2_class'])&&$doyle_options['f1_footer_top_col_2_class'])?$doyle_options['f1_footer_top_col_2_class']:'col-sm-6 col-md-3';
		$f1_footer_top_col_3_class = (isset($doyle_options['f1_footer_top_col_3_class'])&&$doyle_options['f1_footer_top_col_3_class'])?$doyle_options['f1_footer_top_col_3_class']:'col-sm-6 col-md-3';
		$f1_footer_top_col_4_class = (isset($doyle_options['f1_footer_top_col_4_class'])&&$doyle_options['f1_footer_top_col_4_class'])?$doyle_options['f1_footer_top_col_4_class']:'col-sm-6 col-md-3';
	}
	
	$f1_footer_bottom_columns = (isset($doyle_options['f1_footer_bottom_columns'])&&$doyle_options['f1_footer_bottom_columns'])?$doyle_options['f1_footer_bottom_columns']:2;
	switch ($f1_footer_bottom_columns) {
		case 2:
            $f1_footer_bottom_col_1_class = $f1_footer_bottom_col_2_class = 'col-md-6';
            break;
		case 1:
            $f1_footer_bottom_col_1_class = $f1_footer_bottom_col_2_class = 'col-md-12';
            break;
		default :
			$f1_footer_bottom_col_1_class = $f1_footer_bottom_col_2_class = 'col-md-6';
			break;
	}
	if((isset($doyle_options['f1_footer_bottom_columns_class'])&&$doyle_options['f1_footer_bottom_columns_class'])){
		$f1_footer_bottom_col_1_class = (isset($doyle_options['f1_footer_bottom_col_1_class'])&&$doyle_options['f1_footer_bottom_col_1_class'])?$doyle_options['f1_footer_bottom_col_1_class']:'col-md-6';
		$f1_footer_bottom_col_2_class = (isset($doyle_options['f1_footer_bottom_col_2_class'])&&$doyle_options['f1_footer_bottom_col_2_class'])?$doyle_options['f1_footer_bottom_col_2_class']:'col-md-6';
	}
	
?>
<footer id="bt_footer" class="bt-footer bt-footer-v1">
	<!-- Start Footer Top -->
	<?php if($f1_footer_top){ ?>
		<div class="bt-footer-top">
			<div class="bt-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="<?php echo esc_attr($f1_footer_top_col_1_class); ?>">
						<div class="bt-content">
							<?php
								if(isset($doyle_options['f1_footer_top_col_1'])&&$doyle_options['f1_footer_top_col_1']){
									foreach($doyle_options['f1_footer_top_col_1'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								}
							?>
						</div>
					</div>
					<?php if($f1_footer_top_columns > 1){ ?>
						<div class="<?php echo esc_attr($f1_footer_top_col_2_class); ?>">
							<div class="bt-content">
								<?php
									if(isset($doyle_options['f1_footer_top_col_2'])&&$doyle_options['f1_footer_top_col_2']){
										foreach($doyle_options['f1_footer_top_col_2'] as $sidebar_id){
											dynamic_sidebar( $sidebar_id );
										}
									}
								?>
							</div>
						</div>
					<?php } ?>
					<?php if($f1_footer_top_columns > 2){ ?>
						<div class="<?php echo esc_attr($f1_footer_top_col_3_class); ?>">
							<div class="bt-content">
								<?php
									if(isset($doyle_options['f1_footer_top_col_3'])&&$doyle_options['f1_footer_top_col_3']){
										foreach($doyle_options['f1_footer_top_col_3'] as $sidebar_id){
											dynamic_sidebar( $sidebar_id );
										}
									}
								?>
							</div>
						</div>
					<?php } ?>
					<?php if($f1_footer_top_columns > 3){ ?>
						<div class="<?php echo esc_attr($f1_footer_top_col_4_class); ?>">
							<div class="bt-content">
								<?php
									if(isset($doyle_options['f1_footer_top_col_4'])&&$doyle_options['f1_footer_top_col_4']){
										foreach($doyle_options['f1_footer_top_col_4'] as $sidebar_id){
											dynamic_sidebar( $sidebar_id );
										}
									}
								?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>
	<!-- End Footer Top -->
	<!-- Start Footer Bottom -->
	<div class="bt-footer-bottom">
		<div class="container">
			<div class="row">
				<div class="<?php echo esc_attr($f1_footer_bottom_col_1_class); ?>">
					<div class="bt-content">
						<?php
							if(isset($doyle_options['f1_footer_bottom_col_1'])&&$doyle_options['f1_footer_bottom_col_1']){
								foreach($doyle_options['f1_footer_bottom_col_1'] as $sidebar_id){
									dynamic_sidebar( $sidebar_id );
								}
							}
						?>
					</div>
				</div>
				<?php if($f1_footer_bottom_columns > 1){ ?>
					<div class="<?php echo esc_attr($f1_footer_bottom_col_2_class); ?>">
						<div class="bt-content">
							<?php
								if(isset($doyle_options['f1_footer_bottom_col_2'])&&$doyle_options['f1_footer_bottom_col_2']){
									foreach($doyle_options['f1_footer_bottom_col_2'] as $sidebar_id){
										dynamic_sidebar( $sidebar_id );
									}
								}
							?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- End Footer Bottom -->
</footer>