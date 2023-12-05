<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Tag;

class TagController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Tags';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Tag());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'))->width(300)->filter('like');
        $grid->column('color', __('Color'))->filter('like')->display(function ($color) {
            return "<div style='width: 90px; height: 20px; border-radius: 6px; border: 1px solid #d4d4d4; background-color: $color;'></div>";
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
        $show = new Show(Tag::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('color', __('Color'))->as(function ($color) {
            return "<div style='width: 90px; height: 20px; border-radius: 6px; border: 1px solid #d4d4d4; background-color: $color;'></div>";
        })->unescape();
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
        $form = new Form(new Tag());

        $form->text('name', __('Name'));
        $form->color('color', __('Color'));

        return $form;
    }
}