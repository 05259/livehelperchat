<div class="col-sm-<?php isset($columnCountrySize) ? print $columnCountrySize : print 4?> form-group pl5 pr5">
    <input type="text" class="form-control input-sm" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/onlineusers','+20 (More than 20 seconds spend on site) 20 (Less than 20 seconds spend on site)')?>" placeholder="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/onlineusers','+20 (More than 20 seconds spend on site) 20 (Less than 20 seconds spend on site)')?>" value="" ng-model="online.time_on_site" />
</div>