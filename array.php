<?php 

// $dataPeserta = array(
//     'Yeheskiel',
//     'Billy',
//     'Septemina',
//     'Belinda',
//     'Samuel',
//     TRUE,
//     FALSE,
//     123,
//     NULL,
//     12.12345
// );

// var_dump($dataPeserta);

// foreach($dataPeserta as $peserta) {
//     echo $peserta;
//     echo '<br>';
// }


// $trainerSaCode = [
//     'Yeheskiel',
//     'Billy',
//     'Samuel',
//     'Belinda',
// ];

// foreach($trainerSaCode as $data):
//     echo $data;
//     echo '<br>';
// endforeach;

// echo '<ul>';
// foreach($trainerSaCode as $trainer):
//     echo '
//         <li>
//             ' . $trainer . '
//         </li>';
// endforeach;
// echo '</ul>';

// ======================================================


// $speakerSaCode = [
//     'name'          => 'Nick Imbiri',
//     'job_title'     => 'Math & Data Science Enthusiast',
//     'email'         => 'nick@sacode.web.id',
// ];

// var_dump($speakerSaCode);

// var_dump($speakerSaCode['job_title']);

// echo $speakerSaCode['name'];

// ========================================================

$speakerSaCode = [
    [
        'name'          => 'Nick Imbiri',
        'job_title'     => 'Math & Data Science Enthusiast',
        'email'         => 'nick@sacode.web.id'
    ],
    [
        'name'          => 'Johan Nasendi',
        'job_title'     => 'Backend Developer',
        'email'         => 'johan@sacode.web.id'
    ],
    [
        'name'          => 'Samuel Bosawer',
        'job_title'     => 'DevOps Engineer',
        'email'         => 'z.bosawer@sacode.web.id'
    ]
];

// var_dump($speakerSaCode);

// echo $speakerSaCode[1]['name'] . '  ' . $speakerSaCode[1]['job_title'];

foreach($speakerSaCode as $speaker):
    echo $speaker['name'] . '<br>';
endforeach;