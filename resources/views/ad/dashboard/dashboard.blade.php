@extends('ad.layouts.master')

@section('top_css')
<!--Morris Chart CSS -->
<link rel="stylesheet" href="/backend/assets/plugins/morris/morris.css">
@endsection

@section('css')
@endsection

@section('breadcrumb')
<ol class="breadcrumb pull-right mb-0">
    <li class="breadcrumb-item active"><a href="#">Dashboard</a></li>
</ol>
@endsection

@section('page_name')
<h4 class="page-title">Dashboard</h4>
@endsection

@section('content')
<div class="row">
  <div class="col-md-6 col-lg-6 col-xl-3">
      <div class="widget-bg-color-icon card-box">
          <div class="bg-icon bg-info pull-left">
              <i class="md md-attach-money text-white"></i>
          </div>
          <div class="text-right">
              <h3 class="text-dark"><span class="counter">31,570</span></h3>
              <p class="text-muted mb-0">Total Revenue</p>
          </div>
          <div class="clearfix"></div>
      </div>
  </div>

  <div class="col-md-6 col-lg-6 col-xl-3">
      <div class="widget-bg-color-icon card-box">
          <div class="bg-icon bg-pink pull-left">
              <i class="md md-add-shopping-cart text-white"></i>
          </div>
          <div class="text-right">
              <h3 class="text-dark"><span class="counter">280</span></h3>
              <p class="text-muted mb-0">Today's Sales</p>
          </div>
          <div class="clearfix"></div>
      </div>
  </div>

  <div class="col-md-6 col-lg-6 col-xl-3">
      <div class="widget-bg-color-icon card-box">
          <div class="bg-icon bg-purple pull-left">
              <i class="md md-equalizer text-white"></i>
          </div>
          <div class="text-right">
              <h3 class="text-dark"><span class="counter">0.16</span>%</h3>
              <p class="text-muted mb-0">Conversion</p>
          </div>
          <div class="clearfix"></div>
      </div>
  </div>

  <div class="col-md-6 col-lg-6 col-xl-3">
      <div class="widget-bg-color-icon card-box">
          <div class="bg-icon bg-success pull-left">
              <i class="md md-remove-red-eye text-white"></i>
          </div>
          <div class="text-right">
              <h3 class="text-dark"><span class="counter">64,570</span></h3>
              <p class="text-muted mb-0">Today's Visits</p>
          </div>
          <div class="clearfix"></div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12 col-xl-4">
      <div class="card-box">
          <h4 class="text-dark header-title m-t-0 m-b-30">Total Revenue</h4>
          <div class="widget-chart text-center">
              <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#566676" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
              <h5 class="text-muted m-t-20">Total sales made today</h5>
              <h2 class="font-600">$75</h2>
              <ul class="list-inline m-t-15">
                  <li class="list-inline-item">
                      <h5 class="text-muted m-t-20">Target</h5>
                      <h4 class="m-b-0">$1000</h4>
                  </li>
                  <li class="list-inline-item">
                      <h5 class="text-muted m-t-20">Last week</h5>
                      <h4 class="m-b-0">$523</h4>
                  </li>
                  <li class="list-inline-item">
                      <h5 class="text-muted m-t-20">Last Month</h5>
                      <h4 class="m-b-0">$965</h4>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  <div class="col-lg-12 col-xl-8">
      <div class="card-box">
          <h4 class="text-dark header-title m-t-0">Sales Analytics</h4>
          <div class="text-center">
              <ul class="list-inline chart-detail-list">
                  <li class="list-inline-item">
                      <h5><i class="fa fa-circle m-r-5" style="color: #2bbbad;"></i>Desktops</h5>
                  </li>
                  <li class="list-inline-item">
                      <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Tablets</h5>
                  </li>
                  <li class="list-inline-item">
                      <h5><i class="fa fa-circle m-r-5" style="color: #dcdcdc;"></i>Mobiles</h5>
                  </li>
              </ul>
          </div>
          <div id="morris-bar-stacked" style="height: 310px;"></div>
      </div>
  </div>
</div>
<!-- end row -->

