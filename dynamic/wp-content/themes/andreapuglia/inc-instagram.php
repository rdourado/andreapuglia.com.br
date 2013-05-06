<?php 
		function fetchData( $url ) {
			$ch = curl_init();
			curl_setopt( $ch, CURLOPT_URL, $url );
			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
			curl_setopt( $ch, CURLOPT_TIMEOUT, 60 );
			curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false ); /* TODO: Remover depois */
			$result = curl_exec( $ch );
			//var_dump(curl_error($ch));
			curl_close( $ch );
			return $result;
		}
		$token 	= 'MY_TOKEN';
		$id 	= 'MY_ID';
		$result = fetchData( "https://api.instagram.com/v1/users/{$id}/media/recent/?access_token={$token}" );
		$result = json_decode( $result );
?>
		<div class="instagram">
			<h2 class="heading">Instagram</h2>
			<p class="intro">Acompanhe o que acontece nas lojas da Andrea Puglia por todo o Brasil no Instagram.</p>
			<ul class="instagram-list">
<?php 			foreach( $result->data as $index => $row ) : 
				if ( $index >= 6 ) break; ?>
				<li class="instagram-item"><a href="<?php 
				echo $row->link;
				?>" target="_blank"><img src="<?php 
				echo $row->images->thumbnail->url;
				?>" alt="" class="block" width="91" height="91"></a></li>
<?php 			endforeach; ?>
			</ul>
		</div>
