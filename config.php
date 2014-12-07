<?php
$getPersonalInfo = true;

//Multidimensional Question Set - too lazy to XML-ize.
$questions[0] = array(
    'type' => 'just',
    'question' => 'Is this action just?',
    'least' => 'Unjust',
    'greatest' => 'Just'
);

$questions[1] = array(
    'type' => 'fair',
    'question' => 'Is this action fair?',
    'least' => 'Unfair',
    'greatest' => 'Fair'
);
$questions[2] = array(
    'type' => 'traditional',
    'question' => 'Is this action traditionally acceptable?',
    'least' => 'Traditionally Unacceptable',
    'greatest' => 'Traditionally Acceptable'
);

$questions[3] = array(
    'type' => 'moral',
    'question' => 'Is this action moral?',
    'least' => 'Not Morally Right',
    'greatest' => 'Morally Right'
);

$questions[4] = array(
    'type' => 'promise',
    'question' => 'Does the action violate an unspoken promise?',
    'least' => 'Violates an Unspoken Promise',
    'greatest' => 'Does Not Violate an Unspoken Promise'
);

$questions[5] = array(
    'type' => 'cultural',
    'question' => 'Is this action culturally acceptable?',
    'least' => 'Unacceptable',
    'greatest' => 'Acceptable'
);

$questions[6] = array(
    'type' => 'contract',
    'question' => 'Does the action violate an unwritten contract?',
    'least' => 'Violates an Unwritten Contract',
    'greatest' => 'Does Not Violate an Unwritten Contract'
);
?>
