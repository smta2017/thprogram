@extends('layouts.app')


<!-- page style -->
@section('customstyle') 

@endsection



@section('content')
 <!-- page content -->
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>الاصناف</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>تعديل مسمى صنف</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <form class="form-horizontal form-label-left" method="POST" action="{{ route('itemnameupdate', $itemname->id) }} ">
                     @method('PATCH')
                     @csrf
                   
                      <span class="section">بيانات المسمى</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">مسمى الصنف <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="sname" value="{{$itemname->sname}}" class="form-control col-md-7 col-xs-12" data-validate-length-range="5" data-validate-words="1" name="sname" placeholder="ادخل اسم  مثال  لوحة مفاتيح" required="required" type="text">
                        </div>
                      </div>
                     
                        
                  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3" style="margin-right: 25%;">
                          <button type="submit" class="btn btn-primary" style="display:none;">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">حفظ</button>
                        </div>
                      </div>
                    </form>

                 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection


<!-- page script -->
@section('customscript')
 
  <!-- validator -->
  <script src="../vendors/validator/validator.js"></script>

   
@endsection