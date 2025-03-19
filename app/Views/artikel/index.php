<?= $this->include('template/header'); ?>
<?php if ($artikel):
    foreach ($artikel as $row): ?>
        <article class="entry">
            <h2>
                <a href="<?= base_url('/artikel/' . esc($row['slug'])); ?>">
                    <?= esc($row['judul']); ?>
                </a>
            </h2>

            <?php if (strtolower($row['judul']) == 'artikel pertama'): ?>
                <img src="<?= base_url('/gambar/artikel_pertama.png'); ?>" alt="Artikel Pertama">
            <?php elseif (strtolower($row['judul']) == 'artikel kedua'): ?>
                <img src="<?= base_url('/gambar/artikel_kedua.png'); ?>" alt="Artikel Kedua">
            <?php else: ?>
                <img src="<?= base_url('/gambar/default.png'); ?>" alt="Gambar Default">
            <?php endif; ?>

            <p><?= esc(substr(strip_tags($row['isi']), 0, 500)); ?></p>
        </article>
        <hr class="divider" />
    <?php endforeach; else: ?>
    <article class="entry">
        <h2>Belum ada data.</h2>
    </article>
<?php endif; ?>
<?= $this->include('template/footer'); ?>

