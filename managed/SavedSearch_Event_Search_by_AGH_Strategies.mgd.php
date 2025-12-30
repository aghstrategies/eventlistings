<?php
use CRM_Eventlistings_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Event_Search_by_AGH_Strategies',
    'entity' => 'SavedSearch',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Event_Search_by_AGH_Strategies',
        'label' => E::ts('Upcoming Events'),
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
              '>=',
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
    'name' => 'SavedSearch_Event_Search_by_AGH_Strategies_SearchDisplay_Event_Search_by_AGH_Strategies_List_1',
    'entity' => 'SearchDisplay',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Event_Search_by_AGH_Strategies_List_1',
        'label' => E::ts('Event Search by AGH Strategies List 1'),
        'saved_search_id.name' => 'Event_Search_by_AGH_Strategies',
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
              'size' => 'btn-xs',
              'links' => [
                [
                  'entity' => '',
                  'action' => '',
                  'join' => '',
                  'target' => '',
                  'icon' => '',
                  'text' => E::ts('Register Now'),
                  'style' => 'default',
                  'path' => '/civicrm/event/register/?reset=1&id=[id]',
                  'task' => '',
                  'conditions' => [
                    [
                      'is_online_registration',
                      '=',
                      TRUE,
                    ],
                  ],
                ],
              ],
              'type' => 'buttons',
              'break' => TRUE,
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
        'acl_bypass' => TRUE,
      ],
      'match' => [
        'saved_search_id',
        'name',
      ],
    ],
  ],
];
