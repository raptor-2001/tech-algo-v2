<style>
.navbar .nav-link{
  font-size: 14px;
  text-transform: uppercase;
  padding-left: 1rem !important;
  padding-right: 1rem !important;
}

.navbar .nav-item.active{
  border-left: 4px solid #444;
}

.carousel-item{
  height: 450px;
  background-color: black;
}

.carousel-image-1{
  background: url('/img/showcasebg.jpg');
  background-size: cover;
}
.carousel-image-2{
  background: url('/img/showcasebg.jpg');
  background-size: cover;
}
.carousel-image-3{
  background: url('/img/showcasebg.jpg');
  background-size: cover;
}

#home-heading{
  position: relative;
  min-height: 200px;
  background: url(/img/lights.jpg);
  background-attachment: fixed ;
  background-repeat: no-repeat;
  text-align: center;
  color: #fff;
}

.dark-overlay{
  position: absolute;
  top:0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7);
}
#showcase{
  background-color: blueviolet;
}

</style>
  <!-- SHOWCASE SLIDER -->
  <section id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-image-1 active">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3">Join Us</h1>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam tempora accusamus maxime amet? Ullam nesciunt nulla unde minima in. Corporis?</p>
              <a href="#" class="btn btn-danger btn-lg">Sign Up Now</a>
            </div>
          </div>
        </div>
        <div class="carousel-item carousel-image-2">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block mb-5">
              <h1 class="display-3">Algorithms</h1>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam tempora accusamus maxime amet? Ullam nesciunt nulla unde minima in. Corporis?</p>
              <a href="#" class="btn btn-primary btn-lg">Learn More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item carousel-image-3">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3">Technologies</h1>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam tempora accusamus maxime amet? Ullam nesciunt nulla unde minima in. Corporis?</p>
              <a href="#" class="btn btn-success btn-lg">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <a href="#myCarousel" data-slide-to="prev" class="carousel-control-prev"><span class="carousel-control-prev-icon"></span></a>
      <a href="#myCarousel" data-slide-to="next" class="carousel-control-next"><span class="carousel-control-next-icon"></span></a>
    </div>
  </section>

  <!-- BOXES -->
  <section id="boxes" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="card text-center border-primary mb-resp">
            <div class="card-body">
              <div class="text-primary">Be Better</div>
              <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, laborum.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-resp">
            <div class="card-body">
              <div>Be Smarter</div>
              <p class="text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, laborum.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center border-primary mb-resp">
            <div class="card-body">
              <div class="text-primary">Be Faster</div>
              <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, laborum.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white">
            <div class="card-body">
              <div>Be Stronger</div>
              <p class="text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, laborum.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT / WHY SECTION  -->
  <section id="about" class="py-5 text-center bg-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-primary pb-3">
              About This Website
            </h1>
            <p class="lead pb-3">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis aspernatur vel fugiat officia aperiam perspiciatis.
            </p>
          </div>

          <!-- ACCORDION -->
          <div id="accordion">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <div href="#collapse1" data-toggle="collapse" data-parent="#accordian">
                    <i class="fas fa-arrow-circle-down"></i>Get Inspired
                  </div>
                </h5>
              </div>

              <div id="collapse1" class="collapse">
                <div class="card-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos unde asperiores dignissimos error aperiam, exercitationem perferendis voluptatum, ea harum enim modi corrupti illum? Fugit rem quisquam quaerat magni iure enim inventore accusamus, accusantium odio velit ex saepe natus similique perferendis ipsa, repudiandae error eligendi incidunt tempore doloribus dignissimos eius?
                </div>
              </div>

              <div id="collapse1" class="collapse">
                <div class="card-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos unde asperiores dignissimos error aperiam, exercitationem perferendis voluptatum, ea harum enim modi corrupti illum? Fugit rem quisquam quaerat magni iure enim inventore accusamus, accusantium odio velit ex saepe natus similique perferendis ipsa, repudiandae error eligendi incidunt tempore doloribus dignissimos eius?
                </div>
              </div>


            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <div href="#collapse2" data-toggle="collapse" data-parent="#accordian">
                    <i class="fas fa-arrow-circle-down"></i>Gain Knowledge
                  </div>
                </h5>
              </div>

              <div id="collapse2" class="collapse ">
                <div class="card-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos unde asperiores dignissimos error aperiam, exercitationem perferendis voluptatum, ea harum enim modi corrupti illum? Fugit rem quisquam quaerat magni iure enim inventore accusamus, accusantium odio velit ex saepe natus similique perferendis ipsa, repudiandae error eligendi incidunt tempore doloribus dignissimos eius?
                </div>
              </div>

              <div id="collapse2" class="collapse">
                <div class="card-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos unde asperiores dignissimos error aperiam, exercitationem perferendis voluptatum, ea harum enim modi corrupti illum? Fugit rem quisquam quaerat magni iure enim inventore accusamus, accusantium odio velit ex saepe natus similique perferendis ipsa, repudiandae error eligendi incidunt tempore doloribus dignissimos eius?
                </div>
              </div>

  
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <div href="#collapse3" data-toggle="collapse" data-parent="#accordian">
                    <i class="fas fa-arrow-circle-down"></i>Open Your Mind  
                  </div>
                </h5>
              </div>

              <div id="collapse3" class="collapse">
                <div class="card-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos unde asperiores dignissimos error aperiam, exercitationem perferendis voluptatum, ea harum enim modi corrupti illum? Fugit rem quisquam quaerat magni iure enim inventore accusamus, accusantium odio velit ex saepe natus similique perferendis ipsa, repudiandae error eligendi incidunt tempore doloribus dignissimos eius?
                </div>
              </div>

              <div id="collapse3" class="collapse">
                <div class="card-body">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos unde asperiores dignissimos error aperiam, exercitationem perferendis voluptatum, ea harum enim modi corrupti illum? Fugit rem quisquam quaerat magni iure enim inventore accusamus, accusantium odio velit ex saepe natus similique perferendis ipsa, repudiandae error eligendi incidunt tempore doloribus dignissimos eius?
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- AUTHORS -->
  <section id="authors" class="my-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-primary pb-3">
              Meet Our Team
            </h1>
            <p class="lead">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam dicta illum libero nam magnam sequi?
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person1.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Dr. A. J. Umbarkar</h3>
              <h5 class="text-muted">Project Guide</h5>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est facilis cum tempora nobis, velit officiis.</p>
              <div class="d-flex justify-content-center">
                <div class="p-4">
                  <a href="http://facebook.com">
                    <i class="fab fa-facebook"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://instagram.com">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://twitter.com">
                    <i class="fab fa-twitter"></i>
                  </a>  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person2.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Mr. Ankur Singh</h3>
              <h5 class="text-muted">Team Lead</h5>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est facilis cum tempora nobis, velit officiis.</p>
              <div class="d-flex justify-content-center">
                <div class="p-4">
                  <a href="http://facebook.com">
                    <i class="fab fa-facebook"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://instagram.com">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://twitter.com">
                    <i class="fab fa-twitter"></i>
                  </a>  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Mr. Pratap Shingane</h3>
              <h5 class="text-muted">Backend Developer</h5>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est facilis cum tempora nobis, velit officiis.</p>
              <div class="d-flex justify-content-center">
                <div class="p-4">
                  <a href="http://facebook.com">
                    <i class="fab fa-facebook"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://instagram.com">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://twitter.com">
                    <i class="fab fa-twitter"></i>
                  </a>  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person4.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Mr. Pratham Yadav</h3>
              <h5 class="text-muted">Front End Developer</h5>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est facilis cum tempora nobis, velit officiis.</p>
              <div class="d-flex justify-content-center">
                <div class="p-4">
                  <a href="http://facebook.com">
                    <i class="fab fa-facebook"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://instagram.com">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://twitter.com">
                    <i class="fab fa-twitter"></i>
                  </a>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <h3>Get In Touch</h3>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolores, voluptas aut distinctio officia fuga.</p>
          <form>
            <div class="input-group input-group-lg mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-user"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Name">
            </div>

            <div class="input-group input-group-lg mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-envelope"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Email">
            </div>

            <div class="input-group input-group-lg mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-pencil-alt"></i>
                </span>
              </div>
              <textarea class="form-control" placeholder="Message"></textarea>
            </div>
              <input type="submit" value="Submit" class="btn btn-primary btn-block btn-lg">
          </form>
        </div>
        <div class="col-lg-3 align-self-center">
          <img src="img/mlogo.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer id="main-footer" class="py-5 bg-primary text-white">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-6 ml-auto">
          <p class="lead">
            Copyright &copy; <span id="year"></span>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Main Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"></script>

  <!-- Bootstarp JS CDN -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
  crossorigin="anonymous"></script>


  <!-- Custom Script -->
  <script>
    // 
    $('#year').text(new Date().getFullYear());

    // Init Scrollspy
    $('body').scrollspy({target:'#main-nav'});

    // Smooth Scrolling
    $("#main-nav a").on('click', function(event){
      if(this.hash !== ""){
        event.preventDefault();
        const hash = this.hash;
        $('html,body').animate({
          scrollTop: $(hash).offset().top
        },800,function(){
          window.location.hash = hash;
        });
      }
    });

    // Configure Slider
    $('.carousel').carousel({
      interval: 6000,
      pause: 'hover'
      
    });

  </script>