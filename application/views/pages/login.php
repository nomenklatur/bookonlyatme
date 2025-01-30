<?php extend('layouts/account_layout'); ?>

<?php section('content'); ?>

<div class="flex h-[95vh] items-center justify-center">
    <div class="p-4 rounded-xl shadow-lg">
        <img src="<?= asset_url('assets/img/bookonlyatme-favicon.png')?>" alt="BookOnlyAtMe Logo" width="75" class="place-self-center" />
        <h1 class="text-center font-bold font-sans text-2xl mb-2">Selamat Datang!</h1>
        <p class="text-md mb-4 text-center text-gray-400 font-mono">Gunakan akun anda untuk masuk</p>
        <div class="mb-4 w-[80%] place-self-center">
            <form id="login-form">
                <input type="text" id="username" placeholder="Email" class="w-full p-2 mt-2 border-2 border-black rounded-md" />
                <input type="password" id="password" placeholder="Password" class="w-full p-2 mt-2 border-2 border-black rounded-md" />
                <a href="#" class="text-gray-500 text-end text-sm block mt-4">Lupa password?</a>
                <button type="submit" id="login" class="w-full px-4 py-2 bg-gray-200 cursor-pointer font-bold mt-4 shadow-[0px_5px_0px_0px_rgba(0,0,0,0.75)] rounded-md">Masuk</button>
            </form>
        </div>
        <div class="place-self-center mb-4">
            -- atau masuk dengan --
        </div>
        <div class="flex gap-4 place-self-center mb-4">
            <button class="flex gap-1 items-center ring-1 text-sm rounded-md font-bold ring-black px-2 py-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="M17.05 20.28c-.98.95-2.05.8-3.08.35c-1.09-.46-2.09-.48-3.24 0c-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8c1.18-.24 2.31-.93 3.57-.84c1.51.12 2.65.72 3.4 1.8c-3.12 1.87-2.38 5.98.48 7.13c-.57 1.5-1.31 2.99-2.54 4.09zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25c.29 2.58-2.34 4.5-3.74 4.25"/></svg>
                Apple
            </button>
            <button class="flex gap-1 items-center ring-1 text-sm rounded-md font-bold ring-black px-2 py-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="M11.956 10.356v3.451h4.792c-.446 2.193-2.313 3.453-4.792 3.453a5.28 5.28 0 0 1 0-10.559a5.166 5.166 0 0 1 3.29 1.178l2.6-2.6a8.93 8.93 0 1 0-5.89 15.635c4.467 0 8.529-3.249 8.529-8.934a7.468 7.468 0 0 0-.2-1.625l-8.329.001Z"/></svg>
                Google
            </button>
            <button class="flex gap-1 items-center ring-1 text-sm rounded-md font-bold ring-black px-2 py-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2"/></svg>
                Github
            </button>
        </div>
        <div class="text-sm text-gray-400 text-center mb-4">
            Belum punya akun? <a href="#" class="text-blue-400">Buat akunmu disini!</a>
        </div>
    </div>
</div>



<!-- <p>
    <small>
        <?= lang('you_need_to_login') ?>
    </small>
</p>

<hr>
<div class="alert d-none"></div>

<form id="login-form">
    <div class="mb-3 mt-5">
        <label for="username" class="form-label">
            <?= lang('username') ?>
        </label>
        <input type="text" id="username" placeholder="<?= lang(
            'enter_username_here',
        ) ?>" class="form-control" required/>
    </div>

    <div class="mb-5">
        <p class="text-green-500 font-bold">Hallowww</p>
        <label for="password" class="form-label">
            <?= lang('password') ?>
        </label>
        <input type="password" id="password" placeholder="<?= lang(
            'enter_password_here',
        ) ?>" class="form-control" required/>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-5">
        <a href="<?= site_url('recovery') ?>" class="forgot-password"><?= lang('forgot_your_password') ?></a>

        <button type="submit" id="login" class="btn btn-primary">
            <i class="fas fa-sign-in-alt me-2"></i>
            <?= lang('login') ?>
        </button>
    </div>
</form> -->
<?php end_section('content'); ?>

<?php section('scripts'); ?>

<script src="<?= asset_url('assets/vendor/@fortawesome-fontawesome-free/fontawesome.min.js') ?>"></script>
<script src="<?= asset_url('assets/vendor/@fortawesome-fontawesome-free/solid.min.js') ?>"></script>
<script src="<?= asset_url('assets/js/http/login_http_client.js') ?>"></script>
<script src="<?= asset_url('assets/js/pages/login.js') ?>"></script>

<?php end_section('scripts'); ?>
