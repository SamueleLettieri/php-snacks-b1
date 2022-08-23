<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $scontri = [
        [
            'team1' => 'EA7 EMPORIO ARMANI MILANO',
            'team2' => 'GERMANI BRESCIA',
            'risultatoTeam1' => 44,
            'risultatoTeam2' => 60,
        ],
        [
            'team1' => 'BERTRAM YACHTS DERTHONA TORTONA',
            'team2' => 'DOLOMITI ENERGIA TRENTINO',
            'risultatoTeam1' => 60,
            'risultatoTeam2' => 30,
        ],
        [
            'team1' => 'UMANA REYER VENEZIA',
            'team2' => 'GIVOVA SCAFATI',
            'risultatoTeam1' => 56,
            'risultatoTeam2' => 50,
        ],
        [
            'team1' => 'PALLACANESTRO TRIESTE',
            'team2' => 'CARPEGNA PROSCIUTTO PESARO',
            'risultatoTeam1' => 66,
            'risultatoTeam2' => 60,
        ],
        [
            'team1' => 'NUTRIBULLET TREVISO BASKET',
            'team2' => 'UNAHOTELS REGGIO EMILIA',
            'risultatoTeam1' => 66,
            'risultatoTeam2' => 50,
        ]
    ]
    
    ?>

    <h1>snack 1</h1>

    <p>
        Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra 
        di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60 
    </p>
    

    <?php
        for ($i = 0; $i < count($scontri); $i++) {
    ?>
    <h3>
        <?php
          echo $scontri[$i]["team1"] . ' - ' . $scontri[$i]["team2"] . ' = ' . $scontri[$i]["risultatoTeam1"] . ' - ' . $scontri[$i]["risultatoTeam2"];
        ?>
    </h3>
    <?php
            
        } 
    ?>

    <hr>
    
    <h1>snack 2</h1>


    <p>
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
        che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
        Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato
    </p>    

    <?php 
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];

        if ((strlen($name) > 3) && (strpos($email, '@') > 0 && strpos($email, '.') > 2) && is_numeric($age)) {
            echo 'Accesso riuscito';
        } else {
            echo 'Accesso negato';

        }
    ?>

    <hr>
    <h1>snack 3</h1>


    <p>
        Creare un array con 15 numeri casuali, tenendo conto che 
        l'array non dovrà contenere lo stesso numero più di una volta 
    </p>    

    <?php 
        $numeri = []; 
        
        while ( count($numeri) < 15) {
            $numeriRandom = rand(1,15);
        
            if(!in_array($numeriRandom, $numeri)){
               $numeri[] = $numeriRandom;
            }

        }
        var_dump($numeri);
    ?>

    <hr>


    <h1>snack 4</h1>


    <p>
        Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
        Ogni punto un nuovo paragrafo.
    </p>    

    <?php 
        $testo = "La Comedìa, o Commedia, conosciuta soprattutto come Divina Commedia,[1] è un poema allegorico-didascalico[2] di Dante Alighieri, scritto in terzine incatenate di endecasillabi (poi chiamate per antonomasia terzine dantesche) in lingua volgare fiorentina.[3]

        Il titolo originale, con cui lo stesso autore designa il suo poema, fu Comedia (probabilmente pronunciata con accento tonico sulla i); e così è intitolata anche l'editio princeps del 1472. L'aggettivo «Divina» le fu attribuito dal Boccaccio nel Trattatello in laude di Dante, scritto fra il 1357 e il 1362 e stampato nel 1477. Ma è nella prestigiosa edizione giolitina, a cura di Ludovico Dolce e stampata da Gabriele Giolito de' Ferrari nel 1555, che la Commedia di Dante viene per la prima volta intitolata come da allora fu sempre conosciuta, ovvero 'La Divina Comedia'.
        
        Composta secondo i critici tra il 1304/07 e il 1321, anni del suo esilio in Lunigiana e Romagna,[4] la Commedia è il capolavoro di Dante ed è universalmente ritenuta una delle più grandi opere della letteratura di tutti i tempi,[5] nonché una delle più importanti testimonianze della civiltà medievale, tanto da essere conosciuta e studiata in tutto il mondo. Si narra, inoltre, di stranieri che imparano l'italiano al solo scopo di leggerne il testo nella sua lingua originale.";
        $testoModificato = explode('.', $testo); 
    ?>

    <p>
        <?php 
            var_dump($testoModificato);
        ?>
    </p>

    <hr>


    <h1>snack 5</h1>


    <p>
        Creare un array contenente qualche alunno di un'ipotetica classe. 
        Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
        Stampare Nome, Cognome e la media dei voti di ogni alunno.
    </p>    

    <?php 
    $alunni = [
        [
            'name' => 'Samuele',
            'cognome' => 'Letieri',
             'voti' => [
                'matematica' => 8,
                'storia' => 6,
                'italiano' => 7,
            ]
        ],
        [
            'name' => 'Davide',
            'cognome' => 'Godano',
             'voti' => [
                'matematica' => 8,
                'storia' => 9,
                'italiano' => 8,
            ] 
        ],
        [
            'name' => 'Giuseppe',
            'cognome' => 'Tropeano',
             'voti' => [
                'matematica' => 5,
                'storia' => 7,
                'italiano' => 6,
            ] 
        ],
        [
            'name' => 'Dennis',
            'cognome' => 'Scordamaglia',
             'voti' => [
                'matematica' => 6,
                'storia' => 6,
                'italiano' => 5,
            ] 
        ],
    ];


    ?>

    <?php
        for ($i = 0; $i < count($alunni); $i++) {

            $media = array_sum($alunni[$i]['voti']);
    ?>
    <h3>
        <?php
          echo $alunni[$i]["name"] .' '. $alunni[$i]["cognome"] . ' ' .  intval($media / 3); 
        ?>
    </h3>
    <?php
        } 
    ?>

    
</body>
</html>
