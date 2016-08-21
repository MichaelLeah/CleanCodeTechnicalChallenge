<?php 

require '../vendor/autoload.php';

$batch = new DocnetChallenge\Classes\Batch();

/*
 * Start the Dispatch
 */
$batch->startDispatchPeriod();

/*
 * Create out Consignments
 */
try {
    $consignmentOne = new \DocnetChallenge\Classes\Consignment('RoyalMail', 'Computer Mouse');
    $batch->addConsignment($consignmentOne);
} catch (Exception $e) {
    // Error Log.
}

try {
    $consignmentTwo = new \DocnetChallenge\Classes\Consignment('RoyalMail', 'Computer Keyboard');
    $batch->addConsignment($consignmentTwo);
} catch (Exception $e) {
    // Error Log.
}

try {
    $consignmentThree = new \DocnetChallenge\Classes\Consignment('RoyalMail', 'Computer Monitor');
    $batch->addConsignment($consignmentThree);
} catch (Exception $e) {
    // Error Log.
}

/*
 * End the Dispatch
 */
$batch->endDispatchPeriod();

echo '<pre>';
print_r($batch);
echo '</pre>';

