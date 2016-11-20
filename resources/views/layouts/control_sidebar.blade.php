<aside class="control-sidebar control-sidebar-dark" >
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div id="notifications">
        <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Dernières notifications</h3>
            <div id="scroll">
            <ul class="control-sidebar-menu">

                <li  v-for="notification in notifications">
                    <a :href="notification_url(notification.route)">
                        <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">@{{notification.category}}</h4>
                            <p>@{{notification.trigger_name}}</p>
                            <p>@{{notification.created_at.date | time_ago}}</p>
                        </div>
                    </a>
                </li>

            </ul>
            </div>
            <!-- /.control-sidebar-menu -->

        </div>
        </div>
    </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>