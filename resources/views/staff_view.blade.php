<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEST LANJUTAN</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto p-4">
        <a href="{{ route('staff.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block mb-4">Add
            Karyawan</a>

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">No</th>
                    <th class="py-2 px-4 border-b">NIK</th>
                    <th class="py-2 px-4 border-b">Nama Karyawan</th>
                    <th class="py-2 px-4 border-b">Jabatan</th>
                    <th class="py-2 px-4 border-b">Departemen</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staffs as $key => $staff)
                    <tr class="text-center">
                        <td class="py-2 px-4 border-b">{{ $key + 1 }}</td>
                        <td class="py-2 px-4 border-b">{{ $staff->nik }}</td>
                        <td class="py-2 px-4 border-b">{{ $staff->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $staff->role }}</td>
                        <td class="py-2 px-4 border-b">{{ $staff->departement }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
