<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventrite - {{ $event_details->eventName }}</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,200&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">eventrite</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-home"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <form class="d-flex">
                <input class="form-control search-header" type="search" placeholder="Search events" aria-label="Search">
              </form>
              <div class="ms-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                  <div class="dropdown">
                    <a class="nav-link" href="#">Organize <i class="fa fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <a href="#">Why Eventrite?</a>
                        <a href="#">Pricing</a>
                        <a href="#">Resources</a>
                    </div>
                  </div>               
              </li>
              <li class="nav-item dropdown">
                <div class="dropdown">
                  <a class="nav-link" href="#">Help <i class="fa fa-chevron-down"></i></a>
                  <div class="dropdown-content">
                      <a href="#">Find your ticket</a>
                      <a href="#">Contact an event organizer</a>
                      <a href="#">Visit help center</a>
                  </div>
                </div>               
            </li>
              <li class="nav-item">
                <a class="nav-link exception" href="#">Create an Event</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sign in</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<main>
    <section class="section section-event bg-white">
        <div class="container-fluid">
            <div class="row ">
                <div class="event-details d-grid col-md-10 mx-auto ">
                    <div class="row mt-4 mx-2 gx-0">
                        <div class="col-md-8 event-picture">
                            <img class="img-fluid" src="{{ url('event/'.$event_details->eventBanner)  }}" alt="">
                        </div>
                        <div class="col-md-4 event-date-details">
                            <div class="event-date">
                                <p class="event-month"> FEB</p>
                                <p class="event-day"> 28 </p>
                            </div>
                            <div class="event-details-two">
                                <h1 class="event-title">{{ $event_details->eventName }}</h1>
                                <span class="event-creator">by <a href="#">{{ $event_details->creatorname }}</a></span>
                                <span class="event-followership">221 followers <button class="btn btn-outline-primary">Follow</button></span>
                                <span class="ticket-price">${{ $event_details->eventPrice }} </span>
                            </div>
                            
                        </div>
                        <div class="col-md-12 border-top border-bottom col-actions">
                            <i class="fa fa-upload"></i> <i class="fa fa-heart-o"></i>
                           
                            <button type="button" data-bs-toggle="modal" data-bs-target="#regforevent" class="btn btn-success pull-right">Register</button>
                        </div>
                        <div class="col-md-8 event-description p-5">
                            <div class="event-desc-text">
                                <p >{{ $event_details->eventDesc}}</p>
                            </div>
                            
                            <h3>Share with friends</h3>
                            <p class="social-share"><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i class="fa fa-envelope"></i> <i class="fa fa-linkedin"></i></p>

                        </div>
                        <div class="col-md-4 event-desc-dates p-5">
                            <h3>Date and time</h3>
                            <p>{{ $event_details->eventStartDate }}, {{ $event_details->eventStartDateTime }} –</p>
                            <p>{{ $event_details->eventEndDate }}, {{ $event_details->eventEndDateTime }} WAT</p>
                            <p><a href="#">Add to calendar</a></p>

                            <h3>Location</h3>
                            <p>{{ $event_details->eventLocation}}</p>
                            <p><a href="#">View Map</a></p>

                            <h3>Refund Policy</h3>
                            <p>{{ $event_details->refund }}</p>

                        </div>
                        <div class="col-md-12 other-details p-5 border-top justify-content-center text-center">
                            <img class="" src="assets/images/brand-logo.jpg" alt="">
                            <a href="">{{ $event_details->creatorname }}</a>
                            <span>Organizer of #AFRICANXT 2022</span>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum beatae laboriosam laborum corporis officia blanditiis, perferendis animi, pariatur repellendus eligendi ipsum deserunt, perspiciatis error sapiente ex minima eum sunt deleniti?
                            </p>

                            <button class="btn btn-outline-primary follow">Follow</button> <button class="btn btn-light contact">Contact</button>
                            <button class="btn btn-outline-primary view-map">View Map</button>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </section>
</main>

