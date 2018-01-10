<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header hidden-lg hidden-md hidden-sm">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Home<span class="sr-only">(current)</span></a></li>
        <li class="{{ request()->is('search') ? 'active' : '' }}"><a href="/search">Search Helper</a></li>
        <li class="{{ request()->is('services') ? 'active' : '' }}"><a href="/services">Services</a></li>
        <li class="{{ request()->is('training') ? 'active' : '' }}"><a href="/training">Training</a></li>
        <li class="{{ request()->is('testimonials') ? 'active' : '' }}"><a href="/testimonials">Testimonials</a></li>
        <li class="{{ request()->is('faqs') ? 'active' : '' }}"><a href="/faqs">Faqs</a></li>
        <li class="{{ request()->is('joinus') ? 'active' : '' }}"><a href="/joinus">Join Us</a></li>
        <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="/contact">Contact Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>