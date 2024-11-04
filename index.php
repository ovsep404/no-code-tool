<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Generator</title>
    <link rel="stylesheet" href="styles.css">
</head>

<header>
    <div class="header-container">
        <h1>Portfolio Generator</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="list.php">Generated Portfolios</a></li>
            </ul>
        </nav>
    </div>
</header>
<body>
<div class="container">
    <h1>Portfolio Generator</h1>
    <div class="content">
        <div class="form-container">
            <form id="portfolioForm" enctype="multipart/form-data">

                <label for="image">Profile Image:</label>
                <input type="file" id="image" name="image" oninput="updatePreview()">

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="Cristopher Abbott" oninput="updatePreview()">

                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="Full Stack Developer - USA" oninput="updatePreview()">

                <label for="bio">Bio:</label>
                <textarea id="bio" name="bio" oninput="updatePreview()">Full-stack developer with 8+ years of experience in building web apps. Skilled in React, Node.js, Python, and SQL.</textarea>

                <label for="about">About Me:</label>
                <textarea id="about" name="about" oninput="updatePreview()">I am passionate about using technology to solve real-world problems. I am always looking for new ways to improve the user experience and make software more accessible to everyone. I am also a strong advocate for open-source software and am always willing to contribute to the community.</textarea>

                <label for="location">Location:</label>
                <input type="text" id="location" name="location" value="Location" oninput="updatePreview()">

                <label for="experience">Experience:</label>
                <textarea id="experience" name="experience" oninput="updatePreview()">Google • Mountain View, CA • Jul 2020 - Present: Developed and maintained web applications using React, Node.js, and Python. Worked with a team of engineers to deliver high-quality software on time and within budget.</textarea>

                <label for="education">Education:</label>
                <textarea id="education" name="education" oninput="updatePreview()">Stanford University • Stanford, CA • 2018 - 2020: Developed a machine learning algorithm to predict customer churn. Built a web application to help students find roommates.</textarea>

                <label for="skills">Skills:</label>
                <textarea id="skills" name="skills" oninput="updatePreview()">JavaScript, React, Node.js, ExpressJS, Python, SQL, Git, Agile, CI/CD</textarea>

                <label for="availability">Availability:</label>
                <input type="text" id="availability" name="availability" value="Availability" oninput="updatePreview()">

                <label for="relocation">Relocation:</label>
                <input type="text" id="relocation" name="relocation" value="Relocation" oninput="updatePreview()">

                <button type="button" onclick="savePortfolio()">Save Portfolio</button>
            </form>
        </div>

        <div class="preview-container">
            <h2>Preview</h2>
            <div id="preview">
                <div class="portfolio">
                    <div class="sidebar">
                        <div class="profile">
                            <img src="profile.jpg" alt="Profile Image" class="profile-image">
                            <h2 id="previewName">Cristopher Abbott</h2>
                            <p id="previewTitle">Full Stack Developer - USA</p>
                            <p class="description" id="previewBio">Full-stack developer with 8+ years of experience in
                                building web apps. Skilled in React, Node.js, Python, and SQL.</p>
                            <div class="skills" id="previewSkills">
                                <span>JavaScript</span>
                                <span>React</span>
                                <span>Node.js</span>
                                <span>ExpressJS</span>
                                <span>Python</span>
                                <span>SQL</span>
                                <span>Git</span>
                                <span>Agile</span>
                                <span>CI/CD</span>
                            </div>
                            <button class="download-btn">Download CV</button>
                        </div>
                        <div class="about">
                            <h3>About me</h3>
                            <p id="previewAbout">I am passionate about using technology to solve real-world problems. I
                                am always looking for new ways to improve the user experience and make software more
                                accessible to everyone. I am also a strong advocate for open-source software and am
                                always willing to contribute to the community.</p>
                        </div>
                        <div class="info">
                            <h3>Information</h3>
                            <ul>
                                <li id="previewLocation">Location</li>
                                <li id="previewAvailability">Availability</li>
                                <li id="previewRelocation">Relocation</li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-content">
                        <nav class="tabs">
                            <a href="#" class="active">Resume</a>
                            <a href="#">Projects</a>
                            <a href="#">Blog</a>
                        </nav>
                        <section class="experience">
                            <h3>Experience</h3>
                            <div class="job" id="previewExperienceContent">
                                <img src="google.png" alt="Google logo" class="company-logo">
                                <div>
                                    <h4>Full-time Software Engineer</h4>
                                    <p>Google • Mountain View, CA • Jul 2020 - Present</p>
                                    <p>Developed and maintained web applications using React, Node.js, and Python.
                                        Worked with a team of engineers to deliver high-quality software on time and
                                        within budget.</p>
                                </div>
                            </div>
                            <!-- Add more job experiences here -->
                        </section>
                        <section class="education">
                            <h3>Education</h3>
                            <div class="education-item" id="previewEducationContent">
                                <img src="stanford.png" alt="Stanford University logo" class="school-logo">
                                <div>
                                    <h4>Stanford University</h4>
                                    <p>Stanford, CA • 2018 - 2020</p>
                                    <p>Developed a machine learning algorithm to predict customer churn. Built a web
                                        application to help students find roommates.</p>
                                </div>
                            </div>
                            <!-- Add more education items here -->
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>