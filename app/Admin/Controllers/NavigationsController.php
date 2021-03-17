<?php

namespace App\Admin\Controllers;

use App\Models\Groups;
use App\Models\Navigations;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Cache;

class NavigationsController extends AdminController
{
    protected $title ='Navigations';

    protected function grid()
    {
        $grid = new Grid(new Navigations());

        // $grid->column('id', __('Id'));
        // $grid->column('name', __('Name'));
        // $grid->column('email', __('Email'));
        // $grid->column('password', __('Password'));
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

        $grid->column('id', __('Id'));
        $grid->column('parent', __('Parent'));
        $grid->column('group', __('Group'))->display(function () {
            return $this->group->group;
        });
        $grid->column('title', __('Title'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Navigations::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('parent', __('Parent'));
        $show->field('group', __('Group'));
        $show->field('title', __('Title'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Navigations());

        $form->select('group_id')->options(Groups::all()->pluck('group','id'));

        $form->hidden('parent')->default(1);

        $form->textarea('title', __('Title'));
        

        $form->saving(function (Form $form) {
            $form->parent = Navigations::where([['parent',0],['group_id',$form->group_id]])->first()->id;
            Cache::pull('navbar');
        });

        return $form;
    }
}