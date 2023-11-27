<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>ADD NEW KARYAWAN</title>
</head>

<body class="bg-gray-100">

    <div class="container mx-auto p-4">

        <h6 class="text-2xl font-bold mb-4 text-center">Add New Karyawan</h6>

        <form action="{{ route('staff.store') }}" method="POST"
            class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label for="nik" class="block text-gray-700">NIK</label>
                <input type="text" name="nik" id="nik"
                    class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nama Karyawan</label>
                <input type="text" name="name" id="name"
                    class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="role" class="block text-gray-700">Jabatan</label>
                <input type="text" name="role" id="role"
                    class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="departement" class="block text-gray-700">Departement</label>
                <input type="text" name="departement" id="departement"
                    class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500">
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                Submit
            </button>
        </form>
    </div>

</body>

</html>
