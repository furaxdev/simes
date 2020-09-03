<?php
$targetFolder = '/home/zgihoayf/domains/simeswrc.educationhost.cloud/storage/app/public';
$linkFolder = '/home/zgihoayf/domains/simeswrc.educationhost.cloud/public_html/storage';
symlink($targetFolder,$linkFolder);
echo 'Symlink process successfully completed';