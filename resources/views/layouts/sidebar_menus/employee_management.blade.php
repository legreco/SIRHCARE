<li class="treeview ">
    <a href="#">
        <i class="fa  fa-users"></i>
        <span>Gestion du personnel</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{ url('/employees/create') }}"><i class="fa fa-circle-o"></i>Nouvel employé</a></li>
        <li><a href="{{ url('/employees') }}"><i class="fa fa-circle-o"></i>Liste des employés</a></li>
        <li><a href="{{ url('/employees') }}"><i class="fa fa-circle-o"></i>Gestion des contrats</a></li>
    </ul>
</li>