<?php

namespace App\Admin\Controllers;

use App\Models\Document;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DocumentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Document';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Document());

        $grid->model()->orderBy('id','DESC');
        $grid->column('id', __('Id'));
        $grid->column('category_id', __('Category id'));
        $grid->column('name', __('Name'));
        $grid->column('title', __('Title'));
        $grid->column('content', __('Content'));
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Document::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('name', __('Name'));
        $show->field('title', __('Title'));
        $show->field('content', __('Content'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Document());

        $form->number('category_id', __('Category id'));
        $form->textarea('name', __('Name'));
        $form->textarea('title', __('Title'));
        $form->textarea('content', __('Content'));
        $form->number('status', __('Status'));

        return $form;
    }
}
