<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/717eb27cb3.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <title>GolluméCRM</title>
</head>
<body class="flex h-screen flex-col">
<header class="w-screen flex bg-red-700 h-1/4 text-slate-100 lg:text-7xl text-5xl items-center justify-center">
    <h1 class="text-center">Customers & Invoices Manager</h1>
</header>

<main class="flex flex-1 flex-row justify-evenly items-center">
    <div class="customers flex flex-col gap-4">
        <h2 class="md:text-2xl text-lg font-bold self-center">Customers</h2>
        <i class="fa-solid fa-person-chalkboard fa-4x self-center text-red-700"></i>
        <div class="md:text-lg text-sm flex flex-col text-center mt-2 font-semibold text-rose-700">
            <p class="transition active:text-black hover:scale-110"><a href="#">Show all customers</a></p>
            <p class="transition active:text-black hover:scale-110"><a href="#">Add a customer</a></p>
        </div>
    </div>
    <div class="invoices flex flex-col gap-4">
        <h2 class="md:text-2xl text-lg font-bold self-center">Invoices</h2>
        <i class="fa-solid fa-file-invoice-dollar fa-4x self-center text-red-700"></i>
        <div class="md:text-lg text-sm text-center mt-2 font-semibold text-rose-700">
            <p class="transition active:text-black hover:scale-110"><a href="#">Show all invoices</a></p>
            <p class="transition active:text-black hover:scale-110"><a href="#">Add an invoice</a></p>
        </div>
    </div>
</main>
<footer class="md:h-24 h-16 bg-red-700 text-slate-100 md:text-xl text-sm flex flex-col items-center justify-center">
    <p class="">Copyright Pierre "Golluméo" Mauriello</p>
    <p>All rights reserved | 2023 - {{ now()->year }}</p>
</footer>
</body>
</html>
