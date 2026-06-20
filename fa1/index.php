<?php
$name = "Aleson Depano";
$phone = "09761427589";
$email = "alesondepano@gmail.com";
$address = "Sampaloc, Manila City, Metro Manila, Philippines";
$summary = "IT student with foundational skills in programming, networking, and web development. Passionate about technology and problem-solving, seeking an entry-level role or internship to apply technical knowledge and grow in the tech industry.";
$profileImage = 'img/profile.jpg';
$profileAlt = 'Profile photo of Aleson Depano';


$education = [
    [
        'degree' => 'College',
        'institution' => 'Far Eastern University Institute of Technology (FEUTECH)',
        'period' => '2024 - Present',
        'course' => 'Bachelor of Science in Information Technology specialized in Web and Mobile Application.',
        'details' => '2nd year'
    ],
    [
        'degree' => 'Senior High School',
        'institution' => 'Maria Assumpta Seminary',
        'period' => '2022 - 2024',
        'course' => 'General Academic Strand',
        'details' => 'Awards: Community Service Award, Best in Performance Arts, Best in Work Immersion.'
    ],
    [
        'degree' => 'Junior High School',
        'institution' => 'Maria Assumpta Seminary',
        'period' => '2018 - 2022',
        'course' => 'Honor Awardee, Most Responsible Awardee.'
    ],
    [
        'degree' => 'Elementary School',
        'institution' => 'Zaragoza Central School',
        'period' => '2012 - 2018',
    ]
];
$programmingLanguages = ['HTML', 'CSS', 'Java', 'JavaScript', 'C++', 'Python'];
$technicalSkills = ['Troubleshooting hardware and software', 'Networking fundamentals', 'Microsoft Office (Word, Excel, PowerPoint)', 'Database basics (MySQL / SQLite)'];
$designSkills = ['Canva (social media graphics, posters, layouts)', 'Figma (UI/UX design, wireframing, prototyping)', 'Adobe Photoshop (photo editing, layout design)', 'Adobe Illustrator (logo & vector design)', 'Adobe Premiere Pro (basic video editing)'];
$certifications = [
    'Certified IT Specialist - HTML and CSS issued by Certiport',
    'Certified IT Specialist - Java issued by Certiport',
    'Certified IT Specialist - JavaScript issued by Certiport',
    'Certified IT Specialist - Python issued by Certiport'
];
$projects = [
    [
        'title' => 'Student Management System',
        'technologies' => 'PHP, MySQL, HTML, CSS, JavaScript',
        'summary' => 'Built a web-based student management app with CRUD, validation, and relational database design.'
    ],
    [
        'title' => 'Personal Portfolio Website',
        'technologies' => 'HTML, CSS, JavaScript',
        'summary' => 'Created a responsive portfolio site with interactive navigation and modern layout.'
    ],
    [
        'title' => 'Inventory Management System',
        'technologies' => 'PHP, MySQL',
        'summary' => 'Developed an inventory system with user authentication and stock tracking.'
    ]
];
$workExperience = [
    [
        'title' => 'IT Support Assistant (OJT / Internship)',
        'company' => 'School IT Projects',
        'period' => '2023 - 2024',
        'details' => 'Provided hardware/software support, network troubleshooting, and technical documentation.'
    ],
    [
        'title' => 'Academic & Freelance IT Projects',
        'company' => 'Independent / Team-Based',
        'period' => '2022 - Present',
        'details' => 'Completed multiple IT projects with planning, testing, and collaboration while maintaining deadlines.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($name) ?> | Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="resume">
        <header class="header">
            <div class="header-left">
                <img class="profile-photo" src="<?= htmlspecialchars($profileImage) ?>" alt="<?= htmlspecialchars($profileAlt) ?>">
                <div>
                    <h1><?= htmlspecialchars($name) ?></h1>
                    <p class="meta">IT Student</p>
                </div>
            </div>
            <div class="contact">
                <p><?= htmlspecialchars($phone) ?></p>
                <p><?= htmlspecialchars($email) ?></p>
                <p><?= htmlspecialchars($address) ?></p>
            </div>
        </header>

        <section class="section">
            <h2>Professional Summary</h2>
            <p><?= htmlspecialchars($summary) ?></p>
        </section>

        <section class="section">
            <h2>Education</h2>
            <?php foreach ($education as $edu): ?>
                <div class="item">
                    <h3><?= htmlspecialchars($edu['degree']) ?></h3>
                    <p class="subtext"><?= htmlspecialchars($edu['institution']) ?> | <?= htmlspecialchars($edu['period']) ?></p>
                    <?php if (!empty($edu['course'])): ?>
                        <p><?= htmlspecialchars($edu['course']) ?></p>
                    <?php endif; ?>
                    <?php if (!empty($edu['details'])): ?>
                        <p class="subtext"><?= htmlspecialchars($edu['details']) ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </section>

        <section class="section split">
            <div>
                <h2>Programming Languages</h2>
                <ul class="skills">
                    <?php foreach ($programmingLanguages as $language): ?>
                        <li><?= htmlspecialchars($language) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div>
                <h2>Technical Skills</h2>
                <ul class="skills">
                    <?php foreach ($technicalSkills as $skill): ?>
                        <li><?= htmlspecialchars($skill) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>

        <section class="section">
            <h2>Design Skills</h2>
            <ul class="skills">
                <?php foreach ($designSkills as $skill): ?>
                    <li><?= htmlspecialchars($skill) ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="section">
            <h2>Certifications</h2>
            <ul class="skills">
                <?php foreach ($certifications as $cert): ?>
                    <li><?= htmlspecialchars($cert) ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="section">
            <h2>Projects</h2>
            <?php foreach ($projects as $project): ?>
                <div class="item">
                    <h3><?= htmlspecialchars($project['title']) ?></h3>
                    <p class="subtext"><?= htmlspecialchars($project['technologies']) ?></p>
                    <p><?= htmlspecialchars($project['summary']) ?></p>
                </div>
            <?php endforeach; ?>
        </section>

        <section class="section">
            <h2>Professional Work</h2>
            <?php foreach ($workExperience as $exp): ?>
                <div class="item">
                    <h3><?= htmlspecialchars($exp['title']) ?></h3>
                    <p class="subtext"><?= htmlspecialchars($exp['company']) ?> | <?= htmlspecialchars($exp['period']) ?></p>
                    <p><?= htmlspecialchars($exp['details']) ?></p>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
</body>
</html>
