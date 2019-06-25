<div class="small-12 medium-6 columns directory">
	<div class="callout employee-profile">
		<?php
		$request = wp_remote_get( 'https://applications.germanna.edu/directory/directory.json' );
		if( is_wp_error( $request ) ) {
		return false;
		}
		$body = wp_remote_retrieve_body( $request );
		$data = json_decode( $body );
		if( ! empty( $data ) ) {
		if (is_array($data) || is_object($data))
		{
		foreach ($data as $key => $val){
		echo 'displayName:'.$data->$key->$val.'<br>';
		}
		}
		}
		?>
	</div>
</div>