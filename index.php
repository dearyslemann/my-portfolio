<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deary Sleman - Full Stack Developer</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0d1117 0%, #161b22 25%, #21262d 50%, #30363d 75%, #0d1117 100%);
            color: white;
            overflow-x: hidden;
            line-height: 1.6;
            position: relative;
            min-height: 100vh;
        }

        /* Enhanced Developer Smoke Effect */
        .smoke-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
            overflow: hidden;
        }

        .smoke-trail {
            position: absolute;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            filter: blur(3px);
            transform: translate(-50%, -50%);
            transition: all 0.4s ease-out;
            opacity: 0;
            mix-blend-mode: screen;
            box-shadow: 0 0 20px currentColor;
        }

        .smoke-trail.active {
            opacity: 1;
            animation: smokeGlow 0.5s ease-out;
        }

        .smoke-trail.fading {
            animation: enhancedSmokeFade 3.5s ease-out forwards;
        }

        @keyframes smokeGlow {
            0% {
                opacity: 0;
                transform: translate(-50%, -50%) scale(0.5);
                filter: blur(1px);
            }
            50% {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1.2);
                filter: blur(2px);
            }
            100% {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
                filter: blur(3px);
            }
        }

        @keyframes enhancedSmokeFade {
            0% {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1) rotate(0deg);
                filter: blur(3px);
            }
            25% {
                opacity: 0.8;
                transform: translate(-50%, -50%) scale(2) rotate(90deg);
                filter: blur(6px);
            }
            50% {
                opacity: 0.6;
                transform: translate(-50%, -50%) scale(3.5) rotate(180deg);
                filter: blur(10px);
            }
            75% {
                opacity: 0.3;
                transform: translate(-50%, -50%) scale(5) rotate(270deg);
                filter: blur(15px);
            }
            100% {
                opacity: 0;
                transform: translate(-50%, -50%) scale(7) rotate(360deg);
                filter: blur(20px);
            }
        }

        /* Smoke Particle System */
        .smoke-particle {
            position: absolute;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            pointer-events: none;
            mix-blend-mode: screen;
            animation: particleFloat 4s ease-out forwards;
        }

        @keyframes particleFloat {
            0% {
                opacity: 0.8;
                transform: translate(-50%, -50%) scale(1);
                filter: blur(1px);
            }
            25% {
                opacity: 0.6;
                transform: translate(-50%, -50%) translateY(-30px) translateX(15px) scale(1.5);
                filter: blur(2px);
            }
            50% {
                opacity: 0.4;
                transform: translate(-50%, -50%) translateY(-60px) translateX(-10px) scale(2);
                filter: blur(4px);
            }
            75% {
                opacity: 0.2;
                transform: translate(-50%, -50%) translateY(-90px) translateX(20px) scale(2.5);
                filter: blur(6px);
            }
            100% {
                opacity: 0;
                transform: translate(-50%, -50%) translateY(-120px) translateX(-5px) scale(3);
                filter: blur(8px);
            }
        }

        /* Main Content */
        .container {
            position: relative;
            z-index: 2;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: rgba(10, 10, 10, 0.9);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }

        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(45deg, #ff006e, #8338ec, #3a86ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        nav {
            display: flex;
            gap: 2rem;
        }

        nav a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            position: relative;
        }

        nav a:hover {
            color: white;
            background: rgba(255, 255, 255, 0.1);
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(45deg, #ff006e, #8338ec);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        nav a:hover::after {
            width: 80%;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 8rem 0 4rem;
            background: radial-gradient(ellipse at center, rgba(131, 56, 236, 0.1) 0%, transparent 70%);
        }

        .hero-content h1 {
            font-size: 4.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #ff006e, #8338ec, #3a86ff, #06ffa5);
            background-size: 400% 400%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 4s ease-in-out infinite;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .hero-content .subtitle {
            font-size: 1.5rem;
            font-weight: 300;
            margin-bottom: 2rem;
            opacity: 0.9;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-content .description {
            font-size: 1.1rem;
            margin-bottom: 3rem;
            opacity: 0.7;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-primary {
            padding: 1rem 2.5rem;
            background: linear-gradient(45deg, #ff006e, #8338ec);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(255, 0, 110, 0.3);
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255, 0, 110, 0.4);
        }

        .btn-secondary {
            padding: 1rem 2.5rem;
            background: transparent;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-3px);
        }

        /* Sections */
        .section {
            padding: 6rem 0;
            position: relative;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 4rem;
            background: linear-gradient(45deg, #ff006e, #8338ec);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* About Section */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 4rem;
            align-items: center;
        }

        .about-image {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: linear-gradient(45deg, #ff006e, #8338ec, #3a86ff);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 8rem;
            margin: 0 auto;
            box-shadow: 0 20px 60px rgba(131, 56, 236, 0.3);
        }

        .about-text {
            font-size: 1.1rem;
            opacity: 0.9;
            line-height: 1.8;
        }

        /* Skills Section */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .skill-category {
            background: rgba(255, 255, 255, 0.05);
            padding: 2.5rem;
            border-radius: 20px;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .skill-category::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(45deg, #ff006e, #8338ec, #3a86ff);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .skill-category:hover::before {
            transform: translateX(0);
        }

        .skill-category:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 20px 60px rgba(131, 56, 236, 0.2);
        }

        .skill-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            display: block;
        }

        .skill-category h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #fff;
        }

        .skill-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .skill-tag {
            background: rgba(255, 255, 255, 0.1);
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Employment Section Styling */
        .employment-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .employment-card {
            background: rgba(255, 255, 255, 0.05);
            padding: 2.5rem;
            border-radius: 20px;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .employment-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(45deg, #ff006e, #8338ec, #3a86ff);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .employment-card:hover::before {
            transform: translateX(0);
        }

        .employment-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 20px 60px rgba(131, 56, 236, 0.2);
        }

        .employment-icon {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            display: block;
        }

        .employment-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #fff;
        }

        .employment-details {
            text-align: left;
        }

        .company-name {
            font-size: 1.1rem;
            font-weight: 600;
            color: #ff006e;
            margin-bottom: 0.5rem;
        }

        .employment-period {
            font-size: 0.9rem;
            color: #8338ec;
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .employment-description {
            font-size: 0.95rem;
            opacity: 0.8;
            line-height: 1.6;
        }

        /* Projects Section */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 3rem;
        }

        .project-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 25px;
            overflow: hidden;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.4s ease;
            position: relative;
        }

        .project-card:hover {
            transform: translateY(-15px);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 25px 80px rgba(131, 56, 236, 0.3);
        }

        .project-image {
            height: 250px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 5rem;
            position: relative;
            overflow: hidden;
        }

        .project-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255, 0, 110, 0.3), rgba(131, 56, 236, 0.3));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .project-card:hover .project-image::before {
            opacity: 1;
        }

        .project-content {
            padding: 2.5rem;
        }

        .project-title {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #fff;
        }

        .project-description {
            opacity: 0.8;
            margin-bottom: 2rem;
            line-height: 1.7;
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin-bottom: 2rem;
        }

        .tech-tag {
            background: linear-gradient(45deg, rgba(255, 0, 110, 0.2), rgba(131, 56, 236, 0.2));
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .project-links {
            display: flex;
            gap: 1.5rem;
        }

        .project-link {
            color: #ff006e;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .project-link:hover {
            color: #8338ec;
            transform: translateX(5px);
        }

        /* Contact Section */
        .contact {
            background: rgba(255, 255, 255, 0.03);
            margin: 4rem 0;
            padding: 5rem 3rem;
            border-radius: 30px;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }

        .contact-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.08);
        }

        .contact-icon {
            font-size: 2.5rem;
            background: linear-gradient(45deg, #ff006e, #8338ec);
            -webkit-background-clip: text;
            /* -webkit-text-fill-color: transparent; */
            background-clip: text;
        }

        .contact-info {
            font-size: 1.1rem;
            font-weight: 500;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 3rem 0;
            opacity: 0.7;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-content h1 { font-size: 3rem; }
            .hero-content .subtitle { font-size: 1.2rem; }
            nav { display: none; }
            .about-content { grid-template-columns: 1fr; text-align: center; }
            .skills-grid { grid-template-columns: 1fr; }
            .employment-grid { grid-template-columns: 1fr; }
            .projects-grid { grid-template-columns: 1fr; }
            .contact-grid { grid-template-columns: 1fr; }
            .cta-buttons { flex-direction: column; align-items: center; }
        }

        /* Scroll animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="smoke-container" id="smokeContainer">
    </div>

    <header>
        <div class="header-content">
            <div class="logo">Deary Sleman</div>
            <nav>
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#employment">Experience</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <section class="hero" id="home">
            <div class="hero-content">
                <h1>Deary Sleman</h1>
                <p class="subtitle">Full Stack Web Developer </p>
                <p class="description">Skilled in front-end and back-end development, I create fast, secure, and user-friendly web experiences. My goal is to craft clean, efficient code and intuitive designs that bring projects to life.</p>
                <div class="cta-buttons">
                    <a href="#projects" class="btn-primary">View My Work</a>
                    <a href="#contact" class="btn-secondary">Let's Connect</a>
                </div>
            </div>
        </section>

        <section class="section fade-in" id="about">
            <h2 class="section-title">About Me</h2><br>
            <div class="about-content">
                <!-- 👨‍💻 -->
                <div class="about-image"><img src="ID_picture.jpg" style="height: 440px;width: 400px; border-radius: 90px; text-align: center;"></div>
                <div class="about-text">
                    <p>Motivated and detail-oriented professional with a strong work ethic and a passion for continuous learning. Known for being reliable, adaptable, and able to work effectively both independently and within a team. Brings excellent communication skills, problem-solving abilities, and a commitment to delivering high-quality results. Seeking an opportunity to contribute to a dynamic organization while growing professionally.</p>
                    <br>
                </div>
            </div>
        </section>

        <section class="section fade-in" id="skills">
            <h2 class="section-title">Technical Expertise</h2>
            <div class="skills-grid">
                <div class="skill-category">
                    <span class="skill-icon">⚛️</span>
                    <h3>Frontend Development</h3>
                    <div class="skill-list">
                        <span class="skill-tag">Crafting responsive, modern, and user-friendly interfaces using the latest web technologies.</span>
                      
                    </div>
                </div>
                <div class="skill-category">
                    <span class="skill-icon">🔧</span>
                    <h3>Backend Development</h3>
                    <div class="skill-list">
                        <span class="skill-tag">Powering website with strong architecture, optimized performance, and seamless data management.</span>
                       
                    </div>
                </div>
                <div class="skill-category">
                    <span class="skill-icon">🗄️</span>
                    <h3>Database & Storage</h3>
                    <div class="skill-list">
                        <span class="skill-tag">Organizing data into powerful systems that keep applications fast, secure, and future-ready.</span>
                       
                    </div>
                </div>
                <div class="skill-category">
                    <span class="skill-icon">📝</span>
                    <h3>Report & Presentation Expert</h3>
                    <div class="skill-list">
                        <span class="skill-tag">Skilled in writing academic, technical, and business reports as well as designing engaging presentations that effectively communicate ideas.</span>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="section fade-in" id="employment">
            <h2 class="section-title">Professional Experience</h2>
            <div class="employment-grid">
                <div class="employment-card">
                    <span class="employment-icon">🏢</span>
                    <h3>Rania Technical and Vocational Institue</h3>
                    <div class="employment-details">
                        <p class="company-name">Website Developer</p>
                        <p class="employment-period">2025</p> 
                        <p class="employment-description">1. Feedback & Online Quiz System : Collects student feedback and runs online quizzes in real-time (RTVI students only).
<br>
2. Automated Certificate Generator : Generates certificates automatically in PDF/DOCX format (RTVI students only).</p>
                    </div>
                </div>
                <div class="employment-card">
                    <span class="employment-icon">🌐</span>
                    <h3>Full Stack Web Developer</h3>
                    <div class="employment-details">
                        <p class="company-name">Free Lance</p>
                        <p class="employment-period">2025</p>
                        <p class="employment-description">Providing web development and digital solutions to clients on a project basis, delivering high-quality, efficient, and customized results.
Skilled in managing end-to-end projects independently, ensuring timely delivery and client satisfaction.</p>
                    </div>
                </div>
                <div class="employment-card">
                    <span class="employment-icon">🖨️</span>
                    <h3>Qaradaxi Printing House </h3>
                    <div class="employment-details">
                        <p class="company-name">Digital Agency Pro</p>
                        <p class="employment-period">2025 - Present</p>
                        <p class="employment-description">1.Report & Research Writing: Created academic and technical reports for students, ensuring clarity, accuracy, and well-structured content.
                            <br>
2.Presentation Design: Developed engaging and visually appealing presentations tailored to student needs. <br>
3.Lecture Printing: Managed and printed student lectures and study materials efficiently and accurately.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section fade-in" id="projects">
            <h2 class="section-title">Featured Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image">🛒</div>
                    <div class="project-content">
                        <h3 class="project-title">Netherton Shopping Store </h3>
                        <p class="project-description">Developed a full-featured e-commerce platform tailored for Netherton Shopping Store, focusing on usability, performance, and secure management.</p>
                        <div class="project-tech">
                            <span class="tech-tag">User-Friendly Interface</span>
                            <span class="tech-tag">Responsive Design</span>
                            <span class="tech-tag">Product Management System</span>
                            <span class="tech-tag">SSL Security</span>
                            <span class="tech-tag">SMTP Integration</span>
                            <span class="tech-tag">Hidden Admin Panel</span>
                        </div>
                        <div class="project-links" >
                            <a href="https://netherton-shopping.store/" class="project-link" style="color: darkkhaki;">Website Link →</a>
                        </div>
                    </div>
                </div>
                
                <div class="project-card">
                    <div class="project-image"><img src="RTVI_Logo.png" alt=""></div>
                    <div class="project-content">
                        <h3 class="project-title">Raparin Technical and Vocational Institute</h3>
                        <p class="project-description">Developed a web platform for collecting feedback and conducting online quizzes for students and teachers. Designed to function like Google Forms, it allows efficient data collection and real-time responses. Currently, the project is 70% complete and restricted for institute members only, ensuring privacy and exclusive access.</p>
                        <div class="project-tech">
                             <span class="tech-tag">User-Friendly Interface</span>
                            <span class="tech-tag">Responsive Design</span>
                            <span class="tech-tag">SSL Security</span>
                            <span class="tech-tag">Collect Student Data</span>

                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link" style="color: darkkhaki;">restricted for institute members only</a>
                        </div>
                    </div>
                </div>
                
                <div class="project-card">
                    <div class="project-image"><img src="RTVI_Logo.png" alt=""></div>
                    <div class="project-content">
                        <h3 class="project-title">Raparin Technical and Vocational Institute</h3>
                        <p class="project-description">Developed a web application that automatically generates certificates for both creators and attendees, providing two types of dynamic certificates tailored to institute needs . </p>
                        <div class="project-tech">
                            <span class="tech-tag">Hidden Admin Panel</span>
                            <span class="tech-tag">SSL Security</span>
                            <span class="tech-tag">SMTP Integration</span>
                            <span class="tech-tag">Easy to Use</span>
                            <span class="tech-tag">Responsive</span>
                        </div>
                        <div class="project-links">
                        <a href="#" class="project-link" style="color: darkkhaki;">restricted for institute members only</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact fade-in" id="contact">
            <h2 class="section-title">Let's Build Something Amazing</h2>
            <p>Ready to turn your ideas into reality? I'm always excited to work on new projects and collaborate with innovative teams.</p>
            <div class="contact-grid">
                <div class="contact-item">
                    <span class="contact-icon" style="color:white;">📧</span>
                    <div class="contact-info">Email <br>dearysleman384@gmail.com</div>
                </div>
                <div class="contact-item">
                   <a href="https://www.linkedin.com/in/deary-sleman-8a5694378/" style="text-decoration: none; color: white;">
                     <span class="contact-icon">🔗</span>
                    <div class="contact-info">linkedin <br>deary sleman</div>
                    </a>
                </div>
                <div class="contact-item">
                    <span class="contact-icon">📞</span>
                    <div class="contact-info">WhatsApp <br>+964 770 847 3777</div>
                </div>
                <div class="contact-item">
                    <span class="contact-icon">🌐</span>
                    <div class="contact-info">Available for freelance work</div>
                </div>
            </div>
        </section>

        <footer>
            <p>&copy; 2025 Deary Sleman. Designed & Developed.</p>
        </footer>
    </div>

    <script>
        // Enhanced Developer Smoke Effect with Performance Optimization
        const smokeContainer = document.getElementById('smokeContainer');
        let mouseX = window.innerWidth / 2;
        let mouseY = window.innerHeight / 2;
        let lastMouseX = mouseX;
        let lastMouseY = mouseY;
        let isMouseMoving = false;
        let mouseStopTimeout;
        let smokeTrails = [];
        let particles = [];
        let mouseSpeed = 0;
        let lastTrailTime = 0;
        let animationFrame = null;

        // Throttle mouse events for better performance
        let isThrottled = false;
        document.addEventListener('mousemove', (e) => {
            if (isThrottled) return;
            
            isThrottled = true;
            requestAnimationFrame(() => {
                isThrottled = false;
                
                mouseX = e.clientX;
                mouseY = e.clientY;
                
                // Calculate mouse speed for dynamic effects
                const deltaX = mouseX - lastMouseX;
                const deltaY = mouseY - lastMouseY;
                mouseSpeed = Math.sqrt(deltaX * deltaX + deltaY * deltaY);
                
                // Limit trail creation frequency
                const currentTime = Date.now();
                if (currentTime - lastTrailTime < 16) return; // Max 60fps
                lastTrailTime = currentTime;
                
                // Check if mouse is actually moving
                if (Math.abs(mouseX - lastMouseX) > 2 || Math.abs(mouseY - lastMouseY) > 2) {
                    isMouseMoving = true;
                    clearTimeout(mouseStopTimeout);
                    
                    // Create enhanced smoke trail while moving
                    createEnhancedSmokeTrail(mouseX, mouseY);
                    
                    // Create floating particles based on speed (less frequently)
                    if (mouseSpeed > 8 && Math.random() > 0.7) {
                        createFloatingParticles(mouseX, mouseY);
                    }
                    
                    // Set timeout to detect when mouse stops
                    mouseStopTimeout = setTimeout(() => {
                        isMouseMoving = false;
                    }, 150);
                }
                
                lastMouseX = mouseX;
                lastMouseY = mouseY;
            });
        });

        function createEnhancedSmokeTrail(x, y) {
            // Strict performance limits
            if (smokeTrails.length > 25) {
                // Remove multiple old trails at once for better performance
                for (let i = 0; i < 5; i++) {
                    const oldTrail = smokeTrails.shift();
                    if (oldTrail && oldTrail.parentNode) {
                        oldTrail.parentNode.removeChild(oldTrail);
                    }
                }
            }
            
            const trail = document.createElement('div');
            trail.className = 'smoke-trail active';
            trail.style.left = x + 'px';
            trail.style.top = y + 'px';
            
            // Pre-calculated color palette for better performance
            const colors = [
                'hsla(210, 100%, 60%, 0.9)', // Blue
                'hsla(120, 100%, 50%, 0.9)', // Green
                'hsla(300, 100%, 60%, 0.9)', // Purple
                'hsla(180, 100%, 50%, 0.9)', // Cyan
                'hsla(60, 100%, 60%, 0.9)',  // Yellow
                'hsla(0, 100%, 60%, 0.9)',   // Red
                'hsla(30, 100%, 60%, 0.9)'   // Orange
            ];
            
            const colorIndex = Math.floor(Math.random() * colors.length);
            const intensity = Math.min(mouseSpeed / 15, 0.9);
            
            // Simplified gradient for better performance
            trail.style.background = `radial-gradient(circle, ${colors[colorIndex]}, transparent 70%)`;
            trail.style.opacity = intensity;
            trail.style.color = colors[colorIndex];
            
            smokeContainer.appendChild(trail);
            smokeTrails.push(trail);
            
            // Use requestAnimationFrame for smoother animations
            requestAnimationFrame(() => {
                trail.classList.remove('active');
                trail.classList.add('fading');
            });
            
            // Clean up with error handling
            setTimeout(() => {
                try {
                    if (trail && trail.parentNode) {
                        trail.parentNode.removeChild(trail);
                        const index = smokeTrails.indexOf(trail);
                        if (index > -1) {
                            smokeTrails.splice(index, 1);
                        }
                    }
                } catch (e) {
                    // Silently handle cleanup errors
                }
            }, 3000);
        }

        function createFloatingParticles(x, y) {
            // Strict particle limits for performance
            if (particles.length > 15) {
                // Clean up old particles
                for (let i = 0; i < 3; i++) {
                    const oldParticle = particles.shift();
                    if (oldParticle && oldParticle.parentNode) {
                        oldParticle.parentNode.removeChild(oldParticle);
                    }
                }
            }
            
            // Create fewer particles for better performance
            for (let i = 0; i < 2; i++) {
                const particle = document.createElement('div');
                particle.className = 'smoke-particle';
                
                // Random offset from mouse position
                const offsetX = (Math.random() - 0.5) * 20;
                const offsetY = (Math.random() - 0.5) * 20;
                
                particle.style.left = (x + offsetX) + 'px';
                particle.style.top = (y + offsetY) + 'px';
                
                // Pre-calculated colors for better performance
                const particleColors = [
                    'hsla(210, 80%, 60%, 0.8)',
                    'hsla(120, 80%, 60%, 0.8)',
                    'hsla(300, 80%, 60%, 0.8)',
                    'hsla(180, 80%, 60%, 0.8)'
                ];
                
                const color = particleColors[Math.floor(Math.random() * particleColors.length)];
                particle.style.background = color;
                particle.style.boxShadow = `0 0 10px ${color}`;
                
                smokeContainer.appendChild(particle);
                particles.push(particle);
                
                // Clean up with error handling
                setTimeout(() => {
                    try {
                        if (particle && particle.parentNode) {
                            particle.parentNode.removeChild(particle);
                            const index = particles.indexOf(particle);
                            if (index > -1) {
                                particles.splice(index, 1);
                            }
                        }
                    } catch (e) {
                        // Silently handle cleanup errors
                    }
                }, 3500);
            }
        }





        // Smooth scrolling for navigation
        document.querySelectorAll('nav a, .btn-primary, .btn-secondary').forEach(link => {
            link.addEventListener('click', (e) => {
                const href = link.getAttribute('href');
                if (href.startsWith('#')) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetSection = document.getElementById(targetId);
                    
                    if (targetSection) {
                        targetSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Header background on scroll with throttling
        let scrollTimeout = null;
        window.addEventListener('scroll', () => {
            if (scrollTimeout) return;
            
            scrollTimeout = requestAnimationFrame(() => {
                const header = document.querySelector('header');
                if (window.scrollY > 100) {
                    header.style.background = 'rgba(10, 10, 10, 0.95)';
                } else {
                    header.style.background = 'rgba(10, 10, 10, 0.9)';
                }
                scrollTimeout = null;
            });
        });

        // Clean up on page unload to prevent memory leaks
        window.addEventListener('beforeunload', () => {
            smokeTrails.forEach(trail => {
                if (trail && trail.parentNode) {
                    trail.parentNode.removeChild(trail);
                }
            });
            particles.forEach(particle => {
                if (particle && particle.parentNode) {
                    particle.parentNode.removeChild(particle);
                }
            });
            smokeTrails = [];
            particles = [];
        });


    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'971bc944156ddcbb',t:'MTc1NTYyODg5OC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
