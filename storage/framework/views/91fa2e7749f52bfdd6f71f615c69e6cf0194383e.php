<?php $__env->startSection('content'); ?>
    <h1>Customer </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($customer['name']); ?></td>
            </tr>
            <tr>
                <td>Cust Number</td>
                <td><?php echo ($customer['cust_number']); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo ($customer['address']); ?></td>
            </tr>
            <tr>
                <td>City </td>
                <td><?php echo ($customer['city']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($customer['state']); ?></td>
            </tr>
            <tr>
                <td>Zip </td>
                <td><?php echo ($customer['zip']); ?></td>
            </tr>
            <tr>
                <td>Home Phone</td>
                <td><?php echo ($customer['home_phone']); ?></td>
            </tr>
            <tr>
                <td>Cell Phone</td>
                <td><?php echo ($customer['cell_phone']); ?></td>
            </tr>

            </tbody>
        </table>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr class="bg-info">
                <th>Cust No</th>
                <th>Cust Name</th>
                <th>Symbol</th>
                <th>Name</th>
                <th>Shares</th>
                <th>Purchase price</th>
                <th>Purchase Date</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            <h1>Stocks</h1>
            <?php foreach($customer["stocks"] as $stock): ?>
                <tr>
                    <td><?php echo e($stock->customer->cust_number); ?></td>
                    <td><?php echo e($stock->customer->name); ?></td>
                    <td><?php echo e($stock->symbol); ?></td>
                    <td><?php echo e($stock->name); ?></td>
                    <td><?php echo e($stock->shares); ?></td>
                    <td><?php echo e($stock->purchase_price); ?></td>
                    <td><?php echo e($stock->purchased); ?></td>
                    <td><a href="<?php echo e(url('stocks',$stock->id)); ?>" class="btn btn-primary">Read</a></td>
                    <td><a href="<?php echo e(route('stocks.edit',$stock->id)); ?>" class="btn btn-warning">Update</a></td>
                    <td>
                        <?php echo Form::open(['method' => 'DELETE', 'route'=>['stocks.destroy', $stock->id]]); ?>

                        <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                        <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>



        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr class="bg-info">
                <th>Cust_id</th>
                <th>Cust Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Acquired Value</th>
                <th>Acquired Date</th>
                <th>Recent Value</th>
                <th>Recent Date</th>
                <th colspan="3">Actions</th>
            </tr>
            </thead>

            <tbody>
            <h1>Investments</h1>
            <?php foreach($customer["investments"] as $investment): ?>
                <tr>
                    <td><?php echo e($investment->customer->cust_number); ?></td>
                    <td><?php echo e($investment->customer->name); ?></td>
                    <td><?php echo e($investment->category); ?></td>
                    <td><?php echo e($investment->description); ?></td>
                    <td><?php echo e($investment->acquired_value); ?></td>
                    <td><?php echo e($investment->acquired_date); ?></td>
                    <td><?php echo e($investment->recent_value); ?></td>
                    <td><?php echo e($investment->recent_date); ?></td>
                    <td><a href="<?php echo e(url('investments',$investment->id)); ?>" class="btn btn-primary">Read</a></td>
                    <td><a href="<?php echo e(route('investments.edit',$investment->id)); ?>" class="btn btn-warning">Update</a></td>
                    <td>
                        <?php echo Form::open(['method' => 'DELETE', 'route'=>['investments.destroy', $investment->id]]); ?>

                        <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                        <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>