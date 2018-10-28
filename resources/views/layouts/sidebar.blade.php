<div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>البرنامج !</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
            
            {!! HTML::image('images/img.jpg', 'alt text', array('class' => 'img-circle profile_img')) !!}
            </div>
            <div class="profile_info">
              <span>مرحباً,</span>
              <h2>{{ Auth::user()->name }}</h2>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>عام</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-edit"></i> المبيعات <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.html">فاتورة جديدة</a></li>
                    <li><a href="index2.html">مرتجعات مبيعات</a></li>
                    <li><a href="index3.html">استعلام</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-database"></i> المخزن <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="form.html">عرص الاصناف</a></li>
                   </ul>
                </li>
                <li><a><i class="fa fa-shopping-cart"></i> المشتريات <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="form.html">فاتورة مشتريات</a></li>
                    <li><a href="form.html">مرتجعات مشتريات</a></li>
                    <li><a href="suppliers">الموردين</a></li>
                   </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>التحكم</h3>
              <ul class="nav side-menu">
                <li>
                  <a><i class="fa fa-shopping-cart"></i> الضبط <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="form.html"> المخازن </a></li>
                        <li><a href="itemnamecreate"> مسميات الاصناف </a></li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
       