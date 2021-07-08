<?php

namespace App\Admin\Controllers;

use App\Models\CountDown;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CountDownController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CountDown';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CountDown());

        $grid->column('title', 'Tiêu đề');
        $grid->column('endTime', 'Ngày kết thúc');
        $grid->column('background', 'Hình nền');

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
        $show = new Show(CountDown::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new CountDown());
        $form->text('title');
        $form->text('background');
        $form->datetime('endTime')->format('YYYY-MM-DD HH:mm:ss');


        return $form;
    }
}
