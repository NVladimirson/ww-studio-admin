<?php

namespace App\Admin\Controllers;

use App\Models\Groups;
use App\Models\Navigations;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GroupsController extends AdminController
{
    protected $title ='Groups';

    protected function grid()
    {
        $grid = new Grid(new Groups());

        $grid->column('id', __('Id'));
        $grid->column('group', __('Group'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Groups::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('group', __('Group'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Groups());

        $form->textarea('group', __('Group'));

        return $form;
    }
}