<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Actuator;

class ActuatorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Actuator';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Actuator());

        $grid->column('id', __('Id'))->qrcode();
        $grid->column('motion_type', __('Motion type'));
        $grid->column('actuator_type', __('Actuator type'));
        $grid->column('actuator_model', __('Actuator model'));
        $grid->column('actuator_mfg', __('Actuator mfg'));
        $grid->column('customer', __('Customer'));
        $grid->column('int_order_no', __('Int order no'));
        $grid->column('serial_no', __('Serial no'));
        $grid->column('mfg_date', __('Mfg date'))->dateFormat('d-M-Y');
        $grid->column('warranty_exp_date', __('Warranty exp date'))->dateFormat('d-M-Y');
        $grid->column('catelogue', __('Catelogue'));
        $grid->column('iom', __('Iom'));
        $grid->column('location', __('Location'));
        $grid->column('created_at', __('Created at'))->dateFormat('d-M-Y');
        $grid->column('updated_at', __('Updated at'))->dateFormat('d-M-Y');

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
        $show = new Show(Actuator::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('motion_type', __('Motion type'));
        $show->field('actuator_type', __('Actuator type'));
        $show->field('actuator_model', __('Actuator model'));
        $show->field('actuator_mfg', __('Actuator mfg'));
        $show->field('customer', __('Customer'));
        $show->field('int_order_no', __('Int order no'));
        $show->field('serial_no', __('Serial no'));
        $show->field('mfg_date', __('Mfg date'))->dateFormat('d-M-Y');
        $show->field('warranty_exp_date', __('Warranty exp date'))->dateFormat('d-M-Y');
        $show->field('catelogue', __('Catelogue'));
        $show->field('iom', __('Iom'));
        $show->field('location', __('Location'));
        $show->field('created_at', __('Created at'))->dateFormat('d-M-Y');
        $show->field('updated_at', __('Updated at'))->dateFormat('d-M-Y');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Actuator());

        $form->text('motion_type', __('Motion type'));
        $form->text('actuator_type', __('Actuator type'));
        $form->text('actuator_model', __('Actuator model'));
        $form->text('actuator_mfg', __('Actuator mfg'));
        $form->text('customer', __('Customer'));
        $form->text('int_order_no', __('Int order no'));
        $form->text('serial_no', __('Serial no'));
        $form->date('mfg_date', __('Mfg date'))->default(date('Y-m-d'));
        $form->date('warranty_exp_date', __('Warranty exp date'))->default(date('Y-m-d'));
        $form->text('catelogue', __('Catelogue'));
        $form->text('iom', __('Iom'));
        $form->text('location', __('Location'));

        return $form;
    }
}
