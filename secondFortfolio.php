<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arnold Lumio | Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Dancing+Script:wght@700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <style>
        /* Base Styles */
        :root {
            --primary-color: #6c63ff;
            --secondary-color: #4d44db;
            --accent-color:rgb(238, 132, 132);
            --dark-color: #1a1a2e;
            --light-color: #f8f9fa;
            --text-color: #333;
            --text-light: #777;
            --white: #ffffff;
            --black: #000000;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --transition: all 0.3s ease;
            --border-radius: 15px;
            --cursive-font: 'Dancing Script', cursive;
            
            /* Background variables for theme switching */
            --bg-color: var(--dark-color);
            --text-primary: var(--white);
            --text-secondary: rgba(255, 255, 255, 0.8);
            --section-bg: rgba(26, 26, 46, 0.7);
            --card-bg: rgba(255, 255, 255, 0.05);
            --input-bg: rgba(255, 255, 255, 0.05);
            --input-border: rgba(255, 255, 255, 0.1);
            --glass-effect: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
            --glass-border: 1px solid rgba(255, 255, 255, 0.18);
            --glass-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
            --section-padding: 100px 5%;
        }

        [data-theme="light"] {
            --bg-color: #f5f5f5;
            --text-primary: #333;
            --text-secondary: #555;
            --section-bg: rgba(255, 255, 255, 0.7);
            --card-bg: rgba(0, 0, 0, 0.05);
            --input-bg: rgba(0, 0, 0, 0.05);
            --input-border: rgba(0, 0, 0, 0.1);
            --text-light: #666;
            --glass-effect: linear-gradient(135deg, rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.5));
            --glass-border: 1px solid rgba(255, 255, 255, 0.3);
            --glass-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-primary);
            background-color: var(--bg-color);
            overflow-x: hidden;
            position: relative;
            transition: background-color 0.5s ease, color 0.5s ease;
            line-height: 1.6;
        }

        /* Galaxy Background - Updated for Home Section Only */
        .galaxy-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            z-index: -3;
            opacity: 0;
            transition: opacity 1s ease;
        }

        .hero.active .galaxy-bg {
            opacity: 1;
        }

        /* Particles Animation */
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: transparent;
            z-index: -2;
        }

        /* NEW: Dynamic Layout Styles */
        .dynamic-layout {
            position: relative;
            z-index: 1;
        }

        /* Section Color Transition Effect */
        .dynamic-section {
            position: relative;
            z-index: 1;
            transition: background-color 0.5s ease;
            padding: var(--section-padding);
        }

        .dynamic-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(15, 12, 41, 0.8), rgba(48, 43, 99, 0.8), rgba(36, 36, 62, 0.8));
            z-index: -1;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .dynamic-section.active::before {
            opacity: 1;
        }

        [data-theme="light"] .dynamic-section::before {
            background: linear-gradient(135deg, rgba(245, 245, 245, 0.9), rgba(230, 230, 250, 0.9), rgba(220, 220, 255, 0.9));
        }

        /* Asymmetric Grid Layout */
        .asymmetric-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 30px;
            padding: 0 5%;
        }

        /* Dynamic Card Styles */
        .dynamic-card {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border-radius: var(--border-radius);
            padding: 40px;
            box-shadow: var(--glass-shadow);
            border: var(--glass-border);
            transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
            transform-style: preserve-3d;
            will-change: transform;
        }

        .dynamic-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        }

        /* Floating Elements */
        .floating-element {
            animation: float 6s ease-in-out infinite;
            transform-style: preserve-3d;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotateX(0) rotateY(0); }
            50% { transform: translateY(-20px) rotateX(5deg) rotateY(5deg); }
        }

        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            font-weight: 600;
            line-height: 1.2;
            margin-bottom: 15px;
            color: var(--text-primary);
        }

        p {
            line-height: 1.6;
            margin-bottom: 15px;
            color: var(--text-secondary);
        }

        a {
            text-decoration: none;
            color: var(--primary-color);
            transition: var(--transition);
        }

        a:hover {
            color: var(--secondary-color);
        }

        /* Special font for UI/UX Designer text */
        .ui-ux-text {
            font-family: 'Dancing Script', cursive;
            font-size: 1.2em;
            color: var(--accent-color);
            text-shadow: 0 0 10px rgba(255, 107, 107, 0.5);
        }
        
        .section-title {
            font-family: 'Dancing Script', cursive;
            font-size: 2.5rem;
            color: var(--accent-color);
            text-shadow: 0 0 10px rgba(255, 107, 107, 0.5);
            position: relative;
            display: inline-block;
            margin-bottom: 15px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
        }

        /* Buttons */
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 30px;
            font-weight: 500;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            cursor: pointer;
            margin: 10px 5px;
            border: none;
            outline: none;
            position: relative;
            overflow: hidden;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: var(--white);
            border: 2px solid var(--primary-color);
            box-shadow: 0 4px 6px rgba(108, 99, 255, 0.2);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 20px rgba(108, 99, 255, 0.3);
        }

        .btn-primary::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.2), transparent);
            transform: translateX(-100%);
            transition: all 0.6s ease;
        }

        .btn-primary:hover::after {
            transform: translateX(100%);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .btn-secondary:hover {
            background-color: var(--primary-color);
            color: var(--white);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 20px rgba(108, 99, 255, 0.3);
        }

        /* Theme Toggle Button */
        .theme-toggle {
            background: transparent;
            border: none;
            color: var(--white);
            font-size: 1.2rem;
            cursor: pointer;
            margin-left: 20px;
            transition: var(--transition);
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .theme-toggle:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        [data-theme="light"] .theme-toggle {
            color: var(--text-primary);
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.5s ease;
            padding: 20px 0;
            background: var(--glass-effect);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: var(--glass-border);
            box-shadow: var(--glass-shadow);
        }

        [data-theme="light"] header {
            background: var(--glass-effect);
        }

        .sticky {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            color: var(--accent-color);
        }

        .nav-links {
            display: flex;
            list-style: none;
            align-items: center;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            color: var(--text-primary);
            font-weight: 500;
            position: relative;
            padding: 5px 0;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            bottom: -5px;
            left: 0;
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .burger {
            display: none;
            cursor: pointer;
            z-index: 1001;
        }

        .burger div {
            width: 25px;
            height: 3px;
            background-color: var(--text-primary);
            margin: 5px;
            transition: all 0.3s ease;
        }

        /* Hero Section - NEW Dynamic Layout */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: var(--section-padding);
            position: relative;
            overflow: hidden;
        }

        .hero-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-image {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-container {
            width: 550px;
            height: 750px;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            transition: all 0.5s ease;
            animation: morph 8s ease-in-out infinite;
            border: 3px solid var(--primary-color);
        }

        @keyframes morph {
            0%, 100% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
            25% { border-radius: 58% 42% 75% 25% / 76% 46% 54% 24%; }
            50% { border-radius: 50% 50% 33% 67% / 55% 27% 73% 45%; }
            75% { border-radius: 33% 67% 58% 42% / 63% 68% 32% 37%; }
        }

        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: relative;
            z-index: 2;
        }

        .circle-animation {
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border: 2px solid var(--primary-color);
            border-radius: 50%;
            animation: pulse 3s infinite;
            z-index: 1;
        }

        .hero-title {
            font-size: 4rem;
            margin-bottom: 20px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            line-height: 1.2;
            font-weight: 700;
        }

        .hero-subtitle {
            font-size: 1.8rem;
            color: var(--text-secondary);
            margin-bottom: 30px;
            font-weight: 500;
        }

        .hero-description {
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 40px;
            max-width: 500px;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }

        /* Sections */
        .dynamic-section {
            padding: var(--section-padding);
            position: relative;
        }

        .section-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: var(--text-secondary);
            max-width: 700px;
            margin: 0 auto;
        }

        /* About Section */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-image {
            position: relative;
            padding: 20px;
        }

        .about-img {
            width: 100%;
           border-radius: 55px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            transition: all 0.5s ease;
        }

        .about-img:hover {
            transform: scale(1.03);
        }

        .about-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 2px dashed var(--primary-color);
            border-radius: var(--border-radius);
            animation: rotate 20s linear infinite;
            z-index: -1;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .about-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .stat-item {
            text-align: center;
            padding: 25px;
            background: rgba(108, 99, 255, 0.1);
            border-radius: var(--border-radius);
            transition: all 0.5s ease;
            backdrop-filter: blur(5px);
            border: var(--glass-border);
        }

        .stat-item:hover {
            transform: translateY(-10px);
            background: rgba(108, 99, 255, 0.2);
            box-shadow: 0 15px 30px rgba(108, 99, 255, 0.1);
        }

        .stat-number {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 5px;
            font-weight: 700;
        }

        /* Skills Section */
        .skills-grid {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 60px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .skill-category {
            width: 100%;
        }

        .skill-category h3 {
            font-size: 1.8rem;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .skills-icons-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 25px;
            justify-items: center;
        }

        .skill-icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 25px 15px;
            width: 100%;
            min-height: 150px;
            background: var(--card-bg);
            border-radius: var(--border-radius);
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
            border: var(--glass-border);
            box-shadow: var(--glass-shadow);
        }

        .skill-icon:hover {
            transform: translateY(-10px) rotate(5deg);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .skill-icon i {
            font-size: 2.8rem;
            margin-bottom: 15px;
        }

        .skill-icon span {
            font-weight: 500;
            margin-bottom: 5px;
            font-size: 1.1rem;
        }

        .skill-icon small {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        /* Portfolio Section */
        .portfolio-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 40px;
            gap: 10px;
        }

        .filter-btn {
            padding: 10px 25px;
            background: transparent;
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.4s ease;
            font-weight: 500;
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--primary-color);
            color: var(--white);
            transform: translateY(-3px);
        }

        .portfolio-masonry {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            grid-auto-rows: minmax(250px, auto);
            gap: 30px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .portfolio-item {
            position: relative;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
            grid-row-end: span 1;
            transform-style: preserve-3d;
        }

        .portfolio-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(108, 99, 255, 0.3), transparent);
            opacity: 0;
            transition: all 0.5s ease;
            z-index: 1;
        }

        .portfolio-item:hover {
            transform: translateY(-10px) rotateX(5deg);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        }

        .portfolio-item:hover::before {
            opacity: 1;
        }

        .portfolio-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: all 0.5s ease;
        }

        .portfolio-item:hover img {
            transform: scale(1.1);
        }

        .portfolio-overlay {
            position: absolute;
            bottom: -100%;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 30px;
            background: rgba(26, 26, 46, 0.9);
            transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            z-index: 2;
        }

        [data-theme="light"] .portfolio-overlay {
            background: rgba(255, 255, 255, 0.9);
        }

        .portfolio-item:hover .portfolio-overlay {
            bottom: 0;
        }

        .portfolio-overlay h3 {
            color: var(--text-primary);
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        .portfolio-overlay p {
            color: var(--text-secondary);
            margin-bottom: 20px;
        }

        .view-btn {
            display: inline-block;
            padding: 10px 25px;
            background: var(--primary-color);
            color: var(--white);
            border-radius: 30px;
            font-size: 14px;
            transition: all 0.4s ease;
            border: none;
        }

        .view-btn:hover {
            background: var(--secondary-color);
            transform: translateY(-3px);
        }

        /* Testimonials Section */
        .testimonials-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .testimonial-card {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border-radius: var(--border-radius);
            padding: 30px;
            box-shadow: var(--glass-shadow);
            border: var(--glass-border);
            transition: all 0.5s ease;
            transform-style: preserve-3d;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .testimonial-content {
            font-style: italic;
            color: var(--text-secondary);
            margin-bottom: 20px;
            position: relative;
            font-size: 1.1rem;
            line-height: 1.7;
        }

        .testimonial-content::before {
            content: '"';
            font-family: var(--cursive-font);
            font-size: 4rem;
            position: absolute;
            top: -20px;
            left: -15px;
            color: var(--primary-color);
            opacity: 0.3;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
        }

        [data-theme="light"] .testimonial-author {
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--primary-color);
        }

        .author-info h4 {
            color: var(--text-primary);
            margin-bottom: 5px;
            font-size: 1.2rem;
        }

        .author-info p {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        /* Achievements Section */
        #achievements {
            background: linear-gradient(135deg, rgba(15, 12, 41, 0.9), rgba(48, 43, 99, 0.9));
        }

        [data-theme="light"] #achievements {
            background: linear-gradient(135deg, rgba(245, 245, 245, 0.9), rgba(230, 230, 250, 0.9));
        }

        .achievements-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .achievement-card {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--glass-shadow);
            border: var(--glass-border);
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .achievement-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        .achievement-media {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .achievement-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .achievement-card:hover .achievement-media img {
            transform: scale(1.05);
        }

        .video-container {
            position: relative;
            height: 100%;
            background: #000;
        }

        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .play-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 2;
        }

        .play-icon i {
            color: white;
            font-size: 1.8rem;
            margin-left: 5px;
        }

        .play-icon:hover {
            background: rgba(108, 99, 255, 0.8);
            transform: translate(-50%, -50%) scale(1.1);
        }

        .achievement-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            z-index: 2;
        }

        .achievement-badge i {
            color: white;
            font-size: 1.5rem;
        }

        .achievement-content {
            padding: 25px;
        }

        .achievement-content h3 {
            font-size: 1.5rem;
            margin-bottom: 8px;
            color: var(--text-primary);
        }

        .achievement-content p {
            color: var(--accent-color);
            font-weight: 500;
            margin-bottom: 12px;
            font-size: 1.1rem;
        }

        .achievement-content span {
            color: var(--text-secondary);
            font-size: 1rem;
            line-height: 1.6;
            display: block;
        }

        /* Video Modal Styles */
        .video-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }

        .video-modal.active {
            display: flex;
        }

        .modal-content {
            position: relative;
            width: 80%;
            max-width: 1200px;
            max-height: 80vh;
        }

        .modal-content video {
            width: 100%;
            height: auto;
            max-height: 80vh;
            border-radius: var(--border-radius);
        }

        .close-modal {
            position: absolute;
            top: -40px;
            right: 0;
            color: white;
            font-size: 2rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .close-modal:hover {
            color: var(--accent-color);
        }

        .video-controls {
            position: absolute;
            bottom: 10px;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 20px;
            z-index: 10;
        }

        .control-btn {
            background: rgba(0, 0, 0, 0.7);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .control-btn:hover {
            background: var(--primary-color);
            transform: scale(1.1);
        }

        /* Resume Section */
        .resume-square-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .resume-square {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border-radius: var(--border-radius);
            box-shadow: var(--glass-shadow);
            border: var(--glass-border);
            padding: 50px;
            transition: all 0.5s ease;
        }

        .resume-square:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .resume-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .resume-profile {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .resume-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary-color);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .resume-name h3 {
            font-size: 2rem;
            margin-bottom: 5px;
            color: var(--text-primary);
        }

        .resume-name p {
            color: var(--text-secondary);
            font-size: 1.1rem;
        }

        .resume-contact {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 10px;
        }

        .resume-contact p {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--text-secondary);
            font-size: 1rem;
        }

        .resume-contact i {
            color: var(--primary-color);
            width: 20px;
            text-align: center;
        }

        .resume-columns {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .resume-section {
            margin-bottom: 30px;
        }

        .resume-section h4 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            gap: 10px;
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 10px;
        }

        .resume-section h4 i {
            font-size: 1.2rem;
        }

        .resume-item {
            margin-bottom: 25px;
            padding-left: 10px;
            border-left: 2px solid var(--primary-color);
        }

        .resume-item h5 {
            font-size: 1.2rem;
            color: var(--text-primary);
            margin-bottom: 5px;
        }

        .resume-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            color: var(--text-secondary);
            font-size: 1rem;
        }

        .resume-item ul {
            padding-left: 20px;
            color: var(--text-secondary);
        }

        .resume-item li {
            margin-bottom: 8px;
            font-size: 1rem;
        }

        .resume-skills {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .skill-category h6 {
            font-size: 1.1rem;
            color: var(--text-primary);
            margin-bottom: 10px;
        }

        .skill-category ul {
            padding-left: 15px;
        }

        .skill-category li {
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .resume-achievements li,
        .resume-languages li {
            margin-bottom: 10px;
            font-size: 1rem;
            color: var(--text-secondary);
        }

        .resume-footer {
            text-align: center;
            margin-top: 40px;
        }

        .download-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 30px;
            background: var(--primary-color);
            color: white;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .download-btn:hover {
            background: var(--secondary-color);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(108, 99, 255, 0.3);
        }

        /* Contact Section */
        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .contact-info {
            background: var(--card-bg);
            padding: 40px;
            border-radius: var(--border-radius);
            backdrop-filter: blur(5px);
            border: var(--glass-border);
        }

        .contact-info h3 {
            color: var(--text-primary);
            margin-bottom: 30px;
            font-size: 1.8rem;
            text-align: center;
        }

        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            background: rgba(108, 99, 255, 0.1);
            padding: 15px;
            border-radius: var(--border-radius);
            transition: all 0.4s ease;
        }

        .info-item:hover {
            transform: translateX(10px);
            background: rgba(108, 99, 255, 0.2);
        }

        .info-item i {
            width: 50px;
            height: 50px;
            background: rgba(108, 99, 255, 0.1);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 20px;
            font-size: 1.2rem;
            color: var(--primary-color);
            transition: all 0.4s ease;
        }

        .info-item:hover i {
            background: var(--primary-color);
            color: var(--white);
            transform: rotate(15deg);
        }

        .info-item p {
            color: var(--text-secondary);
            margin: 0;
            font-size: 1.1rem;
        }

        .social-links {
            display: flex;
            margin-top: 40px;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: left;
        }

        .social-links a {
            width: 50px;
            height: 50px;
            background: rgba(108, 99, 255, 0.1);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--primary-color);
            font-size: 1.2rem;
            transition: all 0.4s ease;
        }

        .social-links a:hover {
            background: var(--primary-color);
            color: var(--white);
            transform: translateY(-5px) rotate(10deg);
        }

        .contact-form {
            background: var(--card-bg);
            padding: 40px;
            border-radius: var(--border-radius);
            backdrop-filter: blur(5px);
            border: var(--glass-border);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px 20px;
            background: var(--input-bg);
            border: 1px solid var(--input-border);
            border-radius: 10px;
            color: var(--text-primary);
            transition: all 0.4s ease;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
        }

        .form-group textarea {
            font-family: var(--cursive-font);
            font-size: 1.2rem;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            background: rgba(108, 99, 255, 0.05);
            box-shadow: 0 0 0 3px rgba(108, 99, 255, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        /* Footer */
        footer {
            background: var(--section-bg);
            padding: 80px 0 30px;
            text-align: center;
            transition: background-color 0.5s ease;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-top: var(--glass-border);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-logo {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 30px;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 40px;
            gap: 20px;
        }

        .footer-links a {
            color: var(--text-secondary);
            transition: all 0.4s ease;
            font-size: 1.1rem;
        }

        .footer-links a:hover {
            color: var(--primary-color);
            transform: translateY(-3px);
        }

        .footer-copyright p {
            color: var(--text-secondary);
            font-size: 1rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.05);
                opacity: 0.7;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Scroll animations */
        [data-aos] {
            transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .hero-container {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-content {
                margin-bottom: 50px;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }

            .about-grid {
                grid-template-columns: 1fr;
            }

            .contact-container {
                grid-template-columns: 1fr;
            }
            
            .resume-container {
                padding: 0 5%;
            }
        }

        @media (max-width: 992px) {
            .hero-title {
                font-size: 3rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .portfolio-masonry {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                right: 0;
                top: 80px;
                background: var(--section-bg);
                width: 100%;
                flex-direction: column;
                align-items: center;
                padding: 30px 0;
                clip-path: circle(0px at 90% -10%);
                transition: all 0.5s ease-out;
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
            }
            
            .nav-links.active {
                clip-path: circle(1000px at 90% -10%);
            }
            
            .nav-links li {
                margin: 15px 0;
            }
            
            .burger {
                display: block;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.3rem;
            }

            .profile-container {
                width: 380px;
                height: 380px;
            }

            .section-header {
                margin-bottom: 50px;
            }

            .portfolio-filter {
                flex-direction: column;
                align-items: center;
            }

            .filter-btn {
                width: 100%;
                max-width: 200px;
            }
            
            .resume-columns {
                grid-template-columns: 1fr;
            }
            
            .resume-skills {
                grid-template-columns: 1fr;
            }

            .modal-content {
                width: 95%;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 2.2rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .hero-buttons {
                flex-direction: column;
                gap: 15px;
            }

            .profile-container {
                width: 280px;
                height: 280px;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .stat-item {
                min-width: 100%;
            }

            .portfolio-masonry {
                grid-template-columns: 1fr;
            }
            
            .resume-header {
                flex-direction: column;
            }
            
            .resume-date {
                margin-top: 5px;
            }
        }

        /* Burger animation */
        .toggle .line1 {
            transform: rotate(-45deg) translate(-5px, 6px);
        }
        .toggle .line2 {
            opacity: 0;
        }
        .toggle .line3 {
            transform: rotate(45deg) translate(-5px, -6px);
        }




        





    </style>
</head>
<body>
    <div class="galaxy-bg"></div>
    <div class="particles" id="particles-js"></div>
    
    <!-- Video Modal -->
    <div class="video-modal" id="videoModal">
        <div class="modal-content">
            <span class="close-modal" id="closeModal">&times;</span>
            <video id="modalVideo" controls>
                Your browser does not support the video tag.
            </video>
            <div class="video-controls">
                <button class="control-btn" id="playPauseBtn"><i class="fas fa-play"></i></button>
                <button class="control-btn" id="muteBtn"><i class="fas fa-volume-up"></i></button>
                <button class="control-btn" id="fullscreenBtn"><i class="fas fa-expand"></i></button>
            </div>
        </div>
    </div>
    
    <header>
        <nav>
            <div class="logo">
                <i class="fa-brands fa-uikit"></i>
                <span>Arnold Lumio</span>

            </div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#portfolio">Projects</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#contact">Contact</a></li>
                <li>
                    <button class="theme-toggle" id="themeToggle" aria-label="Toggle dark mode">
                        <i class="fas fa-moon"></i>
                    </button>
                </li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>

    <main class="dynamic-layout">
        <section id="home" class="hero">
            <div class="hero-container">
                <div class="hero-content" data-aos="fade-right">
                    <h1 class="hero-title">Arnold Lumio</h1>
                    <h2 class="hero-subtitle"><span class="ui-ux-text">UI/UX Designer</span> & Full Stack Developer</h2>
                    <p class="hero-description">Creating beautiful, functional digital experiences for web and mobile with a focus on user-centered design and cutting-edge technology.</p>
                    
                    <div class="hero-buttons">
                        <a href="#portfolio" class="btn btn-primary">View My Work</a>
                        <a href="#contact" class="btn btn-secondary">Get In Touch</a>
                    </div>
                    
                    <div class="social-links">
                        <a href="https://www.facebook.com/jessyjay.jeon"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://github.com/arnoldlumio"><i class="fab fa-github"></i></a>
                        <a href="https://www.tiktok.com/@noki_143"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                    
                </div>
                <div class="hero-image" data-aos="fade-left" data-aos-delay="200">
                    <div class="profile-container floating">
                        <img src="../images/bac7ec2a-cccb-4276-ae2e-c7aedad3f05f-Photoroom.png" alt="Arnold Lumio" class="profile-img">
                        <div class="circle-animation"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="dynamic-section">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">About Me</h2>
                <p class="section-subtitle">Get to know more about my professional journey and what drives me</p>
            </div>

            <div class="about-grid">
                <div class="about-image" data-aos="fade-right">
                    <img src="../images/hacker.jpg" alt="About Me" class="about-img">
                </div>
                
                <div class="about-text" data-aos="fade-left" data-aos-delay="200">
                    <h3>My IT Student Journey</h3>
                    <p>With over 5 years of experience in the digital product space, I've helped startups and established companies create meaningful experiences for their users. My journey began in graphic design, evolved through frontend development, and matured in user experience design.</p>
                    <p>I'm passionate about creating systems, not just screens. Every design decision should be intentional, every interaction meaningful, and every line of code purposeful.</p>
                    <div class="about-stats">
                        <div class="stat-item">
                            <div class="stat-number">50+</div>
                            <p>Projects Completed</p>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">5+</div>
                            <p>Years Experience</p>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">100%</div>
                            <p>Client Satisfaction</p>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">24</div>
                            <p>Awards Won</p>
                        </div>
                    </div>
                </div>


               
            </div>

        </section>

        <section id="skills" class="dynamic-section">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">My Skills</h2>
                <p class="section-subtitle">Technologies and tools I work with to bring ideas to life</p>
            </div>
            <div class="skills-grid">
                <div class="skill-category" data-aos="fade-up" data-aos-delay="100">
                    <h3><i class="fas fa-laptop-code"></i> Web Development</h3>
                    <div class="skills-icons-container">
                        <div class="skill-icon">
                            <i class="fab fa-html5" style="color: #e34f26;"></i>
                            <span>HTML5</span>
                            
                        </div>
                        <div class="skill-icon">
                            <i class="fab fa-css3-alt" style="color: #1572b6;"></i>
                            <span>CSS3</span>
                           
                        </div>
                        <div class="skill-icon">
                            <i class="fab fa-js-square" style="color: #f7df1e;"></i>
                            <span>JavaScript</span>          
                        </div>
                       
                         <div class="skill-icon">
                            <i class="fa-brands fa-php" style="color: #1572b6;"></i>
                            <span>PHP</span>    
                         </div>
                       
                            <div class="skill-icon">
                               <i class="fa-solid fa-database" style="color: #4479A1;"></i>
                               <span>MySQL Xampp</span>
                            
                        </div>
                    </div>
                </div>

                <div class="skill-category" data-aos="fade-up" data-aos-delay="200">
                    <h3><i class="fas fa-mobile-alt"></i> Mobile Development</h3>
                    <div class="skills-icons-container">

                        <div class="skill-icon">
                           <i class="fa-brands fa-java" style="color:rgb(98, 177, 233);"></i>
                            <span>Java</span>
                        </div>
                       
                        <div class="skill-icon">
                            <i class="fab fa-android" style="color: #3DDC84;"></i>
                            <span>Android Studio</span>
                        </div>

                        <div class="skill-icon">
                            <i class="fas fa-fire" style="color: #FFCA28;"></i>
                            <span>Firebase</span>
                        </div>

                        <div class="skill-icon">
                        <i class="fa-solid fa-c" style="color:#512BD4;"></i>
                             <span>C#</span>
                        </div>


                        <div class="skill-icon">
                            <i class="fas fa-database" style="color: #4479A1;"></i>
                            <span>Realtime Database</span>
                            
                        </div>
                        
                    </div>
                </div>

                <div class="skill-category" data-aos="fade-up" data-aos-delay="300">
                    <h3><i class="fas fa-paint-brush"></i> UI/UX Design</h3>
                    <div class="skills-icons-container">

                        <div class="skill-icon">
                            <i class="fab fa-figma" style="color: #F24E1E;"></i>
                            <span>Figma</span>
                        </div>

                        <div class="skill-icon">
                            <i class="fas fa-pencil-ruler" style="color: #FF61F6;"></i>
                            <span>Adobe XD</span>                         
                        </div>

                        <div class="skill-icon">
                            <i class="fas fa-palette" style="color: #2AC3CB;"></i>
                            <span>Canva</span>                         
                        </div>

                        <div class="skill-icon">
                            <i class="fas fa-image" style="color: #31A8FF;"></i>
                            <span>Photoshop</span>
                        </div>
                       
                        <div class="skill-icon">
                            <i class="fas fa-magic" style="color: #FF9A00;"></i>
                            <span>Prototyping</span>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        
        <section id="portfolio" class="dynamic-section">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">My Projects</h2>
                <p class="section-subtitle">A selection of my recent projects and case studies</p>
            </div>
            <div class="portfolio-filter" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="web">Web</button>
                <button class="filter-btn" data-filter="mobile">Mobile</button>
                
                <button class="filter-btn" data-filter="uiux">UI/UX</button>

            </div>
            <div class="portfolio-masonry">
                <div class="portfolio-item" data-aos="zoom-in" data-category="web">
                    <img src="https://scontent.fdvo2-2.fna.fbcdn.net/v/t39.30808-6/481661438_122226563726034328_4625228288932412325_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=127cfc&_nc_ohc=-auYZWCU4bAQ7kNvwFgbHlz&_nc_oc=Adl8EqKe34Dum8m07w8-CKjkvEcEuhsK8Qg5TSRnmBgb_KOahJcj5L2HGt-WufhwSUtXj47U4c3nxpHGqX1eYnB8&_nc_zt=23&_nc_ht=scontent.fdvo2-2.fna&_nc_gid=ZwZLH5uXGZCcIc22DkeuyA&oh=00_AfOnnV--e76_yHMvUuhADPcwEQlCv32pXjD8HS2JZyh-dQ&oe=6867EFBB" alt="Web Project 1">
                    <div class="portfolio-overlay">
                        <h3>Computerized Book Borrowing System</h3>
                        <p>STI College Cotabato Library</p>
                        <a href="#" class="view-btn">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="100" data-category="mobile">
                    <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="Mobile Project 1">
                    <div class="portfolio-overlay">
                        <h3>Fitness App</h3>
                        <p>React Native application with health tracking</p>
                        <a href="#" class="view-btn">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="200" data-category="uiux">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="UI/UX Project 1">
                    <div class="portfolio-overlay">
                        <h3>Banking App Redesign</h3>
                        <p>Complete UX overhaul for financial application</p>
                        <a href="#" class="view-btn">View Project</a>
                    </div>
                </div>

               

               

             
                <div class="portfolio-item" data-aos="zoom-in" data-category="web">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1115&q=80" alt="Web Project 2">
                    <div class="portfolio-overlay">
                        <h3>SAAS Dashboard</h3>
                        <p>Analytics dashboard with real-time data</p>
                        <a href="#" class="view-btn">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="100" data-category="mobile">
                    <img src="https://images.unsplash.com/photo-1609921212029-bb5a28e60960?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1152&q=80" alt="Mobile Project 2">
                    <div class="portfolio-overlay">
                        <h3>Social Media App</h3>
                        <p>Flutter application with Firebase backend</p>
                        <a href="#" class="view-btn">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item" data-aos="zoom-in" data-aos-delay="200" data-category="uiux">
                    <img src="https://images.unsplash.com/photo-1542744094-3a31f272c490?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="UI/UX Project 2">
                    <div class="portfolio-overlay">
                        <h3>Travel Booking UI Kit</h3>
                        <p>Complete design system for travel platform</p>
                        <a href="#" class="view-btn">View Project</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="dynamic-section">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Client Testimonials</h2>
                <p class="section-subtitle">What people say about working with me</p>
            </div>
            <div class="testimonials-container">
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-content">
                        
                    We sincerely appreciate the incredible efforts of 𝑴𝒓. 𝑨𝒓𝒏𝒐𝒍𝒅 𝑳𝒖𝒎𝒊𝒐, 𝒂 3𝒓𝒅-𝒚𝒆𝒂𝒓 𝑩𝒂𝒄𝒉𝒆𝒍𝒐𝒓 𝒐𝒇 𝑺𝒄𝒊𝒆𝒏𝒄𝒆 𝒊𝒏 𝑰𝒏𝒇𝒐𝒓𝒎𝒂𝒕𝒊𝒐𝒏 𝑻𝒆𝒄𝒉𝒏𝒐𝒍𝒐𝒈𝒚 𝒔𝒕𝒖𝒅𝒆𝒏𝒕, for developing this system and enhancing our library services!. We also extend our deepest appreciation to 𝑴𝒓. 𝑱𝒆𝒓𝒐𝒎𝒆 𝑬𝒅𝒊𝒐, 𝒐𝒖𝒓 𝒅𝒆𝒅𝒊𝒄𝒂𝒕𝒆𝒅 𝑪𝒂𝒑𝒔𝒕𝒐𝒏𝒆 𝑻𝒆𝒂𝒄𝒉𝒆𝒓, for his invaluable guidance and support in bringing this project to life. Your dedication and hard work truly make a difference in our learning community! 👏👏
                    
                    
                    </div>
                    <div class="testimonial-author">
                        <img src="https://scontent.fdvo2-2.fna.fbcdn.net/v/t39.30808-6/375751899_295704389741415_3189774562678346137_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=nhs2vNG2OxgQ7kNvwG-DqB5&_nc_oc=AdnQUvBpwkmy8Fi6ZRfG42ZQv0gXy4zURlBmm1O1OJYB_zW6lHkyA8FFWf22ayO5O_9cFDHCploeSJCUXaoT-uN2&_nc_zt=23&_nc_ht=scontent.fdvo2-2.fna&_nc_gid=ReTQYf8mZl1CuZDgVIv9wQ&oh=00_AfQjl9FHuOuI-OxA44zzPzIOxO0kAy81EYqiRFWW5-IIlg&oe=68724EDB" alt="Client" class="author-avatar">
                        <div class="author-info">
                            <h4>STI College Cotabato Library</h4>
                            <p>Librarian and Staff</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-content">
                        The mobile app Arnold developed for our business has significantly improved customer engagement. His technical expertise and design sensibility are outstanding. He's responsive, professional, and truly cares about the end product.
                    </div>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="Client" class="author-avatar">
                        <div class="author-info">
                            <h4>Michael Chen</h4>
                            <p>CEO, Startup Innovations</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-content">
                        Working with Arnold was a game-changer for our UX strategy. He brought fresh perspectives and innovative solutions that have delighted our users. His ability to balance creativity with technical feasibility is remarkable.
                    </div>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Client" class="author-avatar">
                        <div class="author-info">
                            <h4>Emily Rodriguez</h4>
                            <p>Product Manager, DesignHub</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Achievements Section -->
        <section id="achievements" class="dynamic-section">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">My Achievements</h2>
                <p class="section-subtitle">Visual showcase of my accomplishments and recognitions</p>
            </div>
            
            <div class="achievements-gallery">
                <!-- Achievement 1 -->
                <div class="achievement-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="achievement-media">
                        <img src="../images/76be666c-7649-4323-91bb-4ac2dfdbd2bd.jpg" alt="Coding Competition">
                        <div class="achievement-badge">
                            <i class="fas fa-trophy"></i>
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3>Code Fest Champion</h3>
                        <p>Tagisan ng Talino National Competition 2025</p>
                        <span>Won first place in the national coding competition with my innovative inventory management solution</span>
                    </div>
                </div>
                
                <!-- Achievement 2 -->
                <div class="achievement-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="achievement-media">
                        <div class="video-container" data-video-src="https://www.facebook.com/gensan.sti.edu/videos/1227095219123830/">
                            <video poster="../images/CODEFESTGENSAN.jpg">
                                <source src="https://www.facebook.com/gensan.sti.edu/videos/1227095219123830/" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="play-icon">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <div class="achievement-badge">
                            <i class="fas fa-medal"></i>
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3>Mobile App Hackathon</h3>
                        <p>STI Gensan 2025</p>
                        <span>Developed a winning mobile application for campus navigation using C# and Xamarin</span>
                    </div>
                </div>
                
                <!-- Achievement 3 -->
                <div class="achievement-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="achievement-media">

                        <img src="https://scontent.fdvo2-2.fna.fbcdn.net/v/t39.30808-6/481661438_122226563726034328_4625228288932412325_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=127cfc&_nc_ohc=-auYZWCU4bAQ7kNvwFgbHlz&_nc_oc=Adl8EqKe34Dum8m07w8-CKjkvEcEuhsK8Qg5TSRnmBgb_KOahJcj5L2HGt-WufhwSUtXj47U4c3nxpHGqX1eYnB8&_nc_zt=23&_nc_ht=scontent.fdvo2-2.fna&_nc_gid=ZwZLH5uXGZCcIc22DkeuyA&oh=00_AfOnnV--e76_yHMvUuhADPcwEQlCv32pXjD8HS2JZyh-dQ&oe=6867EFBB" alt="Library System">
                        
                        <div class="achievement-badge">
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3>Library System Deployment</h3>
                        <p>STI Cotabato 2024</p>
                        <span>Successfully deployed a computerized library management system that improved efficiency by 40%</span>
                    </div>
                </div>



                
                <!-- Achievement 4 -->
                <div class="achievement-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="achievement-media">
                        <div class="video-container" data-video-src="your-video-file.mp4">
                            <video poster="../images/mobile_app.png">
                                <source src="your-video-file.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="play-icon">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                        <div class="achievement-badge">
                            <i class="fas fa-award"></i>
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3>Capstone Project</h3>
                        <p>STI Cotabato 2025</p>
                        <span>Barangay Connect a Mobile Application for Community Services and Updates</span>
                    </div>
                </div>
                
                <!-- Achievement 5 -->
               
                
                <!-- Achievement 6 -->
                <div class="achievement-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="achievement-media">
                        <img src="../images/CODEFEST.jpg" alt="Innovation Competition">
                        <div class="achievement-badge">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                    </div>
                    <div class="achievement-content">
                        <h3>IT Certificates</h3>
                        <p>Regional Competition 2023</p>
                        
                    </div>
                </div>
            </div>
        </section>



        <section id="resume" class="dynamic-section">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">My Resume</h2>
                <p class="section-subtitle">Professional experience and qualifications</p>
            </div>
            
            <div class="resume-square-container">
                <div class="resume-square" data-aos="fade-up">
                    <div class="resume-header">
                        <div class="resume-profile">
                            <img src="../resumePic.jpg" alt="Arnold Lumio" class="resume-photo">
                            <div class="resume-name">
                                <h3>Arnold Lumio</h3>
                                <p>UI/UX Designer & Full Stack Developer</p>
                            </div>
                        </div>
                        <div class="resume-contact">
                            <p><i class="fas fa-envelope"></i>arnollumio@gmail.com</p>
                            <p><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
                            <p><i class="fas fa-map-marker-alt"></i>Dona Teresa Street, Cotabato City</p>
                        </div>
                    </div>
                    
                    <div class="resume-columns">
                        <div class="resume-left">
                            <div class="resume-section">
                                <h4><i class="fas fa-briefcase"></i> Experience</h4>
                                <div class="resume-item">
                                    <h5>Senior UI/UX Designer</h5>
                                    <div class="resume-meta">
                                        <span>Tech Innovations Inc.</span>
                                        <span>2021 - Present</span>
                                    </div>
                                    <ul>
                                        <li>Lead designer for multiple web and mobile applications</li>
                                        <li>Conducted user research and usability testing</li>
                                        <li>Created wireframes, prototypes, and design systems</li>
                                    </ul>
                                </div>
                                
                                <div class="resume-item">
                                    <h5>Frontend Developer</h5>
                                    <div class="resume-meta">
                                        <span>Digital Solutions Co.</span>
                                        <span>2018 - 2021</span>
                                    </div>
                                    <ul>
                                        <li>Developed responsive web applications using React and Vue.js</li>
                                        <li>Implemented pixel-perfect UIs from designer mockups</li>
                                        <li>Optimized performance and accessibility</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="resume-section">
                                <h4><i class="fas fa-graduation-cap"></i> Education</h4>

                                <div class="resume-item">
                                    <h5>Bachelor of Science in Information Technology</h5>
                                    <div class="resume-meta">
                                        <span>STI College Cotabato</span>
                                        <span>2022 - 2026</span>
                                    </div>
                                </div>
                                
                                <div class="resume-item">
                                    <h5>Humanities and Social Science</h5>
                                    <div class="resume-meta">
                                        <span>Notre Dame Village National High School</span>
                                        <span>2020 - 2022</span>
                                    </div>
                                </div>

                                 <div class="resume-item">
                                    <h5>Junior High</h5>
                                    <div class="resume-meta">
                                        <span>CAS Memorial School Inc</span>
                                        <span>2016 - 2019</span>
                                    </div>
                                </div>


                            </div>
                        </div>
                        
                        <div class="resume-right">
                            <div class="resume-section">
                                <h4><i class="fas fa-star"></i> Skills</h4>
                                <div class="resume-skills">
                                    <div class="skill-category">
                                        <h6>Design</h6>
                                        <ul>
                                            <li>UI/UX Design</li>
                                            <li>User Research</li>
                                            <li>Wireframing</li>
                                            <li>Prototyping</li>
                                            <li>Canva</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="skill-category">
                                        <h6>Development</h6>
                                        <ul>
                                            <li>HTML5/CSS3</li>
                                            <li>JavaScript (ES6+)</li>
                                            <li>C#</li>
                                            <li>Java</li>
                                            <li>.NET Framework</li>
                                            <li>Android Studio</li>
                                            <li>PHP</li>
                                            <li>MySQL</li>
                                            <li>MSSQL</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="resume-section">
                                <h4><i class="fas fa-trophy"></i> Achievements</h4>
                                <ul class="resume-achievements">
                                    <li>Tagisan ng Talino Code Fest Champion (2025)</li>
                                    <li>Mobile App Hackathon in STI Gensan (2025)</li>
                                    <li>Deploying Computerized System at STI Library (2024)</li>
                                </ul>
                            </div>
                            
                            <div class="resume-section">
                                <h4><i class="fas fa-language"></i> Languages</h4>
                                <ul class="resume-languages">
                                    <li>Tagalog (Fluent)</li>
                                    <li>English (Intermediate)</li>
                                    <li>Bisaya</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="resume-footer">
                        <a href="#" class="download-btn">
                            <i class="fas fa-download"></i> Download PDF Version
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="dynamic-section">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Contact Me</h2>
                <p class="section-subtitle">Have a project in mind or want to discuss potential opportunities?</p>
            </div>
            <div class="contact-container">
                <div class="contact-info" data-aos="fade-right">
                    <h3>Contact Information</h3>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <p>arnollumio@gmail.com</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <p>+1 (555) 123-4567</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Dona Teresa Street, Cotabato City</p>
                    </div>
                    <div class="social-links">
                        <a href="https://github.com/arnoldlumio"><i class="fab fa-github"></i></a>
                        <a href="https://www.facebook.com/jessyjay.jeon"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.tiktok.com/@noki_143"><i class="fab fa-tiktok"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <form class="contact-form" data-aos="fade-left" data-aos-delay="200">
                    <div class="form-group">
                        <input type="text" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Your beautiful message in cursive..." rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-logo" data-aos="fade-up">
                <span>Arnold Lumio</span>
            </div>
            <div class="footer-links" data-aos="fade-up" data-aos-delay="100">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#portfolio">Work</a>
                <a href="#testimonials">Testimonials</a>
                <a href="#resume">Resume</a>
                <a href="#contact">Contact</a>
            </div>
            <div class="footer-copyright" data-aos="fade-up" data-aos-delay="200">
                <p>&copy; 2025 Arnold Lumio. All rights reserved.</p>
                <p class="ui-ux-text">Crafting digital experiences with passion</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-out-quart'
        });
        
        // Initialize particles.js
        document.addEventListener('DOMContentLoaded', function() {
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#6c63ff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#6c63ff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
        });

        // Mobile Navigation
        const burger = document.querySelector('.burger');
        const navLinks = document.querySelector('.nav-links');
        const navLinksItems = document.querySelectorAll('.nav-links li');

        burger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            burger.classList.toggle('toggle');
        });

        // Close mobile menu when clicking on a link
        navLinksItems.forEach(item => {
            item.addEventListener('click', () => {
                navLinks.classList.remove('active');
                burger.classList.remove('toggle');
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Portfolio filtering
        const filterBtns = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                btn.classList.add('active');
                
                const filter = btn.getAttribute('data-filter');
                
                portfolioItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Section activation for background effects
        const sections = document.querySelectorAll('.dynamic-section, .hero');
        
        function activateSection() {
            sections.forEach(section => {
                const sectionTop = section.getBoundingClientRect().top;
                const sectionHeight = section.getBoundingClientRect().height;
                const windowHeight = window.innerHeight;
                
                // If section is in view
                if (sectionTop < windowHeight * 0.75 && sectionTop > -sectionHeight * 0.5) {
                    section.classList.add('active');
                } else {
                    section.classList.remove('active');
                }
            });
        }

        // Initial checks
        activateSection();

        // Check on scroll
        window.addEventListener('scroll', () => {
            activateSection();
        });

        // Sticky header on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.classList.toggle('sticky', window.scrollY > 0);
        });

        // Theme Toggle Functionality
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = themeToggle.querySelector('i');
        
        // Check for saved theme preference or use preferred color scheme
        const currentTheme = localStorage.getItem('theme') || 
                            (window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark');
        
        // Apply the current theme
        if (currentTheme === 'light') {
            document.documentElement.setAttribute('data-theme', 'light');
            themeIcon.classList.replace('fa-moon', 'fa-sun');
        }
        
        // Theme toggle event
        themeToggle.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            
            if (currentTheme === 'light') {
                document.documentElement.removeAttribute('data-theme');
                themeIcon.classList.replace('fa-sun', 'fa-moon');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.setAttribute('data-theme', 'light');
                themeIcon.classList.replace('fa-moon', 'fa-sun');
                localStorage.setItem('theme', 'light');
            }
        });

        // Form submission
        const contactForm = document.querySelector('.contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                alert('Thank you for your message! I will get back to you soon.');
                this.reset();
            });
        }

        // Video Player Functionality
        const videoModal = document.getElementById('videoModal');
        const modalVideo = document.getElementById('modalVideo');
        const closeModal = document.getElementById('closeModal');
        const playPauseBtn = document.getElementById('playPauseBtn');
        const muteBtn = document.getElementById('muteBtn');
        const fullscreenBtn = document.getElementById('fullscreenBtn');
        const playIcons = document.querySelectorAll('.play-icon');

        // Open modal and play video when play icon is clicked
        playIcons.forEach(icon => {
            icon.addEventListener('click', function() {
                const videoContainer = this.closest('.video-container');
                const video = videoContainer.querySelector('video');
                const videoSrc = videoContainer.getAttribute('data-video-src') || video.querySelector('source').src;
                
                modalVideo.src = videoSrc;
                videoModal.classList.add('active');
                modalVideo.play();
                
                // Update play/pause button icon
                playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
            });
        });

        // Close modal
        closeModal.addEventListener('click', function() {
            videoModal.classList.remove('active');
            modalVideo.pause();
            modalVideo.currentTime = 0;
        });

        // Play/Pause button
        playPauseBtn.addEventListener('click', function() {
            if (modalVideo.paused) {
                modalVideo.play();
                this.innerHTML = '<i class="fas fa-pause"></i>';
            } else {
                modalVideo.pause();
                this.innerHTML = '<i class="fas fa-play"></i>';
            }
        });

        // Mute button
        muteBtn.addEventListener('click', function() {
            if (modalVideo.muted) {
                modalVideo.muted = false;
                this.innerHTML = '<i class="fas fa-volume-up"></i>';
            } else {
                modalVideo.muted = true;
                this.innerHTML = '<i class="fas fa-volume-mute"></i>';
            }
        });

        // Fullscreen button
        fullscreenBtn.addEventListener('click', function() {
            if (!document.fullscreenElement) {
                modalVideo.requestFullscreen().catch(err => {
                    console.error(`Error attempting to enable fullscreen: ${err.message}`);
                });
            } else {
                document.exitFullscreen();
            }
        });

        // Update play/pause button when video is played/paused
        modalVideo.addEventListener('play', function() {
            playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
        });

        modalVideo.addEventListener('pause', function() {
            playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
        });

        // Close modal when clicking outside the video
        videoModal.addEventListener('click', function(e) {
            if (e.target === videoModal) {
                videoModal.classList.remove('active');
                modalVideo.pause();
                modalVideo.currentTime = 0;
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && videoModal.classList.contains('active')) {
                videoModal.classList.remove('active');
                modalVideo.pause();
                modalVideo.currentTime = 0;
            }
        });
    </script>
</body>
</html>