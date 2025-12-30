<?php
use CRM_Eventlistings_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Past_Events',
    'entity' => 'SavedSearch',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Past_Events',
        'label' => E::ts('Past Events'),
        'api_entity' => 'Event',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'title',
            'event_type_id:label',
            'description',
            'start_date',
            'end_date',
            'is_active',
            'is_online_registration',
          ],
          'orderBy' => [],
          'where' => [
            [
              'is_public',
              '=',
              TRUE,
            ],
            [
              'start_date',
              '<',
              'now',
            ],
          ],
          'groupBy' => [],
          'join' => [],
          'having' => [],
        ],
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'SavedSearch_Past_Events_SearchDisplay_Past_Events_listing',
    'entity' => 'SearchDisplay',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Past_Events_listing',
        'label' => E::ts('Past Events listing'),
        'saved_search_id.name' => 'Past_Events',
        'type' => 'list',
        'settings' => [
          'style' => 'ul',
          'limit' => 50,
          'sort' => [
            [
              'start_date',
              'ASC',
            ],
          ],
          'pager' => [
            'hide_single' => TRUE,
          ],
          'columns' => [
            [
              'type' => 'field',
              'key' => 'title',
              'link' => [
                'path' => '',
                'entity' => 'Event',
                'action' => 'view',
                'join' => '',
                'target' => '_blank',
                'task' => '',
              ],
              'title' => E::ts('View Event'),
              'break' => TRUE,
              'cssRules' => [
                [
                  'font-bold',
                ],
              ],
            ],
            [
              'type' => 'html',
              'key' => 'start_date',
              'break' => TRUE,
              'rewrite' => '[start_date] {if "[start_date]"}- [end_date]{/if}',
              'cssRules' => [
                [
                  'font-italic',
                ],
              ],
            ],
            [
              'type' => 'html',
              'key' => 'description',
              'break' => TRUE,
              'rewrite' => '[description]',
            ],
            [
              'type' => 'html',
              'key' => 'id',
              'break' => TRUE,
              'rewrite' => '<hr>',
            ],
          ],
          'placeholder' => 5,
          'symbol' => 'none',
          'noResultsText' => 'No Upcoming Events',
        ],
      ],
      'match' => [
        'saved_search_id',
        'name',
      ],
    ],
  ],
];
