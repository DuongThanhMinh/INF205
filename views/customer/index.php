<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Quản Lý Khách Hàng';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <h2>Quản Lý Khách Hàng</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tên Khách Hàng</th>
                <th>Email</th>
                <th>Địa Chỉ </th>
                <th>Số Điện Thoại</th>
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
                            <td><?= $item->email ?></td>
                            <td><?= $item->address ?></td>
                            <td><?= $item->phone ?></td>
                            <td>
                                <?=Html::a('<span class="glyphicon glyphicon-eye-open" title="Xem Trước"></span>',['customer/preview', 'id'=>$item->id] ) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-edit" title="Sửa"></span>', ['customer/edit', 'id'=>$item->id]) ?>
                                <?=Html::a('<span class="glyphicon glyphicon-remove" title="Xóa"></span>',['customer/delete', 'id'=>$item->id], ['class' => 'deleteObject']) ?>
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
