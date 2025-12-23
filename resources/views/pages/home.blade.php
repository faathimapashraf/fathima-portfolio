<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fathima P Ashraf - Full Stack Developer</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        :root {
            --primary: #2d3748;
            --secondary: #4a5568;
            --accent: #3182ce;
            --highlight: #4299e1;
            --light: #f7fafc;
            --dark: #1a202c;
            --success: #38a169;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: var(--light);
            color: var(--dark);
            line-height: 1.6;
            scroll-behavior: smooth;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Navigation */
        nav {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0,0,0,0.08);
            border-bottom: 1px solid #e2e8f0;
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.2rem 0;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo i {
            color: var(--accent);
        }
        
        .nav-links {
            display: flex;
            gap: 2.5rem;
        }
        
        .nav-links a {
            color: var(--secondary);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
            position: relative;
            font-size: 0.95rem;
        }
        
        .nav-links a:hover {
            color: var(--accent);
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--accent);
            transition: width 0.3s;
            border-radius: 2px;
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 12rem 0 7rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.05" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            background-position: bottom;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            color: white;
        }
        
        .hero h2 {
            font-size: 2rem;
            font-weight: 300;
            opacity: 0.9;
            margin-bottom: 1.5rem;
            color: #e2e8f0;
        }
        
        .hero-tagline {
            font-size: 1.3rem;
            opacity: 0.9;
            margin-bottom: 3rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 300;
            color: #cbd5e0;
        }
        
        .highlight {
            color: #90cdf4;
            font-weight: 600;
        }
        
        .contact-info {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 1.5rem 2.5rem;
            border-radius: 15px;
            display: inline-flex;
            gap: 2.5rem;
            margin-top: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1.1rem;
        }
        
        .contact-item i {
            font-size: 1.3rem;
            color: #90cdf4;
        }
        
        .contact-item a {
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .contact-item a:hover {
            color: #90cdf4;
            transform: translateY(-2px);
        }
        
        .cta-button {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 1.2rem 3rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 700;
            transition: all 0.3s;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-top: 2.5rem;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
            border: none;
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
            background: var(--highlight);
        }
        
        /* Sections */
        section {
            padding: 6rem 0;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            color: var(--primary);
            position: relative;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px;
        }
        
        .section-subtitle {
            text-align: center;
            color: var(--secondary);
            font-size: 1.2rem;
            margin-bottom: 4rem;
            margin-top: 2rem;
            font-weight: 400;
        }
        
        /* About */
        .about-content {
            background: white;
            padding: 4rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            max-width: 1000px;
            margin: 0 auto;
            border: 1px solid #e2e8f0;
        }
        
        .about-text {
            font-size: 1.2rem;
            line-height: 1.8;
            color: var(--secondary);
            margin-bottom: 2.5rem;
            text-align: center;
        }
        
        .highlight-text {
            color: var(--accent);
            font-weight: 700;
        }
        
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .stat-box {
            text-align: center;
            padding: 2rem;
            background: #f7fafc;
            border-radius: 12px;
            transition: all 0.3s;
            border: 1px solid #e2e8f0;
        }
        
        .stat-box:hover {
            transform: translateY(-5px);
            border-color: var(--accent);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--accent);
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            color: var(--secondary);
            font-weight: 600;
            font-size: 1rem;
        }
        
        /* Experience */
        .experience-section {
            background: #f7fafc;
            border-top: 1px solid #e2e8f0;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .timeline {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 0;
            bottom: 0;
            width: 2px;
            background: #e2e8f0;
        }
        
        .timeline-item {
            position: relative;
            width: 46%;
            margin-bottom: 3rem;
            padding: 2.5rem;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            transition: all 0.3s;
            border: 1px solid #e2e8f0;
        }
        
        .timeline-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-color: var(--accent);
        }
        
        .timeline-item:nth-child(odd) {
            left: 0;
        }
        
        .timeline-item:nth-child(even) {
            left: 54%;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            background: var(--accent);
            border-radius: 50%;
            top: 30px;
            border: 3px solid white;
            box-shadow: 0 0 0 3px var(--accent);
        }
        
        .timeline-item:nth-child(odd)::before {
            right: -48px;
        }
        
        .timeline-item:nth-child(even)::before {
            left: -48px;
        }
        
        .job-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }
        
        .job-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--primary);
        }
        
        .job-badge {
            background: var(--accent);
            color: white;
            padding: 0.3rem 1rem;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        
        .company-info {
            margin-bottom: 1.5rem;
        }
        
        .company {
            color: var(--accent);
            font-weight: 600;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 0.5rem;
        }
        
        .duration {
            color: #718096;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .job-description {
            color: var(--secondary);
            line-height: 1.7;
        }
        
        .job-description ul {
            margin-top: 1rem;
            padding-left: 1.5rem;
        }
        
        .job-description li {
            margin-bottom: 0.8rem;
            position: relative;
        }
        
        .job-description li::before {
            content: '→';
            color: var(--accent);
            position: absolute;
            left: -1.2rem;
            font-weight: bold;
        }
        
        /* Projects */
        .projects-section {
            background: white;
        }
        
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .project-card {
            background: white;
            border-radius: 12px;
            padding: 2.5rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }
        
        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-color: var(--accent);
        }
        
        .project-icon {
            width: 60px;
            height: 60px;
            background: var(--accent);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }
        
        .project-icon i {
            color: white;
            font-size: 1.5rem;
        }
        
        .project-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--primary);
        }
        
        .project-status {
            display: inline-block;
            background: var(--success);
            color: white;
            padding: 0.3rem 1rem;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .tech-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin: 1.5rem 0;
        }
        
        .tech-tag {
            background: #edf2f7;
            color: var(--accent);
            padding: 0.4rem 1rem;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .tech-tag:hover {
            background: var(--accent);
            color: white;
        }
        
        .project-description {
            color: var(--secondary);
            line-height: 1.7;
            margin-bottom: 1.5rem;
            font-size: 1rem;
        }
        
        .project-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--accent);
            text-decoration: none;
            font-weight: 600;
            transition: gap 0.3s;
        }
        
        .project-link:hover {
            gap: 12px;
            color: var(--highlight);
        }
        
        /* Skills */
        .skills-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .skill-category {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            transition: all 0.3s;
            border: 1px solid #e2e8f0;
        }
        
        .skill-category:hover {
            border-color: var(--accent);
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .skill-category h3 {
            color: var(--primary);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1.3rem;
            font-weight: 700;
        }
        
        .skill-category h3 i {
            color: var(--accent);
        }
        
        .skill-tag {
            background: #f7fafc;
            color: var(--secondary);
            padding: 0.8rem 1.2rem;
            border-radius: 6px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin: 0.4rem;
            transition: all 0.3s;
            border: 1px solid #e2e8f0;
        }
        
        .skill-tag:hover {
            background: white;
            border-color: var(--accent);
            transform: translateY(-2px);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .skill-tag i {
            color: var(--accent);
            font-size: 1.1rem;
        }
        
        /* Footer */
        footer {
            background: var(--primary);
            color: white;
            padding: 4rem 0 3rem;
            text-align: center;
        }
        
        .footer-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .footer-logo {
            font-size: 2rem;
            font-weight: 800;
            color: white;
            margin-bottom: 1.5rem;
        }
        
        .footer-tagline {
            font-size: 1.1rem;
            color: #cbd5e0;
            margin-bottom: 2.5rem;
            line-height: 1.7;
        }
        
        .footer-contact {
            background: rgba(255, 255, 255, 0.05);
            padding: 2rem;
            border-radius: 12px;
            margin: 2.5rem 0;
        }
        
        .footer-contact h3 {
            color: #90cdf4;
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
        }
        
        .contact-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }
        
        .contact-link {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #cbd5e0;
            text-decoration: none;
            transition: all 0.3s;
            font-size: 1rem;
        }
        
        .contact-link:hover {
            color: white;
            transform: translateY(-2px);
        }
        
        .contact-link i {
            color: #90cdf4;
            font-size: 1.2rem;
        }
        
        .copyright {
            color: #a0aec0;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Responsive */
        @media (max-width: 1024px) {
            .hero h1 {
                font-size: 3rem;
            }
            
            .hero h2 {
                font-size: 1.8rem;
            }
            
            .contact-info {
                flex-direction: column;
                gap: 1.5rem;
                padding: 1.5rem;
            }
            
            .timeline::before {
                left: 30px;
            }
            
            .timeline-item {
                width: 100%;
                left: 0 !important;
                margin-left: 60px;
                margin-right: 20px;
            }
            
            .timeline-item::before {
                left: -40px !important;
            }
        }
        
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero {
                padding: 10rem 0 5rem;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero h2 {
                font-size: 1.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .about-content,
            .project-card,
            .skill-category {
                padding: 2rem;
            }
            
            .contact-links {
                flex-direction: column;
                gap: 1rem;
            }
            
            .stats,
            .projects-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav>
        <div class="container nav-container">
            <a href="#home" class="logo">
                <i class="fas fa-code"></i>
                FATHIMA P ASHRAF
            </a>
            <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#experience">Experience</a>
                <a href="#projects">Projects</a>
                <a href="#skills">Skills</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>FATHIMA P ASHRAF</h1>
                <h2>Full Stack Developer</h2>
                <p class="hero-tagline">
                    Specializing in <span class="highlight">PHP, Laravel, JavaScript, and MVC frameworks</span>. 
                    Passionate about building scalable applications and solving complex problems.
                </p>
                
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <a href="tel:+918137837008">+91 81378 37008</a>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:fathimapashraf1@gmail.com">fathimapashraf1@gmail.com</a>
                    </div>
                </div>
                
                <a href="#projects" class="cta-button">
                    <i class="fas fa-rocket"></i> View My Projects
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <p class="section-subtitle">Full-stack developer with expertise in modern web technologies</p>
            
            <div class="about-content">
                <p class="about-text">
                    Full-stack developer specializing in <span class="highlight-text">PHP, JavaScript, ReactJS, and MVC frameworks</span>. 
                    Passionate about building scalable applications, solving complex problems, and continuously learning. 
                    Thrives in dynamic environments and excels in team collaboration to deliver impactful software solutions.
                </p>
                
                <div class="stats">
                    <div class="stat-box">
                        <div class="stat-number">3+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">20+</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">10</div>
                        <div class="stat-label">Live Projects</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section">
        <div class="container">
            <h2 class="section-title">My Projects</h2>
            <p class="section-subtitle">Real-world applications I've built and deployed</p>
            
            <div class="projects-grid">
                <!-- Project 1 - UNTSAK -->
                <div class="project-card">
                    <div class="project-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3 class="project-title">UNTSAK Task Management</h3>
                    <span class="project-status">
                        <i class="fas fa-circle"></i> Live Project
                    </span>
                    <div class="tech-tags">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">Bootstrap</span>
                        <span class="tech-tag">REST API</span>
                    </div>
                    <p class="project-description">
                        A comprehensive task management software designed for teams and organizations. 
                        Features include task assignment, progress tracking, team collaboration, 
                        real-time updates, and detailed reporting. Currently deployed and actively used.
                    </p>
                    <a href="#" class="project-link">
                        <i class="fas fa-external-link-alt"></i> View Live Project
                    </a>
                </div>

                <!-- Project 2 - TCA -->
                <div class="project-card">
                    <div class="project-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3 class="project-title">TCA Track Carrier Association</h3>
                    <span class="project-status">
                        <i class="fas fa-circle"></i> Live Project
                    </span>
                    <div class="tech-tags">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">ReactJS</span>
                        <span class="tech-tag">PostgreSQL</span>
                        <span class="tech-tag">REST API</span>
                        <span class="tech-tag">Payment Gateway</span>
                    </div>
                    <p class="project-description">
                        A carrier tracking and management system for logistics companies. 
                        Includes shipment tracking, carrier management, billing systems, 
                        real-time location updates, and comprehensive reporting dashboards.
                    </p>
                    <a href="#" class="project-link">
                        <i class="fas fa-external-link-alt"></i> View Live Project
                    </a>
                </div>

                <!-- Project 3 -->
                <div class="project-card">
                    <div class="project-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3 class="project-title">University Management System</h3>
                    <div class="tech-tags">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">Bootstrap</span>
                        <span class="tech-tag">Payment Integration</span>
                    </div>
                    <p class="project-description">
                        Comprehensive university management system with student portal, course management,
                        fee payment integration, and admin dashboard for Sree Sankaracharya University.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="experience-section">
        <div class="container">
            <h2 class="section-title">Work Experience</h2>
            <p class="section-subtitle">My professional journey in software development</p>
            
            <div class="timeline">
                <!-- Current Job -->
                <div class="timeline-item">
                    <div class="job-header">
                        <h3 class="job-title">Software Developer</h3>
                        <span class="job-badge">Current</span>
                    </div>
                    
                    <div class="company-info">
                        <div class="company">
                            <i class="fas fa-university"></i>
                            Sree Sankaracharya University of Sanskrit
                        </div>
                        <div class="duration">
                            <i class="fas fa-calendar"></i>
                            2024 – Present
                        </div>
                    </div>
                    
                    <div class="job-description">
                        <ul>
                            <li>Developing and maintaining web applications using Laravel for backend development and MySQL for database management</li>
                            <li>Implementing payment integration features to facilitate seamless transactions within the system</li>
                            <li>Managing Git-based deployments and ensuring performance optimization</li>
                            <li>Building responsive and intuitive frontend interfaces using HTML and CSS to enhance user experience</li>
                            <li>Collaborating with cross-functional teams to deliver scalable solutions, ensuring high-quality software that meets university requirements</li>
                        </ul>
                    </div>
                </div>

                <!-- Previous Job -->
                <div class="timeline-item">
                    <div class="job-header">
                        <h3 class="job-title">Software Developer</h3>
                    </div>
                    
                    <div class="company-info">
                        <div class="company">
                            <i class="fas fa-laptop-code"></i>
                            Techfriar Technologies
                        </div>
                        <div class="duration">
                            <i class="fas fa-calendar"></i>
                            2022 – 2024
                        </div>
                    </div>
                    
                    <div class="job-description">
                        <ul>
                            <li>Worked on product based on Laravel, NextJS-ReactJS Stack</li>
                            <li>Working mostly with REST APIs</li>
                            <li>Comfortable with repository pattern</li>
                            <li>Built authentication systems, integrated third-party APIs, and optimized databases</li>
                            <li>Proficient in Git and GitHub for version control and collaboration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills-section">
        <div class="container">
            <h2 class="section-title">Technical Skills</h2>
            <p class="section-subtitle">Technologies and tools I'm proficient with</p>
            
            <div class="skills-container">
                <div class="skill-category">
                    <h3><i class="fas fa-code"></i> Languages</h3>
                    <div>
                        <span class="skill-tag">
                            <i class="fab fa-php"></i> PHP
                        </span>
                        <span class="skill-tag">
                            <i class="fab fa-laravel"></i> Laravel
                        </span>
                        <span class="skill-tag">
                            <i class="fab fa-js"></i> JavaScript
                        </span>
                        <span class="skill-tag">
                            <i class="fab fa-react"></i> ReactJS
                        </span>
                        <span class="skill-tag">
                            <i class="fab fa-react"></i> Next.js
                        </span>
                    </div>
                </div>
                
                <div class="skill-category">
                    <h3><i class="fas fa-database"></i> Databases</h3>
                    <div>
                        <span class="skill-tag">
                            <i class="fas fa-database"></i> MySQL
                        </span>
                        <span class="skill-tag">
                            <i class="fas fa-database"></i> PostgreSQL
                        </span>
                    </div>
                </div>
                
                <div class="skill-category">
                    <h3><i class="fas fa-layer-group"></i> Frameworks & Libraries</h3>
                    <div>
                        <span class="skill-tag">
                            <i class="fab fa-laravel"></i> Laravel
                        </span>
                        <span class="skill-tag">
                            <i class="fab fa-react"></i> ReactJS
                        </span>
                        <span class="skill-tag">
                            <i class="fab fa-react"></i> Next.js
                        </span>
                        <span class="skill-tag">
                            <i class="fas fa-cube"></i> MVC
                        </span>
                    </div>
                </div>
                
                <div class="skill-category">
                    <h3><i class="fas fa-tools"></i> Others</h3>
                    <div>
                        <span class="skill-tag">
                            <i class="fas fa-network-wired"></i> REST APIs
                        </span>
                        <span class="skill-tag">
                            <i class="fab fa-git-alt"></i> Git/GitHub
                        </span>
                        <span class="skill-tag">
                            <i class="fas fa-code-branch"></i> Repository Pattern
                        </span>
                        <span class="skill-tag">
                            <i class="fas fa-credit-card"></i> Payment Integration
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">Let's discuss your next project or opportunity</p>
            
            <div class="footer-contact">
                <h3>Contact Information</h3>
                <div class="contact-links">
                    <a href="tel:+918137837008" class="contact-link">
                        <i class="fas fa-phone"></i>
                        +91 81378 37008
                    </a>
                    <a href="mailto:fathimapashraf1@gmail.com" class="contact-link">
                        <i class="fas fa-envelope"></i>
                        fathimapashraf1@gmail.com
                    </a>
                    <a href="#" class="contact-link">
                        <i class="fab fa-linkedin"></i>
                        LinkedIn Profile
                    </a>
                    <a href="#" class="contact-link">
                        <i class="fab fa-github"></i>
                        GitHub Profile
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">FATHIMA P ASHRAF</div>
                <p class="footer-tagline">
                    Full-stack developer specializing in PHP, JavaScript, ReactJS, and MVC frameworks. 
                    Passionate about building scalable applications and solving complex problems.
                </p>
                
                <p class="copyright">
                    Built From Scratch With <i class="fas fa-heart" style="color: #fc8181;"></i><br>
                    Copyright © <script>document.write(new Date().getFullYear())</script> All rights reserved
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add animation to elements when they come into view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        // Observe elements for animation
        const animatedElements = document.querySelectorAll(
            '.project-card, .timeline-item, .stat-box, .skill-category'
        );
        
        animatedElements.forEach(el => {
            el.style.opacity = "0";
            el.style.transform = "translateY(20px)";
            el.style.transition = "opacity 0.5s, transform 0.5s";
            observer.observe(el);
        });

        // Navbar background on scroll
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.style.boxShadow = "0 2px 20px rgba(0,0,0,0.1)";
            } else {
                nav.style.boxShadow = "0 2px 20px rgba(0,0,0,0.08)";
            }
        });
    </script>

</body>
</html>