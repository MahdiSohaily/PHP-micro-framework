<!-- Front controller -->
<?php

use App\Utilities\Asset;
use App\Utilities\Url;

include_once('./bootstrap/init.php');


print_r(site_url());
?>
<link href="<?php echo asset_url('css/styles.css'); ?>" rel="stylesheet" type="text/css">
</link>
<?php

echo '<br />' . Asset::css('styles.css');
echo '<br />';
print_r(Url::query_params());
