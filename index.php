<?php include 'includes/header.php'; ?>

    <section class="hero">
        <div class="container">
            <h1>Hi, I'm Okech Prevyne Odhiambo</h1>
            <p class="subtitle">Software Engineer | Web Application Developer | Virtual Assistant</p>
            <a href="#contact" class="btn">Get in Touch</a>
        </div>
    </section>

    <section id="about" class="section about-section">
        <div class="container">
            <h2>About Me</h2>
            <div class="about-content">
                <div class="about-image">
                    <img src="assets/images/profile2.jpg" alt="profile">
                </div>
                <div class="about-text">
                    <p>I'm a passionate developer with expertise in building web applications and providing technical solutions. 
                        With 5+ years of experience, I help individuals and businesses create efficient digital products.</p>
                    <p>When I'm not coding, you can find me swimming, gaming, reading tech blogs, or experimenting with new frameworks.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="section skills-section">
        <div class="container">
            <h2>My Skills</h2>
            <div class="skills-grid">
                <div class="skill-category">
                    <h3>Web Development</h3>
                    <ul>
                        <li>HTML5 & CSS3</li>
                        <li>JavaScript (ES6+)</li>
                        <li>PHP & MySQL</li>
                        <li>Django & Flask</li>
                        <li>React.js</li>
                        <li>Node.js</li>
                        <li>Bootstrap4</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3>Software Engineering</h3>
                    <ul>
                        <li>Python Programming</li>
                        <li>C Programming</li>
                        <li>C++ Programming</li>
                        <li>Git Version Control</li>
                        <li>Unix DevOps system Engineering</li>
                        <li>Docker</li>
                        <li>SQL-Alchemy</li>
                        <li>Software Project Management & Metrics</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3>Virtual Assistance</h3>
                    <ul>
                        <li>Email Management</li>
                        <li>Data Entry</li>
                        <li>Social Media Management</li>
                        <li>Calendar Management</li>
                        <li>Customer Support</li>
                        <li>Google Workspaces</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3>Other Skills</h3>
                    <ul>
                        <li>Problem-Solving skills</li>
                        <li>Logical Thinking</li>
                        <li>Communication</li>
                        <li>Teamwork</li>
                        <li>Time Management</li>
                        <li>Organization</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section projects-section">
        <div class="container">
            <h2>My Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <img src="assets/images/project1.jpg" alt="E-Commerce Website">
                    <h3>E-Commerce Platform</h3>
                    <p>A full-featured online store with payment integration.</p>
                    <a href="#" class="btn">View Project</a>
                </div>
                <div class="project-card">
                    <img src="assets/images/project2.jpg" alt="Task Manager">
                    <h3>Task Management App</h3>
                    <p>Productivity application with team collaboration features.</p>
                    <a href="#" class="btn">View Project</a>
                </div>
                <div class="project-card">
                    <img src="assets/images/project3.jpg" alt="Portfolio Website">
                    <h3>Portfolio Template</h3>
                    <p>Customizable portfolio template for creatives.</p>
                    <a href="#" class="btn">View Project</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section contact-section">
        <div class="container">
            <h2>Get In Touch</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p><i class="fas fa-envelope"></i> prevyneoketch6@gmail.com</p>
                    <p><i class="fas fa-phone"></i> +254712918350</p>
                    <p><i class="fas fa-map-marker-alt"></i> Nakuru, Kenya</p>
                    <p><i class="fa-brands fa-github"></i>
                        <a href="https://github.com/prevyne" target="_blank">https://github.com/prevyne</a>
                    </p>
                </div>
                <form action="submit_contact.php" method="POST" class="contact-form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
