<?php

/** @var \yii\web\View $this */
/** @var string $directoryAsset */
?>

<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <?= \yii\helpers\Html::a('<img src="' . ($directoryAsset . '/img/AdminLTELogo.png') . '" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"><span class="brand-text fw-light">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'brand-link']) ?>
    </div>
    <div class="sidebar-wrapper">

        <nav class="mt-2">
            <?= fedoen\adminlte4\widgets\Menu::widget(
                [
                    'options' => ['class' => 'nav sidebar-menu flex-column', 'data-lte-toggle' => 'treeview', 'role' => 'menu', 'data-accordion' => 'false'],
                    'items' => [
                        ['label' => 'Menu Yii2', 'header' => true],
                        ['label' => 'Gii', 'iconType' => 'bi', 'icon' => 'file-code', 'url' => ['/gii']],
                        ['label' => 'Debug', 'iconType' => 'bi', 'icon' => 'speedometer', 'url' => ['/debug']],
                        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                        [
                            'label' => 'Some tools',
                            'iconType' => 'bi',
                            'icon' => 'share',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Gii', 'iconType' => 'bi', 'icon' => 'circle', 'url' => ['/gii'],],
                                ['label' => 'Debug', 'iconType' => 'bi', 'icon' => 'circle', 'url' => ['/debug'],],
                                [
                                    'label' => 'Level One',
                                    'iconType' => 'bi',
                                    'icon' => 'circle',
                                    'url' => '#',
                                    'items' => [
                                        ['label' => 'Level Two', 'iconType' => 'bi', 'icon' => 'circle', 'url' => '#',],
                                        [
                                            'label' => 'Level Two',
                                            'iconType' => 'bi',
                                            'icon' => 'circle',
                                            'url' => '#',
                                            'items' => [
                                                ['label' => 'Level Three', 'iconType' => 'bi', 'icon' => 'circle', 'url' => '#',],
                                                ['label' => 'Level Three', 'iconType' => 'bi', 'icon' => 'circle', 'url' => '#',],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
            ) ?>
        </nav>

    </div>

</aside>