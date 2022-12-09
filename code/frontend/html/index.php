<?php include 'head.php'; ?>

<body>
  <div class="app" id="app">
    <!-- ############ LAYOUT START-->

    <!-- content -->
    <div id="content" class="app-content box-shadow-z3" role="main">
      <?php include 'nav.php'; ?>
      <!-- / navbar collapse -->

      <!-- navbar right -->
      <ul class="nav navbar-nav ml-auto flex-row">
        <li class="nav-item dropdown pos-stc-xs">
          <a class="nav-link mr-2" href data-toggle="dropdown">
            <i class="material-icons">&#xe7f5;</i>
            <span class="label label-sm up warn">3</span>
          </a>
          <div ui-include="'../views/blocks/dropdown.notification.html'"></div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
            <span class="avatar w-32">
              <img src="../assets/images/a0.jpg" alt="..." />
              <i class="on b-white bottom"></i>
            </span>
          </a>
          <div ui-include="'../views/blocks/dropdown.user.html'"></div>
        </li>
        <li class="nav-item hidden-md-up">
          <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
            <i class="material-icons">&#xe5d4;</i>
          </a>
        </li>
      </ul>
      <!-- / navbar right -->
    </div>
  </div>
  <?php include 'footer.php'; ?>



  <div class="app-body" id="view">
    <!-- ############ PAGE START-->
    <div class="padding">
      <div class="margin">
        <h5 class="mb-0 _300">Hi Framer, Welcome back</h5>
        <small class="text-muted">Automate and monitor your cucumber plantation here</small>
      </div>



      <div class="row">

        <div class="col-md-12 col-xl-4">
          <div class="box">
            <div class="box-header">
              <h3>NPK</h3>
              <small>Distribution of fertilizers</small>

              <div class="legend">
                <div style="
                          position: absolute;
                          width: 59px;
                          height: 48px;
                          top: 5px;
                          right: 5px;
                          background-color: transparent;
                          opacity: 0.85;
                        "></div>
                <table style="
                          position: absolute;
                          top: 5px;
                          right: 120px;
                          font-size: smaller;
                          color: rgba(120, 120, 120, 0.5);
                        ">
                  <tbody>
                    <tr>
                      <td class="legendColorBox">
                        <div style="border: 1px solid #ccc; padding: 1px">
                          <div style="
                                    width: 4px;
                                    height: 0;
                                    border: 5px solid rgb(12, 194, 170);
                                    overflow: hidden;
                                  "></div>
                        </div>
                      </td>
                      <td class="legendLabel">Nitrogen</td>
                    </tr>
                    <tr>
                      <td class="legendColorBox">
                        <div style="border: 1px solid #ccc; padding: 1px">
                          <div style="
                                    width: 4px;
                                    height: 0;
                                    border: 5px solid rgb(252, 193, 0);
                                    overflow: hidden;
                                  "></div>
                        </div>
                      </td>
                      <td class="legendLabel">Phosphorus</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="box-tool">
                <ul class="nav">
                  <li class="nav-item inline">
                    <a class="nav-link">
                      <i class="material-icons md-18">&#xe863;</i>
                    </a>
                  </li>
                  <li class="nav-item inline dropdown">
                    <a class="nav-link" data-toggle="dropdown">
                      <i class="material-icons md-18">&#xe5d4;</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-scale pull-right">
                      <a class="dropdown-item" href>This week</a>
                      <a class="dropdown-item" href>This month</a>
                      <a class="dropdown-item" href>This week</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item">Today</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="box-body">
              <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
              [
                { 
                  data: [[1, 6.1], [2, 6.3], [3, 6.4], [4, 6.6], [5, 7.0], [6, 7.7], [7, 8.3]], 
                  points: { show: true, radius: 0}, 
                  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0 } 
                },
                { 
                  data: [[1, 5.5], [2, 5.7], [3, 6.4], [4, 7.0], [5, 7.2], [6, 7.3], [7, 7.5]], 
                  points: { show: true, radius: 0}, 
                  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0 } 
                }
              ], 
              {
                colors: ['#0cc2aa','#fcc100'],
                series: { shadowSize: 3 },
                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
                yaxis:{ show: true, font: { color: '#ccc' }},
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
                tooltip: true,
                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
              }
            " style="height: 350px; padding: 0px; position: relative">
                <canvas class="flot-base" width="317" height="350" style="
                          direction: ltr;
                          position: absolute;
                          left: 0px;
                          top: 0px;
                          width: 317px;
                          height: 350px;
                        "></canvas>
                <div class="flot-text" style="
                          position: absolute;
                          inset: 0px;
                          font-size: smaller;
                          color: rgb(84, 84, 84);
                        ">
                  <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px; display: block">
                    <div style="
                              position: absolute;
                              max-width: 45px;
                              top: 187px;
                              font: 400 11px / 13px Roboto, 'Helvetica Neue',
                                Helvetica, Arial, sans-serif;
                              color: rgb(204, 204, 204);
                              left: 17px;
                              text-align: center;
                            ">
                      1
                    </div>
                    <div style="
                              position: absolute;
                              max-width: 45px;
                              top: 187px;
                              font: 400 11px / 13px Roboto, 'Helvetica Neue',
                                Helvetica, Arial, sans-serif;
                              color: rgb(204, 204, 204);
                              left: 66px;
                              text-align: center;
                            ">
                      2
                    </div>
                    <div style="
                              position: absolute;
                              max-width: 45px;
                              top: 187px;
                              font: 400 11px / 13px Roboto, 'Helvetica Neue',
                                Helvetica, Arial, sans-serif;
                              color: rgb(204, 204, 204);
                              left: 115px;
                              text-align: center;
                            ">
                      3
                    </div>
                    <div style="
                              position: absolute;
                              max-width: 45px;
                              top: 187px;
                              font: 400 11px / 13px Roboto, 'Helvetica Neue',
                                Helvetica, Arial, sans-serif;
                              color: rgb(204, 204, 204);
                              left: 164px;
                              text-align: center;
                            ">
                      4
                    </div>
                    <div style="
                              position: absolute;
                              max-width: 45px;
                              top: 187px;
                              font: 400 11px / 13px Roboto, 'Helvetica Neue',
                                Helvetica, Arial, sans-serif;
                              color: rgb(204, 204, 204);
                              left: 213px;
                              text-align: center;
                            ">
                      5
                    </div>
                    <div style="
                              position: absolute;
                              max-width: 45px;
                              top: 187px;
                              font: 400 11px / 13px Roboto, 'Helvetica Neue',
                                Helvetica, Arial, sans-serif;
                              color: rgb(204, 204, 204);
                              left: 262px;
                              text-align: center;
                            ">
                      6
                    </div>
                    <div style="
                              position: absolute;
                              max-width: 45px;
                              top: 187px;
                              font: 400 11px / 13px Roboto, 'Helvetica Neue',
                                Helvetica, Arial, sans-serif;
                              color: rgb(204, 204, 204);
                              left: 311px;
                              text-align: center;
                            ">
                      7
                    </div>
                  </div>
                  <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block">
                    <div style="
                              position: absolute;
                              top: 176px;
                              font: 400 11px / 13px Roboto, 'Helvetica Neue',
                                Helvetica, Arial, sans-serif;
                              color: rgb(204, 204, 204);
                              left: 0px;
                              text-align: right;
                            ">
                      5.0
                    </div>
                    <div style="
                              position: absolute;
                              top: 151px;
                              font: 400 11px / 13px Roboto, 'Helvetica Neue',
                                Helvetica, Arial, sans-serif;
                              color: rgb(204, 204, 204);
                              left: 0px;
                              text-align: right;
                            ">
                      5.5
                    </div>
                    <div style="
                              position: absolute;
                              top: 126px;
                              font: 400 11px / 13px Roboto, 'Helvetica Neue',
                                Helvetica, Arial, sans-serif;
                              color: rgb(204, 204, 204);
                              left: 0px;
                              text-align: right;
                            ">
                      6.0
                    </div>
                    <div style="
                              position: absolute;
                              top: 101px;
                              font: 400 11px / 13px Roboto, 'Helvetica Neue',
                                Helvetica, Arial, sans-serif;
                              color: rgb(204, 204, 204);
                              left: 0px;
                              text-align: right;
                            ">
                      6.5
                    </div>
                    <div style="
                              position: absolute;
                              top: 76px;
                              font: 400 11px / 13px Roboto, 'Helvetica Neue',
                                Helvetica, Arial, sans-serif;
                              color: rgb(204, 204, 204);
                              left: 0px;
                              text-align: right;
                            ">
                      7.0
                    </div>
                    <div style="
                              position: absolute;
                              top: 51px;
                              font: 400 11px / 13px Roboto, 'Helvetica Neue',
                                Helvetica, Arial, sans-serif;
                              color: rgb(204, 204, 204);
                              left: 0px;
                              text-align: right;
                            ">
                      7.5
                    </div>
                    <div style="
                              position: absolute;
                              top: 26px;
                              font: 400 11px / 13px Roboto, 'Helvetica Neue',
                                Helvetica, Arial, sans-serif;
                              color: rgb(204, 204, 204);
                              left: 0px;
                              text-align: right;
                            ">
                      8.0
                    </div>
                    <div style="
                              position: absolute;
                              top: 1px;
                              font: 400 11px / 13px Roboto, 'Helvetica Neue',
                                Helvetica, Arial, sans-serif;
                              color: rgb(204, 204, 204);
                              left: 0px;
                              text-align: right;
                            ">
                      8.5
                    </div>
                  </div>
                </div>
                <canvas class="flot-overlay" width="317" height="350" style="
                          direction: ltr;
                          position: absolute;
                          left: 0px;
                          top: 0px;
                          width: 317px;
                          height: 350px;
                        "></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="box">
            <div class="box-header">
              <h3>Moisture</h3>
              <small>Moisture content in soil</small>
            </div>
            <div class="box-tool">
              <ul class="nav">
                <li class="nav-item inline">
                  <a class="nav-link">
                    <i class="material-icons md-18">&#xe863;</i>
                  </a>
                </li>
                <li class="nav-item inline dropdown">
                  <a class="nav-link" data-toggle="dropdown">
                    <i class="material-icons md-18">&#xe5d4;</i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-scale pull-right">
                    <a class="dropdown-item" href>This week</a>
                    <a class="dropdown-item" href>This month</a>
                    <a class="dropdown-item" href>This week</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item">Today</a>
                  </div>
                </li>
              </ul>
            </div>
            <div class="box-body">
              <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
	              [
	                { data: [[1, 3], [2, 2.6], [3, 3.2], [4, 3], [5, 3.5], [6, 3], [7, 3.5]], 
	                  points: { show: true, radius: 0}, 
                  	  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0.2 } 
	                },
	                { data: [[1, 3.6], [2, 3.5], [3, 6], [4, 4], [5, 4.3], [6, 3.5], [7, 3.6]], 
	                  points: { show: true, radius: 0}, 
                  	  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0.1 } 
	                }
	              ], 
	              {
	                colors: ['#fcc100','#0cc2aa'],
	                series: { shadowSize: 3 },
	                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
	                yaxis:{ show: true, font: { color: '#ccc' },  min: 2},
	                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
	                tooltip: true,
	                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
	              }
	            " style="height: 350px"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-4">
          <div class="box">
            <div class="box-header">
              <h3>pH</h3>
              <small>pH value of soil</small>
            </div>
            <div class="box-tool">
              <ul class="nav">
                <li class="nav-item inline">
                  <a class="nav-link">
                    <i class="material-icons md-18">&#xe863;</i>
                  </a>
                </li>
                <li class="nav-item inline dropdown">
                  <a class="nav-link" data-toggle="dropdown">
                    <i class="material-icons md-18">&#xe5d4;</i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-scale pull-right">
                    <a class="dropdown-item" href>This week</a>
                    <a class="dropdown-item" href>This month</a>
                    <a class="dropdown-item" href>This week</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item">Today</a>
                  </div>
                </li>
              </ul>
            </div>
            <div class="box-body">
              <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
	              [
	                { data: [[1, 2], [2, 4], [3, 5], [4, 7], [5, 6], [6, 4], [7, 5], [8, 4]] },
	                { data: [[1, 2], [2, 3], [3, 2], [4, 5], [5, 4], [6, 3], [7, 4], [8, 2]] }
	              ], 
	              {
	                bars: { show: true, fill: true,  barWidth: 0.3, lineWidth: 2, order: 1, fillColor: { colors: [{ opacity: 0.2 }, { opacity: 0.2}] }, align: 'center'},
	                colors: ['#0cc2aa','#fcc100'],
	                series: { shadowSize: 3 },
	                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
	                yaxis:{ show: true, font: { color: '#ccc' }},
	                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
	                tooltip: true,
	                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
	              }
	            " style="height: 350px"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ############ PAGE END-->
  </div>
  </div>
  <!-- / -->

  <!-- theme switcher -->

  <!-- / -->

  <!-- ############ LAYOUT END-->
  </div>
  <?php include 'scripts.php'; ?>
</body>

</html>