<?php
/**
 * @file
 * webupdates_articles.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function webupdates_articles_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'comment_block_anonymous';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'user' => array(
      'values' => array(
        'anonymous user' => 'anonymous user',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'block-1' => array(
          'module' => 'block',
          'delta' => '1',
          'region' => 'sidebar_first',
          'weight' => '-10',
        ),
      ),
    ),
  );
  $context->condition_mode = 1;
  $export['comment_block_anonymous'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'recent_articles';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        '*' => '*',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'node-recent' => array(
          'module' => 'node',
          'delta' => 'recent',
          'region' => 'sidebar_first',
          'weight' => '-11',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;
  $export['recent_articles'] = $context;

  return $export;
}
