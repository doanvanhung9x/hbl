<?php

namespace Modules\Contact\Sidebar;

use Maatwebsite\Sidebar\Menu;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Group;
use Modules\Admin\Sidebar\BaseSidebarExtender;

class SidebarExtender extends BaseSidebarExtender
{
    public function extend(Menu $menu)
    {
        $menu->group(trans('admin::sidebar.content'), function (Group $group) {
            $group->item(trans('contact::contacts.contacts'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(30);
                $item->route('admin.contacts.index');
                $item->authorize(
                    $this->auth->hasAccess('admin.contacts.index')
                );
            });
        });
    }
}
