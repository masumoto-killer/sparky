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
            EDIT ORDER
        </h2>
     <?php $__env->endSlot(); ?>

    <form method="post" action="<?php echo e(route('order.update',$order)); ?>"
    class="w-1/2 container flex flex-col mx-auto text-gray-800 dark:text-gray-200">
    <?php echo csrf_field(); ?>
    <?php echo method_field('patch'); ?>
            <label for="customer" class="font-semibold leading-none mt-4">Customer</label>
            <input type="text" name="customer" id="customer" value="<?php echo e(old('customer',$order->customer)); ?>" required 
            class="w-auto py-2 border border-gray-300 rounded-lg text-gray-800">
            <label for="products" class="font-semibold leading-none mt-4">Products</label>
            <textarea name="products" id="products" rows="3" required 
            class="w-auto border border-gray-300 rounded-lg text-gray-800"><?php echo e(old('products',$order->products)); ?></textarea>
            <label for="url" class="font-semibold leading-none mt-4">Link</label>
            <input id="url" type="url" name="url" value="<?php echo e(old('url',$order->url)); ?>"
            class="w-auto py-2 border border-gray-300 rounded-lg text-gray-800">
        <label for="note" class="font-semibold leading-none mt-4">Note</label>
            <input type="text" name="note" id="note" value="<?php echo e(old('note',$order->note)); ?>"
            class="w-auto py-2 border border-gray-300 rounded-lg text-gray-800">
        <br>
        <div class="flex justify-between">
            <div>
                <label for="estimated" class="font-semibold leading-none mt-4">Estimated delivery</label>
                <input id="estimated" type="date" name="estimated" value="<?php echo e(old('estimated',$order->estimated)); ?>"
                class="w-36 py-2 border border-gray-300 rounded-lg text-gray-800">
            </div>
            <div>
                <label for="price">Price</label>
                <input type="number" name="price" id="price" step="10" value="<?php echo e(old('price',$order->price)); ?>"
                class="w-auto py-2 border border-gray-300 rounded-lg text-gray-800">
                k VND
            </div>
        </div>
        <br>
        <div class="flex justify-around">
            <div>
                <label for="paid" class="font-semibold leading-none mt-4">Paid</label>
                <input id="unpaid" type="hidden" name="paid" value="0">
                <input type="checkbox" name="paid" id="paid" value="1" 
                class="w-10 py-2 border border-gray-300 rounded-lg"
                <?php if($order->paid == '1') echo 'checked'?>>
            </div>
            <div>
                <label for="status" class="font-semibold leading-none mt-4">Pending</label>
                <input id="pending" type="radio" name="status" value="Pending"
                class="w-10 py-2 border border-gray-300 rounded-lg"
                <?php if($order->status == 'Pending') echo 'checked'?>>
            </div>
            <div>
                <label for="status" class="font-semibold leading-none mt-4">Purchased</label>
                <input id="purchased" type="radio" name="status" value="Purchased"
                class="w-10 py-2 border border-gray-300 rounded-lg"
                <?php if($order->status == 'Purchased') echo 'checked'?>>

            </div>
            <div>
                <label for="in-stock" class="font-semibold leading-none mt-4">In-stock</label>
                <input id="in-stock" type="radio" name="status" value="In-stock"
                class="w-10 py-2 border border-gray-300 rounded-lg"
                <?php if($order->status == 'In-stock') echo 'checked'?>>
            </div>
            <div>
                <label for="arrived" class="font-semibold leading-none mt-4">Arrived</label>
                <input id="arrived" type="radio" name="status" value="Arrived"
                class="w-10 py-2 border border-gray-300 rounded-lg"
                <?php if($order->status == 'Arrived') echo 'checked'?>>
            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => ['class' => 'mt-4 px-16 mx-auto ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-4 px-16 mx-auto ']); ?>Save <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </form>
    <form method="post" action="<?php echo e(route('order.destroy', $order)); ?>"
    class="flex flex-col mx-auto">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.danger-button','data' => ['class' => 'mt-4 px-14 mx-auto','onClick' => 'return confirm(\'Delete this order?\');']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('danger-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-4 px-14 mx-auto','onClick' => 'return confirm(\'Delete this order?\');']); ?>
            Delete <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/sparky/resources/views/order/edit.blade.php ENDPATH**/ ?>