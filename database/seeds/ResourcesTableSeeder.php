<?php

use Illuminate\Database\Seeder;
use App\Resource;
use App\Permission;
class ResourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $resource = new Resource();
        $resource->name = 'leave-requests';
        $resource->display_name='demande de congés';
        $resource->description='bla bla bla bla bla bla bla';
        $resource->save();


        $permission = new Permission();
        $permission->name = 'can-view-leave-requests';
        $permission->shortName = 'can-view';
        $permission->display_name='peut voir les demandes de congés';
        $resource->permissions()->save($permission);


        $permission = new Permission();
        $permission->name = 'can-submit-leave-requests';
        $permission->shortName = 'can-submit';
        $permission->display_name='peut soumettre des demandes de congés';
        $resource->permissions()->save($permission);
    }
}
