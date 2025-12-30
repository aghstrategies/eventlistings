<?php
use CRM_Eventlistings_ExtensionUtil as E;

return [
  'type' => 'search',
  'title' => E::ts('Past Events'),
  'icon' => 'fa-list-alt',
  'server_route' => 'civicrm/pastevents',
  'is_public' => TRUE,
  'permission' => [
    '*always allow*',
  ],
  'created_id' => 203,
  'modified_date' => '2025-12-30 17:09:07',
];
