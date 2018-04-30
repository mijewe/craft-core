<?php

return array(
  'transformer' => getenv('CRAFTENV_TRANSFORMER'),
  'imgixConfig' => [
    'default' => [
      'domains' => [getenv('IMGIX_DOMAINS')],
      'defaultParams' => ['auto'=>'compress,format']
    ]
  ]
);
