
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LearnSpace - Student Learning Platform</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

        $courses= [
            [
             "title" => "Programming", 
             "description" => "Learn programming fundamentals, coding logic and problem-solving skills.", 
             "image" => "Images/image2.jpg", 
             "category" => "Language"
            ],
            [
             "title" => "Study Skills", 
             "description" => "Improve your learning techniques, research skills and time management.", 
             "image" => "Images/image3.jpg", 
             "category" => "Documentation"
            ],
            [
             "title" => "Graphic Design", 
             "description" => "Discover creativity, typography,colors and modern design techniques.", 
             "image" => "Images/image4.jpg", 
             "category" => "Creativity"
            ]                               
        ];
    ?>
    <?php foreach ($courses as $course): ?>
     <article class="course">
    <img src="<?= $course["image"] ?>">
    <h3><?= $course["title"] ?></h3>
    <p><?= $course["description"] ?></p>
    <span><?= $course["category"] ?></span>
  </article>
<?php endforeach; ?>





    <header id="home">

        <nav class="navbar">

            <a href="#home" class="logo">
                Learn<span>Space</span>
            </a>

            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a href="#resources">Resources</a></li>
                <li><a href="#media">Media</a></li>
                <li><a href="#about">About</a></li>
            </ul>

        </nav>

        
        <section class="hero">

            <article class="hero-content">

                <p class="tagline">WELCOME TO LEARNSPACE</p>

                <h1>Make Learning Your Superpower.</h1>

                <p>
                    Discover useful courses, improve your skills,
                    explore educational resources and achieve
                    your academic goals with LearnSpace.
                </p>

                <a href="#courses" class="btn">
                    Explore Courses
                </a>

            </article>

            <figure class="hero-image">

                <img
                    src="Images/image1.jpg"
                    alt="Students studying together">

                <figcaption>
                    Learn together. Grow together.
                </figcaption>

            </figure>

        </section>

    </header>


    
    <main>

        
        <section class="section" id="courses">

            <section class="section-heading">

                <p class="tagline">START LEARNING</p>

                <h2>Popular Learning Courses</h2>

                <p>
                    Explore different subjects and develop new skills.
                </p>

            </section>

            <section class="course-grid">

                
                <article class="course-card">

                    <img
                        src="Images/image2.jpg">

                    <section class="card-content">

                        <h3>Programming</h3>

                        <p>
                            Learn programming fundamentals,
                            coding logic and problem-solving skills.
                        </p>

                        <a href="https://developer.mozilla.org/en-US/docs/Learn">
                            Learn More →
                        </a>

                    </section>

                </article>


                <article class="course-card">

                    <img
                        src="Images/image3.jpg"
                        alt="Books and study materials">

                    <section class="card-content">

                        <h3>Study Skills</h3>

                        <p>
                            Improve your learning techniques,
                            research skills and time management.
                        </p>

                        <a href="https://owl.purdue.edu/">
                            Learn More →
                        </a>

                    </section>

                </article>


                <article class="course-card">

                    <img
                        src="Images/image4.jpg"
                        alt="Creative graphic design work">

                    <section class="card-content">

                        <h3>Graphic Design</h3>

                        <p>
                            Discover creativity, typography,
                            colors and modern design techniques.
                        </p>

                        <a href="https://www.canva.com/learn/">
                            Learn More →
                        </a>

                    </section>

                </article>

            </section>

        </section>


   
        <section class="section resources" id="resources">

            <section class="section-heading">

                <p class="tagline">STUDY SMARTER</p>

                <h2>Learning Resources</h2>

                <p>
                    Useful resources to support your education.
                </p>

            </section>

            <section class="resource-grid">

                <article class="resource-card">

                    <h3>📚 Study Notes</h3>

                    <p>
                        Read notes and prepare for examinations.
                    </p>

                    <a href="https://openstax.org/">
                        Explore Notes →
                    </a>

                </article>


                <article class="resource-card">

                    <h3>🎥 Video Tutorials</h3>

                    <p>
                        Learn different topics through video lessons.
                    </p>

                    <a href="https://www.khanacademy.org/">
                        Watch Tutorials →
                    </a>

                </article>


                <article class="resource-card">

                    <h3>💻 Coding Resources</h3>

                    <p>
                        Practice programming and web development.
                    </p>

                    <a href="https://developer.mozilla.org/">
                        Start Coding →
                    </a>

                </article>


                <article class="resource-card">

                    <h3>✍️ Writing Guides</h3>

                    <p>
                        Improve academic writing and communication.
                    </p>

                    <a href="https://owl.purdue.edu/">
                        Read Guides →
                    </a>

                </article>

            </section>

        </section>


        <!-- Multimedia Section -->
        <section class="section" id="media">

            <section class="section-heading">

                <p class="tagline">LEARN DIFFERENTLY</p>

                <h2>Multimedia Learning</h2>

                <p>
                    Enjoy educational content through video and audio.
                </p>

            </section>

            <section class="media-grid">

                <!-- Educational Video -->
                <article class="media-card">

                    <h3>Educational Video</h3>

                    <video
                        controls
                        width="100%"
                        poster="Images/image5.jpg">

                        <source
                            src="Video/flower.mp4"
                            type="video/mp4">

                        Your browser does not support video.

                    </video>

                    <p>
                        Watch this sample educational video lesson.
                    </p>

                </article>


                <!-- Audio Learning -->
                <article class="media-card">

                    <h3>Audio Learning</h3>

                    <img
                        src="Images/image6.jpg"
                        alt="Audio recording equipment">

                    <audio controls>

                        <source
                            src="Audio/SoundHelix-Song-1.mp3"
                            type="audio/mpeg">

                        Your browser does not support audio.

                    </audio>

                    <p>
                        Listen to sample audio content.
                    </p>

                </article>

            </section>

        </section>


        <!-- About Section -->
        <section class="about-section" id="about">

            <h2>About LearnSpace</h2>

            <p>
                LearnSpace is a student-focused learning platform
                designed to provide educational materials,
                tutorials and useful academic resources.
                Our goal is to make learning simple, accessible
                and enjoyable for everyone.
            </p>

        </section>

    </main>


    <!-- Sidebar Information -->
    <aside class="sidebar">

        <!-- Announcements -->
        <section class="sidebar-box">

            <h2>📢 Announcements</h2>

            <article>

                <h3>Welcome to Week 1!</h3>

                <p>
                    Explore the platform and start your learning journey.
                </p>

            </article>

            <article>

                <h3>New Learning Resources</h3>

                <p>
                    Check out our latest educational resources.
                </p>

            </article>

        </section>


        <!-- Study Checklist -->
        <section class="sidebar-box">

            <h2>📅 Study Checklist</h2>

            <ul>

                <li>Review lecture notes</li>

                <li>Practice coding</li>

                <li>Read educational articles</li>

                <li>Complete assignments</li>

            </ul>

        </section>


        <!-- Sidebar Image -->
        <figure class="sidebar-image">

            <img
                src="Images/image7.jpg"
                alt="Student studying and writing notes">

            <figcaption>
                Keep learning every day!
            </figcaption>

        </figure>

    </aside>


    <!-- Footer -->
    <footer>

        <section class="footer-content">

            <!-- Footer About -->
            <section>

                <h2>LearnSpace</h2>

                <p>
                    Your journey towards better learning starts here.
                </p>

            </section>


            <!-- Quick Links -->
            <section>

                <h3>Quick Links</h3>

                <ul>

                    <li><a href="#home">Home</a></li>

                    <li><a href="#courses">Courses</a></li>

                    <li><a href="#resources">Resources</a></li>

                    <li><a href="#about">About</a></li>

                </ul>

            </section>


            <!-- Useful Websites -->
            <section>

                <h3>Useful Websites</h3>

                <ul>

                    <li>
                        <a href="https://www.khanacademy.org/">
                            Khan Academy
                        </a>
                    </li>

                    <li>
                        <a href="https://www.w3schools.com/">
                            W3Schools
                        </a>
                    </li>

                    <li>
                        <a href="https://developer.mozilla.org/">
                            MDN Web Docs
                        </a>
                    </li>

                </ul>

            </section>

        </section>


        <!-- Copyright -->
        <p class="copyright">

            © 2026 LearnSpace. Created for Week 1 Workshop.

        </p>

    </footer>

</body>

</html>
