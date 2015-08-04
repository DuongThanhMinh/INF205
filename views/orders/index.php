<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Quản Lý Hóa Đơn';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <h2>Quản Lý Hóa Đơn</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>ID Khách Hàng</th>
                <th>Ngày Đặt Hàng</th>
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
                            <td><?= $item->customer_id?></td>
                            <td><?= $item->date ?></td>
                            
                            <td>
                                <?=Html::a('<span class="glyphicon glyphicon-eye-open" title="Xem Trước"></span>',['orders/preview', 'id'=>$item->id] ) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-edit" title="Sửa"></span>', ['orders/edit', 'id'=>$item->id]) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-remove" title="Xóa"></span>',['orders/delete', 'id'=>$item->id], ['class' => 'deleteObject']) ?>
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
