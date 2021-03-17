<?php

namespace App\Admin\Controllers;

use App\Models\Groups;
use App\Models\Navigations;
use App\Models\Sections;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Cache;
use phpDocumentor\Reflection\Types\Null_;

class SectionsController extends AdminController
{
    protected $title ='Sections';

    protected function grid()
    {
        $grid = new Grid(new Sections());

        $grid->column('id', __('Id'));
        $grid->column('position', __('Position'));
        $grid->column('navigation', __('Navigation'))->display(function () {
            return $this->navigation->title;
        });
        $grid->column('html', __('Html'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Sections::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('position', __('Position'));
        $show->field('navigation', __('Navigation'))->display(function () {
            return $this->navigation->title;
        });
        $show->field('html', __('Html'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Sections());


        $form->select('navigation_id')->options(Navigations::all()->pluck('title','id'));

        $form->number('position')->default(1);

        $standart_section_htmls = Sections::limit(5)->get()->pluck('html','id');
        foreach($standart_section_htmls as $key => $html){
            $standart_sections[0] = 'Выберите шаблон';

            if($key == 1){
                $standart_sections[$key] = 'Керування зображенням та текстом';
            }
            if($key == 2){
                $standart_sections[$key] = 'ДЕ ВОНИ СТОЯТЬ';
            }
            if($key == 3){
                $standart_sections[$key] = '3 КРОКИ ДО СТУПЕНЮ НАВЧАННЯ ВАШИХ ПРОДАЖ';
            }
            if($key == 4){
                $standart_sections[$key] = 'Контактна форма';
            }
            if($key == 5){
                $standart_sections[$key] = 'Сайдбари';
            }
        }

         $form->hidden('html')->default('');
 
        $form->select('standart_sections')->options($standart_sections)->
        when(0, function (Form $form) use ($standart_section_htmls){

            $form->ckeditor('html0',__('Section Html'));
    
        })->
        when(1, function (Form $form) use ($standart_section_htmls){

            $form->ckeditor('html1',__('Section Html'))->default($standart_section_htmls[1]);
    
        })->
        when(2, function (Form $form) use ($standart_section_htmls) {

            $form->ckeditor('html2',__('Section Html2'))->default($standart_section_htmls[2]);
    
        })->
        when(3, function (Form $form) use ($standart_section_htmls) {

            $form->ckeditor('html3',__('Section Html3'))->default($standart_section_htmls[3]);
    
        })->
        when(4, function (Form $form) use ($standart_section_htmls) {

            $form->ckeditor('html4',__('Section Html4'))->default($standart_section_htmls[4]);
    
        })->
        when(5, function (Form $form) use ($standart_section_htmls) {

            $form->ckeditor('html5',__('Section Html5'))->default($standart_section_htmls[5]);
        })->default(0);

        //$form->textarea('html', __('Section Html'));
        //$form->ckeditor('html',__('Section Html'))->default('sdsd');
        $form->submitted(function (Form $form) {
            $form->ignore('standart_sections');
            $form->ignore('html0');
            $form->ignore('html1');
            $form->ignore('html2');
            $form->ignore('html3');
            $form->ignore('html4');
            $form->ignore('html5');

        });

        $form->saving(function (Form $form) {
            //dd(request('html0'),request('html1'),request('html2'),request('html3'),request('html4'),request('html5'));
            if(request('html0')){
                $form->html = request('html0');
            }
            if(request('html1')){
                $form->html = request('html1');
            }
            if(request('html2')){
                $form->html = request('html2');
            }
            if(request('html3')){
                $form->html = request('html3');;
            }
            if(request('html4')){
                $form->html = request('html4');
            }
            if(request('html5')){
                $form->html = request('html5'); 
            }

        });
        
        return $form;

    }
}