<div class="row">
  <div class="col-lg-12 col-xl-6">
    <div class="card-box">
      <h4 class="text-dark header-title m-t-0">Total Sales</h4>
      <div class="text-center">
          <ul class="list-inline chart-detail-list">
              <li class="list-inline-item">
                  <h5><i class="fa fa-circle m-r-5" style="color: #2bbbad;"></i>Desktops</h5>
              </li>
              <li class="list-inline-item">
                  <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Tablets</h5>
              </li>
              <li class="list-inline-item">
                  <h5><i class="fa fa-circle m-r-5" style="color: #ebeff2;"></i>Mobiles</h5>
              </li>
          </ul>
      </div>
      <div id="morris-area-with-dotted" style="height: 353px;"></div>
    </div>
  </div>
  <!-- col -->
  <div class="col-lg-12 col-xl-6">
    <div class="card-box">
      <a href="#" class="pull-right btn btn-inverse btn-sm waves-effect waves-light">View All</a>
      <h4 class="text-dark header-title m-t-0">Recent Orders</h4>
      <p class="text-muted m-b-30 font-13">
          Use the button classes on an element.
      </p>
      <div class="table-responsive">
        <table class="table table-actions-bar m-b-0">
          <thead>
            <tr>
              <th>Chart</th>
              <th>Item Name</th>
              <th>Up-Down</th>
              <th style="min-width: 80px;">Manage</th>
            </tr>
          </thead>
            <tbody>
              <tr>
                  <td><span data-plugin="peity-bar" data-colors="#2bbbad,#2bbbad" data-width="80" data-height="30">5,3,9,6,5,9,7,3,5,2</span></td>
                  <td><img src="/backend/assets/images/products/iphone.jpg" class="thumb-sm pull-left m-r-10" alt=""> Apple iPhone </td>
                  <td><span class="text-success">+$230</span></td>
                  <td>
                      <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                      <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                  </td>
              </tr>
              <tr>
                  <td><span data-plugin="peity-line" data-fill="#33b5e5" data-stroke="#33b5e5" data-width="80" data-height="30">0,3,6,4,5,4,7,3,5,2</span></td>
                  <td><img src="/backend/assets/images/products/samsung.jpg" class="thumb-sm pull-left m-r-10" alt=""> Samsung Phone </td>
                  <td><span class="text-danger">-$154</span></td>
                  <td>
                      <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                      <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                  </td>
              </tr>
              <tr>
                <td><span data-plugin="peity-line" data-fill="#fff" data-stroke="#ff3547" data-width="80" data-height="30">5,3,9,6,5,9,7,3,5,2</span>
                <td><img src="/backend/assets/images/products/imac.jpg" class="thumb-sm pull-left m-r-10" alt=""> Apple iPhone </td>
                <td><span class="text-success">+$1850</span></td>
                <td>
                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                </td>
              </tr>
              <tr>
                <td><span data-plugin="peity-pie" data-colors="#4c5667,#ebeff2" data-width="30" data-height="30">1/5</span></td>
                <td><img src="/backend/assets/images/products/macbook.jpg" class="thumb-sm pull-left m-r-10" alt=""> Apple iPhone </td>
                <td><span class="text-success">+$560</span></td>
                <td>
                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                </td>
              </tr>
              <tr>
                <td><span data-plugin="peity-bar" data-colors="#7266ba,#ebeff2" data-width="80" data-height="30">5,3,9,6,5,9,7,3,5,2</span></td>
                <td><img src="/backend/assets/images/products/lumia.jpg" class="thumb-sm pull-left m-r-10" alt=""> Lumia iPhone </td>
                <td><span class="text-success">+$230</span></td>
                <td>
                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                </td>
              </tr>
            </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- end col -->
</div>
<!-- end row -->
@endsection

@section('js')
<script src="/backend/assets/plugins/peity/jquery.peity.min.js"></script>
<!-- jQuery  -->
<script src="/backend/assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="/backend/assets/plugins/counterup/jquery.counterup.min.js"></script>
<script src="/backend/assets/plugins/morris/morris.min.js"></script>
<script src="/backend/assets/plugins/raphael/raphael-min.js"></script>
<script src="/backend/assets/plugins/jquery-knob/jquery.knob.js"></script>
<script src="/backend/assets/pages/jquery.dashboard.js"></script>
<script src="/backend/assets/js/jquery.core.js"></script>
<script src="/backend/assets/js/jquery.app.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });

        $(".knob").knob();

    });
</script>
@endsection
