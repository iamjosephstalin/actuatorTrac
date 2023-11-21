<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\ActuatorType;
use \App\Models\ActuatorModel;
use \App\Models\MotionType;

class ActuatorTypeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ActuatorType';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ActuatorType());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('motion_type', __('Motion type'))->label();;
        $grid->column('actuator_model', __('Actuator model'))->label();;
        $grid->column('created_at', __('Created at'))->dateFormat('d-M-Y');
        $grid->column('updated_at', __('Updated at'))->dateFormat('d-M-Y');
        // $grid->column('deleted_at', __('Deleted at'));

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
        $show = new Show(ActuatorType::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('motion_type', __('Motion type'));
        $show->field('actuator_model', __('Actuator model'));
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
        $form = new Form(new ActuatorType());

        $form->text('name', __('Name'));
        $form->multipleSelect('motion_type')->options(MotionType::all()->pluck('name', 'id'));
        $form->multipleSelect('actuator_model')->options(ActuatorModel::all()->pluck('name', 'id'));
        // $form->text('motion_type', __('Motion type'));
        // $form->text('actuator_model', __('Actuator model'));

        return $form;
    }
}
