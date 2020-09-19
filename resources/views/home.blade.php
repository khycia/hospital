@extends('layouts.master')
@extends('layouts.head')
@yield('head')
@section('content')

     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Collect and store a patients' electronic medical records</h3>
                                             <h1>Hospital Database</h1>
                                             <a>Click on the items on top menu to view database</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Manage a hospital's operations</h3>
                                             <h1>Operations Management</h1>
                                             <a>Click on the items on top menu to view database</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Keep track of a patient's healthcare</h3>
                                             <h1>Track Healthcare</h1>
                                             <a>Click on the items on top menu to view database</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>        

@endsection