<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/717eb27cb3.js" crossorigin="anonymous"></script>
    <title>GolluméCRM - Companies</title>
</head>
<body class="flex flex-col bg-slate-100">
<header class="max-w-screen flex bg-red-700 h-48 text-slate-100 lg:text-7xl text-5xl items-center justify-center mb-8 font-black">
    <h1 class="text-center">Customers & Invoices Manager</h1>
</header>
<main class="w-4/5 md:w-2/3 self-center">
    <div class="mb-4 flex flex-col">
        <h2 class="md:text-3xl text-xl font-semibold bg-slate-300/40 w-12/12 p-2 rounded-lg">My companies</h2>
        <p class="p-2">In this section, you can check your customers.</p>
    </div>
    <table class="w-full divide-y-2 divide-slate-300 table-fixed">
        <thead class="">
        <tr class="divide-slate-300 text-left">
            <th class="w-8 p-2">#</th>
            <th class="p-2">Name</th>
            <th class="p-2">Address</th>
            <th class="p-2">Zip Code</th>
            <th class="p-2">Country</th>
            <th class="p-2">VAT</th>
            <th class="p-2">Created at</th>
            <th class="p-2">Updated at</th>
            <th class="p-2">Operations</th>
        </tr>
        </thead>
        <tbody class="divide-y-2 divide-slate-300">
        @foreach($companies as $company)
            <tr class="divide-y-2 divide-slate-300">
                <td class="text-left p-2">{{ $company->id }}</td>
                <td class="min-w-content p-2 text-red-700 a:font-semi-bold"><a href="/companies{$company->id}">{{ $company->name }}</a></td>
                <td class="w-1/6 p-2">{{ $company->address }}</td>
                <td class=" p-2">{{ $company->zipcode }}</td>
                <td class=" p-2">{{ $company->country }}</td>
                <td class=" p-2">{{ $company->vat }}</td>
                <td class="w-1/12 p-2">{{ $company->created_at->toDateString() }}</td>
                <td class="w-1/12 p-2">{{ $company->updated_at->toDateString() }}</td>
                <td class="text-justify w-2 text-rose-700 p-2"><i class="fa-solid fa-pen-to-square fa-xl mr-14 hover:scale-125 transition hover:cursor-pointer"></i><i class="fa-solid fa-trash fa-xl hover:scale-125 transition hover:cursor-pointer"></i></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
<footer>

</footer>
</body>
</html>
