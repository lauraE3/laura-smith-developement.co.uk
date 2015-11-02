<?php
    /**
     * Template Name: Holding Page
     */

$backgroundImage = get_field('background_image');

?>
<div class="full-width full-height js-full-height background-img-center" style="background-image:url('<?=$backgroundImage['url']?>')">
    <div class="display-table">
        <div class="display-table-cell text-center">
            <h1><?=get_the_title()?></h1>
        </div>
    </div>
</div>