<?php

namespace RedJasmine\User\Http\Controllers\Admin;

use RedJasmine\User\Repositories\User;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class UserController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {


        return Grid::make(new User(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('owner_type');
            $grid->column('owner_uid');
            $grid->column('username');
            $grid->column('mobile');
            $grid->column('nickname');
            $grid->column('avatar');
            $grid->column('email');
            $grid->column('password');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new User(), function (Show $show) {
            $show->field('id');
            $show->field('owner_type');
            $show->field('owner_uid');
            $show->field('username');
            $show->field('mobile');
            $show->field('nickname');
            $show->field('avatar');
            $show->field('email');
            $show->field('password');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new User(), function (Form $form) {
            $form->display('id');
            $form->text('owner_type');
            $form->text('owner_uid');
            $form->text('username');
            $form->text('mobile');
            $form->text('nickname');
            $form->text('avatar');
            $form->text('email');
            $form->text('password');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
