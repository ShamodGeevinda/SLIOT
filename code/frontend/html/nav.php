<div class="app-header info box-shadow-z4 navbar-md bg-success">
    <div class="navbar navbar-toggleable-sm flex-row align-items-center bg-success">
        <!-- Open side - Naviation on mobile -->
        <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
            <i class="material-icons">&#xe5d2;</i>
        </a>
        <!-- / -->

        <!-- Page title - Bind to $state's title -->
        <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>

        <!-- navbar collapse -->
        <div class="collapse navbar-collapse" id="collapse">
            <!-- link and dropdown -->
            <ul class="nav navbar-nav mr-auto">
                <!-- <li class="nav-item dropdown"> -->
                <a class="nav-link" href="index.php">
                    <!-- <i class="fa fa-fw fa-plus text-muted"></i> -->
                    <span>Home</span>
                </a>
                <a class="nav-link" href="monitor.php">
                    <!-- <i class="fa fa-fw fa-plus text-muted"></i> -->
                    <span>Monitor</span>
                </a>
                <a class="nav-link" href="#" data-toggle="dropdown">
                    <!-- <i class="fa fa-fw fa-plus text-muted"></i> -->
                    <span>Inventory</span>
                </a>
                <div ui-include="'../views/blocks/dropdown.new.html'"></div>
                <!-- </li> -->
            </ul>

            <div ui-include="'../views/blocks/navbar.form.html'"></div>
            <!-- / -->
        </div>