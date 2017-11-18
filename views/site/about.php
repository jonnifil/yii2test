<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'carousel';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>


    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">


        <!-- Thumbnails -->
        <ul class="thumbnails-carousel clearfix">
            <div class="center clearfix">

                <?php foreach ($files as $key => $file) { ?>
                    <li class="active-thumbnail  <?= ($key == 0) ? 'active' : '' ?> ">
                        <img style="height:50px; width: 50px;" src="/site/download/<?php echo $file->id; ?>" alt="<?php echo $file->file; ?>" />
                    </li>
                <?php } ?>


            </div>
        </ul>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <?php foreach ($files as $key => $file) { ?>
                <div class="item <?= ($key == 0) ? 'active' : '' ?> " align="center">
                    <img style="height:700px;" src="/site/download/<?php echo $file->id; ?>" class="img-responsive"  alt="<?php echo $file->file; ?>" />
                </div>
            <?php } ?>



        </div>

    </div>


</div>
