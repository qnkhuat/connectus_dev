@extends('ad.layouts.master')

@section('top_css')
<link href="/backend/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
<!-- Plugins css-->
<link href="/backend/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
<!-- <link href="/backend/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
<link href="/backend/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
<link href="/backend/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" /> -->
<!-- Bootsrap tables -->
<link href="/backend/assets/plugins/bootstrap-table/css/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
<style>
form {width: 100%;}
.mr-t-10 {margin-top: 10px;}
.btn-group {width: 300px;}
.pointer {cursor: pointer;}
.float-right {float: right;}
</style>
@endsection

@section('css')
@endsection

@section('breadcrumb')
<ol class="breadcrumb pull-right mb-0">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active">Users</li>
</ol>
@endsection

@section('page_name')
<h4 class="page-title">List user</h4>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    @if (Session::has('messages'))
    	<div class="alert alert-{{ Session::get('messages')["type"] }}">
    		<div class="container">
    			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    			<strong>{{ Session::get('messages')["content"] }}</strong>
    		</div>
    	</div>
    @endif
  </div>
  <div class="col-sm-12">
      <div class="card-box">
          <button id="demo-delete-row" class="btn btn-danger" disabled><i class="fa fa-times m-r-5"></i>Delete</button>
          <table id="demo-custom-toolbar"  data-toggle="table"
                 data-toolbar="#demo-delete-row"
                 data-search="true"
                 data-show-refresh="true"
                 data-show-toggle="true"
                 data-show-columns="true"
                 data-sort-name="id"
                 data-page-list="[5, 10, 20, 50, 100]"
                 data-page-size="5"
                 data-pagination="true" data-show-pagination-switch="true" class="table-bordered ">
              <thead>
              <tr>
                  <th data-field="state" data-checkbox="true"></th>
                  <th data-field="id" data-sortable="true" data-formatter="invoiceFormatter">Order ID</th>
                  <th data-field="name" data-sortable="true">Name</th>
                  <th data-field="date" data-sortable="true" data-formatter="dateFormatter">Order Date</th>
                  <th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Price</th>
                  <th data-field="status" data-align="center" data-sortable="true" data-formatter="statusFormatter">Status</th>
              </tr>
              </thead>

              <tbody>
              <tr>
                  <td></td>
                  <td>UB-1609</td>
                  <td>Boudreaux</td>
                  <td>22 Jun 2015</td>
                  <td>$ 35.00</td>
                  <td>Unpaid</td>
              </tr>
              <tr>
                  <td></td>
                  <td>UB-1610</td>
                  <td>Woldt</td>
                  <td>24 Jun 2015</td>
                  <td>$ 15.00</td>
                  <td>Paid</td>
              </tr>

              <tr>
                  <td></td>
                  <td>UB-1611</td>
                  <td>Leonardo</td>
                  <td>25 Jun 2015</td>
                  <td>$ 35.00</td>
                  <td>Shipped</td>
              </tr>

              <tr>
                  <td></td>
                  <td>UB-1612</td>
                  <td>Halladay</td>
                  <td>27 Jun 2015</td>
                  <td>$ 35.00</td>
                  <td>Refunded</td>
              </tr>

              <tr>
                  <td></td>
                  <td>UB-1613</td>
                  <td>Badgett</td>
                  <td>28 Jun 2015</td>
                  <td>$ 95.00</td>
                  <td>Unpaid</td>
              </tr>
              <tr>
                  <td></td>
                  <td>UB-1614</td>
                  <td>Boudreaux</td>
                  <td>29 Jun 2015</td>
                  <td>$ 35.00</td>
                  <td>Paid</td>
              </tr>

              <tr>
                  <td></td>
                  <td>UB-1615</td>
                  <td>Boudreaux</td>
                  <td>22 Jun 2015</td>
                  <td>$ 35.00</td>
                  <td>Shipped</td>
              </tr>

              <tr>
                  <td></td>
                  <td>UB-1616</td>
                  <td>Boudreaux</td>
                  <td>22 Jun 2015</td>
                  <td>$ 35.00</td>
                  <td>Refunded</td>
              </tr>

              <tr>
                  <td></td>
                  <td>UB-1617</td>
                  <td>Boudreaux</td>
                  <td>22 Jun 2015</td>
                  <td>$ 35.00</td>
                  <td>Unpaid</td>
              </tr>
              <tr>
                  <td></td>
                  <td>UB-1618</td>
                  <td>Boudreaux</td>
                  <td>22 Jun 2015</td>
                  <td>$ 35.00</td>
                  <td>Paid</td>
              </tr>

              <tr>
                  <td></td>
                  <td>UB-1619</td>
                  <td>Boudreaux</td>
                  <td>22 Jun 2015</td>
                  <td>$ 35.00</td>
                  <td>Shipped</td>
              </tr>

              <tr>
                  <td></td>
                  <td>UB-1620</td>
                  <td>Boudreaux</td>
                  <td>22 Jun 2015</td>
                  <td>$ 35.00</td>
                  <td>Refunded</td>
              </tr>

              <tr>
                  <td></td>
                  <td>UB-1621</td>
                  <td>Boudreaux</td>
                  <td>22 Jun 2015</td>
                  <td>$ 35.00</td>
                  <td>Unpaid</td>
              </tr>
              <tr>
                  <td></td>
                  <td>UB-1622</td>
                  <td>Boudreaux</td>
                  <td>22 Jun 2015</td>
                  <td>$ 35.00</td>
                  <td>Paid</td>
              </tr>

              <tr>
                  <td></td>
                  <td>UB-1623</td>
                  <td>Boudreaux</td>
                  <td>22 Jun 2015</td>
                  <td>$ 35.00</td>
                  <td>Shipped</td>
              </tr>

              <tr>
                  <td></td>
                  <td>UB-1624</td>
                  <td>Boudreaux</td>
                  <td>22 Jun 2015</td>
                  <td>$ 35.00</td>
                  <td>Refunded</td>
              </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>
@endsection

@section('js')
<script src="/backend/assets/js/jquery.core.js"></script>
<script src="/backend/assets/js/jquery.app.js"></script>
<script src="/backend/assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="/backend/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js" type="text/javascript"></script>
<script src="/backend/assets/plugins/switchery/js/switchery.min.js"></script>
<script src="/backend/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>

<script src="/backend/assets/plugins/moment/moment.js"></script>
<script src="/backend/assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="/backend/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="/backend/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="/backend/assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<script src="/backend/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="/backend/assets/pages/jquery.form-pickers.init.js"></script>

<!-- Bootsrap table js -->
<script src="/backend/assets/plugins/bootstrap-table/js/bootstrap-table.js"></script>
<script src="/backend/assets/pages/jquery.bs-table.js"></script>
@endsection
