<?php

// Support development URLs, nn.example-org.drupal7.dev.peytz.dk, and temporary
// production URLs, example-org.drupal7.f2.peytz.dk.
if (preg_match('/([^.]+)\.d[rupal]?(\d+)\./', $_SERVER['HTTP_HOST'], $matches)) {
  $sites = array(
    $_SERVER['HTTP_HOST'] => strtr($matches[1], array('-' => '.', '--' => '-'))
  );
}
