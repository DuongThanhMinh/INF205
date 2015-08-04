<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Quản Lý Sản Phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <h2>Quản Lý Sản Phẩm</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên Sản Phẩm</th>
                <th>Mô Tả</th>
                <th>Giá </th>
                <th>Ảnh</th>
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
                            <td><?= $item->name ?></td>
                            <td><?= $item->description ?></td>
                            <td><?= $item->price ?></td>
                            <td><?= Html::img($item->image, ['class'=>'thumbnails']) ?></td>
                            <td>
                                <?=Html::a('<span class="glyphicon glyphicon-eye-open" title="Xem Trước"></span>',['products/preview', 'id'=>$item->id] ) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-edit" title="Sửa"></span>', ['products/edit', 'id'=>$item->id]) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-remove" title="Xóa"></span>',['products/delete', 'id'=>$item->id], ['class' => 'deleteObject']) ?>
                            </td>
                        </tr>
                        <?php
                        $count++;
                    }
                }
            ?>
            <tr>
                <td colspan="7">
                    <?=Html::a('<span class="glyphicon glyphicon-plus"></span> Tạo Thêm',['products/create'], ['class' => 'btn btn-success pull-right']) ?>
                </td>
            </tr>
            </tbody>
        </table>
        
    </div>
</div>
