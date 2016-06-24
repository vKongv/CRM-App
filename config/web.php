<?php
return [
  'id' => 'crmapp2',
  'basePath' => realpath(__DIR__ . '/../'),
  'components' => [
    'db' => require(__DIR__ . '/db.php'),
    'urlManager' => [
      'enablePrettyUrl' => true,
      'showScriptName' => false
    ],
    'request' => [
      'cookieValidationKey' => 'hD8ugI2K_zBkgDXYo6RTva7y8EbQ3nr8',
      ],
  ],];
