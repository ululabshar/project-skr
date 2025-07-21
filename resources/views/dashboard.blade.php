<x-app-layout>
<div class="container mt-4">
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($users as $p)
        <tr>
            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
            <td class="border px-4 py-2">{{ $p->name }}</td>
            <td class="border px-4 py-2">{{ $p->email }}</td>
            <td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
