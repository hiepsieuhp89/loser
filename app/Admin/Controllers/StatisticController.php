<?php

namespace App\Admin\Controllers;

use App\Models\Statistic;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class StatisticController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Statistic';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Statistic());

        $grid->column('id', __('Id'));
        $grid->column('visits_count', __('Visits count'));
        $grid->column('docs_count', __('Docs count'));
        $grid->column('generating_number_count', __('Generating number count'));
        $grid->column('messages_sent_count', __('Messages sent count'));
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
        $show = new Show(Statistic::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('visits_count', __('Visits count'));
        $show->field('docs_count', __('Docs count'));
        $show->field('generating_number_count', __('Generating number count'));
        $show->field('messages_sent_count', __('Messages sent count'));
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
        $form = new Form(new Statistic());

        $form->number('visits_count', __('Visits count'));
        $form->number('docs_count', __('Docs count'));
        $form->number('generating_number_count', __('Generating number count'));
        $form->number('messages_sent_count', __('Messages sent count'));

        return $form;
    }
}
