<li class="treeview ">
    <a href="#">
        <i class="fa  fa-sitemap"></i>
        <span>PARs</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu ">
        <li><a href="{{ url('/pars/create')}}"><i class="fa fa-file-text-o"></i> Nouveau PAR</a></li>
        <li><a href="{{ url('/pars') }}"><i class="fa fa-paper-plane"></i> PAR Soumis</a></li>
        <li><a href="{{ url('/pars') }}"><i class="fa fa-circle-o"></i> PAR drafts</a></li>
    </ul>
</li>