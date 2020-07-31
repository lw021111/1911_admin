<?php

namespace App\Admin\Controllers;

use App\Model\GoodsModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GoodsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'GoodsModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new GoodsModel());

        $grid->column('goods_id', __('Goods id'));
        $grid->column('goods_name', __('Goods name'));
        $grid->column('goods_price', __('Goods price'));
        $grid->column('goods_num', __('Goods num'));
        $grid->column('goods_desc', __('Goods desc'));
        //$grid->column('goods_score', __('Goods score'));
        $grid->column('is_new', __('Is new'));
        //$grid->column('is_best', __('Is best'));
        //$grid->column('is_hot', __('Is hot'));
        //$grid->column('is_up', __('Is up'));
        $grid->column('brand_id', __('Brand id'));
        $grid->column('cate_id', __('Cate id'));
        $grid->column('goods_img', __('Goods img'))->image();

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
        $show = new Show(GoodsModel::findOrFail($id));

        $show->field('goods_id', __('Goods id'));
        $show->field('goods_name', __('Goods name'));
        $show->field('goods_price', __('Goods price'));
        $show->field('goods_num', __('Goods num'));
        $show->field('goods_desc', __('Goods desc'));
        $show->field('goods_score', __('Goods score'));
        $show->field('is_new', __('Is new'));
        $show->field('is_best', __('Is best'));
        $show->field('is_hot', __('Is hot'));
        $show->field('is_up', __('Is up'));
        $show->field('brand_id', __('Brand id'));
        $show->field('cate_id', __('Cate id'));
        $show->field('goods_img', __('Goods img'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new GoodsModel());

        $form->text('goods_name', __('Goods name'));
        $form->decimal('goods_price', __('Goods price'))->default(0.00);
        $form->number('goods_num', __('Goods num'));
        $form->textarea('goods_desc', __('Goods desc'));
        //$form->number('goods_score', __('Goods score'));
        $form->switch('is_new', __('Is new'));
        //$form->switch('is_best', __('Is best'));
        //$form->switch('is_hot', __('Is hot'));
        //$form->switch('is_up', __('Is up'));
        $form->number('brand_id', __('Brand id'));
        $form->number('cate_id', __('Cate id'));
        $form->image('goods_img', __('Goods img'));

        return $form;
    }
}
