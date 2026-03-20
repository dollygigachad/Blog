<?php echo $this->extend('layout'); ?>
<?php echo $this->section('conteudo'); ?>
<?php $posts = $posts ?? []; ?>
<h1>Blog</h1>

<?php if (count($posts) > 0 ):?>
    <?php foreach ($posts as $post):  ?>
        <div class="card my-2">
            <div class="card-header bg-primary"></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-11">
                        <h3><?php echo $post['title']; ?></h3>
                    </div>
                    <div class="col-sm-1">
                       <?php echo anchor ('post/edit/' . $post['id'], 'Editar',); ?>   
                    </div>
                </div>
                <?php echo word_limiter(nl2br($post['content']), 30); ?>
                <p class="mb-0 mt-2"><?php echo anchor ('post/view/' . $post['id'], 'Ler mais'); ?></p>
            </div>
        </div>
    <?php endforeach; ?>    
    <?php else : ?>
        <p>Post não encontrado</p>
    <?php endif; ?>
<?php echo $this->endSection(); ?>
