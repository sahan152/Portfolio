<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahan Sandeepa</title>

    <link rel = "icon" href = "{{URL::asset('/images/Xicon.ico')}}" type = "image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body style="background-color: #070707; color: white; overflow-x: hidden;" >
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
              <a class="nav-link" href="{{url('/about')}}" style="color: #ffc107;">About</a>
            </li>
            <li class="nav-item" style="margin-right: 1rem;">
              <a class="nav-link" href="{{url('/work')}}" style="color: white;">Work</a>
            </li>
            <li class="nav-item" style="margin-right: 1rem;">
              <a class="nav-link" href="{{url('/contact')}}" style="color: white;">Contact</a>
            </li>
          </ul>
        </div>
    </nav>
    <div class="row" style="display: flex; align-items: center; height: 70vh;">
      <div class="col-12">
          <div class="container">
              <div class="row">
                  <div class="col-7">
                      <h1>I build value through design.</h1>
                      <br>
                      <h4>My name is Sahan Sandeepa.</h4>
                      <br>
                      <h4 style="text-align: justify;">
                        I specialize in graphic design and video editing. 
                        With over a years of experience in this field, 
                        I've honed my skills in design, drawing, 
                        and management while working on a variety 
                        of projects for varies of clinets. 
                        My goal is to create elegant designs
                        that surprise and delight users.
                      </h4>
                      
                  </div>
                  <div class="col-1">
                    <br>
                  </div>
                  <div class="col-4" style="align-items: center;">
                      <img src="{{URL::asset('/images/welcome.png')}}" alt="" srcset="">
                  </div>
              </div>
          </div>
      </div>
  </div>  
</body>
</html>