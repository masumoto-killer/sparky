<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            ORDER LIST
        </h2>
     <?php $__env->endSlot(); ?>

    <br>
    <table class="table-auto w-auto rounded-lg outline bg-gray-800 divide-y-2 divide-gray-500 border-gray-500 mx-auto text-gray-800 dark:text-gray-200 text-md">
        <thead>
            <tr class="divide-x divide-gray-500 h-12">
                <th>Date</th>
                <th>Customer</th>
                <th>Products</th>
                <th>Link</th>
                <th>Estimate</th>
                <th>Price</th>
                <th>Paid</th>
                <th>Status</th>
                <th>Note</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-500">
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="divide-x divide-gray-500 hover:bg-gray-700 h-12">
                <?php $datetimearray = explode(" ", $order->created_at);
                $date = date('d-m-Y',strtotime($datetimearray[0]));
                ?>
                <th class="font-light"><?php echo e($date); ?></th>
                <th class="font-light"><?php echo e($order->customer); ?></th>
                <th class="font-light"><?php echo e($order->products); ?></th>
                <th><a href="<?php echo e($order->url); ?>" class="text-blue-400 font-extralight"><?php echo e($order->url); ?></a></th>
                <th class="font-light"><?php echo e($estimated=date('d-m-Y',strtotime($order->estimated))); ?></th>
                <th class="font-light"><?php echo e($order->price); ?>.000</th>
                <th class="font-light"><input type="checkbox" name="paid" id="paid" value="1" 
                class="w-10 py-2 border border-gray-300 rounded-lg"
                <?php if($order->paid == '1') echo 'checked'?> disabled></th>
                <th class="font-light"><?php echo e($order->status); ?></th>
                <th class="font-light"><?php echo e($order->note); ?></th>
                <th><a href="<?php echo e(route('order.edit', $order)); ?>"><?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.secondary-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('secondary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Edit <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?></a></th>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\sparky\resources\views/order/index.blade.php ENDPATH**/ ?>