
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-Person Roster</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $defaultImage = 'data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="120" height="120"><rect width="120" height="120" fill="black"/><circle cx="60" cy="40" r="24" fill="gold"/><path d="M30 100c0-22 20-40 30-40s30 18 30 40" fill="gold"/></svg>';

    $people = [
        ['name' => 'Bong Revilla Jr.', 'image' => 'bong-revilla-selfie_2018-06-22_21-45-43.jpg', 'age' => '59', 'birthday' => '1966-09-25', 'contact' => '09621234567'],
        ['name' => 'Ferdinand Marcos Sr.', 'image' => "Ferdinand_Marcos'_official_portrait_during_his_second_term_(1969）（cropped)2.jpg", 'age' => '72', 'birthday' => '1917-09-11', 'contact' => '09171234567'],
        ['name' => 'Gloria Macapagal Arroyo', 'image' => 'gloria-macapagal-arroyo-free.jpg', 'age' => '79', 'birthday' => '1947-04-05', 'contact' => '09401234567'],
        ['name' => 'Imelda Marcos', 'image' => 'Imelda_Marcos_of_the_Philippines_on_January_18,_1973_(cropped).jpg', 'age' => '96', 'birthday' => '1929-07-02', 'contact' => '09391234567'],
        ['name' => 'Janet Lim-Napoles', 'image' => 'Janet_Lim-Napoles_mugshot.jpg', 'age' => '62', 'birthday' => '1964-01-06', 'contact' => '09511234567'],
        ['name' => 'Jinggoy Estrada', 'image' => 'Jinggoy_Estrada_mugshot_Camp_Crame_2014_PDAF_Scam.jpg', 'age' => '63', 'birthday' => '1963-02-17', 'contact' => '09731234567'],
        ['name' => 'Joseph "Erap" Estrada', 'image' => 'APPCU-2022-Laureate-Joseph-Estrada.jpg', 'age' => '89', 'birthday' => '1937-04-19', 'contact' => '09281234567'],
        ['name' => 'Juan Ponce Enrile', 'image' => 'DOLE_Secretary_Marianito_Roque_and_Senate_President_Juan_Ponce_Enrile_(cropped).jpg', 'age' => '102', 'birthday' => '1924-02-14', 'contact' => '09841234567'],
        ['name' => 'Rodrigo Duterte', 'image' => '42966137_605.jpg', 'age' => '81', 'birthday' => '1945-03-28', 'contact' => '09951234567'],
        ['name' => 'Sara Duterte', 'image' => 'Sara-Duterte-24November2024.jpg', 'age' => '47', 'birthday' => '1978-05-31', 'contact' => '09161234567'],
    ];

    foreach ($people as &$person) {
        if (!file_exists($person['image'])) {
            $person['image'] = $defaultImage;
        }
    }
    unset($person);

    usort($people, function ($a, $b) {
        return strcmp($a['name'], $b['name']);
    });
    ?>

    <div class="container">
        <section class="header-panel">
            <h1>Corrupt Persons in the Philippines</h1>
            <p>PHP-based list of people with their personal details arranged alphabetically.</p>
        </section>

        <table class="roster-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Age</th>
                    <th>Birthday</th>
                    <th>Contact Number</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($people as $index => $person): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($person['name']) ?></td>
                        <td class="photo-cell"><img src="<?= htmlspecialchars($person['image']) ?>" alt="<?= htmlspecialchars($person['name']) ?>"></td>
                        <td><?= htmlspecialchars($person['age']) ?></td>
                        <td><?= date('F j, Y', strtotime($person['birthday'])) ?></td>
                        <td><?= htmlspecialchars($person['contact']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


       <div class="button-center">
    <button class="back-btn" onclick="history.back()">⬅ Go Back</button>
</div>




</body>
</html>
