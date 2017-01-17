<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar " >

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }} </p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview ">
                <a href="#">
                    <i class="fa  fa-home"></i>
                    <span>Accueil</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu ">
                    <li><a href="{{ url('/leaveRequest') }}"><i class="fa fa-circle-o"></i>Acceuil RH</a></li>
                    <li><a href="{{ url('/leaveRequest') }}"><i class="fa fa-circle-o"></i>Acceuil employé</a></li>
                </ul>
            </li>
            @include('layouts.sidebar_menus.contracts')
            @include('layouts.sidebar_menus.recruitment')

           @include('layouts.sidebar_menus.employees')

            @include('layouts.sidebar_menus.payroll')
            @include('layouts.sidebar_menus.pars')
            <li class="treeview ">
                <a href="#">
                    <i class="fa  fa-sitemap"></i>
                    <span>Organigramme</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu ">
                    <li><a href="{{ url('/organization/chart') }}"><i class="fa fa-circle-o"></i>Structure</a></li>
                    <li><a href="{{ url('/departement/create') }}"><i class="fa fa-circle-o"></i>Département</a></li>
                </ul>
            </li>

           @include('layouts.sidebar_menus.leave')
           @include('layouts.sidebar_menus.performance')
            @include('layouts.sidebar_menus.importations')


            <!-- Optionally, you can add icons to the links -->
           @include('layouts.sidebar_menus.settings')

            <li class="treeview ">
                <a href="#">
                    <i class="fa  fa-home"></i>
                    <span>Paramètres avancés</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu ">
                    <li><a href="{{ url('/departement/create') }}"><i class="fa fa-circle-o"></i>Pays</a></li>
                    <li><a href="{{ url('/leaveRequest/create') }}"><i class="fa fa-circle-o"></i>Monnaies</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i>Compteurs de congé</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Gestion des utilisateurs</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/user')}}"><i class="fa fa-circle-o"></i>Utilisateurs</a></li>
                    <li><a href="{{url('/resource')}}"><i class="fa fa-circle-o"></i>Ressources</a></li>
                    <li><a href="{{url('/permission')}}"><i class="fa fa-circle-o"></i>Permissions</a></li>
                    <li><a href="{{url('/role')}}"><i class="fa fa-circle-o"></i>Rôles</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-home"></i> <span>Bureaux de CARE</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/office')}}"><i class="fa fa-circle-o"></i>Liste des bureaux</a></li>
                    <li><a href="{{url('/resource')}}"><i class="fa fa-circle-o"></i>Liste des départements</a></li>
                    <li><a href="{{url('/permission')}}"><i class="fa fa-circle-o"></i>Permissions</a></li>
                    <li><a href="{{url('/role')}}"><i class="fa fa-circle-o"></i>Rôles</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-home"></i> <span>Bureaux de CARE</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/currencies')}}"><i class="fa fa-circle-o"></i>Monnaies</a></li>
                    <li><a href="{{url('/resource')}}"><i class="fa fa-circle-o"></i>Liste des départements</a></li>
                    <li><a href="{{url('/permission')}}"><i class="fa fa-circle-o"></i>Permissions</a></li>
                    <li><a href="{{url('/role')}}"><i class="fa fa-circle-o"></i>Rôles</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>