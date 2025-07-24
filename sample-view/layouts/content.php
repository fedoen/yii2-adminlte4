<?php

use yii\bootstrap5\Breadcrumbs;
use fedoen\adminlte4\widgets\Alert;

?>
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?php if (isset($this->blocks['content-header'])) { ?>
                        <h3 class="mb-0"><?= $this->blocks['content-header']; ?></h3>
                    <?php } else { ?>
                        <h3 class="mb-0">
                            <?php
                            if ($this->title !== null) {
                                echo \yii\helpers\Html::encode($this->title);
                            } else {
                                echo \yii\helpers\Inflector::camel2words(
                                    \yii\helpers\Inflector::id2camel($this->context->module->id)
                                );
                                echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
                            } ?>
                        </h3>
                    <?php } ?>
                </div>

                <div class="col-sm-6">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        'options' => [
                            'class' => 'float-sm-end'
                        ]
                    ]); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <?= Alert::widget(); ?>
            <?= $content ?>
        </div>
    </div>
</main>