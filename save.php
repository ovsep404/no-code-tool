<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $title = htmlspecialchars($_POST['title']);
    $bio = htmlspecialchars($_POST['bio']);
    $about = htmlspecialchars($_POST['about']);
    $location = htmlspecialchars($_POST['location']);
    $experience = htmlspecialchars($_POST['experience']);
    $education = htmlspecialchars($_POST['education']);
    $skills = htmlspecialchars($_POST['skills']);
    $availability = htmlspecialchars($_POST['availability']);
    $relocation = htmlspecialchars($_POST['relocation']);

    // Ensure the images directory exists
    $imagesDir = __DIR__ . '/images/';
    if (!is_dir($imagesDir) && !mkdir($imagesDir, 0777, true) && !is_dir($imagesDir)) {
        throw new \RuntimeException(sprintf('Directory "%s" was not created', $imagesDir));
    }

    // Handle the uploaded image
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $imageTmpPath = $_FILES['image']['tmp_name'];
        $imageName = basename($_FILES['image']['name']);
        $imagePath = $imagesDir . $imageName;
        if (!move_uploaded_file($imageTmpPath, $imagePath)) {
            throw new \RuntimeException('Failed to move uploaded file.');
        }
        $image = 'images/' . $imageName;
    } else {
        $image = 'profile.jpg'; // Default image
    }

    $skillsArray = explode(',', $skills);
    $skillsHtml = '';
    foreach ($skillsArray as $skill) {
        $skillsHtml .= "<span>" . trim($skill) . "</span>";
    }

    var_dump($education);

    $htmlContent = "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>$name's Portfolio</title>
        <link rel='stylesheet' href='styles.css'>
    </head>
    <body>
        <div class='portfolio'>
            <div class='sidebar'>
                <div class='profile'>
                    <img src='$image' alt='Profile Image' class='profile-image'>
                    <h2>$name</h2>
                    <p>$title</p>
                    <p class='description'>$bio</p>
                    <div class='skills'>
                        $skillsHtml
                    </div>
                    <button class='download-btn'>Download CV</button>
                </div>
                <div class='about'>
                    <h3>About me</h3>
                    <p>$about</p>
                </div>
                <div class='info'>
                    <h3>Information</h3>
                    <ul>
                        <li>$location</li>
                        <li>$experience</li>
                        <li>$availability</li>
                        <li>$relocation</li>
                    </ul>
                </div>
            </div>
            <div class='main-content'>
                <nav class='tabs'>
                    <a href='#' class='active'>Resume</a>
                    <a href='#'>Projects</a>
                    <a href='#'>Blog</a>
                </nav>
                <section class='experience'>
                    <h3>Experience</h3>
                    <div class='job'>
                        <img src='images/google.png' alt='Google logo' class='company-logo'>
                        <div>
                            <h4>Full-time Software Engineer</h4>
                            <p>$experience</p>
                        </div>
                    </div>
                    <!-- Add more job experiences here -->
                </section>
                <section class='education'>
                    <h3>Education</h3>
                    <div class='education-item'>
                        <img src='images/stanford.png' alt='Stanford University logo' class='school-logo'>
                        <div>
                            <h4>Stanford University</h4>
                            <p>$education</p>
                        </div>
                    </div>
                    <!-- Add more education items here -->
                </section>
            </div>  
        </div>
    </body>
    </html>";

    // Generate a unique ID for the portfolio file
    $uniqueId = uniqid('', true);
    $filePath = __DIR__ . "/portfolio_$uniqueId.html";
    file_put_contents($filePath, $htmlContent);
    echo "Portfolio saved successfully. <a href='portfolio_$uniqueId.html'>View Portfolio</a>";
}