    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
              <div class="navbar-nav mr-auto">{{@$category}}
                <a href="{{url('/')}}" class="nav-item nav-link @if (empty($category)) active  @endif">Home</a>
                <a href="{{url('about/company-overview.html')}}" class="nav-item nav-link  @if (@$category=='about') active  @endif">About Us</a>
                <a href="{{url('service.html')}}" class="nav-item nav-link  @if (@$category=='service') active  @endif">Capabilities</a>
                <a href="{{url('facilities.html')}}" class="nav-item nav-link  @if (@$category=='') active  @endif" >Facilities</a>
                <a href="{{url('portfolio.html')}}" class="nav-item nav-link  @if (@$category=='') active  @endif">Project</a>
                <a href="{{url('blog.html')}}" class="nav-item nav-link  @if (@$category=='') active  @endif">Media Center</a>
                <a href="{{url('contact.html')}}" class="nav-item nav-link  @if (@$category=='') active  @endif">Contact</a>
              </div>
              <div class="ml-auto">
                <a class="btn" href="career/job-openings.html">Join Us</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    <!-- Nav Bar End -->
