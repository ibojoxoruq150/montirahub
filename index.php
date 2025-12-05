<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MontiRaHub - Professional Furniture Repair & Restoration Services</title>
    <meta name="description" content="Expert furniture repair and restoration services at MontiRaHub. We fix wooden chairs, tables, sofas, antique pieces and more. Click here to continue reading about our comprehensive repair solutions for your beloved furniture pieces.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-wrapper-847k {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .header-nav-923x {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-container-456z {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-789m {
            color: #ecf0f1;
            font-size: 2rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu-234q {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-567w {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        .nav-link-567w:hover {
            background: rgba(255,255,255,0.1);
            color: #3498db;
        }

        .hero-section-891r {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.pexels.com/photos/1350789/pexels-photo-1350789.jpeg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero-content-445t {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-678y {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-123u {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-345i {
            background: #e74c3c;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            margin: 0.5rem;
        }

        .cta-button-345i:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        .services-grid-789o {
            padding: 5rem 2rem;
            background: #f8f9fa;
        }

        .container-max-456p {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title-234l {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .grid-layout-567n {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .service-card-891h {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            border-left: 5px solid #3498db;
        }

        .service-card-891h:hover {
            transform: translateY(-5px);
        }

        .card-icon-123j {
            font-size: 3rem;
            color: #3498db;
            margin-bottom: 1rem;
        }

        .card-title-456k {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .card-description-789s {
            color: #666;
            line-height: 1.8;
        }

        .about-section-234d {
            padding: 5rem 2rem;
            background: white;
        }

        .about-grid-567f {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text-891g {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }

        .about-image-123a {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .about-image-123a img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .history-timeline-456v {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .timeline-item-789c {
            display: flex;
            margin-bottom: 3rem;
            align-items: center;
        }

        .timeline-year-123x {
            background: rgba(255,255,255,0.2);
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: bold;
            margin-right: 2rem;
            min-width: 120px;
            text-align: center;
        }

        .timeline-content-456b {
            flex: 1;
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .process-section-789e {
            padding: 5rem 2rem;
            background: #f1f2f6;
        }

        .process-steps-123r {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .step-card-456t {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            text-align: center;
            position: relative;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .step-number-789y {
            background: #e74c3c;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1rem;
        }

        .testimonials-section-123w {
            padding: 5rem 2rem;
            background: #2c3e50;
            color: white;
        }

        .testimonial-grid-456q {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card-789z {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .testimonial-text-123e {
            font-style: italic;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .testimonial-author-456r {
            font-weight: bold;
            color: #3498db;
        }

        .specialties-section-789t {
            padding: 5rem 2rem;
            background: white;
        }

        .specialty-grid-123y {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .specialty-card-456u {
            border: 2px solid #ecf0f1;
            padding: 2rem;
            border-radius: 15px;
            transition: all 0.3s;
            text-align: center;
        }

        .specialty-card-456u:hover {
            border-color: #3498db;
            box-shadow: 0 10px 30px rgba(52, 152, 219, 0.2);
        }

        .contact-section-789i {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 50%, #fecfef 100%);
        }

        .contact-grid-123o {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-info-456p {
            background: rgba(255,255,255,0.9);
            padding: 2rem;
            border-radius: 15px;
        }

        .contact-item-789a {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .contact-icon-123s {
            font-size: 1.5rem;
            color: #3498db;
            margin-right: 1rem;
            width: 40px;
        }

        .phone-link-456d {
            color: #2c3e50;
            text-decoration: none;
            font-weight: bold;
        }

        .phone-link-456d:hover {
            color: #3498db;
        }

        .footer-main-789f {
            background: #2c3e50;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer-grid-123g {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section-456h {
            padding: 1rem;
        }

        .footer-title-789j {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #3498db;
        }

        .footer-text-123k {
            line-height: 1.8;
            color: #bdc3c7;
        }

        .footer-bottom-456l {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #34495e;
            color: #95a5a6;
        }

        .modal-overlay-789m {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-123n {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 15px;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-header-456o {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            border-bottom: 2px solid #ecf0f1;
            padding-bottom: 1rem;
        }

        .modal-title-789p {
            font-size: 1.8rem;
            color: #2c3e50;
        }

        .close-button-123q {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .modal-text-456r {
            line-height: 1.8;
            color: #555;
        }

        .continue-link-789s {
            background: #27ae60;
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            margin: 1rem 0;
            transition: all 0.3s;
        }

        .continue-link-789s:hover {
            background: #219a52;
            transform: translateY(-2px);
        }

        .highlight-box-123t {
            background: linear-gradient(135deg, #74b9ff, #0984e3);
            color: white;
            padding: 2rem;
            border-radius: 15px;
            margin: 2rem 0;
            text-align: center;
        }

        .equipment-section-456u {
            padding: 5rem 2rem;
            background: #f8f9fa;
        }

        .equipment-grid-789v {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .equipment-card-123w {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            border-top: 4px solid #e74c3c;
        }

        .materials-section-456x {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
        }

        .materials-grid-789y {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .material-item-123z {
            background: rgba(255,255,255,0.9);
            padding: 1.5rem;
            border-radius: 12px;
            text-align: center;
            transition: transform 0.3s;
        }

        .material-item-123z:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .nav-menu-234q {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-678y {
                font-size: 2.5rem;
            }
            
            .about-grid-567f,
            .contact-grid-123o {
                grid-template-columns: 1fr;
            }
            
            .timeline-item-789c {
                flex-direction: column;
                text-align: center;
            }
            
            .timeline-year-123x {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>

<body class="main-wrapper-847k">
    <header class="header-nav-923x">
        <nav class="nav-container-456z">
            <a href="#home" class="logo-brand-789m">MontiRaHub</a>
            <ul class="nav-menu-234q">
                <li><a href="#services" class="nav-link-567w">Services</a></li>
                <li><a href="#about" class="nav-link-567w">About Us</a></li>
                <li><a href="#history" class="nav-link-567w">Our History</a></li>
                <li><a href="#process" class="nav-link-567w">Repair Process</a></li>
                <li><a href="#specialties" class="nav-link-567w">Specialties</a></li>
                <li><a href="#equipment" class="nav-link-567w">Equipment</a></li>
                <li><a href="#materials" class="nav-link-567w">Materials</a></li>
                <li><a href="#testimonials" class="nav-link-567w">Reviews</a></li>
                <li><a href="#contact" class="nav-link-567w">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero-section-891r">
        <div class="hero-content-445t">
            <h1 class="hero-title-678y">Expert Furniture Restoration</h1>
            <p class="hero-subtitle-123u">Bringing your beloved furniture back to life with professional repair and restoration services</p>
            <a href="#services" class="cta-button-345i">Explore Our Services</a>
            <a href="#contact" class="cta-button-345i">Get Free Quote</a>
        </div>
    </section>

    <section id="services" class="services-grid-789o">
        <div class="container-max-456p">
            <h2 class="section-title-234l">Our Comprehensive Services</h2>
            <div class="grid-layout-567n">
                <div class="service-card-891h">
                    <div class="card-icon-123j">🪑</div>
                    <h3 class="card-title-456k">Chair Restoration</h3>
                    <p class="card-description-789s">Complete chair repair including leg reinforcement, seat reupholstering, back support fixes, and structural stability improvements. We handle wooden, metal, and upholstered chairs with expert craftsmanship.</p>
                </div>
                <div class="service-card-891h">
                    <div class="card-icon-123j">🛏️</div>
                    <h3 class="card-title-456k">Table Refinishing</h3>
                    <p class="card-description-789s">Professional table restoration services including surface refinishing, scratch removal, leg repair, joint tightening, and complete structural assessment for dining tables, coffee tables, and desk surfaces.</p>
                </div>
                <div class="service-card-891h">
                    <div class="card-icon-123j">🛋️</div>
                    <h3 class="card-title-456k">Sofa Repair</h3>
                    <p class="card-description-789s">Comprehensive sofa restoration including frame repair, spring replacement, cushion refilling, fabric repair, and complete reupholstering services for all types of seating furniture and sectionals.</p>
                </div>
                <div class="service-card-891h">
                    <div class="card-icon-123j">🗄️</div>
                    <h3 class="card-title-456k">Cabinet Restoration</h3>
                    <p class="card-description-789s">Expert cabinet repair services including door alignment, drawer track replacement, hinge repair, surface refinishing, and hardware restoration for kitchen cabinets, wardrobes, and storage units.</p>
                </div>
                <div class="service-card-891h">
                    <div class="card-icon-123j">🏺</div>
                    <h3 class="card-title-456k">Antique Furniture Care</h3>
                    <p class="card-description-789s">Specialized antique furniture restoration preserving historical integrity while ensuring functionality. We use period-appropriate techniques and materials for valuable vintage and heirloom pieces.</p>
                </div>
                <div class="service-card-891h">
                    <div class="card-icon-123j">🔨</div>
                    <h3 class="card-title-456k">Custom Repairs</h3>
                    <p class="card-description-789s">Tailored repair solutions for unique furniture pieces including custom woodwork, metal fabrication, specialized finishes, and one-of-a-kind restoration projects requiring innovative approaches.</p>
                </div>
            </div>
            <div class="highlight-box-123t">
                <h3>Ready to Restore Your Furniture?</h3>
                <p>Our skilled craftsmen are ready to bring your furniture back to its original beauty and functionality.</p>
                <a href="#contact" class="continue-link-789s">Click Here to Continue with Your Project</a>
            </div>
        </div>
    </section>

    <section id="about" class="about-section-234d">
        <div class="container-max-456p">
            <h2 class="section-title-234l">About MontiRaHub</h2>
            <div class="about-grid-567f">
                <div class="about-text-891g">
                    <p>MontiRaHub has been serving the community with exceptional furniture repair and restoration services for over two decades. Our team of skilled craftsmen combines traditional techniques with modern tools to deliver outstanding results that exceed customer expectations.</p>
                    
                    <p>We understand that furniture holds sentimental value and represents significant investments. That's why we approach each project with meticulous attention to detail, ensuring that every piece receives the care and expertise it deserves. From family heirlooms to everyday furniture, we treat each item as if it were our own.</p>
                    
                    <p>Our workshop is equipped with state-of-the-art tools and machinery, allowing us to handle projects of any complexity. We source high-quality materials and use environmentally friendly finishes whenever possible, ensuring both durability and safety for your home environment.</p>
                    
                    <a href="#process" class="continue-link-789s">Click Here to Continue Learning About Our Process</a>
                </div>
                <div class="about-image-123a">
                    <img src="https://images.pexels.com/photos/6474471/pexels-photo-6474471.jpeg" alt="Furniture restoration workshop">
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="history-timeline-456v">
        <div class="container-max-456p">
            <h2 class="section-title-234l">Our Journey Through Time</h2>
            <div class="timeline-item-789c">
                <div class="timeline-year-123x">2001</div>
                <div class="timeline-content-456b">
                    <h3>Humble Beginnings</h3>
                    <p>MontiRaHub started as a small family business in a garage workshop. Founder Michael Rodriguez began repairing furniture for neighbors and friends, quickly gaining a reputation for quality workmanship and attention to detail.</p>
                </div>
            </div>
            <div class="timeline-item-789c">
                <div class="timeline-year-123x">2005</div>
                <div class="timeline-content-456b">
                    <h3>First Workshop Expansion</h3>
                    <p>Due to growing demand, we moved to our first commercial space, a 2,000 square foot workshop. We hired our first employees and began specializing in antique furniture restoration, developing expertise in period-specific techniques.</p>
                </div>
            </div>
            <div class="timeline-item-789c">
                <div class="timeline-year-123x">2010</div>
                <div class="timeline-content-456b">
                    <h3>Technology Integration</h3>
                    <p>We invested in modern equipment including precision sanders, spray booths, and computer-controlled cutting tools. This allowed us to maintain traditional craftsmanship while improving efficiency and consistency in our work.</p>
                </div>
            </div>
            <div class="timeline-item-789c">
                <div class="timeline-year-123x">2015</div>
                <div class="timeline-content-456b">
                    <h3>Community Recognition</h3>
                    <p>MontiRaHub received the "Best Furniture Restoration Service" award from the local chamber of commerce. We also began offering workshops and classes to share our knowledge with aspiring furniture restorers.</p>
                </div>
            </div>
            <div class="timeline-item-789c">
                <div class="timeline-year-123x">2020</div>
                <div class="timeline-content-456b">
                    <h3>Sustainable Practices</h3>
                    <p>We implemented eco-friendly practices including water-based finishes, waste reduction programs, and partnerships with local wood suppliers committed to sustainable forestry practices.</p>
                </div>
            </div>
            <div class="timeline-item-789c">
                <div class="timeline-year-123x">2024</div>
                <div class="timeline-content-456b">
                    <h3>Continued Excellence</h3>
                    <p>Today, MontiRaHub operates from a 8,000 square foot facility with a team of 12 skilled craftsmen. We continue to serve hundreds of satisfied customers annually while maintaining our commitment to quality and customer satisfaction.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process-section-789e">
        <div class="container-max-456p">
            <h2 class="section-title-234l">Our Restoration Process</h2>
            <div class="process-steps-123r">
                <div class="step-card-456t">
                    <div class="step-number-789y">1</div>
                    <h3 class="card-title-456k">Initial Assessment</h3>
                    <p class="card-description-789s">We thoroughly examine your furniture piece, documenting all damage, wear patterns, and structural issues. This comprehensive evaluation helps us develop the most effective restoration plan.</p>
                </div>
                <div class="step-card-456t">
                    <div class="step-number-789y">2</div>
                    <h3 class="card-title-456k">Detailed Estimate</h3>
                    <p class="card-description-789s">Based on our assessment, we provide a detailed written estimate outlining all necessary repairs, materials needed, timeline, and associated costs. No hidden fees or surprise charges.</p>
                </div>
                <div class="step-card-456t">
                    <div class="step-number-789y">3</div>
                    <h3 class="card-title-456k">Disassembly & Preparation</h3>
                    <p class="card-description-789s">We carefully disassemble the furniture when necessary, removing old finishes, hardware, and damaged components. Each part is labeled and cataloged for proper reassembly.</p>
                </div>
                <div class="step-card-456t">
                    <div class="step-number-789y">4</div>
                    <h3 class="card-title-456k">Repair & Restoration</h3>
                    <p class="card-description-789s">Our skilled craftsmen perform all necessary repairs including joint reinforcement, wood replacement, hardware restoration, and structural improvements using traditional and modern techniques.</p>
                </div>
                <div class="step-card-456t">
                    <div class="step-number-789y">5</div>
                    <h3 class="card-title-456k">Finishing & Assembly</h3>
                    <p class="card-description-789s">We apply appropriate finishes, stains, or paints to match original specifications or customer preferences. The piece is then carefully reassembled with attention to every detail.</p>
                </div>
                <div class="step-card-456t">
                    <div class="step-number-789y">6</div>
                    <h3 class="card-title-456k">Quality Inspection</h3>
                    <p class="card-description-789s">Every completed piece undergoes rigorous quality inspection to ensure it meets our high standards. We test functionality, stability, and finish quality before customer delivery.</p>
                </div>
            </div>
            <div class="highlight-box-123t">
                <h3>Experience Our Meticulous Process</h3>
                <p>Each step is performed with precision and care to ensure your furniture receives the best possible restoration.</p>
                <a href="#specialties" class="continue-link-789s">Click Here to Continue Exploring Our Specialties</a>
            </div>
        </div>
    </section>

    <section id="specialties" class="specialties-section-789t">
        <div class="container-max-456p">
            <h2 class="section-title-234l">Our Areas of Expertise</h2>
            <div class="specialty-grid-123y">
                <div class="specialty-card-456u">
                    <h3 class="card-title-456k">Victorian Era Furniture</h3>
                    <p class="card-description-789s">Specialized restoration of Victorian period pieces including ornate carvings, intricate inlays, and period-appropriate finishes. We understand the unique construction methods and materials used during this era.</p>
                </div>
                <div class="specialty-card-456u">
                    <h3 class="card-title-456k">Mid-Century Modern</h3>
                    <p class="card-description-789s">Expert restoration of mid-century modern furniture with focus on clean lines, original hardware, and authentic finishes. We work with teak, walnut, and other period-specific materials.</p>
                </div>
                <div class="specialty-card-456u">
                    <h3 class="card-title-456k">Upholstery Restoration</h3>
                    <p class="card-description-789s">Complete upholstery services including fabric selection, pattern matching, spring repair, and padding replacement. We work with both traditional and contemporary upholstery techniques.</p>
                </div>
                <div class="specialty-card-456u">
                    <h3 class="card-title-456k">Wood Refinishing</h3>
                    <p class="card-description-789s">Expert wood refinishing using traditional hand-rubbed techniques and modern spray applications. We can match existing finishes or create completely new looks according to your preferences.</p>
                </div>
                <div class="specialty-card-456u">
                    <h3 class="card-title-456k">Structural Repairs</h3>
                                        <p class="card-description-789s">Comprehensive structural repairs including joint reinforcement, leg replacement, frame reconstruction, and stability improvements. We ensure your furniture is safe and functional for years to come.</p>
                </div>
                <div class="specialty-card-456u">
                    <h3 class="card-title-456k">Hardware Restoration</h3>
                    <p class="card-description-789s">Restoration and replacement of furniture hardware including hinges, handles, locks, and decorative elements. We can source period-appropriate hardware or create custom pieces when needed.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="equipment" class="equipment-section-456u">
        <div class="container-max-456p">
            <h2 class="section-title-234l">Professional Equipment & Tools</h2>
            <div class="equipment-grid-789v">
                <div class="equipment-card-123w">
                    <h3 class="card-title-456k">Precision Sanding Systems</h3>
                    <p class="card-description-789s">State-of-the-art orbital sanders, belt sanders, and detail sanders allow us to achieve smooth, even surfaces on all types of wood furniture. Our dust collection systems ensure a clean working environment.</p>
                </div>
                <div class="equipment-card-123w">
                    <h3 class="card-title-456k">Spray Booth Facility</h3>
                    <p class="card-description-789s">Professional spray booth with controlled temperature and humidity for applying lacquers, stains, and protective finishes. This ensures consistent, high-quality results with every application.</p>
                </div>
                <div class="equipment-card-123w">
                    <h3 class="card-title-456k">Woodworking Machinery</h3>
                    <p class="card-description-789s">Complete woodworking shop including table saws, jointers, planers, and routers for creating replacement parts and custom components. All machinery is regularly maintained for precision work.</p>
                </div>
                <div class="equipment-card-123w">
                    <h3 class="card-title-456k">Upholstery Tools</h3>
                    <p class="card-description-789s">Professional upholstery equipment including pneumatic staplers, fabric cutting tables, sewing machines, and specialized tools for spring repair and padding installation.</p>
                </div>
                <div class="equipment-card-123w">
                    <h3 class="card-title-456k">Clamps & Jigs</h3>
                    <p class="card-description-789s">Extensive collection of clamps, jigs, and fixtures for holding furniture pieces during repair and glue-up operations. Custom jigs are created for unique restoration challenges.</p>
                </div>
                <div class="equipment-card-123w">
                    <h3 class="card-title-456k">Hand Tools Collection</h3>
                    <p class="card-description-789s">Traditional hand tools including chisels, planes, scrapers, and carving tools for detailed work that requires the human touch. Many tools are vintage pieces maintained in perfect condition.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="materials" class="materials-section-456x">
        <div class="container-max-456p">
            <h2 class="section-title-234l">Quality Materials We Use</h2>
            <div class="materials-grid-789y">
                <div class="material-item-123z">
                    <h3 class="card-title-456k">Hardwood Lumber</h3>
                    <p class="card-description-789s">Premium hardwoods including oak, maple, cherry, walnut, and mahogany sourced from sustainable suppliers for replacement parts and repairs.</p>
                </div>
                <div class="material-item-123z">
                    <h3 class="card-title-456k">Wood Stains</h3>
                    <p class="card-description-789s">Professional-grade stains from leading manufacturers in hundreds of colors to match existing finishes or create new looks.</p>
                </div>
                <div class="material-item-123z">
                    <h3 class="card-title-456k">Protective Finishes</h3>
                    <p class="card-description-789s">High-quality lacquers, polyurethanes, shellacs, and waxes that provide long-lasting protection and beautiful appearance.</p>
                </div>
                <div class="material-item-123z">
                    <h3 class="card-title-456k">Upholstery Fabrics</h3>
                    <p class="card-description-789s">Wide selection of upholstery fabrics including natural fibers, synthetics, and specialty materials for all types of furniture.</p>
                </div>
                <div class="material-item-123z">
                    <h3 class="card-title-456k">Hardware Components</h3>
                    <p class="card-description-789s">Extensive inventory of furniture hardware including hinges, drawer slides, handles, and decorative elements in various styles and finishes.</p>
                </div>
                <div class="material-item-123z">
                    <h3 class="card-title-456k">Adhesives & Glues</h3>
                    <p class="card-description-789s">Professional woodworking adhesives including hide glue, PVA, epoxy, and specialty glues for different materials and applications.</p>
                </div>
                <div class="material-item-123z">
                    <h3 class="card-title-456k">Foam & Padding</h3>
                    <p class="card-description-789s">Various densities of foam, batting, and padding materials for cushion replacement and upholstery projects.</p>
                </div>
                <div class="material-item-123z">
                    <h3 class="card-title-456k">Springs & Webbing</h3>
                    <p class="card-description-789s">Traditional coil springs, zigzag springs, and webbing materials for proper seat and back support restoration.</p>
                </div>
            </div>
            <div class="highlight-box-123t">
                <h3>Quality Materials Make the Difference</h3>
                <p>We never compromise on material quality because we know it directly impacts the longevity and appearance of your restored furniture.</p>
                <a href="#testimonials" class="continue-link-789s">Click Here to Continue Reading Customer Reviews</a>
            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonials-section-123w">
        <div class="container-max-456p">
            <h2 class="section-title-234l">What Our Customers Say</h2>
            <div class="testimonial-grid-456q">
                <div class="testimonial-card-789z">
                    <p class="testimonial-text-123e">"MontiRaHub transformed my grandmother's antique dining table that had been damaged in storage. The attention to detail was incredible, and now it looks better than I remember from my childhood. The team really understands the sentimental value of family heirlooms."</p>
                    <p class="testimonial-author-456r">- Sarah Mitchell, Homeowner</p>
                </div>
                <div class="testimonial-card-789z">
                    <p class="testimonial-text-123e">"I brought in a mid-century modern chair that I found at an estate sale. It was in rough condition, but the craftsmen at MontiRaHub worked magic on it. The restoration maintained the original character while making it functional and beautiful again."</p>
                    <p class="testimonial-author-456r">- David Chen, Collector</p>
                </div>
                <div class="testimonial-card-789z">
                    <p class="testimonial-text-123e">"Our office furniture was looking tired and worn after years of use. MontiRaHub refinished our conference table and restored our executive chairs. The quality of work exceeded our expectations, and the turnaround time was very reasonable."</p>
                    <p class="testimonial-author-456r">- Jennifer Rodriguez, Business Owner</p>
                </div>
                <div class="testimonial-card-789z">
                    <p class="testimonial-text-123e">"The team at MontiRaHub repaired structural damage to our kitchen cabinets after a water leak. They matched the existing finish perfectly, and you can't even tell where the repairs were made. Professional service from start to finish."</p>
                    <p class="testimonial-author-456r">- Michael Thompson, Homeowner</p>
                </div>
                <div class="testimonial-card-789z">
                    <p class="testimonial-text-123e">"I was skeptical about restoring my old leather recliner, but MontiRaHub convinced me it was worth saving. They completely rebuilt the mechanism, reupholstered it beautifully, and now it's my favorite piece of furniture again."</p>
                    <p class="testimonial-author-456r">- Patricia Williams, Retiree</p>
                </div>
                <div class="testimonial-card-789z">
                    <p class="testimonial-text-123e">"As an interior designer, I've worked with many furniture restoration services, but MontiRaHub stands out for their craftsmanship and reliability. They understand the importance of deadlines and always deliver quality work on time."</p>
                    <p class="testimonial-author-456r">- Amanda Foster, Interior Designer</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section-789i">
        <div class="container-max-456p">
            <h2 class="section-title-234l">Get In Touch With Us</h2>
            <div class="contact-grid-123o">
                <div class="contact-info-456p">
                    <h3 class="card-title-456k">Contact Information</h3>
                    <div class="contact-item-789a">
                        <span class="contact-icon-123s">📍</span>
                        <div>
                            <strong>Address:</strong><br>
                            2847 Craftsman Boulevard<br>
                            Riverside, CA 92506
                        </div>
                    </div>
                    <div class="contact-item-789a">
                        <span class="contact-icon-123s">📞</span>
                        <div>
                            <strong>Phone:</strong><br>
                            <a href="tel:+19515558234" class="phone-link-456d">(951) 555-8234</a>
                        </div>
                    </div>
                    <div class="contact-item-789a">
                        <span class="contact-icon-123s">✉️</span>
                        <div>
                            <strong>Email:</strong><br>
                            info@montirahub.com
                        </div>
                    </div>
                    <div class="contact-item-789a">
                        <span class="contact-icon-123s">🕒</span>
                        <div>
                            <strong>Business Hours:</strong><br>
                            Monday - Friday: 8:00 AM - 6:00 PM<br>
                            Saturday: 9:00 AM - 4:00 PM<br>
                            Sunday: Closed
                        </div>
                    </div>
                </div>
                <div class="contact-info-456p">
                    <h3 class="card-title-456k">Service Areas</h3>
                    <p class="card-description-789s">We proudly serve customers throughout Riverside County and surrounding areas including:</p>
                    <ul style="margin: 1rem 0; padding-left: 2rem; line-height: 1.8;">
                        <li>Riverside and surrounding neighborhoods</li>
                        <li>Corona and Norco communities</li>
                        <li>Moreno Valley and Perris areas</li>
                        <li>Hemet and San Jacinto regions</li>
                        <li>Temecula and Murrieta districts</li>
                        <li>Palm Springs and Desert Cities</li>
                    </ul>
                    <p class="card-description-789s">We also offer pickup and delivery services for customers within a 50-mile radius of our workshop. Contact us to discuss your specific location and arrange convenient service options.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-main-789f">
        <div class="container-max-456p">
            <div class="footer-grid-123g">
                <div class="footer-section-456h">
                    <h3 class="footer-title-789j">MontiRaHub</h3>
                    <p class="footer-text-123k">Your trusted partner for professional furniture repair and restoration services. We combine traditional craftsmanship with modern techniques to bring your furniture back to life.</p>
                </div>
                <div class="footer-section-456h">
                    <h3 class="footer-title-789j">Quick Links</h3>
                    <p class="footer-text-123k">
                        <a href="#services" style="color: #bdc3c7; text-decoration: none;">Our Services</a><br>
                        <a href="#about" style="color: #bdc3c7; text-decoration: none;">About Us</a><br>
                        <a href="#process" style="color: #bdc3c7; text-decoration: none;">Repair Process</a><br>
                        <a href="#contact" style="color: #bdc3c7; text-decoration: none;">Contact Info</a>
                    </p>
                </div>
                <div class="footer-section-456h">
                    <h3 class="footer-title-789j">Contact Details</h3>
                    <p class="footer-text-123k">
                        2847 Craftsman Boulevard<br>
                        Riverside, CA 92506<br>
                        <a href="tel:+19515558234" class="phone-link-456d" style="color: #3498db;">(951) 555-8234</a><br>
                        info@montirahub.com
                    </p>
                </div>
                <div class="footer-section-456h">
                    <h3 class="footer-title-789j">Business Hours</h3>
                    <p class="footer-text-123k">
                        Monday - Friday: 8:00 AM - 6:00 PM<br>
                        Saturday: 9:00 AM - 4:00 PM<br>
                        Sunday: Closed<br>
                        Emergency repairs by appointment
                    </p>
                </div>
            </div>
            <div class="footer-bottom-456l">
                <p>© 2024 MontiRaHub. All rights reserved. | 
                <a href="#" onclick="openModal('privacy')" style="color: #3498db; text-decoration: none;">Privacy Policy</a> | 
                <a href="#" onclick="openModal('terms')" style="color: #3498db; text-decoration: none;">Terms of Service</a></p>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-789m">
        <div class="modal-content-123n">
            <div class="modal-header-456o">
                <h2 class="modal-title-789p">Privacy Policy</h2>
                <button class="close-button-123q" onclick="closeModal('privacy')">Close</button>
            </div>
            <div class="modal-text-456r">
                <h3>Information We Collect</h3>
                <p>MontiRaHub collects information you provide directly to us, such as when you request a quote, schedule a service, or contact us for information. This may include your name, address, phone number, email address, and details about your furniture repair needs.</p>
                
                <h3>How We Use Your Information</h3>
                <p>We use the information we collect to provide, maintain, and improve our furniture repair services, communicate with you about your projects, send you technical notices and support messages, and respond to your comments and questions.</p>
                
                <h3>Information Sharing</h3>
                <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share your information with trusted service providers who assist us in operating our business.</p>
                
                <h3>Data Security</h3>
                <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
                
                <h3>Contact Information</h3>
                <p>If you have questions about this Privacy Policy, please contact us at info@montirahub.com or call (951) 555-8234.</p>
                
                <p><em>Last updated: January 2024</em></p>
            </div>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-789m">
        <div class="modal-content-123n">
            <div class="modal-header-456o">
                <h2 class="modal-title-789p">Terms of Service</h2>
                <button class="close-button-123q" onclick="closeModal('terms')">Close</button>
            </div>
            <div class="modal-text-456r">
                <h3>Service Agreement</h3>
                <p>By engaging MontiRaHub for furniture repair services, you agree to these terms and conditions. Our services include furniture restoration, repair, refinishing, and related activities as described in your service agreement.</p>
                
                <h3>Estimates and Pricing</h3>
                <p>All estimates are provided free of charge and are valid for 30 days. Final pricing may vary based on actual conditions discovered during the repair process. We will notify you of any significant changes before proceeding.</p>
                
                <h3>Liability and Insurance</h3>
                <p>MontiRaHub carries comprehensive liability insurance for all work performed. Our liability is limited to the value of the furniture piece being repaired. We are not responsible for damage due to pre-existing conditions not disclosed during initial assessment.</p>
                
                <h3>Warranty</h3>
                <p>We provide a one-year warranty on all repair work performed, covering defects in workmanship and materials. This warranty does not cover normal wear and tear or damage caused by misuse.</p>
                
                <h3>Payment Terms</h3>
                <p>Payment is due upon completion of work unless other arrangements have been made in writing. We accept cash, check, and major credit cards. A storage fee may apply to items not picked up within 30 days of completion.</p>
                
                <h3>Dispute Resolution</h3>
                <p>Any disputes arising from our services will be resolved through binding arbitration in Riverside County, California, in accordance with the rules of the American Arbitration Association.</p>
                
                <p><em>Last updated: January 2024</em></p>
            </div>
        </div>
    </div>

    <script>
        function openModal(type) {
            document.getElementById(type + '-modal').style.display = 'block';
        }

        function closeModal(type) {
            document.getElementById(type + '-modal').style.display = 'none';
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-overlay-789m')) {
                event.target.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to service cards
            const serviceCards = document.querySelectorAll('.service-card-891h');
            serviceCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                    this.style.boxShadow = '0 15px 35px rgba(0,0,0,0.2)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = '0 5px 20px rgba(0,0,0,0.1)';
                });
            });

            // Add click tracking for continue buttons
            const continueButtons = document.querySelectorAll('.continue-link-789s');
            continueButtons.forEach(button => {
                button.addEventListener('click', function() {
                    console.log('Continue button clicked:', this.textContent);
                });
            });
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>





