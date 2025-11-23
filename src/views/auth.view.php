<div class="grid grid-cols-[2fr_1fr]">
    <div>
        <img
            class="fixed p-10"
            src="/images/logo_name.png"
            alt="logo" />
        <img
            src="/images/cover.png"
            alt="imagem de capa do login"
            class="h-screen w-full object-cover" />
    </div>
    <div class="flex flex-col p-20">
        <div class="text-sm pl-[30%] mb-10">
            <?= $switchText ?> <a href="<?= $switchLink ?>" class="font-bold text-accent-brand"><?= $switchLabel ?></a>
        </div>

        <div class="flex flex-col">
            <h2 class="text-2xl font-bold mb-10"> <?= $title ?> </h2>
            <?php require __DIR__ . "/partials/{$childView}.view.php"; ?>
        </div>
    </div>
</div>