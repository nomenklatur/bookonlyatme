<?php
/**
 * Local variables.
 *
 * @var string $company_name
 */
?>

<div id="header" class="bg-transparent">
    <div class="mb-2">
        <div class="flex flex-col gap-2 items-center justify-center">
            <img src="<?= base_url('assets/img/bookonlyatme-favicon.png') ?>" alt="Book Only at Me!" width="80">
            <h1 class="text-2xl font-semibold">Book Only at Me!</h1>
            <p class="text-md text-center text-gray-400">Atur Janji Temu dengan Mudah dan Cepat.</p>
        </div>
    </div>
       
    <div class="flex justify-center mb-4">
        <span class="display-selected-service me-1 invisible">
            <?= lang('service') ?>
        </span>
        <span class="display-selected-provider invisible">
            <?= lang('provider') ?>
        </span>
    </div>

    <div id="steps" class="flex gap-2 justify-center">
        <div id="step-1" class="bg-yellow-400 current-step h-2 w-10 rounded-2xl"></div>
        <div id="step-2" class="bg-gray-300 h-2 w-10 rounded-2xl"></div>
        <div id="step-3" class="bg-gray-300 h-2 w-10 rounded-2xl"></div>
        <div id="step-4" class="bg-gray-300 h-2 w-10 rounded-2xl"`></div>
    </div>
</div>

    
