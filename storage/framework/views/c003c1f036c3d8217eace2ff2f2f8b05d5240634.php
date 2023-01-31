<div class="eoff-form">
    <form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="<?php echo e(route('superadmin.subject.update', ['id' => $subject->id])); ?>">
        <?php echo csrf_field(); ?> 
        <div class="form-row">

            

            <div class="fpb-7">
                <label for="name" class="eForm-label"><?php echo e(get_phrase('Name')); ?></label>
                <input type="text" class="form-control eForm-control" value="<?php echo e($subject->name); ?>" id="name" name = "name" required>
            </div>

            <div class="fpb-7 pt-2">
                <button class="btn-form" type="submit"><?php echo e(get_phrase('Update subject')); ?></button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    "use strict";
    $(document).ready(function () {
      $(".eChoice-multiple-with-remove").select2();
    });
</script><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/sms/resources/views/superadmin/subject/edit_subject.blade.php ENDPATH**/ ?>