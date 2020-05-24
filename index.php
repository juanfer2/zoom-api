<?php
require_once 'config/config.php';
 
$url = "https://zoom.us/oauth/authorize?response_type=code&client_id=".CLIENT_ID."&redirect_uri=".REDIRECT_URI;
?>
  <a href="https://zoom.us/oauth/authorize?response_type=code&client_id=cx7SGrfR9KyyDx6nMyjfQ&redirect_uri=https://a8af95d3.ngrok.io/callback.php" target="_blank" rel="noopener noreferrer"><img src="https://marketplacecontent.zoom.us/zoom_marketplace/img/add_to_zoom.png" height="32" alt="Add to ZOOM" /></a>
<a href="<?php echo $url; ?>">Login with Zoom</a>
