<?php

namespace App\Admin\Controllers;

use \App\Models\Currency;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class CurrencyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Currency';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Currency());
        $grid->column('currency_name', __('Currency name'));
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
        $show = new Show(Currency::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('currency_name', __('Currency name'));
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
        $form = new Form(new Currency());

        $form->text('currency_name', __('Currency name'));
        $form->switch('is_default', __('Is default'));

        return $form;
    }

    // Override the update operation to handle custom logic
    public function update($id)
    {
        $input = request()->all();
        if (isset($input['is_default']) && $input['is_default']) {
            Currency::where('id', '<>', $id)->update(['is_default' => false]);
        }
        $result = parent::update($id);
        return $result;
    }
}
