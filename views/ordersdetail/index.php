<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Quản Lý Chi Tiết Hóa Đơn';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <h2>Quản Lý Chi Tiết Hóa Đơn</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                 <th>Hóa Đơn</th>
                <th> Tên Sản Phẩm</th>
                <th> Số Lượng</th>
                <th> Giá</th>
                <th> Bảo Hành</th>
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
                            <td><?= $item->ordersid ?></td>
                            <td><?= $item->name ?></td>
                            <td><?= $item->quantity ?></td>
                            <td><?= $item->price ?></td>
                            <td><?= $item->guarantee ?></td>
                            <td>
                                <?=Html::a('<span class="glyphicon glyphicon-eye-open" title="Xem Trước"></span>',['ordersdetail/preview', 'id'=>$item->id] ) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-edit" title="Sửa"></span>', ['ordersdetail/edit', 'id'=>$item->id]) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-remove" title="Xóa"></span>',['ordersdetail/delete', 'id'=>$item->id], ['class' => 'deleteObject']) ?>
                            </td>
                        </tr>
                        <?php
                        $count++;
                    }
                }
            ?>
            </tbody>
        </table>
        
    </div>
</div>
