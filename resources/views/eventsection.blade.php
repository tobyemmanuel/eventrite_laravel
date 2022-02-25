<div class="container-fluid">
        <div class="row mx-md-5 mx-sm-2 px-md-3 px-sm-2">
            <div class="col-md-12 ">
                <div class="h1">Popular in <i class="fa fa-chevron-down"></i> <span name="input" id="input" role="text" contenteditable="true"></span></div> 
            </div>
            <div class="col-md-12 ">
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">All</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">For you</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Online</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link ">Today</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">This Weekend</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Free</a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link ">Food & Drink</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Charity & Causes</a>
                  </li>
                  </ul>
            </div>
        </div>
        <div class="row mx-md-5 mx-sm-2 px-md-3 px-sm-2">
            <div class="col-md-12 ">
                <h2 class="events-list-heading">Events in Kaduna</h2>
            </div>
        </div>
        <div class="row mx-md-5 mx-sm-2 px-md-3 px-sm-2 events-group">
            @foreach ($event as $events)
            <div class="col-md-3 col-sm-3">
                <div class="card mb">
                    <img src="event/{{ $events->eventBanner }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $events->eventName }}</h5>
                            <h6 class="card-subtitle mb-2 text-time">{{ $events->eventStartDate }} {{ $events->eventStartDateTime }}</h6>
                            <h6 class="card-subtitle mb-2 text-address">Lighthouse Church Kaduna • Kaduna, KD </h6>
                            <h6 class="card-subtitle mb-2 text-price">{{ $events->eventPrice }}</h6>
                            <p class="card-text text-creator">{{ $events->eventLocation }}</p>
                            <p class="card-text text-traction"><i class="fa fa-users"></i> 75 followers</p>
                        </div>                 
                </div>
            </div>
            @endforeach
            

            <div class="col-md-3 col-sm-3 ">
                <div class="card event-info" ds-color="#ECDCE6">                  
                    <div class="card-body">
                        <h5 class="card-title">Tell us what you love</h5>
                        <p class="card-text">We'll find event recomendations just for you</p>
                        
                    </div>
                    <div class="card-img-overlay"> <a href="#" class="btn">Get started</a></div>
                    <img src="assets/images/side.jpg" class="card-img-top" alt="...">
                </div>
            </div>

        </div>
        <div class="row mx-md-5 mx-sm-2 px-md-3 px-sm-2">
            <div class="col-md-12 text-center py-3">
                <div class="d-grid gap-2 col-4 mx-auto">
                    <button class="btn btn-outline-gray" type="button">See more</button>
                  </div>
                
            </div>
        </div>
    </div>