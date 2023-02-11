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
            NEW ORDER
        </h2>
     <?php $__env->endSlot(); ?>

    <form method="post" action="<?php echo e(route('order.store')); ?>"
    class="w-1/2 container flex flex-col mx-auto text-gray-800 dark:text-gray-200">
    <?php echo csrf_field(); ?>
            <label for="customer" class="font-semibold leading-none mt-4">Customer</label>
            <input type="text" name="customer" id="customer" required 
            class="w-auto py-2 border border-gray-300 rounded-lg text-gray-800">
            <label for="products" class="font-semibold leading-none mt-4">Products</label>
            <textarea name="products" id="products" rows="3" required 
            class="w-auto border border-gray-300 rounded-lg text-gray-800"></textarea>
            <label for="url" class="font-semibold leading-none mt-4">Link</label>
            <input id="url" type="url" name="url" class="w-auto py-2 border border-gray-300 rounded-lg text-gray-800">
        <label for="note" class="font-semibold leading-none mt-4">Note</label>
            <input type="text" name="note" id="note"  
            class="w-auto py-2 border border-gray-300 rounded-lg text-gray-800">
        <br>
        <div class="flex justify-between">
            <div>
                <label for="estimated" class="font-semibold leading-none mt-4">Estimated delivery</label>
                <input id="estimated" type="date" name="estimated" class="w-36 py-2 border border-gray-300 rounded-lg text-gray-800">
            </div>
            <div>
                <label for="price">Price</label>
                <input type="number" name="price" id="price" step="10" required
                class="w-auto py-2 border border-gray-300 rounded-lg text-gray-800">
                k VND
            </div>
        </div>
        <br>
        <div class="flex justify-around">
            <div>
                <label for="paid" class="font-semibold leading-none mt-4">Paid</label>
                <input id="unpaid" type="hidden" name="paid" value="0">
                <input id="paid" type="checkbox" name="paid" value="1"
                class="w-10 py-2 border border-gray-300 rounded-lg">
            </div>
            <div>
                <label for="status" class="font-semibold leading-none mt-4">Pending</label>
                <input id="pending" type="radio" name="status" value="Pending" required
                class="w-10 py-2 border border-gray-300 rounded-lg">
            </div>
            <div>
                <label for="status" class="font-semibold leading-none mt-4">Purchased</label>
                <input id="purchased" type="radio" name="status" value="Purchased" required
                class="w-10 py-2 border border-gray-300 rounded-lg">
            </div>
            <div>
                <label for="in-stock" class="font-semibold leading-none mt-4">In-stock</label>
                <input id="in-stock" type="radio" name="status" value="In-stock" required
                class="w-10 py-2 border border-gray-300 rounded-lg">
            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => ['class' => 'mt-4 px-14 mx-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-4 px-14 mx-auto']); ?>
            Create
         <?php echo $__env->renderComponent(); ?>
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
<?php /**PATH /var/www/html/sparky/resources/views/order/create.blade.php ENDPATH**/ ?>