<footer>
<div class="container-fluid">
    <div class="row footer-top ">
        <div class="col-md-3 d-none d-lg-block">
            <h4>Use Eventrite</h4>
            <ul class="list-unstyled">
                <li>How it works</li>
                <li>For large and complex events</li>
                <li>Pricing</li>
                <li>Content Standards</li>
                <li>Eventrite Mobile Ticket App</li>
                <li>Eventrite Checkin App</li>
                <li>Eventrite App Marketplace</li>
                <li>COVID-19 Resources</li>
                <li>FAQs</li>
                <li>Sitemap</li>
            </ul>
        </div>
        <div class="col-md-3 d-none d-lg-block">
            <h4  class="text-light">Plan Events</h4>
            <ul class="list-unstyled">
                <li>How it works</li>
                <li>For large and complex events</li>
                <li>Pricing</li>
                <li>Content Standards</li>
                <li>Eventrite Mobile Ticket App</li>
                <li>Eventrite Checkin App</li>
                <li>Eventrite App Marketplace</li>
                <li>COVID-19 Resources</li>
                <li>FAQs</li>
                <li>Sitemap</li>
            </ul>
        </div>
        <div class="col-md-3 d-none d-lg-block">
            <h4  class="text-light">Find Events</h4>
            <ul class="list-unstyled">
                <li>How it works</li>
                <li>For large and complex events</li>
                <li>Pricing</li>
                <li>Content Standards</li>
                <li>Eventrite Mobile Ticket App</li>
                <li>Eventrite Checkin App</li>
                <li>Eventrite App Marketplace</li>
                <li>COVID-19 Resources</li>
                <li>FAQs</li>
                <li>Sitemap</li>
            </ul>
        </div>
        <div class="col-md-3 d-none d-lg-block">
            <h4 class="text-light">Connect With Us</h4>
            <ul class="list-unstyled">
                <li>Contact Support</li>
                <li>Twitter</li>
                <li>Facebook</li>
                <li>LinkedIn</li>
                <li>Instagram</li>
            </ul>
        </div>
    </div>
    <div class="row footer-down mt-3 mb-1 text-center">
        <div class="col-md-2">
            <p>© 2022 Eventbrite</p>
        </div>
        <div class="col-md-8">
            <ul class="list-inline">
                <li class="list-inline-item">
                    About
                </li>
                <li class="list-inline-item">
                    Blog
                </li>
                <li class="list-inline-item">
                    Help
                </li>
                <li class="list-inline-item">
                    Careers
                </li>
                <li class="list-inline-item">
                    Press
                </li>
                <li class="list-inline-item">
                    Investors
                </li>
                <li class="list-inline-item">
                    Security
                </li>
                <li class="list-inline-item">
                    Developers
                </li>
                <li class="list-inline-item">
                    Terms
                </li>
                <li class="list-inline-item">
                    Privacy
                </li>
                <li class="list-inline-item">
                    CA Privacy Notice
                </li>
                <li class="list-inline-item">
                    Accessibility
                </li>
                <li class="list-inline-item">
                    Cookies
                </li>
            </ul>
        </div>
        <div class="col-md-2">
            <select class="country">
                <option value="USA">United States</option>
                <option value="es_AR" data-spec="select-option">Argentina</option>
                <option value="en_AU" data-spec="select-option">Australia</option>
            </select>
        </div>
    </div>
</div>

</footer>

<!-- The Modal -->
<div class="modal fade" id="regforevent" tabindex="-1" role="dialog" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">{{ $event_details->eventName }} Registration</h4>
        <button type="button" class="btn close" data-bs-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <form id="eventregistration" name="eventregistration">
          @csrf
      <div class="modal-body">
     <div class="alert alert-success hide"  id="alert-msg"></div>
        <div class="form-group">
            <label for="name">Your name:</label>
            <input type="text" class="form-control" placeholder="Enter name" id="regName">
        </div>
        <div class="form-group">
            <label for="email">Your Email address:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="regEmail">
        </div>
        <div class="form-group">
            <label for="email">Number of tickets:</label>
            <input type="text" class="form-control" placeholder="Enter number of tickets" id="regNoTickets">
        </div>
        <input type="hidden" id="eventId" value="{{ $event_details->id }}">

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" id="btn-save" class="btn btn-success" >Register</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
        </form>
    </div>
  </div>
</div>
<script src="{{asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{asset('assets/js/popper.min.js') }}"></script>
<script src="{{asset('assets/js/bootstrap.min.js') }}"></script>
<script>
         jQuery(document).ready(function(){
            $('#btn-save').click(function(e){
               e.preventDefault();
            let regName = $('#regName').val();
            let regEmail = $('#regEmail').val();
            let regNoTickets = $('#regNoTickets').val();
            let eventId = $('#eventId').val();
            let _token = $('input[name=_token]').val();
               $.ajax({
                  url: "{{ route('event.reg') }}",
                  method: 'post',
                  data: {
                     regName: regName,
                     regEmail: regEmail,
                     regNoTickets: regNoTickets,
                     eventId: eventId,
                     _token: _token
                  },
                  success: function(result){
                     if(result.status == 1){
                        $('#alert-msg').html(result.msg).removeClass('hide');
                        $('#eventregistration').reset();
                     }
                  }});
               });
            });
</script>
</body>
</html>