<?php

/**
 * Implementation of hook_fieldgroup_default_groups().
 */
function flight_reservation_content_types_fieldgroup_default_groups() {
  $groups = array();

  // Exported group: group_flight_adults
  $groups['flight_tickets-group_flight_adults'] = array(
    'group_type' => 'standard',
    'type_name' => 'flight_tickets',
    'group_name' => 'group_flight_adults',
    'label' => 'Adults',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'description' => '',
        'label' => 'above',
        'teaser' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'full' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        '4' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
      ),
    ),
    'weight' => '1',
    'fields' => array(
      '0' => 'field_flight_adult_title',
      '1' => 'field_flight_adult_firstname',
      '2' => 'field_flight_adult_middlename',
      '3' => 'field_flight_adult_lastname',
    ),
  );

  // Exported group: group_flight_children
  $groups['flight_tickets-group_flight_children'] = array(
    'group_type' => 'standard',
    'type_name' => 'flight_tickets',
    'group_name' => 'group_flight_children',
    'label' => 'Children',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'description' => '',
        'label' => 'above',
        'teaser' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'full' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        '4' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
      ),
    ),
    'weight' => '2',
    'fields' => array(
      '0' => 'field_flight_children_title',
      '1' => 'field_flight_children_firstname',
      '2' => 'field_flight_children_middlename',
      '3' => 'field_flight_children_lastname',
    ),
  );

  // Exported group: group_flight_journey_details
  $groups['flight_tickets-group_flight_journey_details'] = array(
    'group_type' => 'standard',
    'type_name' => 'flight_tickets',
    'group_name' => 'group_flight_journey_details',
    'label' => 'Journey Details',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'description' => '',
        'label' => 'above',
        'teaser' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'full' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        '4' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
      ),
    ),
    'weight' => '58',
    'fields' => array(
      '0' => 'field_flight_journey_from',
      '1' => 'field_flight_journey_to',
      '2' => 'field_flight_journey_dept_date',
      '3' => 'field_flight_journey_return_date',
      '4' => 'field_flight_journey_adults',
      '5' => 'field_flight_journey_children',
      '6' => 'field_flight_journey_infants',
    ),
  );

  // Exported group: group_flight_primary_contact
  $groups['flight_tickets-group_flight_primary_contact'] = array(
    'group_type' => 'standard',
    'type_name' => 'flight_tickets',
    'group_name' => 'group_flight_primary_contact',
    'label' => 'Primary Contact Person',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'description' => '',
        'label' => 'above',
        'teaser' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'full' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        '4' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
      ),
    ),
    'weight' => '50',
    'fields' => array(
      '0' => 'field_flight_contact_title',
      '1' => 'field_flight_contact_firstname',
      '2' => 'field_flight_contact_lastname',
      '3' => 'field_flight_contact_middlename',
      '4' => 'field_flight_contact_email',
      '5' => 'field_flight_contact_mobile',
    ),
  );

  // Exported group: group_infants
  $groups['flight_tickets-group_infants'] = array(
    'group_type' => 'standard',
    'type_name' => 'flight_tickets',
    'group_name' => 'group_infants',
    'label' => 'Infants',
    'settings' => array(
      'form' => array(
        'style' => 'fieldset',
        'description' => '',
      ),
      'display' => array(
        'description' => '',
        'label' => 'above',
        'teaser' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        'full' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
        '4' => array(
          'format' => 'fieldset',
          'exclude' => 0,
        ),
      ),
    ),
    'weight' => '6',
    'fields' => array(
      '0' => 'field_flight_infant_firstname',
      '1' => 'field_flight_infant_middlename',
      '2' => 'field_flight_infant_lastname',
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Adults');
  t('Children');
  t('Infants');
  t('Journey Details');
  t('Primary Contact Person');

  return $groups;
}
