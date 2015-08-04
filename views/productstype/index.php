<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Quản Lý Chi Tiết Sản Phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <h2>Quản Lý Chi Tiết Sản Phẩm</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                 <th>Mã Thể Loại</th>
                <th> Tên Thể Loại</th>
                <th>Chỉnh Sửa</th>
            </tr>
            </thead>
            <tbody>
            <?php
                if(count($listLine) > 0){
                    $count = 1;
                    foreach($listLine as $item){
                        ?>
                        <tr>
                            <th scope="row"><?= $count ?></th>
                            <td><?= $item->type_name ?></td>
                            <td><?= $item->name ?></td>
                            <td>
                                <?=Html::a('<span class="glyphicon glyphicon-eye-open" title="Xem Trước"></span>',['productstype/preview', 'id'=>$item->id] ) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-edit" title="Sửa"></span>', ['productstype/edit', 'id'=>$item->id]) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-remove" title="Xóa"></span>',['productstype/delete', 'id'=>$item->id], ['class' => 'deleteObject']) ?>
                            </td>
                        </tr>
                        <?php
                        $count++;
                    }
                }
            ?>
            <tr>
                <td colspan="7">
                    <?=Html::a('<span class="glyphicon glyphicon-plus"></span> Tạo Thêm',['productstype/create'], ['class' => 'btn btn-success pull-right']) ?>
                </td>
            </tr>
            </tbody>
        </table>
        
    </div>
</div>
