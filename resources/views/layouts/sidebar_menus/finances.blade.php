<li class="treeview ">
    <a href="#">
        <i class="fa  fa-database"></i>
        <span>Gestion des codes budgétaires</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu ">
        <li><a href="{{ url('/leaveRequest') }}"><i class="fa fa-circle-o"></i> Fund code</a></li>
        <li><a href="{{ url('leaveRequests/myRequests') }}"><i class="fa fa-circle-o"></i>Mes demandes</a></li>/
        <li><a href="{{ url('/leaveRequest/create') }}"><i class="fa fa-circle-o"></i> Formulaire de demande</a></li>

        @if(Auth::user()->employee->employees()->exists())
            <li>
                <a  href=""><i class="fa fa-circle-o"></i> Demandes entrantes <i class="fa fa-angle-left pull-right"></i></a>
            </li>
        @endif
        <li><a href="{{ url('/leave/accounts') }}"><i class="fa fa-circle-o"></i> Mes comptes congés</a></li>
        <li><a href="{{ url('/holiday_lists/create') }}"><i class="fa fa-circle-o"></i> Liste des jours fériés</a></li>
    </ul>
</li>

