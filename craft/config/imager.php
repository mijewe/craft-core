<?php

return array(
  'jpegoptimEnabled' => getenv('CRAFTENV_JPEGOPTIM'),
  'optipngEnabled' => getenv('CRAFTENV_OPTIPNG'),
  'useCwebp' => getenv('CRAFTENV_CWEBP'),
  'cwebpPath' => getenv('CRAFTENV_WEBP_PATH'),

  'imgixEnabled' => getenv('CRAFTENV_IMGIX_ENABLED'),
  'imgixDomains' => getenv('CRAFTENV_IMGIX_DOMAINS'),
  // 'imgixUseHttps' => true,
  // 'imgixSignKey' => '',
  // 'imgixSourceIsWebProxy' => false,
  // 'imgixUseCloudSourcePath' => true,
  // 'imgixShardStrategy' => 'cycle',
  // 'imgixGetExternalImageDimensions' => true,
  // 'imgixDefaultParams' => null
);
