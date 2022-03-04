<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eventrite - Manage Events</title>
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
              <div class="col-md-12">
              <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Manage Events</h4>
                    <div>
                    </div>
                    <div class="table-responsive">
                      <table class="table ">
                        <thead>
                          <tr>
                            <th> Banner </th>
                            <th> Name </th>
                            <th> Location </th>
                            <th> Ticket </th>
                            <th> Date </th>
                            <th> Actions </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($event_details as $event_detail)
                        <tr>
                            <td class="py-1">
                              <img src="{{ url('event/'.$event_detail->eventBanner)  }}" alt="image" />
                            </td>
                            <td> {{ $event_detail->eventName  }}</td>
                            <td>
                            {{ $event_detail->eventLocation  }}
                            </td>
                            <td> $ {{ $event_detail->eventPrice  }} ({{ $event_detail->regcount  }} registered) </td>
                            <td> {{ $event_detail->eventStartDate  }} {{ $event_detail->eventStartDateTime  }} </td>
                            <td> <button class="btn btn-warning btn-sm">Update</button> <button class="btn btn-info btn-sm">Mail Reg.</button> <button class="btn btn-sm btn-danger">Delete</button> </td>
                          </tr>
                        @endforeach
                          
                          
                        </tbody>
                      </table>
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