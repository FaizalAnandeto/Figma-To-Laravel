<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        :root {
    --primary-color: #4CAF50;
    --secondary-color: #8692A6;
    --text-color: #333333;
    --background-color: #FFFFFF;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    color: var(--text-color);
    background-color: var(--background-color);
}

header {
    background-color: var(--background-color);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 5%;
}

.logo {
    font-weight: bold;
    font-size: 1.5rem;
    color: var(--primary-color);
}

nav ul {
    display: flex;
    list-style-type: none;
}

nav ul li {
    margin-right: 1.5rem;
}

nav ul li a {
    text-decoration: none;
    color: var(--secondary-color);
}

.cta-button {
    background-color: var(--primary-color);
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    cursor: pointer;
}

main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem 5%;
}

.hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 4rem;
}

.hero h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.hero h1 span {
    color: var(--primary-color);
}

.clients, .features, .cta-section, .stats, .blog-preview, .testimonials, .final-cta {
    margin-bottom: 4rem;
}

h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.feature-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}
  
  
  .logo {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }
  
  .logo img {
    width: 30px;
    height: 30px;
    margin-right: 10px;
  }
  
  .logo span {
    font-size: 24px;
    font-weight: bold;
  }
  
  .social-icons {
    display: flex;
    gap: 15px;
    margin-top: 20px;
  }
  
  .social-icons a {
    color: #ffffff;
    font-size: 20px;
  }
  
  
  .subscribe-form {
    display: flex;
    background-color: #37474F;
    border-radius: 4px;
    overflow: hidden;
  }
  
  .subscribe-form input {
    flex-grow: 1;
    border: none;
    background-color: transparent;
    padding: 10px 15px;
    color: #ffffff;
  }
  
  .subscribe-form input::placeholder {
    color: #9E9E9E;
  }
  
  .subscribe-form button {
    background-color: transparent;
    border: none;
    color: #ffffff;
    padding: 10px 15px;
    cursor: pointer;
  }

  .clients-section, .community-section {
    text-align: center;
    padding: 50px 0;
    max-width: 1200px;
    margin: 0 auto;
  }
  
  h2 {
    font-size: 36px;
    color: #4D4D4D;
    margin-bottom: 10px;
  }
  
  p {
    font-size: 16px;
    color: #717171;
    margin-bottom: 30px;
  }
  
  .client-logos {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
  }
  
  .client-logos img {
    max-width: 120px;
    height: auto;
    margin: 10px;
  }
  
  .feature-grid {
    display: flex;
    justify-content: space-between;
    margin-top: 50px;
  }
  
  .feature-item {
    flex-basis: 30%;
    text-align: center;
  }
  
  .feature-item img {
    width: 60px;
    height: 60px;
    margin-bottom: 20px;
  }
  
  .feature-item h3 {
    font-size: 24px;
    color: #4D4D4D;
    margin-bottom: 15px;
  }
  
  .feature-item p {
    font-size: 14px;
    color: #717171;
  }

  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
  }
  
  .container {
    display: flex;
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
    background-color: white;
  }
  
  .image-container {
    flex: 1;
    padding-right: 40px;
  }
  
  .image-container img {
    max-width: 100%;
    height: auto;
  }
  
  .content {
    flex: 1;
  }
  
  h1 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
  }
  
  p {
    font-size: 16px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
  }
  
  .learn-more {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
  }
  
  .learn-more:hover {
    background-color: #45a049;
  }

  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
  }
  
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }
  
  .content {
    flex: 1;
    padding-right: 40px;
  }
  
  h1 {
    font-size: 48px;
    color: #333;
    margin-bottom: 20px;
  }
  
  .highlight {
    color: #4CAF50;
  }
  
  p {
    font-size: 18px;
    color: #666;
    margin-bottom: 30px;
  }
  
  .register-btn {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 12px 24px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 4px;
  }
  
  .illustration {
    flex: 1;
    text-align: right;
  }
  
  .illustration img {
    max-width: 100%;
    height: auto;
  }
  
  .pagination {
    width: 100%;
    text-align: center;
    margin-top: 20px;
  }
  
  .pagination span {
    display: inline-block;
    width: 10px;
    height: 10px;
    background-color: #ccc;
    border-radius: 50%;
    margin: 0 5px;
  }
  
  .pagination span.active {
    background-color: #4CAF50;
  }

  body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    margin: 0;
    padding: 0;
  }
  
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
  }
  
  .content {
    flex: 0 0 40%;
  }
  
  h1 {
    font-size: 36px;
    color: #333;
    margin-bottom: 10px;
    line-height: 1.2;
  }
  
  .highlight {
    color: #4CAF50;
  }
  
  p {
    font-size: 16px;
    color: #666;
    margin-top: 0;
  }
  
  .stats-container {
    flex: 0 0 55%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  
  .stat-item {
    flex: 0 0 48%;
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }
  
  .stat-item img {
    width: 40px;
    height: 40px;
    margin-right: 15px;
  }
  
  .stat-info h2 {
    font-size: 24px;
    color: #333;
    margin: 0;
  }
  
  .stat-info p {
    font-size: 14px;
    color: #666;
    margin: 5px 0 0;
  }
  
  @media (max-width: 768px) {
    .container {
      flex-direction: column;
    }
    
    .content, .stats-container {
      flex: 0 0 100%;
    }
    
    .stats-container {
      margin-top: 30px;
    }
  }

  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
  }
  
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
    display: flex;
    align-items: center;
    gap: 40px;
  }
  
  .illustration {
    flex: 1;
    max-width: 50%;
  }
  
  .illustration img {
    width: 100%;
    height: auto;
  }
  
  .content {
    flex: 1;
  }
  
  h1 {
    font-size: 32px;
    color: #333;
    margin-bottom: 20px;
  }
  
  p {
    font-size: 16px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
  }
  
  .learn-more {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 12px 24px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s ease;
  }
  
  .learn-more:hover {
    background-color: #45a049;
  }
  
  @media (max-width: 768px) {
    .container {
      flex-direction: column;
    }
    
    .illustration {
      max-width: 100%;
    }
  }

  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
  }
  
  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 40px 20px;
  }
  
  .testimonial {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  }
  
  .testimonial-text {
    font-size: 16px;
    line-height: 1.6;
    color: #333;
    margin-bottom: 20px;
  }
  
  .author-name {
    font-size: 18px;
    color: #4CAF50;
    margin: 0 0 5px 0;
  }
  
  .author-title {
    font-size: 14px;
    color: #666;
    margin: 0;
  }
  
  .logos {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    margin-top: 20px;
    margin-bottom: 20px;
  }
  
  .logos img {
    height: 30px;
    margin-right: 15px;
  }
  
  .cta-link {
    display: inline-block;
    color: #4CAF50;
    text-decoration: none;
    font-weight: bold;
    font-size: 16px;
  }
  
  .cta-link:hover {
    text-decoration: underline;
  }

  body {
    font-family: Arial, sans-serif;
    background-color: #ffffff;
    margin: 0;
    padding: 0;
  }
  
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 20px;
    text-align: center;
  }
  
  h1 {
    font-size: 48px;
    color: #333;
    margin-bottom: 20px;
  }
  
  .subtitle {
    font-size: 18px;
    color: #666;
    max-width: 800px;
    margin: 0 auto 80px;
    line-height: 1.6;
  }
  
  .card-container {
    display: flex;
    justify-content: space-between;
    gap: 30px;
  }
  
  .card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    padding: 30px;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: left;
  }
  
  .card h2 {
    font-size: 20px;
    color: #333;
    margin-bottom: 20px;
  }
  
  .read-more {
    color: #4CAF50;
    text-decoration: none;
    font-weight: bold;
    display: inline-block;
  }
  
  .read-more:hover {
    text-decoration: underline;
  }
  
  @media (max-width: 768px) {
    .card-container {
      flex-direction: column;
    }
  }

  footer {
    display: flex;
    position: relative;
    top: 21rem;
    justify-content: space-around;
    background-color: #263238;
    color: white;
    font-family: "Roboto", sans-serif;
}

