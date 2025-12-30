<?php
use CRM_Eventlistings_ExtensionUtil as E;

return [
  'type' => 'search',
  'title' => E::ts('Upcoming Events'),
  'icon' => 'fa-list-alt',
  'server_route' => 'civicrm/upcomingevents',
  'is_public' => TRUE,
  'permission' => [
    '*always allow*',
  ],
  'created_id' => 203,
  'modified_date' => '2025-12-30 16:50:53',
];
