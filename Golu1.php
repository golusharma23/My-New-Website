<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Swifnix Technologies</title>

    <!-- Bootstrap CSS (Bootstrap Docs -> Getting Started -> Introduction) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Simple Custom CSS -->
    <style>
      .card img {
        height: 250px;
        object-fit: cover;
      }
      .profile-pic {
        width: 180px;
        height: 180px;
        object-fit: cover;
      }
    </style>
  </head>
  <body class="p-3">

    <!-- Navbar (Bootstrap Docs -> Components -> Navbar) -->
    <nav class="navbar sm:navbar-expand bg-1 fg-2 mb-4" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Swifnix Technologies</a>

        <!-- Tabs Menu (Bootstrap Docs -> Components -> Navs & Tabs) -->
        <ul class="navbar-nav" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab">Home</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab">About</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="services-tab" data-bs-toggle="tab" data-bs-target="#services" type="button" role="tab">Services</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab">Profile</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab">Contact</button>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main Container (Bootstrap Docs -> Layout -> Containers) -->
    <div class="container">
      <h1 class="mb-1">Swifnix Technologies</h1>
      <p class="mb-4">Welcome to our official website</p>

      <!-- Tab Content (Bootstrap Docs -> Components -> Tab) -->
      <div class="tab-content">

        <!-- 1. HOME TAB -->
        <div class="tab-pane fade show active" id="home" role="tabpanel">
          <!-- Grid & Cards (Bootstrap Docs -> Layout -> Grid & Components -> Card) -->
          <div class="row">
            <div class="sm:col-6 mb-3">
              <div class="card">
                <img src="image/1.jfif" class="card-img-top" alt="Technology">
                <div class="card-body">
                  <h4 class="card-title">Technology</h4>
                  <p class="card-text">We build modern websites and software solutions for businesses.</p>
                  <button class="btn-solid theme-primary" onclick="openTab('services-tab')">View Services</button>
                </div>
              </div>
            </div>

            <div class="sm:col-6 mb-3">
              <div class="card">
                <img src="image/2.jfif" class="card-img-top" alt="Computer">
                <div class="card-body">
                  <h4 class="card-title">Computer & Web</h4>
                  <p class="card-text">Responsive web design, app design, and SEO services.</p>
                  <button class="btn-solid theme-primary" onclick="openTab('contact-tab')">Contact Us</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 2. ABOUT TAB -->
        <div class="tab-pane fade" id="about" role="tabpanel">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">About Swifnix Technologies</h3>
              <p class="card-text mt-3">
                We at Swifnix Technologies work hard to be at the forefront of design, innovation, development, and technology to keep our competitive advantage.
              </p>
              <p><strong>Mr. Sumit / CEO</strong></p>

              <h4 class="mt-4">Our Mission</h4>
              <p class="card-text">
                A distinct vision that serves as the foundation for all of our decisions defines the purpose of our business. When creating solutions that satisfy the demands of our clients, we put quality and economy first. Our objective is to become the top supplier of website design and mobile app design services while also fostering the expansion of our clients via creative development. Additionally, we provide accessible SEO services and cutting-edge software programmes that help businesses of all sizes realise their full potential.
              </p>
            </div>
          </div>
        </div>

        <!-- 3. SERVICES TAB -->
        <div class="tab-pane fade" id="services" role="tabpanel">
          <h3 class="mb-3">Our Services</h3>
          <div class="row">
            <div class="sm:col-6 mb-3">
              <div class="card">
                <img src="image/1.jfif" class="card-img-top" alt="Web Design">
                <div class="card-body">
                  <h4 class="card-title">Website & App Design</h4>
                  <p class="card-text">Clean and responsive website design and mobile app development.</p>
                </div>
              </div>
            </div>

            <div class="sm:col-6 mb-3">
              <div class="card">
                <img src="image/2.jfif" class="card-img-top" alt="SEO & Software">
                <div class="card-body">
                  <h4 class="card-title">SEO & Software Programmes</h4>
                  <p class="card-text">Affordable SEO services and custom software for business growth.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 4. PROFILE TAB -->
        <div class="tab-pane fade" id="profile" role="tabpanel">
          <div class="card" style="max-width: 500px;">
            <div class="card-body">
              <h3 class="card-title mb-3">Profile</h3>
              <img src="image/photo.jpg" class="rounded profile-pic mb-3" alt="Golu Sharma">

              <!-- List Group (Bootstrap Docs -> Components -> List group) -->
              <ul class="list-group">
                <li class="list-group-item"><strong>Name:</strong> Golu Sharma</li>
                <li class="list-group-item"><strong>Company:</strong> Swifnix Technologies</li>
                <li class="list-group-item"><strong>Skills:</strong> HTML, CSS, Bootstrap, JavaScript</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- 5. CONTACT TAB -->
        <div class="tab-pane fade" id="contact" role="tabpanel">
          <div class="card" style="max-width: 550px;">
            <div class="card-body">
              <h3 class="card-title mb-3">Contact Us</h3>

              <!-- Form Control (Bootstrap Docs -> Forms -> Form control) -->
              <form onsubmit="showMessage(event)">
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" id="userName" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Message</label>
                  <textarea class="form-control" rows="3" placeholder="Your message" required></textarea>
                </div>
                <button type="submit" class="btn-solid theme-primary">Send</button>
              </form>

              <p id="msgBox" class="mt-3 fw-bold"></p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Simple Footer -->
    <footer class="text-center border-top mt-5 pt-3">
      <p class="small">© 2026 Swifnix Technologies | Created by Golu Sharma</p>
    </footer>

    <!-- Bootstrap JS (Bootstrap Docs -> Getting Started -> Introduction) -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Simple Beginner JavaScript -->
    <script>
      function openTab(tabId) {
        document.getElementById(tabId).click();
      }

      function showMessage(e) {
        e.preventDefault();
        var name = document.getElementById("userName").value;
        document.getElementById("msgBox").innerText = "Thank you " + name + ", your message has been sent!";
      }
    </script>

  </body>
</html>