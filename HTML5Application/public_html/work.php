<?php
require_once dirname(__FILE__).'/../app/providers/WorksectionProvider.php';

$workSectionProvider = new WorksectionProvider();
foreach ($workSectionProvider->getWorkSections() as $key => $workSection) {
    echo $workSection->getName();
};