<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\ApiKey;
use Ramsey\Uuid\Uuid;

class ApiKeyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'API Keys';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ApiKey());

        $grid->column('id', __('Id'));
        $grid->column('api_key', __('API Key'))->width(500);
        $grid->column('products', __('Products'))->bool([1 => true, 0 => false]);
        $grid->column('orders', __('Orders'))->bool([1 => true, 0 => false]);
        $grid->column('files', __('Files'))->bool([1 => true, 0 => false]);
        $grid->column('clients', __('Clients'))->bool([1 => true, 0 => false]);
        $grid->column('status', __('Status'))->display(function ($status) {
            $label = $status == 1 ? 'Active' : 'Inactive';
            $color = $status == 1 ? 'green' : 'red';
            return "<span style='color: $color;'>$label</span>";
        });
        $grid->column('created_at', __('Created at'))->dateFormat('Y-m-d');
        $grid->column('updated_at', __('Updated at'))->dateFormat('Y-m-d');
        $grid->column('deleted_at', __('Deleted at'))->dateFormat('Y-m-d');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ApiKey::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('api_key', __('API Key'));
        $show->field('products', __('Products'))->using([1 => 'Enabled', 0 => 'Disabled']);
        $show->field('orders', __('Orders'))->using([1 => 'Enabled', 0 => 'Disabled']);
        $show->field('files', __('Files'))->using([1 => 'Enabled', 0 => 'Disabled']);
        $show->field('clients', __('Clients'))->using([1 => 'Enabled', 0 => 'Disabled']);
        $show->field('status', __('Status'))->using([1 => 'Active', 0 => 'Inactive']);
        $show->field('created_at', __('Created at'))->dateFormat('Y-m-d');
        $show->field('updated_at', __('Updated at'))->dateFormat('Y-m-d');
        $show->field('deleted_at', __('Deleted at'))->dateFormat('Y-m-d');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ApiKey());
        $form->select('status','Status')->options([1 => 'Active', 0 => 'Inactive'])->default(1);
        // Generate a UUID for the API Key
        $apiKey = Uuid::uuid4()->toString();
        $form->text('api_key', __('API Key'))->default($apiKey)->readonly();
        $form->switch('products', __('Products'))->default(1);
        $form->switch('orders', __('Orders'))->default(1);
        $form->switch('files', __('Files'))->default(1);
        $form->switch('clients', __('Clients'))->default(1);

        return $form;
    }
}