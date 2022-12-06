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
  background: url('./img/showcasebg.jpg');
  background-size: cover;
}
.carousel-image-2{
  background: url('./img/showcasebg.jpg');
  background-size: cover;
}
.carousel-image-3{
  background: url('./img/showcasebg.jpg');
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
  background-color: #0597F2;
  margin-top: -50;
}

#boxes{
  background-color: #f4f4f4;
}

.card-1{
  background-color: #F2B705;
  color: #fff;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.card-2{
  background-color: #303030;
  color: #fff;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.card-3{
  background-color: #F2B705;
  color: #fff;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.card-4{
  background-color: #303030;
  color: #fff;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.card-shadow{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

#about{
  background-color: #F29F05;
}

#authors{
  background-color: #f4f4f4;
}

.meet{
  color: #F2B705;
}
.meet-p{
  font-size: 16px !important;
}

#contact{
  background-color: #0597F2;
}

.btn-md{
  padding: 8px !important;
  font-size: 15px !important;
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
            <div class="carousel-caption d-none d-sm-block text-center mb-5 py-5">
              <h1 class="display-3">Welcome</h1>
              <p class="lead">Tech Algo is one of the fastest growing verified resource for mordern and old algorithms and technologies</p>
              <a href="#" class="btn btn-md btn-danger btn-lg">About Us</a>
            </div>
          </div>
        </div>
        <div class="carousel-item carousel-image-2">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block mb-5 text-right">
              <h1 class="display-3">Algorithm</h1>
              <p class="lead">In mathematics and computer science, an algorithm is a finite sequence of rigorous instructions, typically used to solve a class of specific problems or to perform a computation</p>
              <a href="#" class="btn btn-md btn-warning text-white
             btn-lg">Learn More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item carousel-image-3">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-left mb-5">
              <h1 class="display-3">Technology</h1>
              <p class="lead">Technology is the application of knowledge to reach practical goals in a specifiable and reproducible way. The word technology may also mean the product of such an endeavor.</p>
              <a href="#" class="btn btn-md btn-success btn-lg">Read More</a>
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
          <div class="card card-1 text-center mb-resp">
            <div class="card-body">
              <h5 class="text-white">Be Better</h5>
              <p class="text-white">Good, better, best. Never let it rest. 'Til your good is better and your better is best</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-2 text-center  text-white mb-resp">
            <div class="card-body">
              <h5 class="text-white">Be Smarter</h5>
              <p class="text-white">Success is a lousy teacher. It seduces smart people into thinking they can't lose.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-3 text-center mb-resp">
            <div class="card-body">
              <h5 class="text-white">Be Faster</h5>
              <p class="text-white">If you fall behind, run faster. Never give up, rise up, try again and win</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center card-4">
            <div class="card-body">
              <h5 class="text-white">Be Stronger</h5>
              <p class="text-white">Everything you can learn from is an opportunity to become stronger.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT / WHY SECTION  -->
  <section id="about" class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h2 class="text-white pb-2">
              ABOUT THIS WEBSITE
            </h2>
          </div>

          <!-- ACCORDION -->
          <div id="accordion">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <div href="#collapse1" data-toggle="collapse" data-parent="#accordian">
                    <i class="fas fa-arrow-circle-down mr-2"></i>Why TECH-ALGO is created
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
                    <i class="fas fa-arrow-circle-down mr-2"></i>Our Moto
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
                    <i class="fas fa-arrow-circle-down mr-2"></i>Inspiration for TECH-ALGO 
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
  <section id="authors" class="text-center py-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h2 class="meet pb-3">
              Meet Our Team
            </h2>
            <p class="lead">
             The minds without whom the Tech-Algo wouldn't be possible. 
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card card-shadow">
            <div class="card-body">
              <img src="img/person1.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h4>Dr. A. J. Umbarkar</h4>
              <h6 class="text-muted">Project Guide</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est facilis cum tempora nobis, velit officiis.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-shadow">
            <div class="card-body">
              <img src="img/person2.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h4>Ankur Singh</h4>
              <h6 class="text-muted">Team Lead</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est facilis cum tempora nobis, velit officiis.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-shadow">
            <div class="card-body">
              <img src="img/person3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h4>Pratap Shingane</h4>
              <h6 class="text-muted">Backend Developer</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est facilis cum tempora nobis, velit officiis.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card card-shadow">
            <div class="card-body">
              <img src="img/person4.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h4>Pratham Yadav</h4>
              <h6 class="text-muted">Front End Developer</h6>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est facilis cum tempora nobis, velit officiis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="py-5 text-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <h2 class="pb-4">Get In Touch</h2>
          <p>Contact us here, regarding any complaint or sugguestions.</p>
          <form>
            <div class="input-group input-group-md mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-user"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Name">
            </div>

            <div class="input-group input-group-md mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-envelope"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Email">
            </div>

            <div class="input-group input-group-md mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-pencil-alt"></i>
                </span>
              </div>
              <textarea class="form-control" placeholder="Message"></textarea>
            </div>
              <input type="submit" value="Submit" class="btn btn-dark btn-block btn-lg">
          </form>
        </div>
        <div class="col-lg-3 align-self-center">
          <img src="img/mlogo.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer id="main-footer" class="py-2 bg-dark text-white">
    <div class="container">
      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
       TECHO-ALGO Copyright &copy; <span id="year"></span>
      </div>
    <!-- Copyright -->
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