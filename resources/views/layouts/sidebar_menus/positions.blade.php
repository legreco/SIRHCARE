<li class="treeview ">
    <a href="#">
        <i class="fa fa-search "></i>
        <span>Gestion des postes</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu ">
        <li><a href="{{ url('/positions') }}"><i class="fa fa-circle-o"></i> Postes</a></li>
        <li><a href="{{ url('/fonction/create') }}"><i class="fa fa-circle-o"></i> Nouvelle fonction</a></li>
        <li><a href="{{ url('/openings') }}"><i class="fa fa-circle-o"></i>Offres d'emploi</a></li>
    </ul>
</li>