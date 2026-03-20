<?php echo $this->extend('layout'); ?>
<?php echo $this->section('conteudo'); ?>
<?php
$error = $error ?? [];
$post = $post ?? null;
?>

<div class="card">
    <div class="card-header bg-secondary text-white">
        <div class="row">
            <div class="col">
                <?php echo $titulo; ?>
            </div>
            <div class="col d-flex justify-content-end">
                <?php if (isset($post) && $post): ?>
                    <a href="<?php echo base_url('post/excluir/'.$post['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este post?');">Excluir</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="card-body">
        <?php echo form_open('post/store') ?>
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control" value="<?php echo isset($post['title']) ? $post['title'] : set_value('title'); ?>">
            <?php if(!empty($error['title'])): ?>
                <div class="alert alert-danger mt-2"><?php echo $error['title']; ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" value="<?php echo isset($post['slug']) ? $post['slug'] : set_value('slug'); ?>">
            <?php if(!empty($error['slug'])): ?>
                <div class="alert alert-danger mt-2"><?php echo $error['slug']; ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="content">Conteúdo</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"><?php echo isset($post['content']) ? $post['content'] : set_value('content'); ?></textarea>
            <?php if(!empty($error['content'])): ?>
                <div class="alert alert-danger mt-2"><?php echo $error['content']; ?></div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success mt-2">Salvar</button>
        </div>
        <input type="hidden" name="id" value="<?php echo isset($post) && $post ? $post['id'] : set_value('id'); ?>">
        <?php echo form_close(); ?>
    </div>
</div>


<?php echo $this->endSection(); ?>