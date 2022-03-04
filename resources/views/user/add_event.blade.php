<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eventrite - Add Event</title>
    @include('user.css')
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('user.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('user.navbar')
        <!-- partial -->
       
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Add New</h4>
                      <p class="text-muted mb-1">Create an Event</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" data-dismiss="alert"  class="close">x</button>
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        </div>
                    <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" action="{{url('upload_event')}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                    <div class="form-group row">
                        <label for="eventName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                        <input required type="text" class="form-control" style="color:green" name="eventName" id="eventName" placeholder="Name of your Event">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="eventStartDate" class="col-sm-2 col-form-label">Start Date</label>
                        <div class="col-sm-10">
                        <input required type="text" class="form-control" style="color:green" name="eventStartDate" id="eventStartDate" placeholder="dd/mm/yyyy">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="eventStartDateTime" class="col-sm-2 col-form-label">Start Date Time</label>
                        <div class="col-sm-10">
                        <input required type="text" class="form-control"  style="color:green" name="eventStartDateTime" id="eventStartDateTime" placeholder="hh:mm:AM/PM">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="eventEndDate" class="col-sm-2 col-form-label">End Date</label>
                        <div class="col-sm-10">
                        <input required type="text" class="form-control" style="color:green" name="eventEndDate"  id="eventEndDate" placeholder="dd/mm/yyyy">
                        </div>
                      </div>                   

                      <div class="form-group row">
                        <label for="eventEndDateTime" class="col-sm-2 col-form-label">End Date Time</label>
                        <div class="col-sm-10">
                        <input required type="text" class="form-control"  style="color:green" name="eventEndDateTime" id="eventEndDateTime" placeholder="hh:mm:AM/PM">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="eventPrice" class="col-sm-2 col-form-label">Ticket Price</label>
                        <div class="col-sm-10">
                        <input required type="text" class="form-control"  style="color:green" name="eventPrice" id="eventPrice" placeholder="In dollars">
                        </div>
                      </div>   
                      <div class="form-group row">
                        <label for="eventLocation" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                        <textarea class="form-control"  style="color:green" name="eventLocation" id="eventLocation" rows="4"></textarea>
                        </div>
                      </div>  
                      <div class="form-group row">
                        <label for="eventDesc" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                        <textarea class="form-control"  style="color:green" name="eventDesc" id="eventDesc" rows="6"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="eventBanner" class="col-sm-2 col-form-label">Banner</label>
                        <div class="col-sm-10">
                        <input required class="form-control"  style="color:green" name="eventBanner" id="eventBanner" type="file">
                        </div>
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input  type="checkbox" class="form-check-input required" value="1" name="refund" id="refund"> Refund supported </label>
                      </div>
                                 
                     <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
                     </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('user.js')
  </body>
</html>