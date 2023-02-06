<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahan Sandeepa</title>

    <link rel = "icon" href = "{{URL::asset('/images/Xicon.ico')}}" type = "image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  </head>
<body style="background-color: #070707; color: white; overflow-x: hidden;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #070707;">
        <a class="navbar-brand" href="" style="color: #070707;">SahanSandeepa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item" style="margin-right: 1rem;">
              <a class="nav-link" href="{{url('/')}}" style="color: white;">Home</a>
            </li>
            <li class="nav-item" style="margin-right: 1rem;">
              <a class="nav-link" href="{{url('/about')}}" style="color: white;">About</a>
            </li>
            <li class="nav-item" style="margin-right: 1rem;">
              <a class="nav-link" href="{{url('/work')}}" style="color: #ffc107;">Work</a>
            </li>
            <li class="nav-item" style="margin-right: 1rem;">
              <a class="nav-link" href="{{url('/contact')}}" style="color: white;">Contact</a>
            </li>
          </ul>
        </div>
    </nav>
    <br><br>
    <div class="row" style="display: flex; align-items: center; height: 100vh;">
      <div class="col-12">
          <div class="container">
              <div class="row">
                  <div class="col-4">
                      <h1>Bringing creativity to life through design.</h1>
                      <br>
                  </div>
                  <div class="col-4">
                      &nbsp;
                  </div>
                  <div class="col-4" style="align-items: center;">
                      <img src="{{URL::asset('/images/welcome.png')}}" alt="" srcset="">
                  </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <br>
                  <br>
                  <br>
                </div>
              </div>
              <div class="card" style="background-color: #070707; padding-left: 40px; padding-top: 10px; border-color: #191919;">
                <div class="row">
                  <div class="col-6">
                    <video src="{{URL::asset('/videos/1.mp4')}}" controls muted autoplay loop style="width: 600px; height: 400px;"></video>
                  </div>
                  <div class="col-6" style="padding-left: 50px;">
                    <br>
                    <h2><i class="bi bi-camera-reels"></i>  Video Editing</h2>
                    <br>
                    <p>Click the video to view in fullscreen.</p>
                  </div>                                          
                </div>
              </div>
              <br>
              <div class="card" style="background-color: #070707; padding-right: 30px; padding-top: 10px; border-color: #191919;">
                <div class="row">
                  <div class="col-6" style="padding-left: 50px;">
                    <br>
                    <h2><i class="bi bi-pencil"></i>  Designing</h2>
                    <br>
                    <p>Click the video to view in fullscreen.</p>
                  </div>  
                  <div class="col-6">
                    <video src="{{URL::asset('/videos/2.mp4')}}" controls muted autoplay loop style="width: 600px; height: 400px;"></video>
                  </div>                                        
                </div>
              </div>
              <br>
              <div class="card" style="background-color: #070707; padding-left: 40px; padding-top: 10px; border-color: #191919;">
                <div class="card-header">
                  <h2><i class="bi bi-images"></i> Logo Designs</h2>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="overflow-x-hidden" style="height: 300px;">
                      <img src="{{URL::asset('/images/Logo (1).jpg')}}" style="width: 300px; height: 300px;"></img>
                      <img src="{{URL::asset('/images/Logo (2).jpg')}}" style="width: 300px; height: 300px;"></img>
                      <img src="{{URL::asset('/images/Logo (3).jpg')}}" style="width: 300px; height: 300px;"></img>
                      <img src="{{URL::asset('/images/Logo (4).jpg')}}" style="width: 300px; height: 300px;"></img>
                      <img src="{{URL::asset('/images/Logo (5).jpg')}}" style="width: 300px; height: 300px;"></img>
                      <img src="{{URL::asset('/images/Logo (6).jpg')}}" style="width: 300px; height: 300px;"></img>
                    </div>
                  </div>
                </div>
                <br>
              </div>
              <br>
              <div class="card" style="background-color: #070707; padding-left: 40px; padding-top: 10px; border-color: #191919;">
                <div class="card-header">
                  <h2><i class="bi bi-images"></i> Social Media Posts</h2>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="overflow-x-hidden" style="height: 400px;">
                      <img src="{{URL::asset('/images/Social (1).jpg')}}" style="width: auto; height: 400px;"></img>
                      <img src="{{URL::asset('/images/Social (2).jpg')}}" style="width: auto; height: 400px;"></img>
                      <img src="{{URL::asset('/images/Social (3).jpg')}}" style="width: auto; height: 400px;"></img>
                      <img src="{{URL::asset('/images/Social (4).jpg')}}" style="width: auto; height: 400px;"></img>
                      <img src="{{URL::asset('/images/Social (5).jpg')}}" style="width: auto; height: 400px;"></img>
                    </div>
                  </div>                       
                </div>
                <br>
              </div>
              <br>
              <div class="card" style="background-color: #070707; padding-left: 40px; padding-top: 10px; border-color: #191919;">
                <div class="card-header">
                  <h2><i class="bi bi-images"></i> NFT</h2>
                </div>
                <div class="row">
                  <div class="col-12">
                    <img src="{{URL::asset('/images/NFT1.jpg')}}" style="width: 300px; height: auto;"></img>
                    <img src="{{URL::asset('/images/NFT2.png')}}" style="width: 300px; height: auto;"></img>
                  </div>                       
                </div>
                <br>
              </div>
              <br>
              <br>
          </div>
      </div>
  </div>
</body>
</html>