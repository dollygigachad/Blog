<?php echo $this->extend('layout'); ?>
<?php echo $this->section('conteudo'); ?>
<?php
$error = $error ?? [];
$post = $post ?? [];
$comentarios = $comentarios ?? [];
?>

<div class="card">
    <div class="card-body">
        <h1><?php echo $post['title']; ?></h1>
        <p><?php echo nl2br($post['content']); ?></p>
        <p class="mt-3"><?php echo anchor(base_url('post'), 'Voltar'); ?></p>
    </div>
</div>
<div class = "card mt-4">
    <div class="card-header bg-secondary text-white">Comentários</div>
    <div class="card-body">
        <?php if (count($comentarios) > 0): ?>
            <?php foreach ($comentarios as $comentario):?>
                <div class="card my-3">
                    <div class="card-body">
                        <p class="small">Comentário feito em: <?php echo date('d/m/Y H:i:s', strtotime($comentario['created_id'])); ?></p>
                        <p><?php echo nl2br($comentario['comentario']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Seja o primeiro a comentar!</p>
        <?php endif; ?>
        <div class="card">
            <div class="card-body">
                <?php echo form_open('comentario/store'); ?>
                <div class="form-group">
                    <textarea name="comentario" id="comenta" cols="30" rows="3" class="form-control"></textarea>
                    <?php if(!empty($error['comentario'])): ?>
                        <div class="alert alert-danger mt-2"><?php echo $error['comentario']; ?></div>
                    <?php endif; ?>
                </div>
                <input type="hidden" name="posts_id" value="<?php echo $post['id']; ?>">
                <button type="submit" class="btn btn-primary">Comentar</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>
