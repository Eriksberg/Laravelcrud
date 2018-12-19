<?php $__env->startSection('content'); ?>
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
      <?php echo e(session()->get('success')); ?>

    </div><br />
  <?php endif; ?>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Byggnad</td>
          <td>Sal</td>
          <td>Typ</td>
          <td>Märke</td>
          <td>Modell</td>
          <td>Serienummer</td>
          <td>Stöldnummer</td>
          <td>Ägare</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($post->post_byggnad); ?></td>
            <td><?php echo e($post->post_sal); ?></td>
            <td><?php echo e($post->post_typ); ?></td>
            <td><?php echo e($post->post_märke); ?></td>
            <td><?php echo e($post->post_modell); ?></td>
            <td><?php echo e($post->post_serienummer); ?></td>
            <td><?php echo e($post->post_stöldnummer); ?></td>
            <td><?php echo e($post->post_ägare); ?></td>
            <td><a href="<?php echo e(route('posts.edit',$post->id)); ?>"><i class=" material-icons">create</i></a></td>
            <td>
                <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button class="btn red" type="submit"><i class="material-icons">delete</i></button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>