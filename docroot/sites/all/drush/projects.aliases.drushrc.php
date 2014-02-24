<?php

// Site projects, environment prod
$aliases['hoc.prod'] = array(
  'parent' => '@parent',
  'site' => 'projects',
  'env' => 'prod',
  'uri' => 'http://projects.devcloud.acquia-sites.com/',
  'root' => '/var/www/html/projects.prod/docroot',
  'remote-host' => 'srv-2136.devcloud.hosting.acquia.com',
  'remote-user' => 'projects',
  'path-aliases' => array (
    '%dump-dir' => '/mnt/files/projectsdev/import',
    '%files' => '/var/www/html/projects.prod/docroot/sites/projects.devcloud.acquia-sites.com/files',
  ),
);

// Local HOC
$aliases['hoc.local'] = array(
  'parent' => '@parent',
  'site' => 'projects',
  'env' => 'local',
  'uri' => 'http://hoc.projects.dev',
  'root' => '/Users/aaron/Vagrant/projects/docroot',
  'path-aliases' => array(
    '%dump-dir' => '/tmp',
    '%files' => 'sites/hoc.projects.dev/files',
  ),
);
