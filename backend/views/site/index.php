<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <?php echo  \yii\bootstrap5\Nav::widget([
        'options'=>[
            'class'=>'d-flex flex-column nav-pill'
        ],

        'items'=> [
            [
                'label' => 'User',
                'url'=>['/user/index']
            ]
        ]
    ])

    ?>
</div>
