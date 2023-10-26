<!-- Front controller -->
<?php

use App\Utilities\Asset;

include_once('./bootstrap/init.php');


print_r(site_url());
?>
<link href="<?php echo asset_url('css/styles.css'); ?>" rel="stylesheet" type="text/css">
</link>
<?php

echo '<br />' . Asset::css('styles.css');
