<?php
return [
  'entity' => 'Case',
  'defaults' => "{
    data: {
      case_type_id: '',
      creator_id: 'user_contact_id'
    },
    'url-autofill': '1'
  }",
  'boilerplate' => [
    ['#tag' => 'af-field', 'name' => 'subject'],
  ],
];
