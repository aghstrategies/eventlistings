<?php

require_once 'eventlistings.civix.php';
// phpcs:disable
use CRM_Eventlistings_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function eventlistings_civicrm_config(&$config): void {
  _eventlistings_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function eventlistings_civicrm_install(): void {
  _eventlistings_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function eventlistings_civicrm_enable(): void {
  _eventlistings_civix_civicrm_enable();
}
