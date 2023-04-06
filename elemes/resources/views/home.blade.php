@extends('layouts.admin')

@section('header', 'Elemes.id') 

@section('content')
<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-home"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Home</span>
                <span class="info-box-number">
                  
                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-circle"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">About</span>
                <span class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-share"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Promotions</span>
                <span class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-globe"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Blogs</span>
                <span class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-phone"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Contact Us</span>
                <span class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div id="comp-kmx9sped" class="KcpHeO tz5f0K comp-kmx9sped wixui-rich-text" data-testid="richTextElement"><h1 class="font_2" style="line-height:1.2em; font-size:35px;"><span style="letter-spacing:normal;"><span class="color_15">Good Food Us Good Mood</span></span></h1></div>
         <!-- /.row -->
        <div id="comp-kmx9sped" class="KcpHeO tz5f0K comp-kmx9sped wixui-rich-text" data-testid="richTextElement"><h1 class="font_2" style="line-height:1.2em; font-size:20px;"><span style="letter-spacing:normal;"><span class="color_15">I would think that conserving our natural resources should be a conservative position: Not to waste food, and not to throw away a lot of the food that we buy.</span></span></h1></div>
         <!-- /.row -->
        <img src="{{ asset ('assets/dist/img/images.jpeg') }}" alt="AdminLTE Logo" class="brand-image square elevation-3" style="opacity: .8">
         <!-- /.row -->
        <div id="comp-kmx9sped" class="KcpHeO tz5f0K comp-kmx9sped wixui-rich-text" data-testid="richTextElement"><h1 class="font_2" style="line-height:1.2em; font-size:30px;"><span style="letter-spacing:normal;"><span class="color_15">Browser Our Category Receipt</span></span></h1></div>
        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box shadow-none">
            <img src="{{ asset ('assets/dist/img/download (1).jpeg') }}" alt="AdminLTE Logo" class="brand-image square elevation-3" style="opacity: .8">

              <div class="info-box-content">
                <span class="info-box-text">cupcake</span>
                <span class="info-box-number">22 items</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box shadow-sm">
            <img src="{{ asset ('assets/dist/img/download (2).jpeg') }}" alt="AdminLTE Logo" class="brand-image square elevation-3" style="opacity: .8">

              <div class="info-box-content">
                <span class="info-box-text">pizza</span>
                <span class="info-box-number">25 items</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box shadow">
            <img src="{{ asset ('assets/dist/img/download (3).jpeg') }}" alt="AdminLTE Logo" class="brand-image square elevation-3" style="opacity: .8">

              <div class="info-box-content">
                <span class="info-box-text">kebab</span>
                <span class="info-box-number">12 items</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box shadow-lg">
            <img src="{{ asset ('assets/dist/img/download (4).jpeg') }}" alt="AdminLTE Logo" class="brand-image square elevation-3" style="opacity: .8">

              <div class="info-box-content">
                <span class="info-box-text">salmon</span>
                <span class="info-box-number">22 items</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box mb-3">
            <img src="{{ asset ('assets/dist/img/download (5).jpeg') }}" alt="AdminLTE Logo" class="brand-image square elevation-3" style="opacity: .8">

              <div class="info-box-content">
                <span class="info-box-text">doughnut</span>
                <span class="info-box-number">11 items</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <h2 class="mb-2">Browser Our Trending Receipt</h2>

        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-info">
              <span class="info-box-icon"><i class="far fa-pizza"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pizza Paperonis</span>
                <span class="info-box-number"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 80%"></div>
                </div>
                <span class="progress-description">
                  80% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success">
              <span class="info-box-icon"><i class="far fa-pizza"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pizza Meat</span>
                <span class="info-box-number"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 60%"></div>
                </div>
                <span class="progress-description">
                  60% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-warning">
              <span class="info-box-icon"><i class="far fa-kebab-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Doner Kebab</span>
                <span class="info-box-number"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                  100% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-danger">
              <span class="info-box-icon"><i class="fas fa-roll"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Salmon Roll</span>
                <span class="info-box-number"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 80%"></div>
                </div>
                <span class="progress-description">
                  80% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>

        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-info">
              <span class="info-box-icon"><i class="far fa-chocolate"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Cupcake Choco</span>
                <span class="info-box-number"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 80%"></div>
                </div>
                <span class="progress-description">
                  80% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success">
              <span class="info-box-icon"><i class="far fa-doughnut"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Doughnut Milk</span>
                <span class="info-box-number"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                  100% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-warning">
              <span class="info-box-icon"><i class="far fa-unicorn"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Doughnut Unicorrn</span>
                <span class="info-box-number"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 80%"></div>
                </div>
                <span class="progress-description">
                  80% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-danger">
              <span class="info-box-icon"><i class="fas fa-kebab"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Kathi Kebab</span>
                <span class="info-box-number"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 80%"></div>
                </div>
                <span class="progress-description">
                  80% Increase in 30 Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>

        <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body row">
          <div class="col-5 text-center d-flex align-items-center justify-content-center">
            <div class="">
            <img src="{{ asset ('assets/dist/img/download.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <!-- <h2>Admin<strong>LTE</strong></h2> -->
              <p class="lead mb-5">Elemes Dev Center, Villa Dago Tol BLOK D-1 No. 5, RT.01/RW.19, Kel. Serua, Kec. Ciputat, Kota Tangerang Selatan, Banten<br>
               
              </p>
              <p class="lead mb-5">Categories<br>
                Cupcakes ,
                Pizza ,
                Kebab ,
                Salmon ,
                Dougnut
              </p>
              <p class="lead mb-5">About Us<br>
                About Us,
                FAQ,
                Report Problem
              </p>
            </div>
          </div>
          <div class="col-7">
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" id="inputName" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputEmail">E-Mail</label>
              <input type="email" id="inputEmail" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputSubject">Subject</label>
              <input type="text" id="inputSubject" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputMessage">Message</label>
              <textarea id="inputMessage" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Send message">
            </div>
          </div>
        </div>
      </div>

    </section>
        
              
@endsection