.tgh {
    display: flex;
}

.pp > h1{
    position: relative;
    left: 3rem;
    bottom: 2rem;
    color: #f0f0f0;
}

.pp > img {
    position: relative;
    top: 1.3rem;
}

.bs1 {
    list-style: none;
    text-decoration: none;
    position: relative;
    right: 2rem;
}

.bs2 {
    list-style-type: none;
    text-decoration: none;
    position: relative;
    right: 2rem;
}

.krr >input {
    border-radius: 0.4rem;
    height: 1.3rem;
    border: none;
    background-color: rgb(32, 32, 32);
    color: white;
}
    </style>
</head>
<body>
    <header>
        <nav>
          <img src="gmbr/Icon.png" alt="">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
            <button class="cta-button">Get Started</button>
        </nav>
    </header>

    <main>
        <section class="hero">
          <div class="container">
            <div class="content">
              <h1>Lessons and insights <span class="highlight">from 8 years</span></h1>
              <p>Where to grow your business as a photographer: site or social media?</p>
              <button class="register-btn">Register</button>
            </div>
            <div class="illustration">
              <img src="gmbr/Illustration.png" alt="Illustration of a person working on a computer">
            </div>
            <div class="pagination">
              <span class="active"></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </section>

        <section class="clients">
            <section class="clients-section">
                <h2>Our Clients</h2>
                <p>We have been working with some Fortune 500+ clients</p>
                <div class="client-logos">
                  <!-- Replace with actual client logos -->
                  <img src="gmbr/Logo.png" alt="Client 1">
                  <img src="gmbr/Logo-1.png" alt="Client 2">
                  <img src="gmbr/Logo-2.png" alt="Client 3">
                  <img src="gmbr/Logo-3.png" alt="Client 4">
                  <img src="gmbr/Logo-4.png" alt="Client 5">
                  <img src="gmbr/Logo-5.png" alt="Client 6">
                  <img src="gmbr/Logo-6.png" alt="Client 7">
                </div>
              </section>
              
              <section class="community-section">
                <h2>Manage your entire community in a single system</h2>
                <p>Who is Nextcent suitable for?</p>
                
                <div class="feature-grid">
                  <div class="feature-item">
                    <img src="gmbr/Iconn (1).png" alt="Membership Organizations">
                    <h3>Membership Organisations</h3>
                    <p>Our membership management software provides full automation of membership renewals and payments</p>
                  </div>
                  <div class="feature-item">
                    <img src="gmbr/Iconn (2).png" alt="National Associations">
                    <h3>National Associations</h3>
                    <p>Our membership management software provides full automation of membership renewals and payments</p>
                  </div>
                  <div class="feature-item">
                    <img src="gmbr/Iconn (3).png" alt="Clubs and Groups">
                    <h3>Clubs And Groups</h3>
                    <p>Our membership management software provides full automation of membership renewals and payments</p>
                  </div>
                </div>
              </section>
        </section>

        <section class="features">
            <h2>Manage your entire community in a single system</h2>
            <div class="feature-grid">
                
            </div>
            <div class="container">
              <div class="image-container">
                <img src="gmbr\rafiki.png" alt="People interacting with a large screen">
              </div>
              <div class="content">
                <h1>The unseen of spending three years at Pixelgrade</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet turpis ipsum. Sed accumsan quam vitae est varius fringilla. Pellentesque placerat vestibulum lorem sed porta. Nullam mattis tristique quam. Nullam pulvinar sit amet nisi pretium auctor. Etiam orci massa, accumsan quis ex et, consectetur feugiat nunc. Donec elementum purus odio.</p>
                <button class="learn-more">Learn More</button>
              </div>
            </div>
        </section>

        <section class="cta-section">
          <div class="container">
            <div class="content">
              <h1>Helping a local<br><span class="highlight">business reinvent itself</span></h1>
              <p>We reached here with our hard work and dedication</p>
            </div>
            <div class="stats-container">
              <div class="stat-item">
                <img src="gmbr/durong.png" alt="Members icon">
                <div class="stat-info">
                  <h2>2,245,341</h2>
                  <p>Members</p>
                </div>
              </div>
              <div class="stat-item">
                <img src="gmbr/Icon-1.png" alt="Clubs icon">
                <div class="stat-info">
                  <h2>46,328</h2>
                  <p>Clubs</p>
                </div>
              </div>
              <div class="stat-item">
                <img src="gmbr/Icon-2.png" alt="Event Bookings icon">
                <div class="stat-info">
                  <h2>828,867</h2>
                  <p>Event Bookings</p>
                </div>
              </div>
              <div class="stat-item">
                <img src="gmbr/Icon-3.png" alt="Payments icon">
                <div class="stat-info">
                  <h2>1,926,436</h2>
                  <p>Payments</p>
                </div>
              </div>
            </div>
          </div>
            <div class="cta-image">
                <!-- Add CTA image here -->
            </div>
        </section>

        <section class="stats">
            <!-- Add stats here -->
        </section>

        <section class="blog-preview">
          <div class="container">
            <div class="illustration">
              <img src="gmbr/pana.png" alt="Woman interacting with a secure phone">
            </div>
            <div class="content">
              <h1>How to design your site footer like we did</h1>
              <p>Donec a eros justo. Fusce egestas tristique ultrices. Nam tempor, augue nec tincidunt molestie, massa nunc varius arcu, at scelerisque elit erat a magna. Donec quis erat at libero ultrices mollis. In hac habitasse platea dictumst. Vivamus vehicula leo dui, at porta nisi facilisis finibus. In euismod augue vitae nisi ultrices, non aliquet urna tincidunt. Integer in nisi eget nulla commodo faucibus efficitur quis massa. Praesent felis est, finibus et nisi ac, hendrerit venenatis libero. Donec consectetur faucibus ipsum id gravida.</p>
              <button class="learn-more">Learn More</button>
            </div>
          </div>
            <div class="blog-image">
                <!-- Add blog preview image here -->
            </div>
        </section>

        <section class="testimonials">
            <!-- Add testimonial cards here -->
        </section>

        <section class="final-cta">
          <div class="container">
            <div class="testimonial">
              <p class="testimonial-text">
                Maecenas dignissim justo eget nulla rutrum molestie. Maecenas lobortis sem dui, vel rutrum risus tincidunt ullamcorper. Proin eu enim metus. Vivamus sed libero ornare, tristique quam in, gravida enim. Nullam ut molestie arcu, at hendrerit elit. Morbi laoreet elit at ligula molestie, nec molestie mi blandit. Suspendisse cursus tellus sed augue ultrices, quis tristique nulla sodales. Suspendisse eget lorem eu turpis vestibulum pretium. Suspendisse potenti. Quisque malesuada enim sapien, vitae placerat ante feugiat eget. Quisque vulputate odio neque, eget efficitur libero condimentum id. Curabitur id nibh id sem dignissim finibus ac sit amet magna.
              </p>
              <div class="author">
                <h3 class="author-name">Tim Smith</h3>
                <p class="author-title">British Dragon Boat Racing Association</p>
              </div>
              <div class="logos">
                <img src="gmbr/image 9.png" alt="Client 1">
                  <img src="gmbr/Logo-1.png" alt="Client 2">
                  <img src="gmbr/Logo-2.png" alt="Client 3">
                  <img src="gmbr/Logo-3.png" alt="Client 4">
                  <img src="gmbr/Logo-4.png" alt="Client 5">
                  <img src="gmbr/Logo-5.png" alt="Client 6">
                  <img src="gmbr/Logo-6.png" alt="Client 7">
              </div>
              <a href="#" class="cta-link">Meet all customers →</a>
            </div>
          </div>
        </section>
        <div class="container">
          <h1>Caring is the new marketing</h1>
          <p class="subtitle">The Nexcent blog is the best place to read about the latest membership insights, trends and more. See who's joining the community, read about how our community are increasing their membership income and lot's more.</p>
          
          <div class="card-container">
            <div class="card">
              <h2>Creating Streamlined Safeguarding Processes with OneRen</h2>
              <a href="#" class="read-more">Readmore →</a>
            </div>
            <div class="card">
              <h2>What are your safeguarding responsibilities and how can you manage them?</h2>
              <a href="#" class="read-more">Readmore →</a>
            </div>
            <div class="card">
              <h2>Revamping the Membership Model with Triathlon Australia</h2>
              <a href="#" class="read-more">Readmore →</a>
            </div>
          </div>
        </div>
        
    </main>

    <footer>
        <div class="knn">
            <div class="pp">
            <img src="gmbr/Icon.png" alt=""> <h1>Nexcent</h1>
            </div>
            <p>Copyright © 2020 Nexcent ltd.<br>All rights reserved</p>
        </div>
        <div class="tgh">
            <div class="deret1">
            <h3>Company</h3>
            <ul class="bs1">
                <li>About us</li>
                <li>Blog</li>
                <li>Contact us</li>
                <li>Pricing</li>
                <li>Testimonials</li>
            </ul>
            </div>
            <div class="deret2">
            <h3>Supoort</h3>
            <ul class="bs2">
                <li>Help center</li>
                <li>Terms of Service</li>
                <li>Legal</li>
                <li>Privacy policy</li>
                <li>Status</li> 
            </ul>
            </div>
        </div>
        <div class="krr">
            <h3>Stay up to date</h3>
            <input type="text" placeholder="Your email address">
        </div>
    </footer>
</body>
</html>