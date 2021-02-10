<h1><?php echo e(__('avored::catalog.product.image_title')); ?></h1>

<a-upload
    action="<?php echo e(route('admin.product.image.upload', $product->id)); ?>"
    :headers="{'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' }"
    :show-upload-list="false"
    @change="uploadFileChange"
>
    <a-button>
        <a-icon type="upload"></a-icon> <?php echo e(__('avored::catalog.product.upload_btn')); ?>

    </a-button>
</a-upload>


    <a-row :gutter="15" v-for="item in productImages" :key="item.id">
        <a-col :span="3">
            <a-avatar :size="64" shape="square"  :src="'/storage/' + item.path"></a-avatar>
        </a-col>
        <a-col :span="9">
            <a-input 
                placeholder="Image alt text"
                :default-value="item.alt_text"
                :name="'images[' + item.id +'][alt_text]'"/>
        </a-col>
        <a-col :span="6"> 
            <input type="radio"
                name="is_main_image"
                :checked="item.is_main_image"
                :value="item.id">
            <?php echo e(__('Is main image')); ?>

        </a-col>
         <a-col :span="6">
             <a-button type="danger" @click="deleteImage(item.id)" icon="delete">
             </a-button>
        </a-col>
    </a-row>

<?php /**PATH E:\laravel_volcano_projects\Royal-details\royal_git\vendor\avored\framework\src/../resources/views/catalog/product/cards/images.blade.php ENDPATH**/ ?>