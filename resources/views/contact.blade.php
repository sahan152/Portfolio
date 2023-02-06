<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahan Sandeepa</title>

    <link rel = "icon" href = "{{URL::asset('/images/Xicon.ico')}}" type = "image/x-icon">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
      button.close {
        border: 0px;
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        background-color: transparent;
        opacity: .5;
      }
    </style>
  </head>
<body style="background-color: #070707; color: white; overflow: hidden;">
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
              <a class="nav-link" href="{{url('/work')}}" style="color: white;">Work</a>
            </li>
            <li class="nav-item" style="margin-right: 1rem;">
              <a class="nav-link" href="{{url('/contact')}}" style="color: #ffc107;">Contact</a>
            </li>
          </ul>
        </div>
    </nav>
    <div class="row" style="display: flex; align-items: center; height: 70vh;">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>Let's talk.</h1>
                        <br>
                        <p>Get in touch via the form below.</p>
                        <form action="{{url('/sendemail')}}" method="post">
                          {{csrf_field()}}
                          <label for="">Name:</label>
                          <input type="text" name="name" class="form-control" style="background-color: #191919; border: 0px; color: white;" required>
                          <br>
                          <label for="">Email:</label>
                          <input type="text" name="email" class="form-control" style="background-color: #191919; border: 0px; color: white;" required>
                          <br>
                          <label for="">Message:</label>
                          <textarea type="text" rows="4" name="message" class="form-control" style="background-color: #191919; border: 0px; color: white;" required></textarea>
                          <br>
                          <button type="submit" class="btn btn-outline-warning">Send</button>
                          <br>
                          @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible">
                              {{ Session::get('success') }}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                          @endif

                          @if (Session::has('error'))
                            <div class="alert alert-danger alert-dismissible">
                              {{ Session::get('error') }}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                          @endif
                        </form>
                    </div>
                    <div class="col-2">
                        &nbsp;
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