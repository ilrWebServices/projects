<?php

// The old prod default site
$aliases['hoc.prod.default'] = array(
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

// Site projects, environment prod
$aliases['hoc.prod'] = array(
  'parent' => '@parent',
  'site' => 'projects',
  'env' => 'prod',
  'uri' => 'http://hoc.ilr.cornell.edu/',
  'root' => '/var/www/html/projects.prod/docroot',
  'remote-host' => 'srv-2136.devcloud.hosting.acquia.com',
  'remote-user' => 'projects',
  'path-aliases' => array (
    '%dump-dir' => '/mnt/files/projectsdev/import',
    '%files' => '/var/www/html/projects.prod/docroot/sites/hoc.ilr.cornell.edu/files',
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
