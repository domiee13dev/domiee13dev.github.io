<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Photo Contest</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rancho&family=Satisfy&display=swap" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" integrity="sha512-oHDEc8Xed4hiW6CxD7qjbnI+B07vDdX7hEPTvn9pSZO1bcRqHp8mj9pyr+8RVC2GmtEfI2Bi9Ke9Ass0as+zpg==" crossorigin="anonymous" /> -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  
</head>
<body>
  <!-- Header  -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
      <div class="container-fluid ">
        <a id="logo" class="navbar-brand" href="#">Photo Contest</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#topimg">Top images</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Leader board</a>
            </li>
            <li class="nav-item">
              <a href="./login.php" class="btn btn-primary mx-2">Login</a>
            </li>
            <li class="nav-item">
            <a href="./signup.php" class="btn btn-success">Register</a>
              
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
  </header>
  <!-- Main  -->
  <main class="w-100">
   
    <!-- Cover img  -->
    <div id="cover">
      <div id="hover-img">
        <section class="py-5 text-center container">
          <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
              <h1 class="fw-light text-light">Welcome to 2021 Photo contest</h1>
              <p class="lead text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, labore molestiae sed assumenda autem aliquam cum quidem eum temporibus quo minima quia quis veritatis laboriosam eaque unde exercitationem corrupti quod.</p>
              <p>
                <!-- <a href="#register" class="btn btn-primary my-2">Register</a> -->
                <a href="#about" class="btn btn-success my-2">Read more</a>
              </p>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- about -->
      <div id="about" class="bg-dark text-light pt-3 pb-5">
        <div class="row mb-3">
          <h2 class="text-center mt-2 font-spec">About contest</h2>
        </div>
        <div class="container">
          <article class="about-section">
            <section class=" about-img">
                <img src="./assets/img/about1.jpg" class="img-fluid" alt="...">
                <!-- <img src="./assets/img/about2.jpg" class="img-fluid" alt="..."> -->
            </section>
            <section class="about-text">
              <h2 class="text-end fw-medium">2021 Photo contest</h2>
              <p class="lead text-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, mollitia voluptatibus. Maiores, nesciunt? Unde architecto itaque quas voluptas officiis molestias soluta iste cumque maiores delectus velit dolorum, eius sed repellat.
              Cumque explicabo commodi, sapiente, ducimus ea in cum distinctio quo rerum dolores omnis? Atque odit illo vel voluptatum necessitatibus officia culpa accusamus ipsum soluta, tempora facilis totam neque. Iste, unde.</p>
            </section>
          </article>
        </div>
      </div>
  
    <!-- Gallery -->
    <div class="gallery" id="topimg">

      <div class="row mt-4">
        <h2 class="text-center fw-light fs-1 font-spec" >Top images</h2>
      </div>
      <article>

        <section>
          <div class="images">
            <img src="https://images.unsplash.com/photo-1617289634204-5a68c91f52c6?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3fHx8ZW58MHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60">
          </div>
        </section>
      
        <section>
          <div class="images">
            <img src="https://images.unsplash.com/photo-1617170788707-cb77c179d7c3?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxNXx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60">
          </div>
        </section>
        
        <section>
          <div class="images">
            <img src="https://images.unsplash.com/photo-1617252820859-00a22c77ec0c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80">
          </div>
        </section>
        
        <section>
          <div class="images">
            <img src="https://images.unsplash.com/photo-1567893170019-ae7b81788d31?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE1fHx8ZW58MHx8fA%3D%3D&auto=format&fit=crop&w=800&q=60">
          </div>
        </section>
      
        <section>
          <div class="images">
            <img src="https://images.unsplash.com/photo-1430505046445-10ec3b96acf0?ixid=MXwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MTJ8MzE5NjYzfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60">
          </div>
        </section>
      
        <section>
          <div class="images">
            <img src="https://images.unsplash.com/photo-1482938289607-e9573fc25ebb?ixid=MXwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MTR8MzE5NjYzfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60">
          </div>
        </section>
      
        <section>
          <div class="images">
            <img src="https://images.unsplash.com/photo-1475767239063-103c472f2c63?ixid=MXwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8OHwzMTk2NjN8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60">
          </div>
        </section>
        
        <section>
          <div class="images">
            <img src="https://images.unsplash.com/photo-1476362555312-ab9e108a0b7e?ixid=MXwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MzF8MzE5NjYzfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60">
          </div>
        </section>
      
        <section>
          <div class="images">
            <img src="https://images.unsplash.com/photo-1469450888742-f0412399db52?ixid=MXwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8Mzd8MzE5NjYzfHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60g">
          </div>
        </section>
      
        <section>
          <div class="images">
            <img src="https://images.unsplash.com/photo-1617167091802-36a28503255a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=556&q=80">
          </div>
        </section>
      
        <section>
          <div class="images">
            <img src="https://images.unsplash.com/photo-1617083309778-ff8bac550ad7?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=699&q=80">
          </div>
        </section>
      
        <section>
          <div class="images">
            <img src="https://images.unsplash.com/photo-1617234501719-d9e36a1adfac?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1350&q=80">
          </div>
        </section>
      
        <section>
          <div class="images">
            <img src="https://images.unsplash.com/photo-1617246405400-462cb1ab98ab?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=644&q=80">
          </div>
        </section>
      
        <section>
          <div class="images">
            <img src="https://images.unsplash.com/photo-1612738072307-3a48bbc7fd80?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDEzfHx8ZW58MHx8fA%3D%3D&auto=format&fit=crop&w=700&q=60">
          </div>
        </section>
      
        <section>
          <div class="images">
            <img src="https://images.unsplash.com/photo-1617287287784-7e6b90c6cfd7?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1268&q=80">
          </div>
        </section>

        <section>
          <div class="images">
            <img src="https://images.unsplash.com/photo-1617286647343-b1af22dd6327?ixid=MXwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3N3x8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60">
          </div>
        </section>
      </article>
    </div>
  
    <!-- Register -->
    <!-- <div id="register" class="bg-dark text-light pt-3">
      <h2 class="text-center mt-2 font-spec">Register</h2>
      <p class="fst-italic text-center lead">Join the Contest & Win Amazing Prizes</p>

      <div class="container">         
          <article class="row">
            <section class="col">
              <form>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Full name</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your full name" required>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Phone number</label>
                  <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Your phone number" required>
                </div>
                <div class="mb-3">
                  <label for="formFile" class="form-label">Default file input example</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="d-flex flex-row-reverse">
                  <button type="submit" class="btn btn-outline-success btn-lg ms-auto">Register</button>
                </div>
              </form>
            </section>
            
          </div>
    </div> -->

    <!-- Contact -->
    <div id="contact" class="bg-dark text-light pt-3">
      <h2 class="text-center mt-2 font-spec">Contact</h2>
      <p class="fst-italic text-center lead">Email us if you need any further information!</p>

      <div class="container">         
          <article class="row">
            <section class="col">
              <ul class="contact-info">
                <li>Ha Noi, Viet Nam</li>
                <li>Phone Number: <a href="tel:+000666">+000666</a></li>
                <li>Mail: <a href="mailto:example@mail.com">example@mail.com</a></li>
              </ul>
            </section>
            <section class="col">
              <form>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="d-flex flex-row-reverse">
                  <button type="submit" class="btn btn-outline-primary btn-lg ms-auto">SEND</button>
                </div>
              </form>
            </section>
            
          </div>
      </div>
    </div>

  </main>

  <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>