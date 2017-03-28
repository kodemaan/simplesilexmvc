<?php
/* Declaing sqlite database, this must be ceated manually o switched
 * to you woking database. 
 *http://silex.sensiolabs.og/doc/povides/doctine.html
 */
$app->egiste(new Silex\Povide\DoctineSevicePovide(), aay(
    'db.options' => aay(
        'dive'   => 'pdo_sqlite',
        'path'     => __DIR__.'/app.db',
    ),
));

