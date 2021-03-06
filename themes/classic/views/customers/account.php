<?php
/**
 * @copyright Copyright (C) 2016 Usha Singhai Neo Informatique Pvt. Ltd
 * @license https://www.gnu.org/licenses/gpl-3.0.html
 */
use usni\library\components\UiHtml;
use usni\UsniAdaptor;
$title = UsniAdaptor::t('users', 'My Account');
?>
<div class='panel panel-default'>
    <div class='panel-heading'>
        <div class='panel-title'><?php echo $title; ?></div>
    </div>
    <div class='panel-body'>
        <div class="col-sm-12">
            <div class="row">
                <?php echo UiHtml::activeLabel($model, 'username', ['class' => 'control-label col-sm-3']); ?>
                <div class="col-sm-9">
                    <p><?php echo $model->username; ?></p>
                </div>
            </div>
            <div class="row">
                <?php
                    $fullName = trim($model->person->firstname . ' ' . $model->person->lastname);
                    echo UiHtml::label(UsniAdaptor::t('users', 'Name'), null, ['class' => 'control-label col-sm-3']); 
                ?>
                <div class="col-sm-9">
                    <p><?php echo $fullName == null ? UsniAdaptor::t('application', '(not set)') : $fullName ;?></p>
                </div>
            </div>
            <div class="row">
                <?php echo UiHtml::activeLabel($model, 'email', ['class' => 'control-label col-sm-3']); ?>
                <div class="col-sm-9">
                    <p><?php echo UiHtml::mailto($model->person->email); ?></p>
                </div>
            </div>
            
            <div class="row">
                <?php echo UiHtml::label(UsniAdaptor::t('users', 'Address'), null, ['class' => 'control-label col-sm-3']); ?>
                <div class="col-sm-9">
                    <p><?php echo $model->address->getConcatenatedDisplayedAddress(); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>