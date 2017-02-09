<li class="treeview ">
    <a href="#">
        <i class="fa fa-search "></i>
        <span>Recrutement</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu ">
        <li><a href="{{ url('/openings') }}"><i class="fa fa-circle-o"></i> Offres d'emplois</a></li>
        <li><a href="{{ url('/openings/create') }}"><i class="fa fa-circle-o"></i> Nouvelle offre d'emploi</a></li>
        <li><a href="{{ url('/positions/create') }}"><i class="fa fa-circle-o"></i>Nouvelle position</a></li>
    </ul>
</li>