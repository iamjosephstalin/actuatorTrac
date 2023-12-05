<?php

namespace App\Admin\Controllers;

use \App\Models\Unit;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class UnitController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Unit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Unit());
        $grid->column('unit', __('Unit'));
        $grid->column('is_default', __('Default'))->switch();
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
        $show = new Show(Unit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('unit', __('Unit'));
        $show->field('is_default', __('Is default'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Unit());

        $form->text('unit', __('Unit'));
        $form->switch('is_default', __('Is default'));

        return $form;
    }

      // Override the update operation to handle custom logic
      public function update($id)
      {
          $input = request()->all();
          if (isset($input['is_default']) && $input['is_default']) {
            Unit::where('id', '<>', $id)->update(['is_default' => false]);
          }
          $result = parent::update($id);
          return $result;
      }
}
