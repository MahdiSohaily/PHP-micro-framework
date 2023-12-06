<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= asset_url('img/favicon.ico') ?>" type="image/x-icon">
    <title><?= $page_title ?></title>
    <link rel="stylesheet" href="<?= asset_url('css/output.css') ?>">
    </link>
</head>

<body>
    <div class="h-screen w-screen bg-gray-50 flex items-center">
        <div class="container flex flex-col md:flex-row items-center justify-between px-5 text-gray-700">
            <div class="w-full lg:w-1/2 mx-8">
                <div class="text-7xl text-indigo-500 font-dark font-extrabold mb-8"> ۴۰۴</div>
                <p class="text-2xl md:text-3xl font-light leading-normal mb-8">
                    متاسفانه صفحه مورد نظر شما پیدا نشد.
                </p>

                <a href="<?= site_url() ?>" class="px-5 inline py-3 text-sm font-medium leading-5 shadow-2xl text-white transition-all duration-400 border border-transparent rounded-lg focus:outline-none bg-indigo-600 active:bg-red-600 hover:bg-red-700">برگشت به صفحه اصلی</a>
            </div>
            <div class="w-full lg:flex lg:justify-end lg:w-1/2 mx-5 my-12">
                <img src="<?= asset_url('img/404.svg') ?>" class="" alt="Page not found">
            </div>

        </div>
    </div>
</body>

</html>