<?php

return array(


    'pdf' => array(
        'enabled' => true,
        'binary'  => 'xfvb-run /usr/local/bin/wkhtmltopdf',
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),
    'image' => array(
        'enabled' => true,
        'binary'  => 'xfvb-run /usr/local/bin/wkhtmltoimage',
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),


);
