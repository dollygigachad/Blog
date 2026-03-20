<?=  $this->extend('layout') ?>
<?=  $this->section('conteudo') ?>

 <div class="card">
    <div class="card-header bg-success text-white">
        mensagem
    </div>
    <div class="card-body">
        <?php $mensagem = session()->getFlashdata('mensagem'); ?>
        <?php if (!empty($mensagem)): ?>
            <p><?php echo $mensagem; ?></p>
            <?php else : ?>
                <p> Seu post foi salvo com sucesso!</p>
        <?php endif; ?>
        <p><?php echo anchor(base_url(), ' página inicial'); ?></p>
    </div>


 </div>

<?=  $this-> endSection() ?>