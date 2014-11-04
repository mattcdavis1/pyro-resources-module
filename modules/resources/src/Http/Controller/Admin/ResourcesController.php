<?php namespace Anomaly\Streams\Addon\Module\Resources\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;

class ResourcesController extends AdminController
{
    /**
     * Return the table UI for users.
     *
     * @param UsersTableUi $ui
     * @return string
     */
    public function index(UsersTableUi $ui)
    {
        return $ui->render();
    }

    /**
     * Return the form UI for creating a new user.
     *
     * @param UserFormUi $ui
     * @return mixed
     */
    public function create(UserFormUi $ui)
    {
        return $ui->render();
    }

    /**
     * Return the form UI for an existing user.
     *
     * @param UserFormUi $ui
     * @param            $id
     * @return mixed
     */
    public function edit(UserFormUi $ui, $id)
    {
        return $ui->render($id);
    }
}
