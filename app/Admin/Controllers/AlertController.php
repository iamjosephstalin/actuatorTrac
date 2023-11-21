<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Alert;

class AlertController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Alert';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Alert());

        $grid->column('id', __('Id'));
        $grid->column('act_id', __('Act id'));
        $grid->column('alert_trigger', __('Alert trigger'));
        $grid->column('alert_date', __('Alert date'));
        $grid->column('alert_status', __('Alert status'));
        $grid->column('alert_desc', __('Alert desc'));
        $grid->column('created_at', __('Created at'))->dateFormat('d-M-Y');
        $grid->column('updated_at', __('Updated at'))->dateFormat('d-M-Y');
        $grid->column('deleted_at', __('Deleted at'))->dateFormat('d-M-Y');

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
        $show = new Show(Alert::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('act_id', __('Act id'));
        $show->field('alert_trigger', __('Alert trigger'));
        $show->field('alert_date', __('Alert date'));
        $show->field('alert_status', __('Alert status'));
        $show->field('alert_desc', __('Alert desc'));
        $show->field('created_at', __('Created at'))->dateFormat('d-M-Y');
        $show->field('updated_at', __('Updated at'))->dateFormat('d-M-Y');
        $show->field('deleted_at', __('Deleted at'))->dateFormat('d-M-Y');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Alert());

        $form->number('act_id', __('Act id'));
        $form->textarea('alert_trigger', __('Alert trigger'));
        $form->date('alert_date', __('Alert date'))->default(date('d-m-Y'));
        $form->text('alert_status', __('Alert status'))->default('Open');
        $form->textarea('alert_desc', __('Alert desc'));

        return $form;
    }
}
